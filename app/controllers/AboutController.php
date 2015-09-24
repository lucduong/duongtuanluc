<?php

class AboutController extends BaseController {
	public function index() {
		$data = About::where('publish','1')->first();
		return View::make('pages.about',array('about' => $data ));
	}

	public function adminAbout()
	{
		$data = About::all();
		return View::make('about.about', array('abouts' => $data));
	}

	
	public function adminAddAbout()
	{
		if (Request::isMethod('POST')) {
			$rules = array('title' => 'required', 'content' => 'required');
			$validator = Validator::make(Input::all(), $rules);
			
			if($validator->passes()){
				$about = new About();
				$about->title = Input::get('title');
				$about->content = Input::get('content');
				$about->publish = Input::get('savePublish', '0');
				$about->save();
				return Redirect::to('admin/abouts')->with('success','Saved');
			}
			return Redirect::to('admin/add-about')->withErrors($validator);
		} else {
			return View::make('about.add-about');
		}
	}

	public function adminEditAbout($id) {
		$about = About::find($id);
		if (!$about) {
			throw new Exception("About does not exist.", 1);
		}
		if (Request::isMethod('POST')) {
			$about->title = Input::get('title');
			$about->content = Input::get('content');
			$about->publish = Input::get('savePublish', '0');
			$about->save();
			return Redirect::to('admin/abouts')->with('success','Saved');
		} else {
			return View::make('about.edit-about', array('about'=>$about));
		}
	}

	public function adminDeleteAbout($id) {
		About::destroy($id);
		return Redirect::to('admin/abouts')->with('success','Deleted');
	}
}