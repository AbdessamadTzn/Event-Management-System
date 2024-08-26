<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('events.index', compact('events')); // Pass data to the view
    }

    public function create()
    {
        return view('events.create'); // Return the view for creating an event
    }

    // Store new events
    public function store(Request $req)
    {
        // Validate the requested data
        $req->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'start-time' => 'required|date',
            'end-time' => 'required|date|after:start-time', // Rule to ensure end time is after start time
        ]);

        // Create new event
        $event = new Event();
        $event->title = $req->input('title');
        $event->description = $req->input('description');
        $event->start_time = $req->input('start-time'); // Assign start time
        $event->end_time = $req->input('end-time'); // Assign end time
        $event->user_id = 1; //for testing

        $event->save();

        return redirect('/events')->with('msg', 'Event created successfully');
    }
}
