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
			$t->string('picture_url')->default('teacher.png');
			$t->timestamps();
		});
		Schema::create('teacher_signature', function($t) {
			$t->increments('id');
			$t->integer('teacher_id')->unsigned();
			$t->integer('signature_id')->unsigned();
			$t->timestamps();
		});
		Schema::create('signatures', function($t) {
			$t->increments('id');
			$t->string('name');
			$t->timestamps();
		});
		Schema::create('comments', function($t) {
			$t->increments('id');
			$t->text('content');
			$t->string('anon_author');
			$t->integer('comment_id')->unsigned()->nullable();
			$t->integer('teacher_id')->unsigned();
			$t->integer('count_likes')->default(0);
			$t->timestamps();
		});
		Schema::create('comment_token', function($t) {
			$t->increments('id');
			$t->string('token');
			$t->integer('comment_id')->unsigned();
			$t->timestamps();
		});

		Schema::table('teachers', function($t) {
			$t->integer('count_comments')->default(0);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('comment_token');
		Schema::drop('comments');
		Schema::drop('teacher_signature');
		Schema::drop('teachers');
		Schema::drop('signatures');
	}

}
