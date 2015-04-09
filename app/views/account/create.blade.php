@extends('layout.main')

@section('content')

<div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Crear cuenta</h1>
        <form action="{{ URL::route('account-create-post') }}" method="post">
            <table class="table table-bordered table-condensed">
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="name" class="form-control" placeholder="Enter Name" {{ Input::old('name') ? 'value="'.e(Input::old('name')).'"': '' }}>
                        @if($errors->has('name'))
                            {{ $errors->first('name') }}
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Apellido</td>
                    <td><input type="text" name="last_name" class="form-control" placeholder="Enter Last name" {{ Input::old('last_name') ? 'value="'.e(Input::old('last_name')).'"': '' }}>
                        @if($errors->has('last_name'))
                            {{ $errors->first('last_name') }}
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Dirección</td>
                    <td><input type="text" name="address" class="form-control" placeholder="Enter Address" {{ Input::old('address') ? 'value="'.e(Input::old('address')).'"': '' }}>
                        @if($errors->has('address'))
                            {{ $errors->first('address') }}
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Teléfono</td>
                    <td><input type="text" name="phone" class="form-control" placeholder="Enter Phone" {{ Input::old('phone') ? 'value="'.e(Input::old('phone')).'"': '' }}>
                        @if($errors->has('phone'))
                            {{ $errors->first('phone') }}
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" class="form-control" placeholder="Enter email" {{ Input::old('email') ? 'value="'.e(Input::old('email')).'"': '' }}>
                        @if($errors->has('email'))
                            {{ $errors->first('email') }}
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Usuario</td>
                    <td><input type="text" name="username" class="form-control" placeholder="Enter Username" {{ Input::old('username') ? 'value="'.e(Input::old('username')).'"': '' }}>
                        @if($errors->has('username'))
                                {{ $errors->first('username') }}
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Contraseña</td>
                    <td><input type="password" name="password" class="form-control" placeholder="Enter Password">
                        @if($errors->has('password'))
                            {{ $errors->first('password') }}
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Confirmar contraseña</td>
                    <td><input type="password" name="password_again" class="form-control" placeholder="Re Password">
                        @if($errors->has('password_again'))
                            {{ $errors->first('password_again') }}
                        @endif
                    </td>
                </tr>
                
            </table>
               
            <input type="submit" value="Crear cuenta" class="btn btn-danger">
            {{ Form::token() }}
        </form>
      </div>

    </div>
@stop
