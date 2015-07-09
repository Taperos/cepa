<?php

class HomeController extends BaseController {
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

    public function showWelcome() {
        return View::make('hello');
    }

    public function index() {

        $noticias = Noticia::with('categorias')->get();
  
        return View::make('home')
                        ->with('noticias', $noticias);
     
    }

    public function galeria() {
        
       $galerias = Galeria::with('imagenes')->paginate(10);
        return View::make('galeria')
                ->with('galerias', $galerias);
    }
    
    public function beca() {
        $becas = Beca::all();
        return View::make('beca')
                ->with('becas', $becas);
                
    }
    
    public function verBeca($id){
        $becas = Beca::all();
        $beca = Beca::find($id);
        return View::make('ver-beca')
                ->with('becas', $becas)
                ->with('beca', $beca);
    }


    public function taller() {
       $talleres = Taller::all();
       
       var_dump($talleres);
        return View::make('taller')
                ->with('talleres', $talleres)->render();;
                
    }
    
    public function contacto() {
        
        return View::make('contacto');
                
    }

}
