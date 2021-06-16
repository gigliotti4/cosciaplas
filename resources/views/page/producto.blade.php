@extends('layouts.plantilla')



@section('content')
<style>
    .fondodelcoso{
        background-color: #F2F2F2;
        height: 25px;
    }
    .menu{
        color:#6A7177;
        font-size: 15px;
    }

	.menu:hover{
		text-decoration: none;
		color: white;
		
	}
    .list-group-item:hover{
		background-color: #1F3579;
		color: #fff !important;
	}

    .bg-sidebar{
        background-color: #1F3579;
        color:white;
    }
    .fondoprodu{
        background-color: #1F3579;
        height: 40px;;
    }
    .btn-producto{
        background-color: #1F3579;
        color: white
    }
    .btn-producto:hover{
        background-color:white;
        color: #1F3579;
        border: 1px solid #1F3579 ;
    }
    .menu2{
        color: #1F3579;
        font-family: 'Montserrat', 'Regular';
    }
</style>
<div class="fondodelcoso">
    <div class="container">
        <div class="col-md-12">
            <div class="">
                <span class="mt-1 text-uppercase" style="font-size: 13px;">INICIO | PRODUCTOS | {!!$producto->nombre!!}</span>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
	<div class="row">
		<div class="col-md-3">
			<ul class="list-group ">
			@foreach($productos as $p)
  				<li class="list-group-item border-left-0 border-right-0">
  				<a href="{{route('page.producto', $p->id)}}" class="menu text-uppercase" style=";">{{$p->nombre}}</a>
  				</li>
  			@endforeach
			</ul>
		</div>
		<div class="col-md-9">	
				<div class="row">	


		<div class="col-md-6" style="background-image: url('{{asset(Storage::url($producto->imagen))}}');  
		background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        background-origin: content-box;
        padding: 10px;
        min-height: 320px;
        ">
			
			{{-- <img src="{{asset(Storage::url($producto->imagen))}}" class="img-fluid"> --}}

		</div>

		<div class="col-md-6 d-flex	flex-column">
			<p class="menu2 text-uppercase">{{$producto->nombre}}</p>
			<div class="flex-grow-1" style="color:#666666;">{!!$producto->descripcion!!}</div>
			<div class="row">
						
					{{-- <a href="{{asset(Storage::url($producto->pdf))}}" download="" >
						<button type="button" class="btn btn-producto border rounded-pill px-3 py-2 text-uppercase font-weight-bold" style="font-size: 12px;">descargar ficha
							<i class="fas fa-download ml-2 " style=" "></i>
						</button>

					</a> --}}
                <a href=""  >
					<button type="button" class="btn btn-producto rounded-pill px-5 py-2 text-uppercase font-weight-bold ml-5" style="font-size: 12px;">Consultar		
					</button>
				</a>
			
			</div>
		</div>
				</div>
		</div>	

		
	</div>	
		
</div>
<div class="container">
	<div class="row">
		<div class="col-md-3">
			
		</div>
			<div class="col-md-9 p-0">
			<div class="fondoprodu  pl-2 ">
				<p class="text-uppercase text-white p-2">APLICACIONES</p>
			</div>
			<div class="mt-3" style="font-family: Monstserrat, sans-serif; color:#5C5C5C;">{!!$producto->aplicaciones!!}</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-3">
			
		</div>
			<div class="col-md-9 p-0">
			<div class="fondoprodu  pl-2 ">
				<p class="text-uppercase text-white p-2">PRESENTACIONES</p>
			</div>
			<div class="mt-3" style="font-family: Monstserrat, sans-serif; color:#5C5C5C;">{!!$producto->presentaciones!!}</div>
		</div>
	</div>
</div>










@endsection