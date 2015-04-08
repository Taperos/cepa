<?php


class Imagen extends Eloquent{

    protected  $table = 'imagenes';
    
     public function galeria(){
        return $this->belongsTo('Galeria', 'galeria_id');
        
    }
}