@extends('layout.admin')
@section('content-admin')
<h1 class="page-header"><b> <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i> Editar actividad</b></h1>
<div class="row placeholders">
<div>
    {{ Form::open(array('url' => 'admin-editar-actividad', 'class' => 'form-horizontal', 'files' => true)) }}
    <div class="form-group">
        <div class="col-lg-2">
            {{ Form::label('nombre', 'NOMBRE', array('class' => 'col-sm-2 control-label'))}}
        </div>
        
        <div class="col-lg-10">
            {{ Form::text('nombre', $actividad->nombre, array('class' => 'form-control', 'placeholder' => 'Ingrese nombre de actividad'), Input::old('nombre'))}}
            @if($errors->has('nombre'))
            {{ $errors->first('nombre') }}
            @endif
        </div>
    </div>
    
    <div class="form-group">
        <div class="col-lg-2">
             {{ Form::label('descripcion', 'DESCRIPCIÓN', array('class' => 'col-sm-2 control-label'))}}
        </div>
       
        <div class="col-lg-10">
            {{ Form::textarea('descripcion', $actividad->descripcion, array('class' => 'form-control', 'placeholder' => 'Ingrese descripción'), Input::old('descripcion'))}}
            @if($errors->has('descripcion'))
            {{ $errors->first('descripcion') }}
            @endif
        </div>

    </div>
    
    <div class="form-group">
        <div class="col-lg-2">
            {{ Form::label('fecha', 'FECHA', array('class' => 'col-sm-2 control-label'))}}
        </div>
        
        <div class="col-lg-10"> 
            {{ Form::text('fecha', $actividad->fecha_inicio, array('class' => 'form-control fecha', 'placeholder' => 'Ingrese fecha', 'id' => 'fecha'), Input::old('fecha'))}}
            @if($errors->has('fecha'))
            {{ $errors->first('fecha') }}
            @endif
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-2">
            {{ Form::label('importante', 'IMPORTANTE', array('class' => 'col-sm-2 control-label'))}}
        </div>
        <div class="col-lg-1"> 
            @if($actividad->importante == 1)
            <?php $imp = true;?>
            @else
            <?php $imp = false;?>
            @endif
            {{ Form::checkbox('importante', $actividad->importante, $imp, array('class' => 'checkbox'));}}
            @if($errors->has('importante'))
            {{ $errors->first('importante') }}
            @endif
        </div>
    </div>
    <div class="form-group" style="background-color: #DADADA; padding: 20px; border-radius: 5px;">
        <div class="">
            {{ Form::submit('EDITAR', array('class' => 'btn btn-primary'))}}        
        </div>
    </div>
    {{ Form::hidden('id',  $actividad->id, array('class' => 'form-control')) }}
    {{ Form::token() }}
    {{ Form::close() }}
</div>
</div>
<script>

    $(function() {
        $(".fecha").datepicker({
            dateFormat: "yy-mm-dd",
            numberOfMonths: 1,
            showButtonPanel: true
        });
    });

</script>
@stop