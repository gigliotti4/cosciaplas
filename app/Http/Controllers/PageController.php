<?php

namespace App\Http\Controllers;
use App\Models\Aplicacione;
use App\Models\Contacto;
use App\Models\Rede;
use App\Models\Empresa;
use App\Models\Contenido;
use App\Models\Slider;
use App\Models\producto;
use App\Models\Colore;
use App\Models\Logo;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $active = 'page.inicio';
        $sliders   = Slider::where('seccion', 'inicio')->orderBy('orden', 'ASC')->get();
        $logosheader = Logo::where('seccion', 'header')->orderBy('id', 'ASC')->get();
        $logosfooter = Logo::where('seccion', 'footer')->orderBy('id', 'ASC')->get();
        $aplicaciones = Aplicacione::orderBy('orden', 'ASC')->get();
    //    $iconos = Inicio::orderBy('orden', 'ASC')->get();
        $contactos = Contacto::orderBy('orden', 'ASC')->get();
        $redes = Rede::get();

       return view('page.inicio', compact('sliders', 'logosheader','logosfooter', 'contactos', 'redes', 'active', 'aplicaciones'));

    }


    public function empresa(){
        $active = 'page.empresa';
        $sliders   = Slider::where('seccion', 'empresa')->orderBy('orden', 'ASC')->get();
        $logosheader = Logo::where('seccion', 'header')->orderBy('id', 'ASC')->get();
        $logosfooter = Logo::where('seccion', 'footer')->orderBy('id', 'ASC')->get();
        $empresa = Empresa::orderBy('orden', 'ASC')->get();
        $contenido = Contenido::get();
        $contactos = Contacto::orderBy('orden', 'ASC')->get();
        $redes = Rede::get();

       return view('page.empresa', compact('sliders', 'logosheader','logosfooter', 'contactos', 'redes', 'active', 'empresa', 'contenido'));

    }

    public function productos(){
        $active = 'page.productos';
        $logosheader = Logo::where('seccion', 'header')->orderBy('id', 'ASC')->get();
        $logosfooter = Logo::where('seccion', 'footer')->orderBy('id', 'ASC')->get();
        $productos = Producto::orderBy('orden', 'ASC')->get();
        $contactos = Contacto::orderBy('orden', 'ASC')->get();
        $redes = Rede::get();

       return view('page.productos', compact('logosheader','logosfooter', 'contactos', 'redes', 'active', 'productos',));

    }
    public function producto($id){
        $active = 'page.productos';
        $logosheader = Logo::where('seccion', 'header')->orderBy('id', 'ASC')->get();
        $logosfooter = Logo::where('seccion', 'footer')->orderBy('id', 'ASC')->get();
        $productos = Producto::orderBy('orden', 'ASC')->get();
        $producto = Producto::find($id);
        $contactos = Contacto::orderBy('orden', 'ASC')->get();
        $redes = Rede::get();

       return view('page.producto', compact('logosheader','logosfooter', 'contactos', 'redes', 'active', 'productos', 'producto'));

    }
    public function aplicaciones(){
        $active = 'page.aplicaciones';
        $logosheader = Logo::where('seccion', 'header')->orderBy('id', 'ASC')->get();
        $logosfooter = Logo::where('seccion', 'footer')->orderBy('id', 'ASC')->get();
        $aplicaciones = Aplicacione::orderBy('orden', 'ASC')->get();
        $contactos = Contacto::orderBy('orden', 'ASC')->get();
        $redes = Rede::get();

       return view('page.aplicaciones', compact('logosheader','logosfooter', 'contactos', 'redes', 'active', 'aplicaciones',));

    }

    public function colores(){
        $active = 'page.colores';
        $logosheader = Logo::where('seccion', 'header')->orderBy('id', 'ASC')->get();
        $logosfooter = Logo::where('seccion', 'footer')->orderBy('id', 'ASC')->get();
        $sliders   = Slider::where('seccion', 'cartacolores')->orderBy('orden', 'ASC')->get();
        $colores = Colore::orderBy('orden', 'ASC')->get();
        $contactos = Contacto::orderBy('orden', 'ASC')->get();
        $redes = Rede::get();

       return view('page.colores', compact('logosheader','logosfooter', 'contactos', 'redes', 'active', 'colores', 'sliders'));

    }

}
