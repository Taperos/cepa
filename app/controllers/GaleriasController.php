<?php

class galeriasController extends BaseController {
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
        
        $galerias = Galeria::paginate(3);
        
        return View::make('admin.galerias.ver')
                        ->with('galerias', $galerias);
    }
    
    public function getAgregar() {

        return View::make('admin.galerias.agregar');
    }

    public function postAgregar() {
   
        $validator = Validator::make(Input::all(), array(
                    'nombre'      => 'required',
                    'descripcion' => 'required',
                    'images'    => 'required'
                        ), array(      
                    'required' => 'Este campo no puede quedar vacio',
        ));

        if ($validator->fails()) {

            return Redirect::route('admin-agregar-galeria')
                            ->withErrors($validator)
                            ->withInput();
        } else {

            $nombre      = Input::get('nombre');
            $descripcion = Input::get('descripcion');

            $galeria = new Galeria();

            $galeria->nombre      = $nombre;
            $galeria->descripcion = $descripcion;

            if ($galeria->save()) {
                
                    $contador = 1;
                     foreach(Input::file('images') as $imagen){
                        //Donde se guardara el archivo fisico de la imagen
                        $imagen->move('archivos/img', $galeria->id.'_'.$contador.'_'.$imagen->getClientOriginalName());
                        //Nombre que tendrá en la base de datos la imagen
                        $imagen_database = $galeria->id.'_'.$contador.'_'.$imagen->getClientOriginalName();
                        
                        $imagen_guardar = new Imagen();
                        
                        $imagen_guardar->nombre = '';
                        $imagen_guardar->url = $imagen_database;
                        $imagen_guardar->galeria_id = $galeria->id;

                        $imagen_guardar->save();
                        $contador ++;
                    } 
                
                return Redirect::route('admin-agregar-galeria')
                                ->with('global', 'Galería agregada con éxito');
            }
        }
    }
    
    public function galeria($id){
       $galeria = Galeria::with('imagenes')->where('id', '=', $id)->get();
       
        return View::make('admin.galerias.galeria')
                ->with('galeria', $galeria);
        
    }

}
