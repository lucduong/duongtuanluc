<?php
use Predis\Helpers;

class ProductController extends BaseController {

	public function index() {
		$products = DB::table('products')
            ->select('products.*')
            ->where('products.act_flg', 1)
            ->orderBy('created_at', 'desc')
            ->get();
		return View::make('product.products', array('products' => $products));
	}

	public function viewProduct($slug){
		$product = Product::where('slug', $slug)->first();
		$product = DB::table('products')
            ->where('products.act_flg', 1)
            ->where('slug', $slug)
            ->first();
        Product::where('id', $product->id)->update(array('view' => $product->view + 1));
		return View::make('product.view-product', array('product' => $product));
	}

	public function adminProducts() {
		$data = Product::all();
		return View::make('product.admin-products', array('products' => $data));
	}

	public function adminAddProduct() {
		if (Request::isMethod('POST')) {
			$rules = array('title' => 'required');
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
				$image_path = base_path().'/media/products/'.date('Y-m');
				if(!file_exists($image_path)){
					// create folder if it is not exist
					mkdir($image_path);
					$image->move('media/products/'.date('Y-m').'/',$file_name_final);

				}
				else{
					$image->move('media/products/'.date('Y-m').'/',$file_name_final);
				}

				$imageUrl = 'media/products/' . date('Y-m').'/'.$file_name_final;
			}

			if($validator->passes()){
				$product = new Product();
				$product->title = Input::get('title');
				$product->image_url = $imageUrl;
				$product->content = Input::get('content');
				$product->act_flg = Input::get('savePublish', '0');
				$product->slug = Helpers::getSlug($product->title, $product);
				$product->save();
				return Redirect::to('admin/products')->with('success','Saved');
			}
			return Redirect::to('admin/add-product')->withErrors($validator);
		} else {
			return View::make('product.admin-addproduct');
		}
	}

	public function adminEditProduct($id){
		$product = Product::find($id);
		if (!$product) {
			throw new Exception("Product does not exist.", 1);
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
				$image_path = base_path().'/media/products/'.date('Y-m');
				if(!file_exists($image_path)){
					// create folder if it is not exist
					mkdir($image_path);
					$image->move('media/products/'.date('Y-m').'/',$file_name_final);

				}
				else{
					$image->move('media/products/'.date('Y-m').'/',$file_name_final);
				}

				$imageUrl = 'media/products/' . date('Y-m').'/'.$file_name_final;
			}
			
			$product->title = Input::get('title');
			$product->content = Input::get('content');
			if ($imageUrl != '')
				$product->image_url = $imageUrl;
			$product->act_flg = Input::get('savePublish', '0');
			$product->slug = Helpers::getSlug($product->title, $product);
			$product->save();
			return Redirect::to('admin/products')->with('success','Updated');
		} else {
			return View::make('product.admin-editproduct', array('product' => $product));
		}
	}

	public function adminDeleteProduct($id){
		Product::destroy($id);
		return Redirect::to('admin/products')->with('success','Deleted');
	}
}