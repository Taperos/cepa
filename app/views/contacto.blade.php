@extends('layout.main')
@section('content')
<script>

            var myCenter = new google.maps.LatLng(-33.4147355, -70.5629735);

            function initialize()
            {
                   var mapProp = {
                   center: myCenter,
                   zoom: 16,
                   mapTypeId: google.maps.MapTypeId.ROADMAP
                   };

                   var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

                   var marker=new google.maps.Marker({
                   position:myCenter,
                   icon:'images/logo_icon.png'
                   });

                marker.setMap(map);
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
        <div id="googleMap" class="small-10 large-4 small-centered large-uncentered columns"></div>

                <div class="row">
                    <div class="small-10 medium-6 large-4 small-centered  medium-centered large-uncentered columns">
                        <p class="texto-small texto-bold"  style="padding-top: 25px;">
                            CEPA<br>
                            COLEGIO <br>
                            SAN JUAN EVANGELISTA<br>
                            Teléfono: 2787 1600<br>
                            Fax:<br>
                            E-mail:<br>
                            Martin de Zamora 6395<br>
                            Las Condes, Santiago<br>
                        </p>

                    </div>
                    <div class="small-10 medium-6 large-4 small-centered  medium-centered large-uncentered columns">
                        {{ Form::open(array('url' => 'admin-agregar-contacto', 'class' => 'texto-small', 'files' => true )) }}
   
                       
                            <input type="text" name="nombre" placeholder="Nombre">                            
                            <input type="text" name="email" placeholder="Email">                     
                            <textarea placeholder="Escriba su mensaje..." name="mensaje"></textarea>
                            <input type="submit" value="Enviar" class="enviar cuadro-color-2">
                        {{Form::token()}}
                        {{Form::close()}}
                    </div>
                </div>
contacto
@stop