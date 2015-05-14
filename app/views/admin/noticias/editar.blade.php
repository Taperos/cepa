@extends('layout.admin')
@section('content-admin')
<h1 class="page-header"><b> <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i> Editar noticia</b></h1>
<div class="row placeholders">
<div>
    {{ Form::open(array('url' => 'admin-editar-noticia', 'class' => 'form-horizontal', 'files' => true)) }}
    <div class="form-group">
        <div class="col-lg-2">
            {{ Form::label('nombre', 'TÍTULO', array('class' => 'col-sm-2 control-label'))}}
        </div>
        
        <div class="col-lg-10">
            {{ Form::text('titulo', $noticia->titulo, array('class' => 'form-control', 'placeholder' => 'Ingrese título de noticia'), Input::old('titulo'))}}
            @if($errors->has('titulo'))
            {{ $errors->first('titulo') }}
            @endif
        </div>
    </div>
    
    <div class="form-group">
        <div class="col-lg-2">
             {{ Form::label('descripcion', 'DESCRIPCIÓN', array('class' => 'col-sm-2 control-label'))}}
        </div>
       
        <div class="col-lg-10">
            {{ Form::textarea('descripcion', $noticia->cuerpo, array('class' => 'form-control', 'placeholder' => 'Ingrese descripción'), Input::old('descripcion'))}}
            @if($errors->has('descripcion'))
            {{ $errors->first('descripcion') }}
            @endif
        </div>

    </div>
    
    <div class="form-group">
        <div class="col-lg-2">
            {{ Form::label('categoria', 'CATEGORÍA', array('class' => 'col-sm-2 control-label'))}}
        </div>
        
        <div class="col-lg-10">
            {{ Form::select('categoria', $categorias_combo,$noticia->categoria_id, array('class'=> 'form-control'),Input::old('categoria')) }}
            @if($errors->has('categoria'))
            {{ $errors->first('categoria') }}
            @endif
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-2">
            {{ Form::label('Imagenes', 'IMAGEN', array('class' => 'col-sm-2 control-label'))}}
        </div>
        
        <div class="col-lg-10">
            {{ Form::file('imagen', array('class' => 'filestyle'),Input::old('imagen')) }}
            <b>(Si quiere mantener la imagen actual, deje este campo en blanco.)</b>
            @if($errors->has('imagen'))
            {{ $errors->first('imagen') }}
            @endif
        </div>
    </div>
    <div class="form-group" style="background-color: #DADADA; padding: 20px; border-radius: 5px;">
        <div class="">
            {{ Form::submit('AGREGAR', array('class' => 'btn btn-primary'))}}        
        </div>
    </div>
    {{ Form::hidden('id',  $noticia->id, array('class' => 'form-control')) }}
    {{ Form::token() }}
    {{ Form::close() }}
</div>
</div>
@stop