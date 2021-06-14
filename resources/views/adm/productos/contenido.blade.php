@extends('adm.layouts')

@section('content')

<div class="d-flex justify-content-end ">
<a href="{{route('nuevoproducto')}}" class="btn btn-success rounded-pill" >
  <i class="fas fa-plus"></i>

</a>
</div>

@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

<table class="table">
  <thead>
    <tr>
      <th scope="col">Orden</th>
      <th scope="col">nombre</th>
      
      <th scope="col">Accion</th>
    </tr>
  </thead>
 
  <tbody>
  	@foreach($productos as $p)
	    <tr>
	      <th scope="row">{{$p->orden}}</th>
	      <th scope="row">{{$p->nombre}}</th>
	     {{--  <td scope="row"><img src="{{asset(Storage::url($p->imagen))}}" class="img-thumbnail w-25"></td> --}}
	      {{-- <td>{!!$p->descripcion!!}</td> --}}
	      <td>
	      	<a class="btn btn-warning rounded-pill" href="{{route('editarproducto',$p->id)}}" role="button">
            <i class="fas fa-edit"></i>
          </a>
	      	<a class="btn btn-danger rounded-pill" href="{{route('eliminarproducto',$p->id)}}" role="button">
            <i class="far fa-trash-alt"></i>
          </a>

	      </td>
	    </tr>
    
	@endforeach
  </tbody>
</table>



@endsection