@extends('layout.main')
@section('content')
<div>

    <div class="small-4 small-centered large-4 large-centered columns" style="position: relative;">

        <img class="home-badge" alt="Es Nuestro San Juan!" src="images/badge.png"/>


    </div>
    <div id="owl-home" class="owl-carousel owl-theme" style="position: relative;">

        <div class="item"><img src="images/3.jpg" alt="1"></div>
        <div class="item"><img src="images/6.jpg" alt="2"></div>
        <div class="item"><img src="images/9.jpg" alt="3"></div>
        <div class="item"><img src="http://owlgraphic.com/owlcarousel/demos/assets/owl4.jpg" alt="3"></div>

    </div>
    <?php $contador = 1; ?>
    <div class="row">
        @foreach($noticias as $noticia)

        <div class="noticia medium-4 large-4 columns" style="float: left;">
            <div class="row">
                <div class="noticia-img" style="background-image: url('{{ URL::to('archivos/img/'.$noticia->imagen) }}');">
                    <div class="noticia-cuadro cuadro-color-{{$contador}}">
                        <p class="brody" style="font-size: 25px;"><b>{{$noticia->titulo}}</b></p>
                    </div>
                </div>
                <div class="texto-normal justificado" style="padding: 10px;">

                    {{$noticia->cuerpo}}

                    <div>
                        <span class="label label-primary">{{$noticia->categorias->nombre}}</span>
                    </div>

                </div>
            </div>
        </div>


        <?php
        $contador ++;
        if ($contador == 4) {
            $contador = 1;
        }
        ?>
        @endforeach

    </div> 

</div>
@stop
