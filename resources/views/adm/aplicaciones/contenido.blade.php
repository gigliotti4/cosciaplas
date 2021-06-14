@extends('adm.layouts')

@section('content')

<div class="d-flex justify-content-end ">
  <a href="{{route('nuevaaplicacion')}}" class="btn btn-success rounded-pill" >

    <i class="fas fa-plus"></i>
  </a>

</div> 
@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

<table class="table">
  <thead>
    <tr>
      <th scope="col">Orden</th>
      <th scope="col">Nombre</th>
      {{-- <th scope="col">Imagen</th> --}}
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
    <tr>
       @foreach($aplicaciones as $a)
      <tr>
        <th scope="row" class="text-uppercase">{{$a->orden}}</th>
        <td scope="row" class="" >{{$a->nombre}}</td>
         {{-- <td scope="row"><img src="{{asset(Storage::url($a->imagen))}}" class="img-thumbnail w-25" ></td> --}}
        <td>
           <a class="btn btn-warning rounded-pill" href="{{route('editaraplicacion', $a->id)}}" role="button">
            <i class="fas fa-edit"></i>
          </a>
           <a class="btn btn-danger rounded-pill" href="{{route('eliminaraplicacion', $a->id)}}" role="button">
            <i class="far fa-trash-alt"></i>
          </a>  

        </td>
      </tr>
    
  @endforeach 
    </tr>
   
  </tbody>
</table>











@endsection