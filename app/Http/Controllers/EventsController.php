<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventFormRequest;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::paginate(10);
        return view('events.index',compact('events'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $event = new Event;
        return view('events.create',compact('event'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventFormRequest $request)
    {
        Event::create([
            'title'=>$request->title, 
            'description'=>$request->description
        ]);
           flashy()->success('Evènement créé avec succès!');

        return Redirect::route('root');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventFormRequest $request, Event $event)
    {
        $event->update([
            'title' => $request->title,
            'description' => $request->description
        ]);

   flashy()->success('Evènement "'.$event->title.'" modifié avec succès!');
        return redirect()->route('events.show',$event);  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {

        $event->delete();
    Flashy()->error('Evènement "'.$event->title.'" supprimé avec succès!');

        return redirect()->route('root'); 
    }

}
