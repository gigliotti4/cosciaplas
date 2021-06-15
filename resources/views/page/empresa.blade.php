@extends('layouts.plantilla')



@section('content')

<style>
    .icono{
        max-width: 80px;
    min-width: 80px;
    min-height: 80px;
    max-height: 80px;
    border-radius:50%;
    
}
    

</style>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        @foreach ($sliders as $slider)
            @if($loop->first)
                <div class="carousel-item active">
                    <div class="row" style=" 
                        background-image:url('{{asset(Storage::url($slider->imagen))}}');
                        
                        background-repeat:no-repeat;
                        height:396px;
                       
                        ">
                        <div class="col-md-6 ms-auto">
                            <div class="texto" style=""></div>
                            
                        </div>
                        
                    </div>
                </div>
            @else 
                <div class="carousel-item">
                    <div class="row " style=" 
                        background-image:url('{{asset(Storage::url($slider->imagen))}}');
                        
                        background-repeat:no-repeat;
                        height:396px;
                        ">
                        <div class="col-md-10 ms-auto ">
                            
                            
                        </div>
                    </div>
                </div>
            @endif
        @endforeach 
    </div>
</div>
<div class="" style="background-color: #1F3579;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-white text-center p-4  m-0">
                <div class="texto text-uppercase">{!!$slider->descripcion!!}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        @foreach ($contenido as $c)
            
        <div class="col-md-6 mt-4 p-2">
        <span style="color:#1F3579; font-size:16px; " class="my-2">COMPROMISO</span> 
            <span style="font-size:13px; color:#666666; font-family:'Montserrat', light;">{!!$c->textizq!!}</span>
        </div>
        <div class="col-md-6 mt-4 p-2">
            <span style="color:#1F3579; font-size:16px; " class="my-2">MOTIVACIÓN</span> 
            <span style="font-size:13px; color:#666666 !important; font-family:'Montserrat', light;" class="mb-4">{!!$c->textder!!}</span>
        </div>
        @endforeach
    </div>
</div>


<div class="mt-5" style="background-color: #F2F2F2">
    <div class="container">
    <h6 class="mb-4 pt-3" style="color:#484E91; font-family:'Montserrat', Regular;">NUESTRO PRODUCTOS</h6>
        <div class="">
        <div class="row">
                @foreach($empresa as $e)
            
                 <div class="col-md-4 d-flex justify-content-center align-items-center my-4">
                    <div class="bg-white icono">
                        <img src="{{asset(Storage::url($e->icono))}}" alt="" class="img-fluid d-block mx-auto pt-1" >
                    </div>
                    <span style="color:#1F3579; font-size:14px; " class="mx-2 align-self-center text-uppercase">{!!$e->nombre!!}</span>
                </div> 
                @endforeach
            </div>
        </div>
    </div>

</div>


@endsection