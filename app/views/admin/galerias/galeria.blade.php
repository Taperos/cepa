@extends('layout.admin')
@section('content-admin')
@foreach($galeria as $g)
<h1 class="page-header"><b><i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i>{{ $g->nombre}} <i class="fa fa-camera"></i></b></h1>
<div class="row placeholders">
    <div class="small-9 small-centered columns">  
        <div id="owl-demo">
            @foreach($g->imagenes as $imagen)
            <div class="item"><a href="{{ URL::to('archivos/img/'.$imagen->url) }}" data-lightbox="roadtrip"><img width="200px" src="{{ URL::to('archivos/img/'.$imagen->url) }}"></a></div>
            @endforeach
        </div>
    </div>  
</div>
@endforeach

 <script type="text/javascript">
            $(document).ready(function() {
 
                $("#owl-demo").owlCarousel({

                    autoPlay: 3000, //Set AutoPlay to 3 seconds
                    items : 4,
                    itemsDesktop : [1199,5],
                    itemsDesktopSmall : [979,5],
                    navigation: true,
                    navigationText:["Anterior","Siguiente"],

                });
             });
        </script> 
@stop