<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles', function($tbl) {
            $tbl->increments('id');
            $tbl->string('title', 255);
            $tbl->string('summary', 500);
            $tbl->string('image_url', 255);
            $tbl->longText('content');
            $tbl->boolean('act_flg')->default(1);
            $tbl->boolean('del_flg')->default(0);
            $tbl->integer('category_id');
            $tbl->integer('user_id');
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
		Schema::drop('articles');
	}

}
