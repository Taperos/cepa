<?php

Class UserTableSeeder extends Seeder{
    
    public function run(){
        
       
        DB::table('users')->insert(array(
            'email'       => 'admin@mail.com',
            'password'    => Hash::make('admin'),
        ));
     
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

