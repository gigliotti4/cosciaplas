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

<form method="post" action="{{route('updateaplicacion',$aplicaciones->id)}}" enctype="multipart/form-data">
	@csrf
  @method('put')
  <div class="form-group">
    <label for="orden">orden</label>
    <input type="text" class="form-control col-md-6" id="orden" name="orden" value="{{$aplicaciones->orden}}">   
  </div>
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control col-md-6" id="nombre" name="nombre" value="{{$aplicaciones->nombre}}">
  </div>
  <div class="form-group">
    <label for="imagen">Imagen</label>
    <input type="file" class="form-control-file col-md-6" id="imagen" name="imagen" value="">
    <img src="{{asset(Storage::url($aplicaciones->imagen))}}" class="img-thumbnail mt-4">
  </div>
 <button type="submit" class="btn btn-success">Editar</button>
</form>


@endsection
