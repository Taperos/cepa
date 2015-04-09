<html>
    <head>
        <title>CEPA - Admin</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="{{ URL::to('img/favicon.ico') }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="{{ URL::to('js/owl.carousel.js') }}"></script>
        <script src="{{ URL::to('js/lightbox.min.js') }}"></script>
        <script src="{{URL::to('js/jquery-ui-1.9.2.custom.min.js')}}"></script>
        <script type="text/javascript" src="{{ URL::to('js/bootstrap-filestyle.js') }}"> </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>       
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">   
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="{{ URL::to('css/estilo.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/owl.theme.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/lightbox.css') }}">
        <link href="http://getbootstrap.com/examples/dashboard/dashboard.css" rel="stylesheet">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    </head>
    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">CEPA Administrador</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Noticias <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ URL::route('admin-ver-noticias') }}">Ver noticias</a></li>
                                <li><a href="{{ URL::route('admin-agregar-noticia') }}">Crear noticia</a></li>
                                <li class="disabled"><a href="#">Quitar noticia</a></li>
                                <!--<li class="divider"></li>
                                <li class="dropdown-header">Nav header</li>
                                <li><a href="#">Separated link</a></li>
                                <li><a href="#">One more separated link</a></li>-->
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Talleres <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ URL::route('admin-ver-talleres') }}">Ver talleres</a></li>
                                <li><a href="{{ URL::route('admin-agregar-taller') }}">Crear taller</a></li>
                                <li><a href="#">Quitar taller</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Galerías <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ URL::route('admin-ver-galerias') }}">Ver galerías</a></li>
                                <li><a href="{{ URL::route('admin-agregar-galeria') }}">Crear galería</a></li>
                                <!--<li class="divider"></li>
                                <li class="dropdown-header">Nav header</li>
                                <li><a href="#">Separated link</a></li>
                                <li><a href="#">One more separated link</a></li>-->
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Actividades <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ URL::route('admin-ver-actividades') }}">Ver actividades</a></li>
                                <li><a href="{{ URL::route('admin-agregar-actividad') }}">Crear actividad</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Becas <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ URL::route('admin-ver-becas') }}">Ver becas</a></li>
                                <li><a href="{{ URL::route('admin-agregar-beca') }}">Crear beca</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ URL::route('admin-ver-contactos') }}">Contactos</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ URL::route('account-sign-out') }}">Cerrar Sesión</a></li>
                    </ul>
                    <!--
                  <form class="navbar-form navbar-right">
                    <input type="text" class="form-control" placeholder="Search...">
                  </form>-->
                </div>
            </div>
        </nav>


        <div class="container-fluid">
            <div class="row">

                <div class="col-sm-3 col-md-2 sidebar">
                    <h4><b>Atajos</b></h4>
                    <ul class="nav nav-sidebar">
                        <li><a href="{{ URL::route('admin-agregar-noticia') }}">Agregar noticia<span class="sr-only">(current)</span></a></li>
                        <li><a href="{{ URL::route('admin-agregar-galeria') }}">Agregar galeria</a></li>
                        <li><a href="{{ URL::route('admin-agregar-actividad') }}">Agregar actividad</a></li>
                        <li><a href="{{ URL::route('admin-agregar-taller') }}">Agregar taller</a></li>
                    </ul>
                </div>
                @if(Session::has('global'))

                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
                    <div class="bs-example bs-example-bg-classes">
                        <div class=" div bg-success f25" style="padding: 10px; color: #3c763d; margin-bottom: 10px"><b>{{ Session::get('global') }} <i class="fa fa-smile-o"></i></b></div>
                    </div>        
                </div>
                @endif
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                    @yield('content-admin')
                </div> 
            </div>
        </div>
    </body>
</html>
