<?php

class Article extends Eloquent{
	protected $table = 'articles';

	// public function category() {
	// 	$cat = Category::where('id', $this->category_id)->first();
	// 	return $cat;
	// }

	// public function user() {
	// 	return User::where('id', $this->user_id)->get()->first();
	// }
}