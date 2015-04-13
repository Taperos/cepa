<?php

class TalleresController extends BaseController {
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
        
        $talleres = Taller::paginate(3);
        
        return View::make('admin.talleres.ver')
                        ->with('talleres', $talleres);
    }
    
    public function getAddNew() {
        return View::make('admin.talleres.agregar');
    }

    public function postAddNew() {

        $validator = Validator::make(Input::all(), array(
                    'nombre'      => 'required',
                    'descripcion' => 'required',
                    'imagen'      => 'required',
                        ), array(
                    'required' => 'Este campo no puede quedar vacio',
        ));

        if ($validator->fails()) {

            return Redirect::route('admin-agregar-taller')
                            ->withErrors($validator)
                            ->withInput();
        } else {

            $nombre      = Input::get('nombre');
            $descripcion = Input::get('descripcion');

            if(Input::file('imagen')){
                
                $imagen = Input::File('imagen')
                            ->move('archivos/img', $nombre.'_talleres_'.Input::File('imagen')->getClientOriginalName());
                $imagen = $nombre. '_talleres_'.Input::File('imagen')->getClientOriginalName();
            }
            else{
                
                $imagen = NULL;
            }
       
            $taller = new Taller();

            $taller->nombre = $nombre;
            $taller->descripcion = $descripcion;
            $taller->imagen = $imagen;

            if ($taller->save()) {
                return Redirect::route('admin-agregar-taller')
                                ->with('global', 'Taller agregado con éxito');
            }
        }
    }
    
    public function getEditar($id){
        $taller = Taller::find($id);
        return View::make('admin.talleres.editar')
                        ->with('taller', $taller);
    }
    
     public function postEditar(){

        $taller = Taller::find(Input::get('id'));
        
        $titulo      = Input::get('nombre');
        $descripcion = Input::get('descripcion');
        
        $taller->nombre = $titulo;
        $taller->descripcion = $descripcion;
        
        if (Input::File('imagen')) {
            //Si viene la imagen neuva debo buscar la imagen actual y reemplazarla
           
            //ruta de la imagen actual
            $filename = public_path() . '/archivos/img/'.$taller->imagen;
            
            if (File::exists($filename)) {
                File::delete($filename);
                
                $imagen_nueva = Input::File('imagen')
                            ->move('archivos/img', $titulo.'_talleres_'.Input::File('imagen')->getClientOriginalName());
                $imagen_nueva = $titulo. '_talleres_'.Input::File('imagen')->getClientOriginalName();
            } else{
                 $imagen_nueva = Input::File('imagen')
                            ->move('archivos/img', $titulo.'_talleres_'.Input::File('imagen')->getClientOriginalName());
                $imagen_nueva = $titulo. '_talleres_'.Input::File('imagen')->getClientOriginalName(); 
            } 
             $taller->imagen = $imagen_nueva;
        }
        
     $taller->save();
     return Redirect::route('admin-ver-talleres')
                        ->with('global', 'Taller editado correctamente!');

}

    public function borrar($id){
        $taller = Taller::find($id);
        $filename = public_path() . '/archivos/img/'.$taller->imagen;
        File::delete($filename);
        if($taller->delete()){
            return Redirect::route('admin-ver-talleres')
                        ->with('global', 'Taller eliminado correctamente!');
        }else{
             return Redirect::route('admin-ver-talleres')
                        ->with('global', 'Error al tratar de eliminar, intente otra vez!');
        }
        
    } 

}
