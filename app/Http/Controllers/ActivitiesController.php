<?php

namespace App\Http\Controllers;
use App\Models\Activitie;
use Illuminate\Http\Request;
use App\Http\Requests\ActRequest;

use Illuminate\Support\Facades\Validator;

class ActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $activities = Activitie::all();
        return view ('Activitie.index', compact('activities')) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Activitie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ActRequest $request)
    {
       
        $validated=$request->validated();
      
        $activitie = Activitie::create($request->all());
        return redirect()->route('activitie.index');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Activitie $activitie)
    {
       
        return view('Activitie.show', compact('activitie'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Activitie $activitie)
    {
        //
        return view('Activitie.edit', compact('activitie'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActRequest $request, $id)
    {
        $activitie = ['nameactivitie'=>$request->nameactivitie,
            'detail'=>$request->detail,
           
        ];
        Activitie::whereId($id)->update($activitie) ;
        return  redirect()->route('activitie.index')
            ->with('info','Activitie updated successfully.');

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
        $activitie = Activitie::find($id) ;
        //var_dump($product);
        $activitie->delete() ;
        return redirect()->route('activitie.index')
            ->with('success','Activitie deleted successfully.') ;
    
}
}