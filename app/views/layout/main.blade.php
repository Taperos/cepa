<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

        <title>CEPA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="UTF-8">
        
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script> <!-- jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>   <!-- jquery -->
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js"></script>
        <script src="{{ URL::to('js/owl.carousel.js') }}"></script> <!-- Carousel-->
        <script src="{{ URL::to('js/lightbox.min.js') }}"></script> <!-- lightbox-->
        <script src="{{ URL::to('js/menu_script.js')}}"></script> <!-- menu -->
        <script src="{{ URL::to('js/zabuto_calendar.min.js')}}"></script>
         <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <link rel="stylesheet" href="{{ URL::to('css/foundation.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/owl.theme.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/lightbox.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/estilo.css') }}">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ URL::to('css/menu_styles.css')}}">
        <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{ URL::to('css/zabuto_calendar.min.css') }}">
        <script>
         </script>
        <script type="text/javascript">

            $(document).ready(function () {
  
                $("#owl-home").owlCarousel({
                    navigation: false, // Show next and prev buttons
                    slideSpeed: 300,
                    paginationSpeed: 400,
                    singleItem: true,
                    // "singleItem:true" is a shortcut for:
                    // items : 1, 
                    // itemsDesktop : false,
                    // itemsDesktopSmall : false,
                    // itemsTablet: false,
                    // itemsMobile : false

                });
            });

        </script>
    </head>
    <body>
        <div class="contenedor row">
            <div>
                <div class="row">
                    <div class="show-for-medium-up medium-4 medium-uncentered large-4 large-uncentered columns"><a href="index.html"> <img src="{{URL::to('images/logo_header.png')}}" alt="CEPA"></a></div>
                    <div class="show-for-small-only small-6 small-centered columns"><a href="{{ URL::route('home') }}"> <img src="{{URL::to('images/logo_header.png')}}" alt="CEPA"></a></div>

                    <div class="show-for-medium-down medium-8 columns" style="margin-top: 40px;">
                        <div id="cssmenu" style="float: right;">
                            <ul>
                                <li><a href="{{ URL::route('home') }}">CEPA</a></li>
                                <li><a href="{{ URL::route('beca') }}">BECAS</a></li>
                                <li><a href="{{ URL::route('taller') }}">TALLERES</a></li>
                                <li><a href="{{ URL::route('galeria') }}">GALERIA</a></li>
                                <li><a href="{{ URL::route('contacto') }}">CONTACTO</a></li>
                            </ul>
                        </div>
                        <div class="show-for-medium-up" style="float: right;">
                            <a target="_blank" href="http://www.facebook.com"> <i class="header-icon fa fa-2x fa-facebook-square hover-orange"></i></a>
                            <a target="_blank" href="http//www.twitter.com"> <i class="header-icon fa fa-2x fa-twitter-square hover-orange"></i></a>
                            <a href="mail"> <i class="header-icon fa fa-2x fa-envelope-square hover-orange"></i></a>
                        </div>
                        <div class="show-for-small-only text-center">
                            <a target="_blank" href="http://www.facebook.com"> <i class="header-icon fa fa-2x fa-facebook-square hover-orange"></i></a>
                            <a target="_blank" href="http//www.twitter.com"> <i class="header-icon fa fa-2x fa-twitter-square hover-orange"></i></a>
                            <a href="mail"> <i class="header-icon fa fa-2x fa-envelope-square hover-orange"></i></a>
                        </div>

                    </div> 

                    <div class="row show-for-large-up large-8 columns" style="margin-top: 40px;">
                        <div id="cssmenu">
                            <ul>
                                <li><a href="{{ URL::route('home') }}">CEPA</a></li>
                                <li><a href="{{ URL::route('beca') }}">BECAS</a></li>
                                <li><a href="{{ URL::route('taller') }}">TALLERES</a></li>
                                <li><a href="{{ URL::route('galeria') }}">GALERIA</a></li>
                                <li><a href="{{ URL::route('contacto') }}">CONTACTO</a></li>
                            </ul>
                        </div>
                        <div style="float: right;">
                            <a target="_blank" href="http://www.facebook.com"> <i class="header-icon fa fa-2x fa-facebook-square hover-orange"></i></a>
                            <a target="_blank" href="http//www.twitter.com"> <i class="header-icon fa fa-2x fa-twitter-square hover-orange"></i></a>
                            <a href="mail"> <i class="header-icon fa fa-2x fa-envelope-square hover-orange"></i></a>
                        </div>
                    </div>
                </div>


            </div>
        
        <!--END MENU -->
        <div class="row" style=" padding-top: 30px; padding-bottom: 30px;">

        </div>
            <div class="row" style="position: relative; left: 0; top: 0;">
                @yield('content')
            </div>
            <!-- FOOTER -->
             <div>
                    <div class="hide-for-small-only" style="padding: 10px;">
                        <div class="row large-4 columns" style="float: left; margin-left: 10px; border-left: 1px solid; margin-top: 20px;">
                            <p class="texto-small">
                                <b>CEPA<br>
                                    COLEGIO<br>
                                    SAN JUAN EVANGELISTA<br></b>
                            </p>
                            <p class="texto-small">
                                Martin de Zamora 6395<br>
                                Las Condes, Santiago<br>
                                Teléfono: 2787 1600
                            </p>
                        </div>   
                        <div class="row large-4 columns" style="float: right; margin-top: 70px;">
                            <a target="_blank" href="http://www.google.com"> <i class="footer-icon fa fa-2x fa-google-plus-square hover-orange"></i></a>
                            <a target="_blank" href="http://www.facebook.com"> <i class="footer-icon fa fa-2x fa-facebook-square hover-orange"></i></a>
                            <a target="_blank" href="http//www.twitter.com"> <i class="footer-icon fa fa-2x fa-twitter-square hover-orange"></i></a>
                            <a target="_blank" href="http//www.youtube.com"> <i class="footer-icon fa fa-2x fa-youtube-square hover-orange"></i></a>
                            <a target="_blank" href="mail"> <i class="footer-icon fa fa-2x fa-envelope-square hover-orange"></i></a>
                        </div>
                    </div>
                    <div class="row show-for-small-only text-center">

                        <div>
                            <p class="texto-small">
                                <b>CEPA COLEGIO<br> SAN JUAN EVANGELISTA<br></b>
                            </p>
                            <p class="texto-small">
                                Martin de Zamora 6395<br>
                                Las Condes, Santiago<br>
                                Teléfono: 2787 1600
                            </p>
                        </div>   
                        <div>
                            <a target="_blank" href="http://www.google.com"> <i class="footer-icon fa fa-2x fa-google-plus-square hover-orange"></i></a>
                            <a target="_blank" href="http://www.facebook.com"> <i class="footer-icon fa fa-2x fa-facebook-square hover-orange"></i></a>
                            <a target="_blank" href="http//www.twitter.com"> <i class="footer-icon fa fa-2x fa-twitter-square hover-orange"></i></a>
                            <a target="_blank" href="http//www.youtube.com"> <i class="footer-icon fa fa-2x fa-youtube-square hover-orange"></i></a>
                            <a target="_blank" href="mail"> <i class="footer-icon fa fa-2x fa-envelope-square hover-orange"></i></a>
                        </div>

                    </div>
                </div>
            
            </div>
    </body>
</html>
