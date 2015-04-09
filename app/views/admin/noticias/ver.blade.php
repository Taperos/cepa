@extends('layout.admin')
@section('content-admin')
<h1 class="page-header"><b><i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i> Ver noticas <i class="fa fa-newspaper-o "></i></b></h1>
<div class="row placeholders">
    <div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th style="width: 20%; text-align: justify; text-justify: inter-word;">TÍTULO</th>
                <th style="text-align: justify;">CUERPO</th>
                <th style="text-align: justify; text-justify: inter-word"  class="hidden-xs hidden-sm">CATEGORÍA</th>
                <th style="text-align: justify; text-justify: inter-word;" class="hidden-xs">IMAGEN</th>
                <th colspan="2" style="width: 1%;">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($noticias as $noticia)
            <tr>
                <td><i>{{$noticia->titulo}}</i></td>
                <td style="text-align: justify; text-justify: inter-word">{{$noticia->cuerpo}}...</td>
                <td class="hidden-xs hidden-sm">{{$noticia->categorias->nombre}}</td>
                <td class="hidden-xs"><img width="50px" src="{{ URL::to('archivos/img/'.$noticia->imagen) }}"></td>
                <td><a style="text-decoration: none; color: #008CBA;" href="#"><i title="Editar" class="fa fa-pencil fa-2x hover-grey"></i></a></td>
                <td><a style="text-decoration: none; color: #008CBA;" href="#"><i title="Eliminar" class="fa fa-times fa-2x hover-grey"></i></a></td>
            </tr>
            @endforeach
        </tbody>
    </table> 
        
    </div>
    
</div>

<div style="float: right"> {{$noticias->links()}}</div>
@stop