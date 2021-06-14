<?php

namespace App\Http\Controllers\adm;
use App\Http\Controllers\Controller;

use App\Models\Contenido;
use Illuminate\Http\Request;

class ContenidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contenido  $contenido
     * @return \Illuminate\Http\Response
     */
    public function show(Contenido $contenido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contenido  $contenido
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contenido = Contenido::find($id);
        return view('adm.contenido.editarcontenido', compact('contenido', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contenido  $contenido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contenido = Contenido::find($id);
        $contenido->textizq     = $request->textizq;
        $contenido->textder     = $request->textder;
        $contenido->save();
        return redirect()->route('editarcontenido', ['id'=>$id])->with('success', "Registro actualizado exitósamente" );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contenido  $contenido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contenido $contenido)
    {
        //
    }
}
