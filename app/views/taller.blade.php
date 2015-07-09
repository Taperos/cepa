@extends('layout.main')
@section('content')
<div id="owl-demo">
    <?php 
    $contador = 1; ?>
    
  
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
    if ($contador == 4) {
        $contador = 1;
    }
    ?>
     @endforeach
  

</div>
<div>
    <div class="texto-normal justificado small-12 large-6 small-centered large-uncentered columns">
         @yield('taller-default',View::make('tallerd'))
    </div>
    

    <div>
        <p class="titulo-sec">
            Agenda<br> 
            Actividades del Mes</p>
        <div id="my-calendar" class="small-12 large-6 small-centered large-uncentered columns"></div>
    </div>
    <script type="text/javascript">


        $(document).ready(function () {
            $(function () {
                $(document).tooltip();
            });
            $("#owl-demo").owlCarousel({
                autoPlay: 3000, //Set AutoPlay to 3 seconds

                items: 3,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [979, 3]

            });

            $("#my-calendar").zabuto_calendar({
                ajax: {
                    url: "{{URL::to('/show')}}",
                    modal: false,
                },
                today: true,
                show_days: true,
                language: "es",
                weekstartson: 1,
                nav_icon: {
                    prev: '<i class="fa fa-chevron-circle-left"></i>',
                    next: '<i class="fa fa-chevron-circle-right"></i>'
                }
            });
        });
    </script>
</div>
@stop
