<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contacts', function($tbl) {
            $tbl->increments('id');
            $tbl->string('name', 50);
            $tbl->string('email', 100);
            $tbl->string('phone', 100);
            $tbl->longText('message');
            $tbl->boolean('read')->default(0);
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
		Schema::drop('contacts');
	}

}
