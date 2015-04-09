@extends('layout.main')
@section('content')

                <div class="large-6 medium-6 small-12 large-uncentered medium-uncentered small-centered column">
                    <?php $contador = 1;?>
                    @foreach($becas as $beca)
                    <div class="texto-normal becas"><p><a href="{{URL::to('ver-beca', [$beca->id]);}}"><b>{{$beca->nombre }}</b></a> - {{$beca->descripcion}}</p>@if($contador == 2) <img src="{{URL::to('images/becas.png')}}" alt="Becas" class="becas-img">   @endif</div>
                    <?php $contador++;?>
                    @endforeach
                </div>


                <div class="large-6 medium-6 small-12 large-uncentered medium-uncentered small-centered columns">
                   @yield('ver-beca',View::make('tapa'))
                </div>
@stop