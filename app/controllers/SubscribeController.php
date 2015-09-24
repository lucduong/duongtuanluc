<?php

class SubscribeController extends BaseController {
	
	public function subscribe() {
		if (Request::isMethod('POST')) {
			// $subscribe = new Subscribe();
			// $subscribe->email = Input::get('email');
			// $subscribe->save();

			// $subscribe = new Subscribe(array('email' => Input::get('email')));
			// $subscribe->exists = Input::has('email');
			// $subscribe->save();
			// return Redirect::to('/');

			$subscribe = Subscribe::where('email',Input::get('email'))->first();
			if ($subscribe) {
				// throw new Exception("Email have been subscribed", 1);
			}else{
				$subscribe = new Subscribe();
				$subscribe->email = Input::get('email');
				$subscribe->save();

			}
			return Redirect::to('/');
		}
	}

	public function adminSubscribe()
	{
		$data = Subscribe::all();
		return View::make('subscribe.subscribe', array('subscribes' => $data));
	}
}
