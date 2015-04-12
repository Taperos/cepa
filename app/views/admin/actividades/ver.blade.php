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
                    {{'Sí'}}
                    @else
                    {{'No'}}
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table> 
        
    </div>
    
</div>

<div style="float: right"> {{$actividades->links()}}</div>
@stop