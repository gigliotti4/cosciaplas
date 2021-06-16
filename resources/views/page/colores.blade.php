@extends('layouts.plantilla')



@section('content')
<style>
.texto{
 	font-family: 'Montserrat', 'SemiBold';
 	margin-top:130px;
 	margin-left: 60px;
    font-size: 34px;
    font-weight: 700;
    color: white;

}


.fondodelcoso{
        background-color: #F2F2F2;
        height: 25px;
    }

</style>
<div class="fondodelcoso">
    <div class="container">
        <div class="col-md-12">
            <div class="">
                <span class="mt-1" style="font-size: 13px;">INICIO | CARTA DE COLORES</span>
            </div>
        </div>
    </div>
</div>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        @foreach ($sliders as $slider)
            @if($loop->first)
                <div class="carousel-item active">
                    <div class="row" style=" 
                        background-image:url('{{asset(Storage::url($slider->imagen))}}');
                        
                        background-repeat:no-repeat;
                        height:399px;
                        
                        ">
                        <div class="col-md-12 ms-auto">
                            <div class="texto text-center" style="">
                               {!!$slider->descripcion!!} 
                            </div>
                        </div>
                    </div>
                </div>
            @else 
                <div class="carousel-item">
                    <div class="row" style=" 
                        background-image:url('{{asset(Storage::url($slider->imagen))}}');
                        
                        background-repeat:no-repeat;
                        height:399px;
                        ">
                        <div class="col-md-10 ms-auto ">
                            <div class="texto">{!!$slider->descripcion!!} </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach 
    </div>
</div>

<div class="container-fluid">
    <div class="col-md-12">
        <div class="row d-flex justify-content-around">
            @foreach($colores as $c)
            <div class="col-md-2 border mx-2  mb-3 "style="background-color:{{$c->colores}}; height:74px; "> 
                   
            </div> 
            @endforeach   
        </div>        
    </div>
</div>



@endsection