<?php

namespace App\Http\Controllers\adm;

use App\Http\Controllers\Controller;
use App\Models\Aplicacione;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AplicacionesController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $aplicaciones = Aplicacione::orderBy('orden', 'ASC')->get();
        return view('adm.aplicaciones.contenido', compact('aplicaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
       
        return view('adm.aplicaciones.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'imagen' => 'max:10240|mimes:jpg,jpeg,png,svg,gif,webp',
            
         ]);
        $aplicaciones = new Aplicacione;
        $aplicaciones->orden = $request->orden;
        $aplicaciones->nombre = $request->nombre;
        $aplicaciones->imagen = $request->file('imagen')->store('public/aplicaciones');
      
        $aplicaciones->save();


        return redirect()->route('aplicaciones')->with('success', 'La aplicacion fue creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $aplicaciones = Aplicacione::find($id);

        return view('adm.aplicaciones.editar', compact('aplicaciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'imagen' => 'max:10240|mimes:jpg,jpeg,png,svg,gif,webp',
            
         ]);
        $aplicaciones = Aplicacione::find($id);
        if ($request->hasFile('imagen'))
        {
            Storage::delete($aplicaciones->imagen);
            $path = $request->file('imagen')->store('public/imagen');
        }else{
            $path = $aplicaciones->imagen;
        }
        $aplicaciones->nombre = $request->nombre;
        $aplicaciones->imagen    = $path;
        $aplicaciones->orden     = $request->orden;
        $aplicaciones->save();
        return redirect()->route('aplicaciones')->with('success', "Registro actualizado exitósamente" );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aplicaciones = Aplicacione::find($id);
        storage::delete($aplicaciones->imagen);
        $aplicaciones->delete();
        return redirect()->back()->with('success', "Registro eliminado exitósamente" );  
    }
}
