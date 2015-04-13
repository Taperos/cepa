<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//POST: rutas que procesan, por ejemplo procesar un formulario
//GET rutas para mostrar cosas 
 

//INDEX - NO LOGIN
Route::get('/', function() {
        return View::make('hello');
    });
Route::get('/home', array( //URL, puede ser tipo GET o POST
    'as' => 'home', //COMO SE DEBE LLAMAR VÍA CÓDIGO
    'uses' => 'HomeController@index' //FUNCIÓN INDEX DEL CONTROLADOR HOME
));

Route::get('/', array(
    'as' => 'home',
    'uses' => 'HomeController@index'
));

Route::get('/galeria', array(
    'as' => 'galeria',
    'uses' => 'HomeController@galeria'
));
Route::get('/beca', array(
    'as' => 'beca',
    'uses' => 'HomeController@beca'
));

Route::get('/ver-beca/{id}', array(
            'as'   => 'ver-beca',
            'uses' => 'HomeController@verBeca'
    ));


Route::get('/taller', array(
    'as' => 'taller',
    'uses' => 'HomeController@taller'
));
Route::get('/contacto', array(
    'as' => 'contacto',
    'uses' => 'HomeController@contacto'
)); 

Route::post('/admin-agregar-contacto', array(
    'as' => 'admin-agregar-contacto',
    'uses' => 'ContactosController@AddContacto'
));

//RUTAS DONDE SÓLO PUEDES ACCEDER CUANDO TE LOGUEAS   
Route::group(array('before' => 'auth'), function(){
    
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
    
    //SI NO TIENES PERMISOS ERES REDIRECCIONADO
    Route::get('/redireccion', function() {
        return 'FUERA DE AQUÍ!!, NO TIENES PERMISOS SUFICIENTES';
    });
    
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
   
   //RUTAS DE LA APLICACIÓN GENERAL
    Route::get('/admin', array(
    'as' => 'admin',
    'uses' => 'AdminController@index'
     ));
    
       //NOTICIAS
    
    Route::get('/admin-ver-noticias', array(
    'as' => 'admin-ver-noticias',
    'uses' => 'NewsController@getVer'
    ));

    Route::get('/admin-agregar-noticia', array(
    'as' => 'admin-agregar-noticia',
    'uses' => 'NewsController@getAddNew'
    ));
    
    Route::post('/admin-agregar-noticia', array(
    'as' => 'admin-agregar-noticia',
    'uses' => 'NewsController@postAddNew'
    )); 
    
    Route::get('/admin-editar-noticia/{id}', array(
    'as' => 'admin-editar-noticia',
    'uses' => 'NewsController@getEditar'
    ));
    
    Route::post('/admin-editar-noticia', array(
    'as' => 'admin-editar-noticia',
    'uses' => 'NewsController@postEditar'
    )); 
    
    Route::get('/admin-eliminar-noticia/{id}', array(
    'as' => 'admin-eliminar-noticia',
    'uses' => 'NewsController@Borrar'
    ));
    
    //ACTIVIDADES
    
    Route::get('/admin-ver-actividades', array(
    'as' => 'admin-ver-actividades',
    'uses' => 'ActividadesController@getVer'
    ));


    Route::get('/admin-agregar-actividad', array(
    'as' => 'admin-agregar-actividad',
    'uses' => 'ActividadesController@getAddNew'
    ));
    
    Route::post('/admin-agregar-actividad', array(
    'as' => 'admin-agregar-actividad',
    'uses' => 'ActividadesController@postAddNew'
    )); 
    
    //ACTIVIDADES
    Route::any('/show', array(
    'as' => 'show',
    'uses' => 'ActividadesController@show'
    )); 
     
    Route::get('/admin-ver-becas', array(
    'as' => 'admin-ver-becas',
    'uses' => 'BecasController@getVer'
    ));


    Route::get('/admin-agregar-beca', array(
    'as' => 'admin-agregar-beca',
    'uses' => 'BecasController@getAddNew'
    ));
    
    Route::post('/admin-agregar-beca', array(
    'as' => 'admin-agregar-beca',
    'uses' => 'BecasController@postAddNew'
    )); 
    
    //CONTACTOS
    
    Route::get('/admin-ver-contactos', array(
    'as' => 'admin-ver-contactos',
    'uses' => 'ContactosController@getVer'
    ));


   
    
     //TALLERES
    
    Route::get('/admin-ver-talleres', array(
    'as' => 'admin-ver-talleres',
    'uses' => 'TalleresController@getVer'
    ));


    Route::get('/admin-agregar-taller', array(
    'as' => 'admin-agregar-taller',
    'uses' => 'TalleresController@getAddNew'
    ));
    
    Route::post('/admin-agregar-taller', array(
    'as' => 'admin-agregar-taller',
    'uses' => 'TalleresController@postAddNew'
    ));
    
    Route::get('/admin-eliminar-taller/{id}', array(
    'as' => 'admin-eliminar-taller',
    'uses' => 'TalleresController@Borrar'
    ));
    
    Route::get('/admin-editar-taller/{id}', array(
    'as' => 'admin-editar-taller',
    'uses' => 'TalleresController@getEditar'
    ));
    
    Route::post('/admin-editar-taller', array(
    'as' => 'admin-editar-taller',
    'uses' => 'TalleresController@postEditar'
    )); 
       //GALERIAS
    
    Route::get('/admin-ver-galerias', array(
    'as' => 'admin-ver-galerias',
    'uses' => 'GaleriasController@getVer'
    ));


    Route::get('/admin-agregar-galeria', array(
    'as' => 'admin-agregar-galeria',
    'uses' => 'GaleriasController@getAgregar'
    ));
    
    Route::post('/admin-agregar-galeria', array(
    'as' => 'admin-agregar-galeria',
    'uses' => 'GaleriasController@postAgregar'
    ));
    
    Route::get('/admin-ver-galeria/{id}', 'GaleriasController@galeria');
    

    Route::get('/logout', array(
        'as' => 'account-sign-out',
        'uses' => 'AccountController@getSignOut',
    ));
    
    //RUTAS DE LA APLICACIÓN PARA ADMINISTRADOR
   
    Route::get('/crear-cuenta', array(
        'as'     => 'account-create',
        'uses'   => 'AccountController@getCreate'
    ));
    
    Route::post('/crear-cuenta', array(
         'as'     => 'account-create-post',
         'uses'   => 'AccountController@postCreate'
    ));
    
 //AÑADE AQUÍ NUEVAS RUTAS   
    
});

Route::group(array('before' => 'guest'), function(){
    
    Route::group(array('before' => 'csrf'), function(){
              
        Route::post('account/sign-in', array(
            'as'   => 'account-sign-in-post',
            'uses' => 'AccountController@postSignIn'
        ));
        
    });
      
    Route::get('/account/activate/{code}', array(
        'as'   => 'account-activate',
        'uses' => 'AccountController@getActivate'
    ));
    
    Route::get('/account/sign-in/', array(
        'as'   => 'account-sign-in',
        'uses' => 'AccountController@getSignIn'
    ));
    
});


