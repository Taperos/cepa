<?php


class Galeria extends Eloquent{

    protected  $table = 'galerias';
    
    public function imagenes(){
          return  $this->hasMany('Imagen', 'galeria_id'); 
    }  
}