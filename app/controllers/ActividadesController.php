<?php

class ActividadesController extends BaseController {
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
        
        $actividades = Actividad::paginate(10);
        
        return View::make('admin.actividades.ver')
                        ->with('actividades', $actividades);
    }
    
    public function getAddNew() {
        
        return View::make('admin.actividades.agregar');
    }

    public function postAddNew() {
     
        $validator = Validator::make(Input::all(), array(
                    'nombre'      => 'required',
                    'descripcion' => 'required',
                    'fecha'       => 'required',
                        ), array(
                    'required' => 'Este campo no puede quedar vacio',
        ));

        if ($validator->fails()) {

            return Redirect::route('admin-agregar-actividad')
                            ->withErrors($validator)
                            ->withInput();
        } else {

            if (Input::has('importante'))
                {
                   $importante = 1;
                }
                
               else{
                   $importante = 0;
                }

            $nombre      = Input::get('nombre');
            $descripcion = Input::get('descripcion');
            $fecha       = Input::get('fecha');
       
            $actividad = new Actividad();

            $actividad->nombre = $nombre;
            $actividad->descripcion = $descripcion;
            $actividad->fecha_inicio = $fecha;
            $actividad->importante = $importante;

            if ($actividad->save()) {
                return Redirect::route('admin-agregar-actividad')
                                ->with('global', 'Actividad agregada con éxito');
            }
        }
    }
    
    public function show() {

        $actividades = Actividad::all();
        $contador = 1;
        $dates = array();
        foreach ($actividades as $actividad){
            if($actividad->importante == 1){
                $importante = true;
            }else{
                $importante = false;
            }
             $dates[$contador] = array(
                'date' => $actividad->fecha_inicio,
                'badge' => $importante,
                'title' => $actividad->nombre.', '.$actividad->descripcion,
                'body' => '<p class="lead">'.$actividad->descripcion.'</p>',
                'footer' => 'none',
            );
            $contador++;
        }
        echo json_encode($dates);
    }

}
