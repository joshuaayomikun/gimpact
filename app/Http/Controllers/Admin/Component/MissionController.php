<?php

namespace App\Http\Controllers\Admin\Component;

use App\Http\Controllers\Controller;
use Auth;
use Session;
use App\Mission;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    public function __construct() {

        $this->middleware('auth:admin');
    }
    
    public function index() { 
        $missions = Mission::all();
        return view('admin.component.mission', compact('missions'));
    }
    
    public function storeMission(Request $request){

        $this->validate($request, [
            "mission"  => "required",
        ]);
  
        $mission = new Mission;
  
        $mission->name = $request->mission;
  
        if($mission->save() == true){
          Session::flash('success', 'Mission has been added successfully');
        }else{
          Session::flash('error', 'Could not add Mission');
        }
        return redirect(route('admin.component.mission.index'));
    }

    public function updateMission(Request $request){

        $missionId = $request->mission_id;

        $mission = Mission::find($missionId);

        $mission->name = $request->mission_name;

        if ($mission->update() == true) {
            Session::flash('success', 'Mission Updated Successfully');
        }else{
            Session::flash('failed', 'Error while Updating Mission');
        }
        return redirect(route('admin.component.mission.index'));
    }

    public function missionStatus($id) {

        $missionID = Mission::find($id);

        if ($missionID->status == true) {
            $missionID->status = false;
            $missionID->update();
                
            $missions = Mission::where('id', '!=', $id)->get();
            if($missions){
                foreach($missions as $mission){
                    $mission->status = true;
                    $mission->update();
                }
            }
            Session::flash('success', strtoupper($missionID->name).' disabled successfully!');
        }
        else{
            $missionID->status = true;
            $missionID->update();
                
            $missions = Mission::where('id', '!=', $id)->get();
            if($missions){
                foreach($missions as $mission){
                    $mission->status = false;
                    $mission->update();
                }
            }
            Session::flash('success', strtoupper($missionID->name).' activated successfully!');
        }
        return back();
    }
}