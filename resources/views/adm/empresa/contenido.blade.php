@extends('adm.layouts')

@section('content')

<div class="d-flex justify-content-end ">

  <a href="{{route('nuevoicono')}}" class="btn btn-success rounded-pill" >
   <i class="fas fa-plus"></i>
 </a> 
</div>
@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
<h1>Icono</h1>
<table class="table">
    <thead>
      <tr>
      <th scope="col">Orden</th>
        <th scope="col">Nombre</th> 
        <th scope="col">Accion</th>
      </tr>
    </thead>
    <tbody>
         @foreach($contenido as $c)
      <tr>
        <th scope="row">{{$c->orden}}</th>
        <th scope="row">{{$c->titulo}}</th>
        
      <td>
        <a class="btn btn-warning rounded-pill" href="{{route('editaricono', $c->id)}}" role="button">
          <i class="fas fa-edit"></i>
        </a>
        <a class="btn btn-danger rounded-pill" href="{{route('eliminaricono',$c->id)}}" role="button">
          <i class="far fa-trash-alt"></i>
        </a>
      </td>
      </tr>
       @endforeach
  
    </tbody>
  </table>
  



@endsection