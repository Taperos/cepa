@extends('layout.main')
@section('content')
<script type="text/javascript">

            $(document).ready(function () {
                              $(function() {
                                $( document ).tooltip();
                               });
                $("#owl-demo").owlCarousel({
                    autoPlay: 3000, //Set AutoPlay to 3 seconds

                    items: 3,
                    itemsDesktop: [1199, 3],
                    itemsDesktopSmall: [979, 3]

                });

            });

        </script>
<div id="owl-demo">
    <?php $contador = 1;?>
    @foreach($talleres as $taller)
     <div class="item">
        <div class="talleres-img" style="background-image: url('{{ URL::to('archivos/img/'.$taller->imagen) }}')">
            <div class="talleres-cuadro cuadro-color-{{$contador}}">
                 <p class="brody">{{$taller->nombre}}</p>
            </div>
        </div>
    </div>
    <?php 
    $contador ++;
        if($contador == 4){
            $contador = 1;
        }
    ?>
    @endforeach
                   

                   
                    

                    
                    



</div>


                <div>
                    <div class="texto-normal justificado small-12 large-6 small-centered large-uncentered columns"> <h3 class="titulo-main">Nombre Taller</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.

                            Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.

                            In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.
                        </p>
                    </div> 

                    <div>
                        <p class="titulo-sec">
                            Agenda<br> 
                            Actividades del Mes</p>
                        <div id="my-calendar" class="small-12 large-6 small-centered large-uncentered columns"></div>
                    </div>
                    <script type="text/javascript">
                        var eventData = [
                        {"date":"2015-01-01","badge":false,"title":"Año Nuevo!"},
                        {"date":"2015-01-02","badge":false,"title":"Example 2"}
                        ];
                        $(document).ready(function () {
                          
                        $("#my-calendar").zabuto_calendar({
                        language: "es",  
                        today: true,
                        show_days: true,
                        weekstartson: 1,
                        data: eventData,
                        modal: true,
                        nav_icon: {
                        prev: '<i class="fa fa-chevron-circle-left"></i>',
                        next: '<i class="fa fa-chevron-circle-right"></i>'
                        }
                        });
                        });
                    </script>
                </div>
@stop