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

<form method="post" action="{{route('crearproducto')}}" enctype="multipart/form-data">
	@csrf
  <div class="form-group col-md-6">
    <label for="orden">Orden</label>
    <input type="text" class="form-control" id="orden" name="orden" >
    
  </div>
  <div class="form-group col-md-6">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre">
  </div>
  
  <div class="form-group col-md-8">
    <label for="descripcion">Descripcion </label>
    <textarea class="form-control" name="descripcion"  id="descripcion" cols="30" rows="10" value="" ></textarea>
  </div>
  <div class="form-group col-md-8">
    <label for="aplicaciones">Aplicaciones</label>
    <textarea class="form-control" name="aplicaciones"  id="aplicaciones" cols="30" rows="10" value="" ></textarea>
  </div>
  <div class="form-group col-md-8">
    <label for="presentaciones">presentaciones</label>
    <textarea class="form-control" name="presentaciones"  id="presentaciones" cols="30" rows="10" value="" ></textarea>
  </div>
  <div class="form-group">
    <label for="imagen">Imagen</label>
    <input type="file" class="form-control-file" required id="imagen" name="imagen" accept=".jpg, .jpeg, .png">
  </div>

  <div class="form-group">
    <label for="pdf">PDF</label>
    <input type="file" class="form-control-file" id="pdf" name="pdf" accept=".pdf">
  </div>
  {{-- <div class="d-flex flex-column">   
  <span>Producto destacado</span>
  <div class="form-check form-check-inline">
    <label class="form-check-label mr-3" for="inlineCheckbox1">Si</label>
    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="destacado" >
</div> 
    
  </div>--}}

 <button type="submit" class="btn btn-success my-3">Agregar</button>
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