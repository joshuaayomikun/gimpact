<?php

namespace App\Http\Controllers\Admin\Component;

use App\Http\Controllers\Controller;
use Auth;
use Session;
use App\Mandate;
use Illuminate\Http\Request;

class MandateController extends Controller
{
    public function __construct() {

        $this->middleware('auth:admin');
    }
    
    public function index() { 
        $mandates = Mandate::all();
        return view('admin.component.mandate', compact('mandates'));
    }
    
    public function storeMandate(Request $request){

        $this->validate($request, [
            "mandate"  => "required",
        ]);
  
        $mandate = new Mandate;
  
        $mandate->name = $request->mandate;
  
        if($mandate->save() == true){
          Session::flash('success', 'Mandate has been added successfully');
        }else{
          Session::flash('error', 'Could not add Mandate');
        }
        return redirect(route('admin.component.mandate.index'));
    }

    public function updateMandate(Request $request){

        $mandateId = $request->mandate_id;

        $mandate = Mandate::find($mandateId);

        $mandate->name = $request->mandate_name;

        if ($mandate->update() == true) {
            Session::flash('success', 'Mandate Updated Successfully');
        }else{
            Session::flash('failed', 'Error while Updating Mandate');
        }
        return redirect(route('admin.component.mandate.index'));
    }

    public function mandateStatus($id) {

        $mandateID = Mandate::find($id);

        if ($mandateID->status == true) {
            $mandateID->status = false;
            $mandateID->update();
                
            $mandates = Mandate::where('id', '!=', $id)->get();
            if($mandates){
                foreach($mandates as $mandate){
                    $mandate->status = true;
                    $mandate->update();
                }
            }
            Session::flash('success', strtoupper($mandateID->name).' disabled successfully!');
        }
        else{
            $mandateID->status = true;
            $mandateID->update();
                
            $mandates = Mandate::where('id', '!=', $id)->get();
            if($mandates){
                foreach($mandates as $mandate){
                    $mandate->status = false;
                    $mandate->update();
                }
            }
            Session::flash('success', strtoupper($mandateID->name).' activated successfully!');
        }
        return back();
    }

}