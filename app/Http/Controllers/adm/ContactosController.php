<?php

namespace App\Http\Controllers\adm;

use App\Http\Controllers\Controller;
use App\Models\Contacto;
use App\Models\Rede;
use Illuminate\Http\Request;

class ContactosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacto = Contacto::get();
        
        return view('adm.contacto.contenido', compact('contacto'));
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
         $contacto = Contacto::find($id);
         $redes = Rede::find($id);
        return view('adm.contacto.editar', compact('contacto', 'redes'));
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
        $contacto = Contacto::find($id);
        
        $contacto->direccion = $request->direccion;
        $contacto->celular = $request->celular;
        $contacto->telefono = $request->telefono;
        $contacto->correo = $request->correo;
        $contacto->orden     = $request->orden;
        $contacto->save();
        return redirect()->route('contacto')->with('success', "Registro actualizado exitósamente" );
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
    }
}
