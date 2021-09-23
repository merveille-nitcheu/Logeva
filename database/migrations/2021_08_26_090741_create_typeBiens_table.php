<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTypeBiensTable extends Migration {

	public function up() 
	{
		Schema::create('typeBiens', function(Blueprint $table) {
			$table->string('slug', 255)->nullable();
			$table->increments('id');
			$table->string('libelle', 255);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('typeBiens');
	}
}