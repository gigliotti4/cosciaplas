@extends('layouts.plantilla')



@section('content')
<style>
    .fondodelcoso{
        background-color: #F2F2F2;
        height: 25px;
    }
    .prodwrap{
        width: 100%;
        height: 300px;

    }
    .prodwrap:hover .imgoverlay{
    display: block;
    top: 18px;
    bottom: 15px;
    left: 10px;
    right: 20px;
    height: 265px;
    width: 370px;
    opacity: 0.5;
    transition: .5s ease;
    background-origin: content-box;
    padding: 100px;
    background-color: #1F3579;
    }
    .imgoverlay{
    cursor: pointer;
    position: relative;
    display: none;
    color: white;
    
    text-align: center
    
    }
    .imgoverlay:hover {
    position: relative;
    color: white;
    
    }
    .icono_hover{
    height:53px;
    width: 54px;
    }
    .titulo:hover{
        text-decoration: none;
    }
</style>
<div class="fondodelcoso">
    <div class="container">
        <div class="col-md-12">
            <div class="">
                <span class="mt-1" style="font-size: 13px;">INICIO | PRODUCTOS</span>
            </div>
        </div>
    </div>
</div>

<div class="container">
    
        <div class="row ">
            {{-- <div class="col-md-4 mt-3 ">
                <div class="">
                    <a href="{{route('page.producto', $p->id)}}" >
                        <img src="{{asset(Storage::url($p->imagen))}}" class="image w-100 " alt="...">
                        <p class="py-2 " style="color:#1F3579;">{!!$p->nombre!!}</p>             
                    </a> 
                </div>
                
            </div> --}}
            @foreach($productos as $p)
            <div class="col-md-4 " style="">  
             <a href="{{route('page.producto', $p->id)}}" class="titulo" > 
                <div id="prodwrap" class="prodwrap" style="background-image: url({{asset(Storage::url($p->imagen))}}); 
                background-size: contain;background-repeat: no-repeat;
                background-position: center;">
    
                <div class="imgoverlay">  
                    <i class="fas fa-plus fa-2x"></i>
                </div>
    
                </div>
                <p class="py-2 text-uppercase" style="color:#1F3579;">{!!$p->nombre!!}</p>  
            </a> 
                 
            </div>
       @endforeach


    
    </div>
</div>



@endsection