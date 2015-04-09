@extends('layout.admin')
@section('content-admin')
@foreach($galeria as $g)
<h1 class="page-header"><b><i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i>{{ $g->nombre}} <i class="fa fa-camera"></i></b></h1>
<div class="row placeholders">
    <div class="small-9 small-centered columns">  
        <div id="owl-demo" class="owl-demo">
            @foreach($g->imagenes as $imagen)
            <a href="{{ URL::to('archivos/img/'.$imagen->url) }}" data-lightbox="roadtrip" style="padding:0px 5px 0px 5px !important; display: block;"><div class="item" style="background-image: url('{{ URL::to('archivos/img/'.$imagen->url) }}'); width: 100%; min-height: 200px; background-position: center center; background-size: cover;"></div></a>
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