@extends('layout.admin')
@section('content-admin')
<h1 class="page-header"><b><i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i> Ver becas </b></h1>
<div class="row placeholders">
    <div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th style="width: 20%; text-align: justify; text-justify: inter-word;">NOMBRE</th>
                <th style="text-align: justify; text-justify: inter-word;">DESCRIPCIÓN</th>
            </tr>
        </thead>
        <tbody>
            @foreach($becas as $beca)
            <tr>
                <td><i>{{$beca->nombre}}</i></td>
                <td>{{$beca->descripcion}}...</td>
            </tr>
            @endforeach
        </tbody>
    </table> 
        
    </div>
    
</div>

<div style="float: right"> {{$becas->links()}}</div>
@stop