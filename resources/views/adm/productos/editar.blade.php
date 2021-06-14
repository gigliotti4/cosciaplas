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
<form method="post" action="{{route('updateproducto',$productos->id)}}" enctype="multipart/form-data">
	@csrf
  @method('put')
  <div class="form-group col-md-6">
    <label for="orden">orden</label>
    <input type="text" class="form-control" id="orden" name="orden" value="{{$productos->orden}}">   
  </div>
  <div class="form-group col-md-6">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" value="{{$productos->nombre}}">
  </div>
  
  <div class="form-group col-md-8">
    <label for="descripcion">Descripcion </label>
    <textarea class="form-control" name="descripcion"  id="descripcion" cols="30" rows="10" value="">{!!$productos->descripcion!!}</textarea>
     
  </div>
  <div class="form-group col-md-8">
    <label for="aplicaciones">aplicaciones</label>
    <textarea class="form-control" name="aplicaciones"  id="aplicaciones" cols="30" rows="10" value="">{!!$productos->aplicaciones!!}</textarea>
   
  </div>
  <div class="form-group col-md-8">
    <label for="presentaciones">presentaciones</label>
    <textarea class="form-control" name="presentaciones"  id="presentaciones" cols="30" rows="10" value="">{!!$productos->aplicaciones!!}</textarea>
   
  </div>
 
  <div class="form-group">
    <label for="imagen">Imagen</label>
    <input type="file" class="form-control-file" id="imagen" name="imagen" value="">
    <img src="{{asset(Storage::url($productos->imagen))}}" class="img-thumbnail mt-4" accept=".jpg, .jpeg, .png">
  </div>
  <div class="form-group">
    <label for="pdf">PDF</label>
    <input type="file" class="form-control-file" id="pdf" name="pdf" value="{{asset(Storage::url($productos->pdf))}}" accept=".pdf">
  </div>

   {{-- <div class="d-flex flex-column">   
  <span>Productos destacados</span>
  <div class="form-check form-check-inline">
  <label class="form-check-label mr-3" for="inlineCheckbox1">Si</label>
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="destacado" @if($productos->destacado == 1) checked="" @endif>
</div> 
    
  </div>--}}
 <button type="submit" class="btn btn-success">Editar</button>
</form>


@endsection
@section('js')
 <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
 <script>
  $(document).ready(function() {
       $('textarea').summernote({
          
           height: 250,
               fontNames: ['Montserrat', 'Comic Sans MS'],
               fontNamesIgnoreCheck: ['Arial', 'Segoe UI']
              //  toolbar: [
              //  ['style', ['style']],
              //  ['font', ['bold', 'underline', 'clear']],
              // // ['fontNames', ['fontname']],
              //  ['color', ['color']],
              //  ['para', ['ul', 'ol', 'paragraph']]
               
              //  ]
       });
   });

</script> 

@endsection