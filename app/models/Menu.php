<?php

class Menu extends Eloquent{

	protected $table = 'menus';

	public function childs($id = 0) {
		$id = $id == 0 ? $this->id : $id;
		$childs = Menu::where('parent_id', $id)->get();
		return $childs;
	}

	public function parentName()
	{
		$menus = Menu::where('id', $this->parent_id)->get();
		if ($menus->count() == 0) {
			return "";
		}
		return $menus[0]->name;
	}
}
