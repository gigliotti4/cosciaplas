@extends('adm.layouts')

@section('content')
<h3>Nuevo Slider</h3>
<form method="post" action="{{route('crearslider', $seccion)}}" enctype="multipart/form-data">
	@csrf
  <div class="form-group">
    <label for="orden">orden</label>
    <input type="text" class="form-control" id="orden" name="orden" >
    
  </div>
  
  {{-- <div class="form-group">
    <label for="descripcion">descripcion</label>
    <input type="text" class="form-control" id="descripcion" name="descripcion">
  </div> --}}
  <div class="form-group">
    <label for="imagen">Imagen</label>
    <input type="file" class="form-control-file" required id="imagen" name="imagen">
  </div>
  <div class="form-group">
    <label for="descripcion">Contenido</label>
    <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="10" value="" ></textarea>
    
  </div> 



 <button type="submit" class="btn btn-success">Agregar</button>
</form>
@endsection
 @section('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script>
        $(document).ready(function() {
             $('textarea').summernote({
                
                 height: 250,
                     fontNames: ['Montserrat-Bold', 'Montserrat-Light', 'Montserrat-Medium', 'Montserrat-Regular', 'Montserrat-SemiBold', 'Roboto-Regular'],
                     toolbar: [
                     ['style', ['style']],
                     ['font', ['bold', 'underline', 'clear']],
                     ['fontNames', ['fontname']],
                     ['color', ['color']],
                     ['para', ['ul', 'ol', 'paragraph']]
                     
                     ]
             });
         });
    
</script> 

@endsection