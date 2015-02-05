<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddArticleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('article', function(Blueprint $table){
			$table->engine = 'InnoDB';

			$table->increments('id');
			$table->string('title', 255)->index();
			$table->text('digest')->nullable();
			$table->text('content');

			$table->integer('user_id')->unsigned()->nullable();
			$table->foreign('user_id')->references('id')->on('user')->onDelete('set null');

			$table->integer('category_id')->unsigned()->nullable();
			$table->foreign('category_id')->references('id')->on('category')->onDelete('set null');

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
