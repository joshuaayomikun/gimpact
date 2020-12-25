<?php

namespace App\Http\Controllers\Admin\Component;

use App\Http\Controllers\Controller;
use Auth;
use Session;
use App\Vision;
use Illuminate\Http\Request;

class VisionController extends Controller
{
    public function __construct() {

        $this->middleware('auth:admin');
    }
    
    public function index() { 
        $visions = Vision::all();
        return view('admin.component.vision', compact('visions'));
    }
    
    public function storeVision(Request $request){

        $this->validate($request, [
            "vision"  => "required",
        ]);
  
        $vision = new Vision;
  
        $vision->name = $request->vision;
  
        if($vision->save() == true){
          Session::flash('success', 'Vision has been added successfully');
        }else{
          Session::flash('error', 'Could not add Vision');
        }
        return redirect(route('admin.component.vision.index'));
    }

    public function updateVision(Request $request){

        $visionId = $request->vision_id;

        $vision = Vision::find($visionId);

        $vision->name = $request->vision_name;

        if ($vision->update() == true) {
            Session::flash('success', 'Vision Updated Successfully');
        }else{
            Session::flash('failed', 'Error while Updating Vision');
        }
        return redirect(route('admin.component.vision.index'));
    }
    
    public function visionStatus($id) {

        $visionID = Vision::find($id);

        if ($visionID->status == true) {
            $visionID->status = false;
            $visionID->update();
                
            $visions = Vision::where('id', '!=', $id)->get();
            if($visions){
                foreach($visions as $vision){
                    $vision->status = true;
                    $vision->update();
                }
            }
            Session::flash('success', strtoupper($visionID->name).' disabled successfully!');
        }
        else{
            $visionID->status = true;
            $visionID->update();
                
            $visions = Vision::where('id', '!=', $id)->get();
            if($visions){
                foreach($visions as $vision){
                    $vision->status = false;
                    $vision->update();
                }
            }
            Session::flash('success', strtoupper($visionID->name).' activated successfully!');
        }
        return back();
    }
}