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


//RUTAS PAGINA WEB

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
    
Route::group(array('before' => 'auth'), function(){

    
});

Route::group(array('before' => 'guest'), function(){
    
    Route::group(array('before' => 'csrf'), function(){
              
        Route::post('/admin/login', array(
            'as'   => 'login-post',
            'uses' => 'AccountController@postlogin'
        ));
        
    }); 
    Route::get('/admin/login', array(
        'as'   => 'login-get',
        'uses' => 'AccountController@getlogin'
    ));
    
});


