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

Route::get('/home', array(
    'as' => 'home',
    'uses' => 'HomeController@index'
));

Route::get('/galeria', array(
    'as' => 'galeria',
    'uses' => 'HomeController@galeria'
));

Route::group(array('before' => 'auth'), function(){
    Route::get('/admin', array(
    'as' => 'admin',
    'uses' => 'AdminController@index'
));
    
});

Route::group(array('before' => 'guest'), function(){
    
    Route::group(array('before' => 'csrf'), function(){
              
        Route::post('admin/login', array(
            'as'   => 'login-post',
            'uses' => 'AccountController@postSignIn'
        ));
        
    }); 
    Route::get('/admin/login', array(
        'as'   => 'login-get',
        'uses' => 'AccountController@getSignIn'
    ));
    
});


