@extends('beca')
@section('ver-beca')
<div class="div-padding" style="height: 250px; overflow: hidden;"><img src="{{URL::to('images/3.jpg')}}" alt="CEPA"></div>
<div class="div-padding">
    <h3 class="brody">{{$beca->nombre}}</h3>
    <p class="texto-normal">
        {{$beca->descripcion}}
    </p>

</div>
@stop