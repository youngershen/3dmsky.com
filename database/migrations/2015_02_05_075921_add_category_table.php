<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('category', function(Blueprint $table){

			$table->engine = 'InnoDB';

			$table->increments('id');
			$table->string('name', 255)->unique()->index();
			$table->text('description')->nullable();
			$table->string('icon', 255)->nullable();

			$table->timestamps();
			$table->softDeletes();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
