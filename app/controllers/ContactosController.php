<?php

class ContactosController extends BaseController {
    /*
      |--------------------------------------------------------------------------
      | Default Home Controller
      |--------------------------------------------------------------------------
      |
      | You may wish to use controllers instead of, or in addition to, Closure
      | based routes. That's great! Here is an example controller method to
      | get you started. To route to this controller, just add the route:
      |
      |	Route::get('/', 'HomeController@showWelcome');
      |
     */
     public function getVer() {
        
        $contactos = Contacto::paginate(10);
        
        return View::make('admin.contactos.ver')
                        ->with('contactos', $contactos);
    }
    
    public function AddContacto(){
        
        $validator = Validator::make(Input::all(), array(
                    'nombre'      => 'required',
                    'email'       => 'required',
                    'mensaje'     => 'required',
                        ), array(
                    'required' => 'Este campo no puede quedar vacio',
        ));

        if ($validator->fails()) {

            return Redirect::route('contacto')
                            ->withErrors($validator)
                            ->withInput();
        } else {

            $nombre      = Input::get('nombre');
            $email       = Input::get('email');
            $mensaje     = Input::get('mensaje');
       
            $contacto = new Contacto();

            $contacto->nombre = $nombre;
            $contacto->email  = $email;
            $contacto->mensaje = $mensaje;

            if ($contacto->save()) {
                return Redirect::route('contacto')
                                ->with('global', 'Mensaje enviado, te responderemos o te responderemos');
            }
        }
    }
    
   

}
