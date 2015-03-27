<html>
    <head>
        <title>CEPA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="{{ URL::to('js/owl.carousel.js') }}"></script>
        <script src="{{ URL::to('js/lightbox.min.js') }}"></script>
        
        <script src="{{ URL::to('js/jquery.flexslider.js') }}"></script>
        <!-- <script src="js/menu_script.js"></script> -->
       

        <script type="text/javascript" charset="utf-8">
            $(window).load(function () {
                $('.flexslider').flexslider();
            });
        </script>
        
        
        <link rel="stylesheet" href="{{ URL::to('css/flexslider.css" type="text/css') }}">
         <link rel="stylesheet" href="{{ URL::to('css/menu_styles.css')}}">
        <link rel="stylesheet" href="{{ URL::to('css/estilo.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/foundation.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/owl.theme.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/lightbox.css') }}">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="contenedor row">
            <!-- MENU  -->
            <div class="div row" style="overflow: hidden;">
                    <div style=" width: 150px; float: left;">
                        <a href="index.html"> <img src="images/logo_header.png" alt="CEPA"></a>
                    </div>
                    <div style="margin-top: 100px; float: left;">
                        <a style="text-decoration: none; color: #555;" href="http://www.facebook.com"> <i class="fa fa-2x fa-facebook-square hover-orange"></i></a>
                        <a style="text-decoration: none; color: #555;" href="http//www.twitter.com"> <i class="fa fa-2x fa-twitter-square hover-orange"></i></a>      
                        <a style="text-decoration: none; color: #555;" href="mail"> <i class="fa fa-2x fa-envelope-square hover-orange"></i></a>
                    </div>
                    <div id='cssmenu' style="float: left; margin-top: 20px;">
                        <ul>
                            <li class="active"><a href="{{ URL::route('home') }}">CEPA</a></li>
                            <li><a href="#">BECAS</a></li>
                            <li><a href="#">TALLERES</a></li>
                            <li><a href="{{ URL::route('galeria') }}">GALERIA</a></li>
                            <li><a href="#">CONTACTO</a></li>
                        </ul>
                    </div>
                </div>
            <!-- END MENU -->
            <div class="row" style=" padding-top: 30px; padding-bottom: 30px;">
                @yield('content')
            </div>
            <!-- FOOTER -->
            <div class="row" style=" margin-top: 50px;">
                <div class="large-9 medium-9 columns" style="padding: 10px;">
                    <div style="margin-left: 10px;; font-size: 9px; border-left: 1px solid; padding-left: 10px;">
                        <p class="f13 candara-bold"><b>
                                CEPA<br>
                                COLEGIO<br>
                                SAN JUAN EVANGELISTA<br>
                            </b>
                        </p>
                        <p class="f13" >
                            Martin de Zamora 6395<br>
                            Las Condes, Santiago<br>
                            Teléfono: 2787 1600
                        </p>
                    </div>    
                    
                    </div>
                <div class="large-3 medium-3 columns">
                    <div>
                        <a style="text-decoration: none; color: #555;" target="_blank" href="http://www.google.com"> <i class="fa fa-2x fa-google-plus-square hover-orange"></i></a>
                        <a style="text-decoration: none; color: #555;" href="http://www.facebook.com"> <i class="fa fa-2x fa-facebook-square hover-orange"></i></a>
                        <a style="text-decoration: none; color: #555;" href="http//www.twitter.com"> <i class="fa fa-2x fa-twitter-square hover-orange"></i></a>
                        <a style="text-decoration: none; color: #555;" href="http//www.youtube.com"> <i class="fa fa-2x fa-youtube-square hover-orange"></i></a>
                        <a style="text-decoration: none; color: #555;" href="mail"> <i class="fa fa-2x fa-envelope-square hover-orange"></i></a>
                    </div>
                        
                </div>

                </div>
           
        </div> 
    </body>
</html>
