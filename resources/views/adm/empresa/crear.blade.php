@extends('adm.layouts')

@section('content')
<h3>Nuevo Icono</h3>
<form method="post" action="{{route('crearicono')}}" enctype="multipart/form-data">
	@csrf
  <div class="form-group col-md-6">
    <label for="orden">orden</label>
    <input type="text" class="form-control" id="orden" name="orden" >
    
  </div>
  <div class="form-group col-md-6">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" >
    
  </div>
  <div class="form-group col-md-6">
    <label for="icono">Icono</label>
    <input type="file" class="form-control-file" required id="icono" name="icono">
  </div>

 

 <button type="submit" class="btn btn-success my-3">Agregar</button>
</form>

@endsection
