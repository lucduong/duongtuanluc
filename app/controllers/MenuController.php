<?php

class MenuController extends BaseController {
	public function adminIndex()
	{
		$menu = Menu::all();
		return View::make('menu.admin-menu', array('arrMenus' => $menu));
	}

	public function adminAddMenu()
	{
		if (Request::isMethod('POST')) {
			$rules = array('name' => 'required', 'url' => 'required');
			$validator = Validator::make(Input::all(), $rules);

			if($validator->passes()){
				$menu = new Menu();
				$menu->name = Input::get('name');
				$menu->parent_id = Input::get('parent');
				$menu->url = Input::get('url');
				$menu->order = Input::get('order');
				$menu->save();
				return Redirect::to('admin/menus')->with('success','Saved');
			}
			return Redirect::to('admin/add-menu')->withErrors($validator);
		} else {
			$parents = Menu::where('parent_id', '0')->take('all')->get();
			return View::make('menu.admin-addmenu', array('parents' => $parents));
		}
	}

	public function adminEditMenu($id)
	{
		$menu = Menu::find($id);
		if (!$menu) {
			throw new Exception("Menu does not exist", 1);
		}
		if (Request::isMethod('POST')) {
			$rules = array('name' => 'required', 'url' => 'required');
			$validator = Validator::make(Input::all(), $rules);

			if($validator->passes()){
				$menu->name = Input::get('name');
				$menu->parent_id = Input::get('parent');
				$menu->url = Input::get('url');
				$menu->order = Input::get('order');
				$menu->save();
				return Redirect::to('admin/menus')->with('success','Saved');
			}
			return Redirect::to('admin/add-menu')->withErrors($validator);
		} else {
			$parents = Menu::where('parent_id', '0')->take('all')->get();
			return View::make('menu.admin-editmenu', array('menu' => $menu, 'parents' => $parents));
		}
	}

	public function adminDeleteMenu($id)
	{
		$menu = Menu::find($id);
		if (!$menu) {
			throw new Exception("Menu does not exist", 1);
		}
		Menu::destroy($id);
		return Redirect::to('admin/menus')->with('success','Deleted');
	}
}
