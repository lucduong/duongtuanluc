<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($tbl) {
            $tbl->increments('id');
            $tbl->string('username', 50);
            $tbl->string('password', 100);
            $tbl->string('firstname', 100);
            $tbl->string('lastname', 100);
            $tbl->string('email', 255);
            $tbl->enum('role', array('admin', 'user', 'guest'));
            $tbl->boolean('subscribe')->default(1);
            $tbl->rememberToken();
            $tbl->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
