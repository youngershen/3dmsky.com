<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCommentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('comment',function(Blueprint $table){

			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();

			$table->integer('user_id')->unsigned()->nullable();
			$table->integer('article_id')->unsigned()->nullable();

			$table->foreign('user_id')->references('id')->on('user')->onDelete('set null');
			$table->foreign('article_id')->references('id')->on('article')->onDelete('set null');

			$table->text('content');
			$table->integer('up')->default(0);
			$table->integer('down')->default(0);

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
