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
        
        $noticias = Noticia::paginate(6);
        
        return View::make('admin.noticias.ver')
                        ->with('noticias', $noticias);
    }
    
    public function getAddNew() {

        $categorias = Categoria::where('id', '!=', 0)->get()->lists('nombre', 'id');
        $categorias_combo = array(0 => "Seleccione una categoría ... ") + $categorias;
        $selected = array();
        return View::make('admin.noticias.agregar', compact('categorias_combo','selected' ));
    }

    public function postAddNew() {

        $validator = Validator::make(Input::all(), array(
                    'titulo'      => 'required',
                    'descripcion' => 'required',
                    'categoria'   => 'required',
                    'imagen'      => 'required',
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
            $categoria   = Input::get('categoria');

            if(Input::file('imagen')){
                
                $imagen = Input::File('imagen')
                            ->move('archivos/img', $titulo.'_noticia_'.Input::File('imagen')->getClientOriginalName());
                $imagen = $titulo. '_noticia_'.Input::File('imagen')->getClientOriginalName();
            }
            else{
                
                $imagen = NULL;
            }
       
            $noticia = new Noticia();

            $noticia->titulo = $titulo;
            $noticia->cuerpo = $descripcion;
            $noticia->categoria_id = $categoria;
            $noticia->imagen = $imagen;

            if ($noticia->save()) {
                return Redirect::route('admin-agregar-noticia')
                                ->with('global', 'Noticia agregada con éxito');
            }
        }
    }
    
    public function getEditar($id){
        $noticia = Noticia::find($id);
        $categorias = Categoria::where('id', '!=', 0)->get()->lists('nombre', 'id');
        $categorias_combo = array(0 => "Seleccione una categoría ... ") + $categorias;
        $selected = array();
        return View::make('admin.noticias.editar', compact('categorias_combo','selected' ))
                        ->with('noticia', $noticia);
    }
    
    public function postEditar(){

        $noticia = Noticia::find(Input::get('id'));
        
        $titulo      = Input::get('titulo');
        $descripcion = Input::get('descripcion');
        $categoria   = Input::get('categoria');
        
        $noticia->titulo = $titulo;
        $noticia->cuerpo = $descripcion;
        $noticia->categoria_id = $categoria;
        
        if (Input::File('imagen')) {
            //Si viene la imagen neuva debo buscar la imagen actual y reemplazarla
           
            //ruta de la imagen actual
            $filename = public_path() . '/archivos/img/'.$noticia->imagen;
            
            if (File::exists($filename)) {
                File::delete($filename);
                
                $imagen_nueva = Input::File('imagen')
                            ->move('archivos/img', $titulo.'_noticia_'.Input::File('imagen')->getClientOriginalName());
                $imagen_nueva = $titulo. '_noticia_'.Input::File('imagen')->getClientOriginalName();
                
   
            } else{
                 $imagen_nueva = Input::File('imagen')
                            ->move('archivos/img', $titulo.'_noticia_'.Input::File('imagen')->getClientOriginalName());
                $imagen_nueva = $titulo. '_noticia_'.Input::File('imagen')->getClientOriginalName();
                
                
            } 
             $noticia->imagen = $imagen_nueva;
             
          
        }
        
          
    
     $noticia->save();
     return Redirect::route('admin-ver-noticias')
                        ->with('global', 'Noticia editada correctamente!');

}

public function borrar($id) {
    $noticia = Noticia::find($id);
        $filename = public_path() . '/archivos/img/'.$noticia->imagen;
        File::delete($filename);
        if($noticia->delete()){
            return Redirect::route('admin-ver-noticias')
                        ->with('global', 'Noticia eliminada correctamente!');
        }else{
             return Redirect::route('admin-ver-noticias')
                        ->with('global', 'Error al tratar de eliminar, intente otra vez!');
        }
}
}
