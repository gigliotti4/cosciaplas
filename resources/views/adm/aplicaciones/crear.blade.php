@extends('adm.layouts')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{route('crearaplicacion')}}" enctype="multipart/form-data">
	@csrf
  <div class="form-group">
    <label for="orden">orden</label>
    <input type="text" class="form-control col-md-6" id="orden" name="orden" >
    
  </div>
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control col-md-6" id="nombre" name="nombre">
  </div>
  <div class="form-group">
    <label for="imagen">Imagen</label>
    <input type="file" class="form-control-file col-md-6" required id="imagen" name="imagen">
  </div>

 <button type="submit" class="btn btn-success">Agregar</button>
</form>

@endsection