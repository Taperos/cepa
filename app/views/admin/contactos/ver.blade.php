@extends('layout.admin')
@section('content-admin')
<h1 class="page-header"><b><i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i> Ver contactos </b></h1>
<div class="row placeholders">
    <div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th style="width: 20%; text-align: justify; text-justify: inter-word;">NOMBRE</th>
                <th style="width: 1%;text-align: justify; text-justify: inter-word;">EMAIL</th>
                <th style="text-align: justify; text-justify: inter-word;">MENSAJE</th>
                <th style="text-align: justify; text-justify: inter-word;">FECHA</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contactos as $contacto)
            <tr>
                <td><i>{{$contacto->nombre}}</i></td>
                <td>{{$contacto->email}}</td>
                <td>{{$contacto->mensaje}}</td>
                <td>{{$contacto->created_at}}</td>
            </tr>
            @endforeach
        </tbody>
    </table> 
        
    </div>
    
</div>

<div style="float: right"> {{$contactos->links()}}</div>
@stop