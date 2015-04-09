<html>
    <head>
        <title>CEPA - Admin</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="icon" href="{{ URL::to('img/favicon.ico') }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>       
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">   
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="{{ URL::to('css/login.css') }}">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    </head>
    <body>
    <div class="container">
         @if(Session::has('global'))
    
              <div>
                    <div class="bs-example bs-example-bg-classes">
                        <div class=" div bg-danger" style="padding: 10px; color: #CD3F3F; margin-bottom: 10px; text-align: center; border-radius: 5px; font-size: 20px;"><b>{{ Session::get('global') }} <i class="fa fa-meh-o"></i></b></div>
                    </div>        
                </div>
         
               
                @endif
        <div style="margin:0 auto 0 auto; width:150px;">
            <img  src="{{ URL::to('images/logo_header.png') }}" >
        </div><form class=" form-signin" role="form" action ="{{ URL::route('account-sign-in-post') }}" method="post">
        <h2 class="form-signin-heading">Iniciar sesión</h2>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email"  required autofocus {{ Input::old('email') ? 'value="'.e(Input::old('email')).'"': '' }}>
        @if($errors->has('email'))
                                     {{ $errors->first('email') }}
        @endif
               <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Contraseña" required {{ Input::old('password') ? 'value="'.e(Input::old('password')).'"': '' }}>
        
               @if($errors->has('password'))
            {{ $errors->first('password') }}
           @endif
               <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
        {{ Form::token() }}
      </form>
    </div> <!-- /container -->
    </body>
</html>