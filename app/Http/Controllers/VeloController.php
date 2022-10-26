<?php

namespace App\Http\Controllers;

use App\Models\Velo;
use App\Http\Requests\StoreVeloRequest;
use App\Http\Requests\UpdateVeloRequest;
use Illuminate\Http\Request;

class VeloController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if($request->search !== null){

            $velos= Velo::orderBy('created_at','DESC')->whereMarque($search)->get();
            return view('velos.index')->with([
                'velos'=>$velos,
            ]);
          

        }else{

        return view('velos.index')->with([
            'velos' => Velo::all(),
            //'velosDispo' => Velo::whereDispo(1)->get()
        ]);
    }

        /* $velos = Velo::all();
        $dispo = [100, 250, 400, 700];
        foreach ($velos as $velo) {
            $velo->prixJ = $dispo[rand(0, 1)];
            $velo->save();
        }*/


        // return view('velos.index')->with([
        //     'velos'=>Velo::whereDispo(1)->get()]);

        //change all in database
        /*$velos = Velo::all();
        foreach ($velos as $velo) {
            $velo->dispo = rand(0, 1);
            $velo->save();
        }*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVeloRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVeloRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Velo  $velo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $velo = Velo::find($id);
        return view('velos.show')->with('velo', $velo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Velo  $velo
     * @return \Illuminate\Http\Response
     */
    public function edit(Velo $velo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVeloRequest  $request
     * @param  \App\Models\Velo  $velo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVeloRequest $request, Velo $velo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Velo  $velo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Velo $velo)
    {
        //
    }
}