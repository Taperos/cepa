<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactosTable extends Migration {

	public function up()
	{
		Schema::create('contactos', function($table){
                   
                    $table->increments('id');
                    $table->string('nombre', 100);
                    $table->string('email');
                    $table->string('mensaje');
                    $table->timestamps();
                });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contactos');
	}

}
