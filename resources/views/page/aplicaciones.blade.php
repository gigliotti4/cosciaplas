@extends('layouts.plantilla')



@section('content')
<style>
    .fondodelcoso{
        background-color: #F2F2F2;
        height: 25px;
    }

</style>
<div class="fondodelcoso">
    <div class="container">
        <div class="col-md-12">
            <div class="">
                <span class="mt-1" style="font-size: 13px;">INICIO | APLICACIONES</span>
            </div>
        </div>
    </div>
</div>

<div class="d-none d-md-block">
    <div class="row p-0 ">
        {{-- @foreach($aplicaciones as $a)
        <img src="{{asset(Storage::url($a->imagen))}}" class="image w-100" alt="..." style="max-height: 300px;">
        @endforeach --}}
        @foreach ($aplicaciones as $a)
            @if($loop->iteration % 2 == 0)
                <div class="col-md-6 p-0 d-flex justify-content-center align-items-center  text-uppercase" 
                style="font-size: 24px; color:#1F3579;  background-color:#A2A8B2;" >
                    {{$a->nombre}}
                </div>

                <div class="col-md-6 p-0">
                   <img src="{{asset(Storage::url($a->imagen))}}" class="image w-100" alt="..." style="max-height: 300px;">
                </div>
            @else
                <div class="col-md-6 p-0">
                    <img src="{{asset(Storage::url($a->imagen))}}" class="image w-100" alt="..." style="max-height: 300px;">
                </div>

                <div class="col-md-6 p-0 d-flex justify-content-center align-items-center text-uppercase"
                style="font-size: 24px; color:white; background-color:#1F3579;">
                    {{$a->nombre}}
                </div>
         @endif
        @endforeach
    </div>
</div>


<div class=" col-md-12 d-block d-md-none">
    <div class="row p-0">
        @foreach ($aplicaciones as $a)
            @if($loop->iteration % 2 == 0)   
            <div class="col-md-6 p-0">
                <img src="{{asset(Storage::url($a->imagen))}}" class="image w-100" alt="..." style="max-height: 300px;">
            </div>
            <div class="col-md-6 p-0 d-flex justify-content-center align-items-center  text-uppercase" 
            style="font-size: 16px; color:#1F3579;  background-color:#A2A8B2;" >
                {{$a->nombre}}
            </div>
            @else
                <div class="col-md-6 p-0">
                    <img src="{{asset(Storage::url($a->imagen))}}" class="image w-100" alt="..." style="max-height: 300px;">
                </div>

                <div class="col-md-6 p-0 d-flex justify-content-center align-items-center text-uppercase"
                style="font-size: 16px; color:white; background-color:#1F3579;">
                    {{$a->nombre}}
                </div>
         @endif
        @endforeach
    </div>
</div>




@endsection