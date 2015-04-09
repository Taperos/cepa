<?php

Class CategoriaTableSeeder extends Seeder{
    
    public function run(){
        
        DB::table('categoria')->insert(array(
            'nombre'       => 'Sin Categoría',
        ));
        DB::table('categoria')->insert(array(
            'nombre'       => 'Becas',
        ));
        DB::table('categoria')->insert(array(
            'nombre'       => 'Talleres',
        ));
        DB::table('categoria')->insert(array(
            'nombre'       => 'Galerías',
        ));    
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

