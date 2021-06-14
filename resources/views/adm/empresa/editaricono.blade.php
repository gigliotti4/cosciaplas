@extends('adm.layouts')

@section('content')
<form method="post" action="{{route('updateicono', $contenido->id)}}" enctype="multipart/form-data">
	@csrf
	@method('put')
  <div class="form-group">
    <label for="orden">Orden</label>
    <input type="text" class="form-control" id="orden" name="orden" value="{{$contenido->orden}}">
  </div>
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" value="{{$contenido->nombre}}">
    
  </div>

  <div class="form-group">
    <label for="icono">Icono</label>
    <input type="file" class="form-control-file" id="icono" name="icono" value="">
    <img src="{{asset(Storage::url($contenido->icono))}}" class="img-thumbnail w-25 mt-4 ">
  </div>
  
 <button type="submit" class="btn btn-success">Editar</button>
</form>


@endsection