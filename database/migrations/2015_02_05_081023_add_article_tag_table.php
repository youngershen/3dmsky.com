<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddArticleTagTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('article_tag', function(Blueprint $table){

			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->integer('article_id')->unsigned()->nullable();
			$table->integer('tag_id')->unsigned()->nullable();

			$table->foreign('article_id')->references('id')->on('article')->onDelete('set null');
			$table->foreign('tag_id')->references('id')->on('tag')->onDelete('set null');

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
