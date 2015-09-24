<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('menus', function($tbl) {
            $tbl->increments('id');
            $tbl->string('name', 255);
            $tbl->string('url', 255);
            $tbl->integer('parent_id')->default(0);
            $tbl->integer('order')->default(1);
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
		Schema::drop('menus');
	}

}
