<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticiasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		 Schema::create('noticias', function($table){
                   
                    $table->increments('id');
                    $table->string('titulo', 100);
                    $table->string('encabezado', 100);
                    $table->longText('cuerpo');
                    $table->integer('categoria_id');
                    $table->string('imagen');
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
		Schema::drop('noticias');
	}

}
