<?php

class HomeController extends BaseController {
	public function home() {
		$articles = Article::where('del_flg', '0 ')->orderBy('created_at', 'desc')->take('all')->get();
		$sliders = Slider::orderBy('order', 'asc')->take('all')->get();
		return View::make('home.home', array('articles' => $articles, 'sliders' => $sliders));
	}

	public function subscribe() {
		if (Request::isMethod('POST')) {
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

	public function login()
	{
		if (Request::isMethod('POST')) {
	        $userdata = array(
	            'username' => Input::get('username'),
	            'password' => Input::get('password'),
	        );

	        if(Auth::attempt($userdata)) {
	            if (Auth::user()->role == 'admin') {
	            	return Redirect::to('admin');
	            } else {
	            	return Redirect::to('/');
	            }
	        } else {
	            return Redirect::to('login');
	        }
		} else {
			return View::make('pages.login');
		}
	}
}
