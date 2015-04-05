<?php

class NewsController extends BaseController {
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
        
        $noticias = Noticia::paginate(3);
        
        return View::make('admin.noticias.ver')
                        ->with('noticias', $noticias);
    }
    
    public function getAddNew() {

        return View::make('admin.noticias.agregar');
    }

    public function postAddNew() {

        $validator = Validator::make(Input::all(), array(
                    'titulo'      => 'required',
                    'descripcion' => 'required',
                        ), array(
                    'required' => 'Este campo no puede quedar vacio',
        ));

        if ($validator->fails()) {

            return Redirect::route('admin-agregar-noticia')
                            ->withErrors($validator)
                            ->withInput();
        } else {

            $titulo      = Input::get('titulo');
            $descripcion = Input::get('descripcion');

            $noticia = new Noticia();

            $noticia->titulo = $titulo;
            $noticia->cuerpo = $descripcion;

            if ($noticia->save()) {
                return Redirect::route('admin-agregar-noticia')
                                ->with('global', 'Noticia agregada con éxito');
            }
        }
    }

}
