@extends('layout.main')
@section('content')

                <div class="large-6 medium-6 small-12 large-uncentered medium-uncentered small-centered column">
                    <?php $contador = 1;?>
                    @if(empty($becas[0]))
                        <div class="texto-normal becas">
                            <b>{{'Por el momento no hay becas para mostrar.'}}</b>
                        </div>
                    @else
                    @foreach($becas as $beca)
                        <div class="texto-normal becas" style="max-height: 150px; overflow: hidden"><p><a href="{{URL::to('ver-beca', [$beca->id]);}}"><b>{{$beca->nombre }}</b></a> - {{$beca->descripcion}}</p>@if($contador == 2) <img src="{{URL::to('images/becas.png')}}" alt="Becas" class="becas-img">   @endif</div>
                        <?php $contador++;?>
                    @endforeach
                    @endif
                </div>
                <div class="large-6 medium-6 small-12 large-uncentered medium-uncentered small-centered columns">
                   @yield('ver-beca',View::make('tapa'))
                </div>
@stop