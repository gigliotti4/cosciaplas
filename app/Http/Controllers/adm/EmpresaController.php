<?php

namespace App\Http\Controllers\adm;

use App\Http\Controllers\Controller;
use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmpresaController extends Controller
{



    public function index()
    {
        $contenido = Empresa::orderBy('orden', 'ASC')->get();
        return view('adm.empresa.contenido', compact('contenido'));
    }

    public function create()
    {
    
        return view('adm.empresa.crear');
    }

    public function store(Request $request)
    {

        $icono = new Empresa;
        $icono->orden = $request->orden;
        $icono->nombre = $request->nombre;
        $icono->icono = $request->file('icono')->store('public/iconos');
        $icono->save();


        return redirect()->route('icono')->with('success', 'El slider fue creado');
     
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $contenido = Empresa::find($id);
       // $inicio = Inicio::all();
        return view('adm.empresa.editar', compact('contenido'));
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
        $contenido = Empresa::find($id);
        if(!is_null($id))
            $contenido = Empresa::find($id);
        else{
            $contenido          = new Empresa();
            
        }

        if ($request->hasFile('icono'))
        {   $path               = $request->file('icono')->store('public/Icono');
            $contenido->icono  = $path;
        }
        else
            $contenido->icono  = $contenido->icono;
           
    
        
        $contenido->titulo = $request->titulo;
        $contenido->save();
        return redirect()->route('contenido')->with('success', "Registro actualizado exitósamente" );
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contenido = Empresa::find($id);
        //storage::delete($slider->imagen);
        $contenido->delete();
        return redirect()->back()->with('success', "Registro eliminado exitósamente" );
    }
}
