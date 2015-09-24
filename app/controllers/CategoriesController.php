<?php
class CategoriesController extends BaseController {
	public function adminCategories()
	{
		$data = Category::all();
		return View::make('categories.admin-categories', array('categories' => $data));
	}
	/*public function adminEditCategories($id) {
		$Categories = Category::find($id);
		if (!$Categories) {
			throw new Exception("Categories does not exist.", 1);
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
				$image_path = base_path().'/media/images/'.date('Y-m');
				if(!file_exists($image_path)){
					// create folder if it is not exist
					mkdir($image_path);
					$image->move('media/images/'.date('Y-m').'/',$file_name_final);

				}
				else{
					$image->move('media/images/'.date('Y-m').'/',$file_name_final);
				}

				$imageUrl = 'media/images/' . date('Y-m').'/'.$file_name_final;
			}
			
			$Categories->title = Input::get('title');
			$Categories->summary = Input::get('summary');
			if ($imageUrl != '')
				$Categories->image_url = $imageUrl;
			$Categories->content = Input::get('content');
			$Categories->category_id = Input::get('category');
			$Categories->act_flg = Input::get('savePublish', '0');
			$Categories->user_id = Auth::user()->id;
			$Categories->slug = Helpers::getSlug($Categories->title, $Categories);
			$Categories->save();
			return Redirect::to('admin/articles')->with('success','Saved');
		} else {
			$categories = Category::all();
			return View::make('Categories.edit-Categories', array('Categories'=>$article, 'categories' => $categories));
		}
	}
	public function adminDeletecategories($id) {
		// Article::destroy($id);
		Article::where('id', $id)->update(array('del_flg' => 1));
		return Redirect::to('admin/<category>
			
		</category>')->with('success','Deleted');
	}
	public function adminAddArticle()
	{
		$categories = Category::all();
		if (Request::isMethod('POST')) {
			$rules = array('title' => 'required', 'content' => 'required');
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
				$image_path = base_path().'/media/images/'.date('Y-m');
				if(!file_exists($image_path)){
					// create folder if it is not exist
					mkdir($image_path);
					$image->move('media/images/'.date('Y-m').'/',$file_name_final);

				}
				else{
					$image->move('media/images/'.date('Y-m').'/',$file_name_final);
				}

				$imageUrl = 'media/images/' . date('Y-m').'/'.$file_name_final;
			}

			if($validator->passes()){
				$categories = new categories();
				$categories->title = Input::get('title');
				$categories->summary = Input::get('summary');
				$categories->image_url = $imageUrl;
				$categories->content = Input::get('content');
				$categories->category_id = Input::get('category');
				$categories->act_flg = Input::get('savePublish', '0');
				$categories->user_id = Auth::user()->id;
				$categories->slug = Helpers::getSlug($categories->title, $categories);
				$categories->save();
				return Redirect::to('admin/categoriess')->with('success','Saved');
			}
			return Redirect::to('admin/add-categories')->withErrors($validator);
		} else {
			return View::make('categories.add-ca', array('categories' => $categories));
		}
	}
*/
	public function adminEditCategories($id) {
		$article = Category::find($id);
		if (!$article) {
			throw new Exception("Category does not exist.", 1);
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
				$image_path = base_path().'/media/images/'.date('Y-m');
				if(!file_exists($image_path)){
					// create folder if it is not exist
					mkdir($image_path);
					$image->move('media/images/'.date('Y-m').'/',$file_name_final);

				}
				else{
					$image->move('media/images/'.date('Y-m').'/',$file_name_final);
				}

				$imageUrl = 'media/images/' . date('Y-m').'/'.$file_name_final;
			}
			
			$Categories->title = Input::get('title');
			$Categories->summary = Input::get('summary');
			if ($imageUrl != '')
				$Categories->image_url = $imageUrl;
			$Categories->content = Input::get('content');
			$Categories->category_id = Input::get('category');
			$Categories->act_flg = Input::get('savePublish', '0');
			$Categories->user_id = Auth::user()->id;
			$Categories->slug = Helpers::getSlug($Categories->title, $Categories);
			$Categories->save();
			return Redirect::to('admin/category')->with('success','Saved');
		} else {
			$categories = Category::all();
			return View::make('categories.edit-categories', array('categories'=>$categories, 'categories' => $categories));
		}
	}

	public function adminCategory()
	{
		$categories = Category::all();
		if (Request::isMethod('POST')) {
			$rules = array('title' => 'required', 'content' => 'required');
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
				$image_path = base_path().'/media/images/'.date('Y-m');
				if(!file_exists($image_path)){
					// create folder if it is not exist
					mkdir($image_path);
					$image->move('media/images/'.date('Y-m').'/',$file_name_final);

				}
				else{
					$image->move('media/images/'.date('Y-m').'/',$file_name_final);
				}

				$imageUrl = 'media/images/' . date('Y-m').'/'.$file_name_final;
			}

			if($validator->passes()){
				$article = new Article();
				$article->title = Input::get('title');
				$article->summary = Input::get('summary');
				$article->image_url = $imageUrl;
				$article->content = Input::get('content');
				$article->category_id = Input::get('category');
				$article->act_flg = Input::get('savePublish', '0');
				$article->user_id = Auth::user()->id;
				$article->slug = Helpers::getSlug($article->title, $article);
				$article->save();
				return Redirect::to('admin/articles')->with('success','Saved');
			}
			return Redirect::to('admin/add-article')->withErrors($validator);
		} else {
			return View::make('article.add-article', array('categories' => $categories));
		}
	}

}