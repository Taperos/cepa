@extends('layout.main')
@section('content')
<div class="row">
    <div class="small-3 small-centered columns">
       <!-- <img src="images/badge.png"> -->
        <h3 class="titulo-main"><b>Galerias CEPA</b></h3>
    </div> 
</div>
<?php $contador = 0;?>
@foreach($galerias as $galeria)
<?php $contador++;?>
<div class="row">
    <div class="small-9 small-centered columns" style="margin-bottom: 5px; padding: 10px;"><h3 class="titulo-sec"><b>{{$galeria->nombre}} - {{$galeria->created_at}}</b></h3></div>
</div>
<div class="row">
    <div class="small-9 small-centered columns">  
        <div id="owl-demo-{{$contador}}" class="owl-demo">
            @foreach($galeria->imagenes as $imagen)
            <a href="{{ URL::to('archivos/img/'.$imagen->url) }}" data-lightbox="roadtrip{{$contador}}" style="padding:0px 5px 0px 5px !important; display: block;"><div class="item" style="background-image: url('{{ URL::to('archivos/img/'.$imagen->url) }}'); width: 100%; min-height: 200px; background-position: center center; background-size: cover;"></div></a>
            @endforeach 
        </div>
    </div>
</div>
 <script type="text/javascript">
            $(document).ready(function() {
                $("#owl-demo-<?php echo $contador; ?>").owlCarousel({
                    autoPlay: 3000,
                    items : 4,
                    itemsDesktop : [1199,5],
                    itemsDesktopSmall : [979,5],
                    navigation: true,
                    navigationText:["Anterior","Siguiente"],
                });
             });
</script> 
@endforeach
<div style=" padding-left: 45%;">{{$galerias->links()}}</div>
@stop