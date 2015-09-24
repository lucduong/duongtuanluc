<?php

class UserController extends BaseController {
	public function profile($username = '') {
		return "Hello, " . $username;
	}

	public function adminUserIndex() {
		$users = User::all();
		return View::make('user.admin-users', array('users' => $users));
	}

	public function adminAddUser()
	{
		if (Request::isMethod('POST')) {
			
		} else {
			return View::make('user.admin-adduser');
		}
	}

	public function adminEditUser($id)
	{
		if (Request::isMethod('POST')) {
			
		} else {
			return View::make('user.admin-edituser');
		}
	}

	public function adminDeleteUser($id)
	{
		User::where('id', $id)->update(array('del_flg' => 1));
		return Redirect::to('admin/users')->with('success','Deleted');
	}
}