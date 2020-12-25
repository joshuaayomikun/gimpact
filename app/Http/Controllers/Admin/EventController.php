<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use Session;
use App\Event;

class EventController extends Controller
{
    public function __construct() {

        $this->middleware('auth:admin');
    }
    
    public function index() {
        $events = Event::all();
        return view('admin.event.event_index', compact('events'));
    }

    public function storeEvent(Request $request){

        $this->validate($request, [
            "title"  => "required",
            "description"  => "required",
            "event_image"  => "required",
            
        ]);

        $image = $request->file('event_image');

        if($image){
            $filename = time().'-'.$image->getClientOriginalName();
            $destinationPath = public_path().'/storage/images/event/document';
            $image->move($destinationPath, $filename);
        }
        else{
            $filename = "avatar.png";
        }
  
        $event = new Event;
  
        $event->title = $request->title;
        $event->description = $request->description;
        $event->event_image = $filename;
  
        if($event->save() == true){
          Session::flash('success', 'Event has been added successfully');
        }else{
          Session::flash('error', 'Could not add Event');
        }
        return back();
    }

    public function eventStatus($id) {

        $eventID = Event::find($id);

        if ($eventID->status == true) {
            $eventID->status = false;
            $eventID->update();
                
            Session::flash('success', strtoupper($eventID->title).' disabled successfully!');
        }
        else{
            $eventID->status = true;
            $eventID->update();
                
            Session::flash('success', strtoupper($eventID->title).' activated successfully!');
        }
        return back();
    }

    public function editEvent($id){

        $events = Event::find($id);
        return view('admin.event.event_edit', compact('events'));
    }

    public function updateEvent(Request $request){

        $eventId = $request->event_id;
        $image = $request->file('event_image');

        $event = Event::find($eventId);

        if($image){
            $filename = time().'-'.$image->getClientOriginalName();
            $destinationPath = public_path().'/storage/images/event/document';
            $image->move($destinationPath, $filename);

            $event->event_image = $filename;
        }

        $event->title = $request->title;
        $event->description = $request->description;
        
        if ($event->update() == true) {
            Session::flash('success', 'Event Updated Successfully');
        }else{
            Session::flash('failed', 'Error while Updating Event');
        }
        return redirect(route('admin.event.event_index'));
    }
    
    // public function deleteEvent($id){
        
    //     if(Event::where('id', '=', $id)->delete()){
    //         Session::flash('success', 'Event Deleted Successfully');
    //     }else{
    //         Session::flash('error', 'Error while Deleting Event');
    //     }
    //     return back();
    // } 
}