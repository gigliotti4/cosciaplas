@extends('adm.layouts')

@section('content')
 <a href="{{route('nuevoslider', [ 'seccion' => $seccion ])}}" class="btn btn-success mb-5" >Nuevo slider</a> 

@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
	<table class="table">
  <thead>
    <tr>
      <th scope="col">Orden</th>
      <th scope="col">Imagen</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
 
  <tbody>
  	@foreach($slider as $s)
	    <tr>
	      <th scope="row">{{$s->orden}}</th>
	      <td scope="row"><img src="{{asset(Storage::url($s->imagen))}}" class="img-thumbnail"></td>
	      <td>{{$s->descripcion}}</td>
	      <td>
	      	<a class="btn btn-warning" href="{{route('editslider',[$seccion,'id'=>$s->id])}}" role="button">edit</a>
	      	<a class="btn btn-danger" href="{{route('eliminarslider',$s->id)}}" role="button">borrar</a>

	      </td>
	    </tr>
    
	@endforeach
  </tbody>
</table>


@endsection