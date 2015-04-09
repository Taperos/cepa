@extends('layout.admin')
@section('content-admin')
<h1 class="page-header"><b><i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i> Ver galerías <i class="fa fa-camera"></i></b></h1>
<div class="row placeholders">
    <div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th style="width: 20%; text-align: justify; text-justify: inter-word;">NOMBRE</th>
                <th style="text-align: justify; text-justify: inter-word;">DESCRIPCIÓN</th>
                <th colspan="3" style="width: 1%;">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($galerias as $galeria)
            <tr>
                <td><i>{{$galeria->nombre}}</i></td>
                <td>{{$galeria->descripcion}}</td>
                <td><a style="text-decoration: none; color: #008CBA;" href="#"><i title="Editar" class="fa fa-pencil fa-2x hover-grey"></i></a></td>
                <td><a style="text-decoration: none; color: #008CBA;" href="{{URL::to('admin-ver-galeria', [$galeria->id]);}}"><i title="Ver" class="fa fa-eye fa-2x hover-grey"></i></a></td>
                <td><a style="text-decoration: none; color: #008CBA;" href="#"><i title="Eliminar" class="fa fa-times fa-2x hover-grey"></i></a></td>
            </tr>
            @endforeach
        </tbody>
    </table> 
        
    </div>
    
</div>

<div style="float: right"> {{$galerias->links()}}</div>
@stop