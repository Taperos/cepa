<?php

class BecasController extends BaseController {
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
        
        $becas = Beca::paginate(10);
        
        return View::make('admin.becas.ver')
                        ->with('becas', $becas);
    }
    
    public function getAddNew() {
        
        return View::make('admin.becas.agregar');
    }

    public function postAddNew() {

        $validator = Validator::make(Input::all(), array(
                    'nombre'      => 'required',
                    'descripcion' => 'required',
                        ), array(
                    'required' => 'Este campo no puede quedar vacio',
        ));

        if ($validator->fails()) {

            return Redirect::route('admin-agregar-beca')
                            ->withErrors($validator)
                            ->withInput();
        } else {

            $nombre      = Input::get('nombre');
            $descripcion = Input::get('descripcion');
       
            $beca = new Beca();

            $beca->nombre = $nombre;
            $beca->descripcion = $descripcion;
           

            if ($beca->save()) {
                return Redirect::route('admin-agregar-beca')
                                ->with('global', 'Beca agregada con éxito');
            }
        }
    }

}
