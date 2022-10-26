<?php

namespace App\Http\Controllers;

use App\Models\Associations;
use Illuminate\Http\Request;
use App\Post;
class AssociationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Associations = Associations::all();
        return view ('asso.index')->with('associations', $Associations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('asso.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->validate(['association_name'=>'required','association_adress'=>'required']);
        Associations::create($input);
        return redirect('Associations')->with('flash_message', 'Association Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Associations  $associations
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Association = Associations::find($id);
        return view('asso.show')->with('associations', $Association);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Associations  $associations
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $Association = Associations::find($id);
        return view('asso.edit')->with('associations', $Association);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Associations  $associations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Associations = Associations::find($id);
        $input = $request->all();
        $Associations->update($input);
        return redirect('Associations')->with('flash_message', 'Association Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Associations  $associations
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Associations::destroy($id);
        return redirect('Associations')->with('flash_message', 'Association deleted!');
    }
}
