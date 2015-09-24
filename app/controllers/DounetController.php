<?php

class DounetController extends BaseController {

	public function adminEditContact() {
		$info = Dounet::find(1);
		if (!$info) {
			throw new Exception("Contact does not exist.", 1);
		}
		if (Request::isMethod('POST')) {
			$info->contact = Input::get('content');
			$info->save();
			return Redirect::to('admin/info')->with('success','Saved');
		} else {
			return View::make('infos.edit-info', array('info'=>$info));
		}
	}
}