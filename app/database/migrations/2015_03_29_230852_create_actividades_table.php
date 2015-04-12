<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		 Schema::create('actividades', function($table){
                   
                    $table->increments('id');
                    $table->string('nombre');
                    $table->integer('importante');
                    $table->date('fecha_inicio');
                    $table->date('fecha_termino');
                    $table->string('descripcion');
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
		Schema::drop('actividades');
	}

}
