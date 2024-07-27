<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){
        $events = Event::all();
        return view('events.index', compact('events')); //The compact function creates an associative array from the variables you pass to it. Use Assoc tble if u wanna rename vars
    }
    //Store new events - Just for server side
    public function store(Request $req){
        //Validate requested data
        $req->validate([
            'title'=>'required|string|max:255',
            'description'=>'required|string|max:255',
            'start_time'=>'required|datetime',
            'end_time'=>'required|datetime'
        ]);


        //Create new event
        $event = new Event();
        $event -> title = $req->input('title');
        $event -> description = $req->input('description');
        $event -> start_time = $req->input('start_time');
        $event -> end_time = $req->input('end_time');

        $event->save();

        return response()->json(['message' => 'Column created successfully', 'event'=>$event], 200);
    }
}

