@extends('layout.admin')
@section('content-admin')

<h1 class="page-header"><b> <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i> Agregar galeria</b></h1>
<div class="row placeholders">
<div>
    {{ Form::open(array('url' => 'admin-agregar-galeria', 'class' => 'form-horizontal', 'files' => true )) }}
    <div class="form-group">
        <div class="col-lg-2">
            {{ Form::label('nombre', 'NOMBRE', array('class' => 'col-sm-2 control-label'))}}
        </div>
        
        <div class="col-lg-10">
            {{ Form::text('nombre', null, array('class' => 'form-control', 'placeholder' => 'Ingrese nombre de galeria'), Input::old('nombre'))}}
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
            {{ Form::textarea('descripcion', null, array('class' => 'form-control', 'placeholder' => 'Ingrese descripción'), Input::old('descripcion'))}}
            @if($errors->has('descripcion'))
            {{ $errors->first('descripcion') }}
            @endif
        </div>

    </div>
    <div class="form-group">
        <div class="col-lg-2">
            {{ Form::label('Imagenes', 'IMAGENES', array('class' => 'col-sm-2 control-label'))}}
        </div>
        
        <div class="col-lg-10">
            {{ Form::file('images[]', array('multiple'=>true, 'class' => 'filestyle')) }}
            
            @if($errors->has('nombre'))
            {{ $errors->first('nombre') }}
            @endif
        </div>
    </div>
    <div class="form-group" style="background-color: #DADADA; padding: 20px; border-radius: 5px;">
        <div class="">
            {{ Form::submit('AGREGAR', array('class' => 'btn btn-primary'))}}        
        </div>
    </div>

    {{ Form::token() }}
    {{ Form::close() }}
</div>
</div>
@stop