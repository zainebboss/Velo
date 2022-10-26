<?php

namespace App\Http\Controllers;

use App\Models\Command;
use App\Models\Velo;

use App\Http\Requests\StoreCommandRequest;
use App\Http\Requests\UpdateCommandRequest;

class CommandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('commands.create')->with(['commands' => Command::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('commands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCommandRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommandRequest $request)
    {
        $this->validate($request, [
            'user_id' => 'required',
            'velo_id' => 'required',
            'dateL' => 'required',
            'dateR' => 'required'
        ]);
        Command::create([

            'user_id' => auth()->user()->id,
            'velo_id' => $request->velo_id,
            'dateL' =>  $request->dateL,
            'dateR' =>  $request->dateR,
            'prixTTC' =>  250,

        ]);

        return redirect()->route('velos.index')->with([
            'success' => 'Commande ajoutee'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Command  $command
     * @return \Illuminate\Http\Response
     */
    public function show(Command $command)
    {
        return view('commands.create')->with($command);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Command  $command
     * @return \Illuminate\Http\Response
     */
    public function edit(Command $command)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommandRequest  $request
     * @param  \App\Models\Command  $command
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommandRequest $request, Command $command)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Command  $command
     * @return \Illuminate\Http\Response
     */
    public function destroy(Command $command)
    {
        //
    }
}