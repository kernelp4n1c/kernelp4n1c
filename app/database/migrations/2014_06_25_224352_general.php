<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class General extends Migration {

	/**
	 * Run the migrations.
	 * Es un sistema para mostrar el repudio de los estudiantes hacia los docentes
	 * @return void
	 */
	public function up() {
		Schema::create('teachers', function($t) {
			$t->increments('id');
			$t->string('name');
			$t->timestamps();
		});
		Schema::create('signatures', function($t) {
			$t->increments('id');
			$t->string('name');
			$t->timestamps();
		});
		Schema::create('comments', function($t) {
			$t->increments('id');
			$t->string('content');
			$t->integer('comment_id')->unsigned()->nullable();
			$t->integer('teacher_id')->unsigned();
			$t->integer('count_likes')->default(0);
			$t->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		//
	}

}
