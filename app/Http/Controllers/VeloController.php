<?php
namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\categories;

use App\Models\Velos;
use Illuminate\Http\Request;
use App\Post;
class VeloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Velos = Velos::all();
        $categories = categories::all();
        return view ('velo.index')->with('velos', $Velos,'categories',$categories); 
    }

    public function indexfront()
    {
        $Velos = Velos::all();
       
        return view ('velo.showfront')->with('velos', $Velos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('velo.Create');
    }


    public function addNewVelo()
    
    {
         $categories = categories::all();
        return view('velo.Create', compact('categories'));
    }

     // save new user
     public function addNewVeloSave(Request $request)
     {

        $request->validate([
            'libelle'      => 'required|string|max:255',
            'image'     => 'required|image',
            'prix'     => 'required|min:6|numeric',
            'etat' => 'required|string|max:255',
            
        ]);

        $image = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $image);

        $velo = new Velos;
        $velo->libelle         = $request->libelle;
        $velo->image       = $image;
        $velo->etat        = $request->etat;
        $velo->prix = $request->prix;
        $velo->categorie_id  = $request->categorie_id;
 
        $velo->save();
        
       

        Toastr::success('Create new Velo :)','Success');
        return redirect()->route('Velos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        $input = $request->validate(['image'=>'required','libelle'=>'required','etat'=>'required','prix'=>'required']);
        Velos::create($input);
        return redirect('Velos')->with('flash_message', 'Velo Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Velos  $velos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Velo = Velos::find($id);
        return view('velo.show')->with('velos', $Velo);
        
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Velos  $velo
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $Velo = Velos::find($id);
        return view('velo.edit')->with('velos', $Velo);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Velos  $velo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Velos = Velos::find($id);
        $input = $request->all();
        $Velos->update($input);
        return redirect('Velos')->with('flash_message', 'Velo Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Velos  $velo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Velos::destroy($id);
        return redirect('Velos')->with('flash_message', 'Velo deleted!');
    }
}
