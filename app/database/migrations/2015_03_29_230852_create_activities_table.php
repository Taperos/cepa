<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		 Schema::create('activities', function($table){
                   
                    $table->increments('id');
                    $table->string('nombre', 100);
                    $table->date('fecha_inicio');
                    $table->date('fecha_termino');
                    $table->string('descripcion', 10000);
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
		Schema::drop('activities');
	}

}
