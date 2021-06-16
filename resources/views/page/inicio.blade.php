@extends('layouts.plantilla')



@section('content')
<style>
.texto{
 	font-family: 'Roboto', Black;
 	margin-top:130px;
 	margin-left: 60px;
    font-size: 46px;
    font-weight: 700;
    color: #1F3579;

}

.titulo{
    color:#1F3579;
}

.fondoinicio{
    background-color:#1F3579;
}

.boton_grey:hover{
    text-decoration:none;
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
                <span class="mt-1" style="font-size: 13px;">INICIO</span>
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
                            <div class="col-md-7 ms-auto">
                                <div class="texto" style=""></div>
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
                                <div class="texto"></div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach 
        </div>
    </div>


<div class="container">
    <div class="col-md-12">
        <h3 class="text-center my-4" style="color:#1F3579;">APLICACIONES</h3>

        <div class="row ">
            @foreach($aplicaciones as $a)
            <div class="col-md-4 mt-3 "> 
                    <img src="{{asset(Storage::url($a->imagen))}}" class="image w-100" alt="...">
                    <p class="py-2 " style="color:#1F3579;">{!!$a->nombre!!}</p>
           </div>
       @endforeach


        </div>

    </div>
</div>

<div class="fondoinicio p-5" style="">
    <div class="container"> 
        <div class="row">
            <div class="col-md-12 text-center" style="">
            <span class="" style="color:#A2A8B2;">COSCIAPLAS</span>
                    <h2 class="text-white" style="font-family:'Montserrat';">67 años de trayectoria</h2>
                    @foreach ($sliders as $slider)
                    <div class="">
                        <div class=" ">
                            <span class="text-white w-50" style="font-size:13px; font-family:'Montserrat'; font-weight:100 ">{!!$slider->descripcion!!}</span>
                        </div>
                    </div>
                    @endforeach
                     <a href="" class="boton_grey d-flex justify-content-center my-4">
                        <button class="btn rounded-pill font-weight-bold" style="background-color:#A2A8B2; color: white; font-size:13px; font-family:'Montserrat';">MÁS INFORMACIÓN
                        </button>
                    </a>
            </div>
            
                    
                   
           
        </div>

    </div>

</div>









@endsection