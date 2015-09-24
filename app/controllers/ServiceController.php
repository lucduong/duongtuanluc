<?php

class ServiceController extends BaseController {
	public function index() {
		return View::make('services.index');
	}

	public function adminIndex()
	{
		$data = Service::all();
		return View::make('services.service', array('services' => $data));
	}

	public function adminAddService()
	{
		if (Request::isMethod('POST')) {
			$rules = array('title' => 'required', 'content' => 'required');
			$validator = Validator::make(Input::all(), $rules);
			
			if($validator->passes()){
				$sercie = new Service();
				$sercie->title = Input::get('title');
				$sercie->content = Input::get('content');
				$sercie->publish = Input::get('savePublish', '1');
				$sercie->save();
				return Redirect::to('admin/services')->with('success','Saved');
			}
			return Redirect::to('admin/add-service')->withErrors($validator);
		} else {
			return View::make('services.add-service');
		}
	}

	public function adminEditService($id) {
		$service = Service::find($id);
		if (!$service) {
			throw new Exception("Service does not exist.", 1);
		}
		if (Request::isMethod('POST')) {
			$service->title = Input::get('title');
			$service->content = Input::get('content');
			$service->publish = Input::get('savePublish', '0');
			$service->save();
			return Redirect::to('admin/services')->with('success','Saved');
		} else {
			return View::make('services.edit-service', array('service'=>$service));
		}
	}

	public function adminDeleteService($id) {
		Service::destroy($id);
		return Redirect::to('admin/services')->with('success','Deleted');
	}
}
