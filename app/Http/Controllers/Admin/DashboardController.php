<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use Session;

class DashboardController extends Controller
{
    public function __construct() {

        $this->middleware('auth:admin');
    }
    
    public function dashboard() {
        return view('admin.dashboard');
    }
}