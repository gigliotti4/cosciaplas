<?php

namespace App\Http\Controllers\adm;

use App\Models\Colore;
use App\Models\Aplicacione;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ColoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colores = Colore::get();
        return view('adm.colores.contenido', compact('colores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colores = Colore::get();
        return view('adm.colores.crear', compact('colores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $colores = new Colore;
        $colores->orden = $request->orden;
        $colores->colores = $request->colores;
        $colores->nombre = $request->nombre;
        $colores->codigo = $request->codigo;
        $colores->save();


        return redirect()->route('colores')->with('success', 'El colores fue creado');
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
        $colores = Colore::find($id);
        return view('adm.colores.editar', compact('colores'));
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
        $colores = Colore::find($id);
        $colores->colores = $request->colores;
        $colores->codigo = $request->codigo; 
        $colores->nombre = $request->nombre;
        $colores->orden     = $request->orden;
        $colores->save();
        return redirect()->route('colores')->with('success', "Registro actualizado exit??samente" );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $colores = Colore::find($id);
        $colores->delete();
        return redirect()->back()->with('success', "Registro eliminado exit??samente" );
    }
}
