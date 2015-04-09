<?php

class AccountController extends BaseController{
    
    public function getSignOut(){
       Auth::logout();
       return Redirect::route('admin');;
    }
    
    public function getSignIn(){
 
        return View::make('admin.login');
    }
    
    public function postSignIn(){
        $validator = Validator::make(Input::all(), 
                array(
                   'email' => 'required|email',
                   'password' => 'required',
                ));
        if($validator->fails()){

            return Redirect::route('account-sign-in')
                    ->withErrors($validator)
                    ->withInput(); 
                 
        }
        else
        {
          
            $auth = (array(
                'email' => Input::get('email'),
                'password' => Input::get('password')
            ));
            
            if(Auth::attempt($auth)){
                return Redirect::intended('/admin');
            }
            else
            {
                return Redirect::route('account-sign-in')
                        ->with('global', 'Usuario o contraseña incorrectos, o cuenta no activada');
            }
            
            
        }
        
        return Redirect::route('account-sign-in')
                        ->with('global', 'Ocurrió un problema al ingresar'); 
    }
    
    
    
    public function getCreate(){
        return View::make('account.create');
    }
    
    public function postCreate(){
        $validator = Validator::make(Input::all(), 
                array(
                    'name'            => 'required',
                    'last_name'       => 'required',
                    'password_again'  => 'required|same:password',
                    'email'           => 'required|max:100|unique:users',
                    'username'        => 'required|max:20|min:3|unique:users',
                    'password'        => 'required|min:6',
                    'password_again'  => 'required|same:password',
                    ));
        
        if($validator->fails())
            {
                return Redirect::route('account-create')
                        ->withErrors($validator)
                        ->withInput();
            }
            else
            {
                $name = Input::get('name');
                $last_name = Input::get('last_name');
                $address = Input::get('address');
                $phone = Input::get('phone');
                $email = Input::get('email');
                $username = Input::get('username');
                $password = Input::get('password');

                $code = str_random(45);
                $user = User::create(array(
                   'name'      => $name,
                   'last_name' => $last_name,
                   'address'   => $address,
                   'phone'     => $phone,
                   'email'     => $email,
                   'username'  => $username,
                   'password'  => Hash::make($password),
                   'code'      => $code,
                   'active'    => 1      
                ));

                if($user){
                    
                          Mail::send('emails.auth.activate', array('link' => URL::route('account-activate', $code), 'name' => $name, 'last_name' => $last_name, 'email' => $email, 'password' => $password), function($message) use ($user){
                          $message->to($user->email, $user->username)->subject('Se ha creado su cuenta para el sistema de facturación.');
                    });
                    
                return Redirect::route('home')
                       ->with('global', 'La cuenta ha sido creada' );              
                }
            }
    }
    
    public function getActivate($code){
        $user = User::where('code', '=', $code)->where('active', '=', 0);
        

        if($user->count()){
            $user = $user->first();
            
            $user->active = 1;
            $user->code = '';
            
            if($user->save()){
                return Redirect::route('home')
                        ->with('global', 'Su cuenta ha sido activada satisfactoriamente!, por favor inicia sesión.');
            }
        }
        return Redirect::route('home')
                        ->with('global', 'Ocurrió un problema al activar su cuenta, intente más tarde!');
    }
}
