<?php

namespace App\Http\Controllers\adm;

use App\Http\Controllers\Controller;
use App\Models\producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
   
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $productos = Producto::orderBy('orden', 'ASC')->get();
            return view('adm.productos.contenido', compact('productos'));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {   $productos  = Producto::orderBy('orden', 'ASC')->get();
            return view('adm.productos.crear', compact('productos'));
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
               'imagen' => 'max:10240|mimes:jpg,jpeg,png,svg,gif,webp' ,
               "pdf" => "max:20240|mimes:pdf"
            ]);
           
            //dd($request->all());
            $producto = new producto;
            $producto->orden = $request->orden;
            $producto->nombre = $request->nombre;
            $producto->descripcion = $request->descripcion;
            $producto->aplicaciones = $request->aplicaciones;
            $producto->presentaciones = $request->presentaciones;
            $producto->pdf = $request->file('pdf')->store('public/pdf');
            $producto->imagen = $request->file('imagen')->store('public/productos');
             if(isset($request->destacado))
                $producto->destacado    = 1;
            else
                $producto->destacado    = 0;
            $producto->save();
    
    
            return redirect()->route('productos')->with('success', 'El producto fue creado');
        }
    
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
         {  
            //  $active = 'page.productos';
        //     $producto = Producto::find($id);
        //     $productos = Producto::orderBy('orden', 'ASC')->get();
        //     $logosheader = Logo::where('seccion', 'header')->orderBy('id', 'ASC')->get();
        //     $logosfooter = Logo::where('seccion', 'footer')->orderBy('id', 'ASC')->get();
        //     $contactos = Contacto::orderBy('orden', 'ASC')->get();
        //     $redes = Rede::get();
        //     return view('page.producto', compact('producto', 'productos', 'logosheader', 'logosfooter', 'contactos', 'redes', 'active'));
       }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            $productos = Producto::find($id);
    
            return view('adm.productos.editar', compact('productos'));
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
                "pdf" => "max:20240|mimes:pdf"
             ]);
    
                $productos = Producto::find($id);
            if ($request->hasFile('pdf'))
            {
                Storage::delete($productos->pdf);
                $path_pdf = $request->file('pdf')->store('public/pdf');
            }else{
                $path_pdf = $productos->pdf;
            }
            if ($request->hasFile('imagen'))
            {
                Storage::delete($productos->imagen);
                $path = $request->file('imagen')->store('public/productos');
            }else{
                $path = $productos->imagen;
            }
            $productos->nombre = $request->nombre;
            $productos->descripcion = $request->descripcion;
            $productos->aplicaciones = $request->aplicaciones;
            $productos->presentaciones = $request->presentaciones
            ;
            $productos->imagen    = $path;
            $productos->pdf   = $path_pdf;
            $productos->orden     = $request->orden;
            if(isset($request->destacado))
                $productos->destacado    = 1;
            else
                $productos->destacado    = 0;
            $productos->save();
            return redirect()->route('productos')->with('success', "Registro actualizado exitósamente" );
        
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
             $producto = Producto::find($id);
            storage::delete($producto->imagen);
            $producto->delete();
            return redirect()->back()->with('success', "Registro eliminado exitósamente" );
        }
}
