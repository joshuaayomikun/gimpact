<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use Session;
use App\Team;

class TeamController extends Controller
{
    public function __construct() {

        $this->middleware('auth:admin');
    }
    
    public function index() {
        $teams = Team::all();
        return view('admin.team.team_index', compact('teams'));
    }

    public function storeTeam(Request $request){

        $this->validate($request, [
            "firstname"  => "required",
            "lastname"  => "required",
            "team_post"  => "required",
            "team_image"  => "required",
            
        ]);

        $image = $request->file('team_image');

        if($image){
            $filename = time().'-'.$image->getClientOriginalName();
            $destinationPath = public_path().'/storage/images/team/document';
            $image->move($destinationPath, $filename);
        }
        else{
            $filename = "avatar.png";
        }
  
        $team = new Team;
  
        $team->firstname = $request->firstname;
        $team->lastname = $request->lastname;
        $team->othername = $request->othername;
        $team->team_position = $request->team_post;
        $team->team_image = $filename;
  
        if($team->save() == true){
          Session::flash('success', 'Team Member has been added successfully');
        }else{
          Session::flash('error', 'Could not add Team Member');
        }
        return back();
    }

    public function teamStatus($id) {

        $teamID = Team::find($id);

        if ($teamID->status == true) {
            $teamID->status = false;
            $teamID->update();
                
            Session::flash('success', strtoupper($teamID->lastname).' disabled successfully!');
        }
        else{
            $teamID->status = true;
            $teamID->update();
                
            Session::flash('success', strtoupper($teamID->lastname).' activated successfully!');
        }
        return back();
    }

    public function editTeam($id){

        $teams = Team::find($id);
        return view('admin.team.team_edit', compact('teams'));
    }

    public function updateTeam(Request $request){

        $teamId = $request->team_id;
        $image = $request->file('team_image');

        $team = Team::find($teamId);

        if($image){
            $filename = time().'-'.$image->getClientOriginalName();
            $destinationPath = public_path().'/storage/images/team/document';
            $image->move($destinationPath, $filename);

            $team->team_image = $filename;
        }

        $team->firstname = $request->firstname;
        $team->lastname = $request->lastname;
        $team->othername = $request->othername;
        $team->team_position = $request->team_post;

        if ($team->update() == true) {
            Session::flash('success', 'Team Member Updated Successfully');
        }else{
            Session::flash('failed', 'Error while Updating Team Member');
        }
        return redirect(route('admin.team.team_index'));
    }
    
    public function deleteTeam($id){
        
        if(Team::where('id', '=', $id)->delete()){
            Session::flash('success', 'Team Member Deleted Successfully');
        }else{
            Session::flash('error', 'Error while Deleting Team Member');
        }
        return back();
    } 
}