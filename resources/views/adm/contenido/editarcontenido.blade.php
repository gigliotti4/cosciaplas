@extends('adm.layouts')

@section('content')
@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

<form method="post" action="{{route('updatecontenido',  1)}}" enctype="multipart/form-data">
	@csrf
	@method('put')
    <div class="form-group">
        <label for="textizq">descripcion izquierda</label>
        <textarea class="form-control" name="textizq"  id="textizq" cols="30" rows="10" value="">{!!$contenido->textizq!!}</textarea>
       
      </div>

      <div class="form-group">
        <label for="textder">descripcion derecha</label>
        <textarea class="form-control" name="textder"  id="textder" cols="30" rows="10" value="">{!!$contenido->textder!!}</textarea>
       
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
                 fontNames: ['Montserrat'],
                 fontNamesIgnoreCheck: ['Segoe UI']
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