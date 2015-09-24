<?php

use Predis\Helpers;

class ArticleController extends BaseController {
	public function index() {
		$articles = DB::table('articles')
            ->join('categories', 'articles.category_id', '=', 'categories.id')
            ->join('users', 'articles.user_id', '=', 'users.id')
            ->select('articles.*', 'categories.name as category', 'users.firstname as user')
            ->where('articles.del_flg', 0)
            ->orderBy('created_at', 'desc')
            ->get();
		return View::make('article.articles', array('articles' => $articles));
	}

	public function subArticles($subart) {
		$articles = DB::table('articles')
            ->join('categories', 'articles.category_id', '=', 'categories.id')
            ->join('users', 'articles.user_id', '=', 'users.id')
            ->select('articles.*', 'categories.name as category', 'users.firstname as user')
            ->where('articles.del_flg', 0)
            ->where('name', $subart)
            ->orderBy('created_at', 'desc')
            ->get();
		return View::make('article.articles', array('articles' => $articles, 'subArt' => $subart));
	}

	public function viewArticle($slug) {
		$article = Article::where('slug', $slug)->first();
		$article = DB::table('articles')
            ->join('categories', 'articles.category_id', '=', 'categories.id')
            ->join('users', 'articles.user_id', '=', 'users.id')
            ->select('articles.*', 'categories.name as category', 'users.firstname as user')
            ->where('articles.del_flg', 0)
            ->where('slug', $slug)
            ->first();
        Article::where('id', $article->id)->update(array('view' => $article->view + 1));
		return View::make('article.view-article', array('article' => $article));
	}

	public function adminArticles()
	{
		$articles = DB::table('articles')
            ->join('categories', 'articles.category_id', '=', 'categories.id')
            ->join('users', 'articles.user_id', '=', 'users.id')
            ->select('articles.*', 'categories.name as category', 'users.firstname as user')
            ->where('articles.del_flg', '0')
            ->orderBy('created_at', 'desc')
            ->get();
		return View::make('article.admin-articles', array('articles' => $articles));
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
			// dd($validator);
			return Redirect::to('admin/add-article')->withErrors($validator);
		} else {
			return View::make('article.add-article', array('categories' => $categories));
		}
	}

	public function adminEditArticle($id) {
		$article = Article::find($id);
		if (!$article) {
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
			
			$article->title = Input::get('title');
			$article->summary = Input::get('summary');
			if ($imageUrl != '')
				$article->image_url = $imageUrl;
			$article->content = Input::get('content');
			$article->category_id = Input::get('category');
			$article->act_flg = Input::get('savePublish', '0');
			$article->user_id = Auth::user()->id;
			$article->slug = Helpers::getSlug($article->title, $article);
			$article->save();
			return Redirect::to('admin/articles')->with('success','Saved');
		} else {
			$categories = Category::all();
			return View::make('article.edit-article', array('article'=>$article, 'categories' => $categories));
		}
	}

	public function adminDeleteArticle($id) {
		// Article::destroy($id);
		Article::where('id', $id)->update(array('del_flg' => 1));
		return Redirect::to('admin/articles')->with('success','Deleted');
	}
}