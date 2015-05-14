@extends('layout.admin')
@section('content-admin')
<h1 class="page-header"><b><i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i> Ver actividades</b></h1>
<div class="row placeholders">
    <div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th style="width: 20%; text-align: justify; text-justify: inter-word;">NOMBRE</th>
                <th style="text-align: justify; text-justify: inter-word;">DESCRIPCIÓN</th>
                <th style="text-align: justify; text-justify: inter-word;">FECHA</th>
                <th style="text-align: justify; text-justify: inter-word;">IMPORTANTE</th>
                <th colspan="2" style="width: 1%;">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($actividades as $actividad)
            <tr>
                <td><i>{{$actividad->nombre}}</i></td>
                <td>{{$actividad->descripcion}}...</td>
                <td>{{$actividad->fecha_inicio}}</td>
                <td>
                    @if($actividad->importante == 1)
                    <span class="label label-danger">{{'Importante'}}</span>
                    @else
                    <span class="label label-primary">{{'Normal'}}</span>
                    @endif
                </td>
                <td><a style="text-decoration: none; color: #444;" href="{{URL::to('admin-editar-actividad', [$actividad->id]);}}"><i title="Editar" class="fa fa-pencil fa-fw fa-lg hover-grey"></i></a></td>
                <td><a style="text-decoration: none; color: #444;" href="{{URL::to('admin-eliminar-actividad', [$actividad->id]);}}"><i title="Eliminar" class="fa fa-times fa-fw fa-lg hover-grey"></i></a></td>
            
            </tr>
            @endforeach
        </tbody>
    </table> 
        
    </div>
    
</div>

<div style="float: right"> {{$actividades->links()}}</div>
@stop