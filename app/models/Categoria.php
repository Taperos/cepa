<?php

class Categoria extends Eloquent{
    
    protected $table = 'categoria';
    
    public function projects(){
        return $this->hasMany('Noticia', 'categoria_id');       
    }
}