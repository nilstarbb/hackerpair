<?php

namespace Hackerpair\Http\Controllers;

use Illuminate\Http\Request;
use Hackerpair\Http\Requests\EventStoreRequest; 

use Hackerpair\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::paginate(20);
        return view('event.index')->with('events', $events); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventStoreRequest $request)
    {
        $event = Event::create([ 
            'name' => $request->name,
            'venue' => $request->venue,
            'city' => $request->city,
            'description' => $request->description,
         ]); 
        return redirect()->route('events.show', ['event' => $event]); 
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $event = Event::findBySlugOrFail($slug);
        return view('event.show')->with('event',$event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Event $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('event.edit')->with('event',$event);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Event $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $event->update($request->all());
        return redirect()->route('events.show', ['event' => $event]); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Event $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete(); 
        return redirect()->route('events.index'); 
    }
}
