<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGaleriesTable extends Migration {

	public function up() 
	{
		Schema::create('galeries', function(Blueprint $table) {
			$table->string('slug', 255)->nullable();
			$table->increments('id');
			$table->integer('id_bien')->unsigned();
			$table->timestamps();
			$table->softDeletes();
			$table->string('photo', 255)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('galeries');
	}
}