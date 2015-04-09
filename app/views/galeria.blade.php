@extends('layout.main')
@section('content')
<div class="row">
    <div class="small-3 small-centered columns">
        <img src="images/badge.png">
    </div> 
</div>
<?php $contador = 0;?>
@foreach($galerias as $galeria)
<?php $contador++;?>
<div class="row">
    <div class="small-9 small-centered columns"><h3>{{$galeria->nombre}}</h3></div>
</div>
<div class="row">
    <div class="small-9 small-centered columns">  
        <div id="owl-demo-{{$contador}}" class="owl-demo">
            @foreach($galeria->imagenes as $imagen)
            <div class="item"><a href="{{ URL::to('archivos/img/'.$imagen->url) }}" data-lightbox="roadtrip{{$contador}}"><img src="{{ URL::to('archivos/img/'.$imagen->url) }}"></a></div>
            @endforeach 
        </div>
    </div>
</div>
 <script type="text/javascript">
            $(document).ready(function() {
 
                $("#owl-demo-<?php echo $contador; ?>").owlCarousel({

                    autoPlay: 3000, //Set AutoPlay to 3 seconds
                    items : 4,
                    itemsDesktop : [1199,5],
                    itemsDesktopSmall : [979,5],
                    navigation: true,
                    navigationText:["Anterior","Siguiente"],

                });
             });
        </script> 
@endforeach
@stop