<?php

namespace App\Http\Controllers;
use App\Models\Event;
use App\Models\Activitie;
use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $events = Event::all();
        return view ('Event.index', compact('events')) ;
    }
  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        $activities = Activitie::all();
        return view('Event.create', compact('activities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventRequest $request)
    {
       
        $validated=$request->validated();
        $event = Event::create($request->all());
        $event->activity_id  = $request->activity_id;
        return redirect()->route('event.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event , Activitie $activities)
    {
       
        return view('Event.show', compact('event','activities'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
        return view('Event.edit', compact('event'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventRequest $request, $id)
    {
        $event = ['nameevent'=>$request->nameevent,
            'ville'=>$request->ville,
            'pays'=>$request->pays,
            'telResponsable'=>$request->telResponsable,
            'dateDebutEvent'=>$request->dateDebutEvent,
            'dateFinEvent'=>$request->dateFinEvent,
            'timeevent'=>$request->timeevent,
         
        ];
        Event::whereId($id)->update($event) ;
        return  redirect()->route('event.index')
            ->with('info','Event updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $event = Event::find($id) ;
        //var_dump($product);
        $event->delete() ;
        return redirect()->route('event.index')
            ->with('success','Event deleted successfully.') ;
    
}
}