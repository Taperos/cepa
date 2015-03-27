@extends('layout.main')
@section('content')
<div class="row">
    <div class="small-3 small-centered columns">
        <img src="images/badge.png">
    </div> 
</div>
<div class="row">
    <div class="small-9 small-centered columns"><h3>Dìa del alumno</h3></div>
</div>
<div class="row">
    <div class="small-9 small-centered columns">  
        <div id="owl-demo">
            <div class="item"><a href="http://owlgraphic.com/owlcarousel/demos/assets/owl1.jpg" data-lightbox="roadtrip"><img src="http://owlgraphic.com/owlcarousel/demos/assets/owl1.jpg"></a></div>
            <div class="item"><a href="http://owlgraphic.com/owlcarousel/demos/assets/owl2.jpg" data-lightbox="roadtrip"><img src="http://owlgraphic.com/owlcarousel/demos/assets/owl2.jpg"></a></div>
            <div class="item"><a href="http://owlgraphic.com/owlcarousel/demos/assets/owl3.jpg" data-lightbox="roadtrip"><img src="http://owlgraphic.com/owlcarousel/demos/assets/owl3.jpg"></a></div>
            <div class="item"><a href="http://owlgraphic.com/owlcarousel/demos/assets/owl4.jpg" data-lightbox="roadtrip"><img src="http://owlgraphic.com/owlcarousel/demos/assets/owl4.jpg"></a></div>
            <div class="item"><a href="http://owlgraphic.com/owlcarousel/demos/assets/owl5.jpg" data-lightbox="roadtrip"><img src="http://owlgraphic.com/owlcarousel/demos/assets/owl5.jpg"></a></div>
            <div class="item"><a href="http://owlgraphic.com/owlcarousel/demos/assets/owl6.jpg" data-lightbox="roadtrip"><img src="http://owlgraphic.com/owlcarousel/demos/assets/owl6.jpg"></a></div>
            <div class="item"><a href="http://owlgraphic.com/owlcarousel/demos/assets/owl7.jpg" data-lightbox="roadtrip"><img src="http://owlgraphic.com/owlcarousel/demos/assets/owl7.jpg"></a></div>
            <div class="item"><a href="http://owlgraphic.com/owlcarousel/demos/assets/owl8.jpg" data-lightbox="roadtrip"><img src="http://owlgraphic.com/owlcarousel/demos/assets/owl8.jpg"></a></div>

        </div>
    </div>
</div>
<div class="row">
    <div class="small-9 small-centered columns"><h3>18 de septiembre</h3></div>
</div>
<div class="row">
    <div class="small-9 small-centered columns">  
        <div id="owl-demo2">
            <div class="item"><a href="http://owlgraphic.com/owlcarousel/demos/assets/owl1.jpg" data-lightbox="roadtrip2"><img src="http://owlgraphic.com/owlcarousel/demos/assets/owl1.jpg"></a></div>
            <div class="item"><a href="http://owlgraphic.com/owlcarousel/demos/assets/owl2.jpg" data-lightbox="roadtrip2"><img src="http://owlgraphic.com/owlcarousel/demos/assets/owl2.jpg"></a></div>
            <div class="item"><a href="http://owlgraphic.com/owlcarousel/demos/assets/owl3.jpg" data-lightbox="roadtrip2"><img src="http://owlgraphic.com/owlcarousel/demos/assets/owl3.jpg"></a></div>
            <div class="item"><a href="http://owlgraphic.com/owlcarousel/demos/assets/owl4.jpg" data-lightbox="roadtrip2"><img src="http://owlgraphic.com/owlcarousel/demos/assets/owl4.jpg"></a></div>
            <div class="item"><a href="http://owlgraphic.com/owlcarousel/demos/assets/owl5.jpg" data-lightbox="roadtrip2"><img src="http://owlgraphic.com/owlcarousel/demos/assets/owl5.jpg"></a></div>
            <div class="item"><a href="http://owlgraphic.com/owlcarousel/demos/assets/owl6.jpg" data-lightbox="roadtrip2"><img src="http://owlgraphic.com/owlcarousel/demos/assets/owl6.jpg"></a></div>
            <div class="item"><a href="http://owlgraphic.com/owlcarousel/demos/assets/owl7.jpg" data-lightbox="roadtrip2"><img src="http://owlgraphic.com/owlcarousel/demos/assets/owl7.jpg"></a></div>
            <div class="item"><a href="http://owlgraphic.com/owlcarousel/demos/assets/owl8.jpg" data-lightbox="roadtrip2"><img src="http://owlgraphic.com/owlcarousel/demos/assets/owl8.jpg"></a></div>

        </div>
    </div>
</div>
 <script type="text/javascript">
            $(document).ready(function() {
 
                $("#owl-demo").owlCarousel({

                    autoPlay: 3000, //Set AutoPlay to 3 seconds
                    items : 4,
                    itemsDesktop : [1199,5],
                    itemsDesktopSmall : [979,5]

                });
                
                $("#owl-demo2").owlCarousel({

                    autoPlay: 3000, //Set AutoPlay to 3 seconds
                    items : 4,
                    itemsDesktop : [1199,3],
                    itemsDesktopSmall : [979,3]

                });
 
             });
        </script> 
@stop