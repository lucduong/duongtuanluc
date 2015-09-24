<?php

class SliderController extends BaseController {

	public function adminIndex() {
		$data = Slider::all();
		return View::make('slider.admin-slider', array('sliders' => $data));
	}

	public function adminAddSlider()
	{
		if (Request::isMethod('POST')) {
			$rules = array('description' => 'required', 'order' => 'required');
			$validator = Validator::make(Input::all(), $rules);
			$image = Input::file('image');
			$imageUrl = "";

			//check if user have select for upload image
			if($image!=null){ //yes - have select file
				$mime = $image->getClientMimeType();
				if($mime=='image/jpeg'){
					$ext = '.jpg';
				}
				else{
					$ext = '.png';
				}
				$rand_str = ' '.str_random(10).' '.time();
				$file_name = Input::get('name').$rand_str;
				$file_name_final = Str::slug($file_name,'-').$ext;
				
				// upload file
				$image_path = base_path().'/media/sliders/'.date('Y-m');
				if(!file_exists($image_path)){
					// create folder if it is not exist
					mkdir($image_path);
					$image->move('media/sliders/'.date('Y-m').'/',$file_name_final);

				}
				else{
					$image->move('media/sliders/'.date('Y-m').'/',$file_name_final);
				}

				$imageUrl = 'media/sliders/' . date('Y-m').'/'.$file_name_final;
			}

			if($validator->passes()){
				$slider = new Slider();
				$slider->description = Input::get('description');
				$slider->image_url = $imageUrl;
				$slider->order = Input::get('order');
				$slider->save();
				return Redirect::to('admin/sliders')->with('success','Saved');
			}
			return Redirect::to('admin/add-slider')->withErrors($validator);
		} else {
			return View::make('slider.admin-addslider');
		}
	}

	public function adminDeleteSlider($id)
	{
		Slider::destroy($id);
		return Redirect::to('admin/sliders')->with('success','Deleted');
	}

	public function adminEditSlider($id)
	{
		$slider = Slider::find($id);
		if (!$slider) {
			throw new Exception("Article does not exist.", 1);
		}
		if (Request::isMethod('POST')) {
			$image = Input::file('image');
			$imageUrl = "";

			//check if user have select for upload image
			if($image!=null){ //yes - have select file
				$mime = $image->getClientMimeType();
				if($mime=='image/jpeg'){
					$ext = '.jpg';
				}
				else{
					$ext = '.png';
				}
				$rand_str = ' '.str_random(10).' '.time();
				$file_name = Input::get('name').$rand_str;
				$file_name_final = Str::slug($file_name,'-').$ext;
				
				// upload file
				$image_path = base_path().'/media/sliders/'.date('Y-m');
				if(!file_exists($image_path)){
					// create folder if it is not exist
					mkdir($image_path);
					$image->move('media/sliders/'.date('Y-m').'/',$file_name_final);

				}
				else{
					$image->move('media/sliders/'.date('Y-m').'/',$file_name_final);
				}

				$imageUrl = 'media/sliders/' . date('Y-m').'/'.$file_name_final;
			}
			
			$slider->description = Input::get('description');
			$slider->order = Input::get('order');
			if ($imageUrl != '')
				$slider->image_url = $imageUrl;
			$slider->save();
			return Redirect::to('admin/sliders')->with('success','Updated');
		} else {
			return View::make('slider.admin-editslider', array('slider' => $slider));
		}
	}
}
