@extends('adm.layouts')

@section('content')

<form method="post" action="{{route('updateslider',[$seccion,'id'=>$slider->id])}}" enctype="multipart/form-data">
	@csrf
  @method('put')
  <div class="form-group">
    <label for="orden">orden</label>
    <input type="text" class="form-control" id="orden" name="orden" value="{{$slider->orden}}">
    
  </div>
  
  <div class="form-group">
    <label for="descripcion">descripcion</label>
    <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{$slider->descripcion}}">
  </div>
  <div class="form-group">
    <label for="imagen">Imagen</label>
    <input type="file" class="form-control-file" id="imagen" name="imagen" value="">
    <img src="{{asset(Storage::url($slider->imagen))}}" class="img-thumbnail mt-4">
  </div>

  <div class="form-group">
    <label for="descripcionLarga">descripcion Larga</label>
    <textarea class="form-control" name="descripcionLarga"  id="descripcionLarga" cols="30" rows="10" value="">{!!$slider->descripcionLarga!!}</textarea>
   
  </div>
 <button type="submit" class="btn btn-success">Editar</button>
</form>


@endsection
@section('js')
 <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script>
        $(document).ready(function() {
             $('textarea').summernote({
                
                 height: 250,
                     fontNames: ['Montserrat-Bold', 'Montserrat-Light', 'Montserrat-Medium', 'Montserrat-Regular', 'Montserrat-SemiBold'],
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