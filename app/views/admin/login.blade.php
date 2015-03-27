@extends('layout.admin')

@section('content-admin')
<div class="container">
      <!-- Main component for a primary marketing message or call to action -->
      <div style="width: 100%; overflow: hidden; padding: 20px;">
          <div style=" float: left;">
              <div><img src="{{ URL::to('images/logo.png') }}"> </div>
              <div> ERP 2015</div>
          </div>
          <div id="login" class="jumbotron">

              <div style="">
                  <form class="form-horizontal" role="form" action ="{{ URL::route('account-sign-in-post') }}" method="post">
                      <div class="form-group">
                      </div>

                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                          <div class="col-sm-7">
                              <input type="text" name="email" class="form-control" placeholder="Enter Email" {{ Input::old('email') ? 'value="'.e(Input::old('email')).'"': '' }}>
                                     @if($errors->has('email'))
                                     {{ $errors->first('email') }}
                                     @endif
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Contraseña</label>
                          <div class="col-sm-7">
                              <input type="password" name="password" class="form-control" placeholder="Enter Password" {{ Input::old('password') ? 'value="'.e(Input::old('password')).'"': '' }}>
                                     @if($errors->has('password'))
                                     {{ $errors->first('password') }}
                                     @endif
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-primary">Ingresar</button>
                              {{ Form::token() }}
                          </div>
                      </div>
                  </form>
              </div>    
          </div>
      </div>
@stop
