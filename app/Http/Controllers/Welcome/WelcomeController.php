<?php

namespace App\Http\Controllers\Welcome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Pagination\Paginator;

use Auth;
use Session;
use App\Mandate;
use App\Vision;
use App\Mission;
use App\Team;
use App\Blog;
use App\Event;

class WelcomeController extends Controller
{
    
    public function index() {

        $mandate = Mandate::where('status',true)->first();
        $vision = Vision::where('status',true)->first();
        $mission = Mission::where('status',true)->first();
        $teams = Team::where('status',true)->simplePaginate(4);
        $blogs = Blog::where('status',true)->latest()->take(3)->get();
        $events = Event::where('status',true)->get();
        return view('welcome.index', compact('mandate', 'vision', 'mission', 'teams', 'blogs', 'events'));

    }
}