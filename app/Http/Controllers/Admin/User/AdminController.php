<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Auth;
use Session;
use App\Admin;
use App\Role;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct() {

        $this->middleware('auth:admin');
    }
    
    public function index() { 
        $admins = Admin::with(['role',])->get();
        $roles = Role::all();
        return view('admin.user.index', compact('admins', 'roles'));
    }
    
    public function storeAdmin(Request $request){

        $this->validate($request, [
            "firstname"  => "required",
            "lastname"  => "required",
            "email"  => "required",
            "role"  => "required",
            "gender"  => "required",
        ]);
  
        $hash_password = bcrypt('password');

        $admin = new Admin;
  
        $admin->firstname = $request->firstname;
        $admin->lastname = $request->lastname;
        $admin->othername = $request->othername;
        $admin->email = $request->email;
        $admin->role_id = $request->role;
        $admin->gender = $request->gender;
        $admin->password = $hash_password;
  
        if($admin->save() == true){
          Session::flash('success', 'Admin has been added successfully');
        }else{
          Session::flash('error', 'Could not add Admin');
        }
        return redirect(route('admin.user.admin.index'));
    }

    public function editAdmin($id){

        $admin = Admin::find($id);
        $roles = Role::all();
        return view('admin.user.admin_edit', compact('admin', 'roles'));
    }

    public function updateAdmin(Request $request){

        $adminId = $request->admin_id;

        $admin = Admin::find($adminId);

        $admin->firstname = $request->firstname;
        $admin->lastname = $request->lastname;
        $admin->othername = $request->othername;
        $admin->email = $request->email;
        $admin->role_id = $request->role;
        $admin->gender = $request->gender;

        if ($admin->update() == true) {
            Session::flash('success', 'Admin Updated Successfully');
        }else{
            Session::flash('failed', 'Error while Updating Admin');
        }
        return redirect(route('admin.user.admin.index'));
    }

    public function adminStatus($id) {

        $adminID = Admin::find($id);

        if ($adminID->status == true) {
            $adminID->status = false;
            $adminID->update();
                
            Session::flash('success', strtoupper($adminID->lastname).' disabled successfully!');
        }
        else{
            $adminID->status = true;
            $adminID->update();
                
            Session::flash('success', strtoupper($adminID->lastname).' activated successfully!');
        }
        return back();
    }

    public function profile(){
        $applicant_log = Auth::guard('admin')->user();

        $admin = Admin::with(['role',])->find($applicant_log->id);
        return response()->json(['data'=>$admin]);
    }

    public function updateProfile(Request $request){

        $applicant_log = Auth::guard('admin')->user();

        $admin = Admin::find($applicant_log->id);

        $admin->address = $request->address;
        $admin->phonenumber = $request->phone_no;
        $admin->gender = $request->gender;

        if ($admin->update() == true) {
            Session::flash('success', strtoupper($admin->email).' Profile Updated Successfully');
        }else{
            Session::flash('failed', 'Error while Updating '.strtoupper($admin->email).' Profile');
        }
        return redirect(route('admin.user.admin.index'));
    }

}