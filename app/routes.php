<?php

Route::get('/', 'HomeController@home');

Route::get('logout', function() {
    Auth::logout();
    return Redirect::to('/');
});

Route::get('/blueprint', function(){
	return View::make('blp.index');
});

Route::get('contact.html', 'ContactController@index');
Route::get('about.html', 'AboutController@index');
Route::post('send-contact', 'ContactController@sendContact');


// Subscribes (S)
Route::post('subscribe', 'SubscribeController@subscribe');
// Subscribes (E)

// Articles (S)
Route::get('article/{slug}', 'ArticleController@viewArticle');
Route::get('articles', 'ArticleController@index');
Route::get('articles/{subart}', 'ArticleController@subArticles');
// Articles (E)

// Products (S)
Route::get('product/{slug}', 'ProductController@viewProduct');
Route::get('product.html', 'ProductController@index');
// Products (E)

// Recruiting (S) Job
Route::get('recruiting.html', 'JobController@index');
Route::get('recruiting/{slug}', 'JobController@viewJob');
// Recruiting (E) Job

// Services (S)
Route::get('service.html', 'ServiceController@index');
// Services (E)

Route::group(array('before' => 'auth'), function(){
	Route::get('profile/{username}', 'UserController@profile');
});

/**
* Administration
*/
Route::group(array('before' => 'auth|admin'), function(){
	Route::get('admin', 'AdminController@index');
	// Contacts (S)
	Route::get('admin/contacts', 'ContactController@adminIndex');
	Route::get('admin/delete-contact/{id}', 'ContactController@adminDelContact');
	Route::get('admin/view-contact/{id}', 'ContactController@adminViewContact');
	Route::get('admin/compose-msg', 'ContactController@adminComposeMsg');
	// Contacts (E)

	// Contact Info (S)
	Route::match(array('GET', 'POST'), 'admin/info', 'DounetController@adminEditContact');
	// Contact Info (E)

	// Abouts (S)
	Route::get('admin/abouts', 'AboutController@adminAbout');
	Route::match(array('GET', 'POST'), 'admin/add-about', 'AboutController@adminAddAbout');
	Route::match(array('GET', 'POST'), 'admin/edit-about/{id}', 'AboutController@adminEditAbout');
	Route::get('admin/delete-about/{id}', 'AboutController@adminDeleteAbout');
	// Abouts (E)

	// Articles (S)
	Route::get('admin/articles', 'ArticleController@adminArticles');
	Route::match(array('GET', 'POST'), 'admin/add-article', 'ArticleController@adminAddArticle');
	Route::match(array('GET', 'POST'), 'admin/edit-article/{id}', 'ArticleController@adminEditArticle');
	Route::get('admin/delete-article/{id}', 'ArticleController@adminDeleteArticle');
	// Articles (E)

	// Products (S)
	Route::get('admin/products', 'ProductController@adminProducts');
	Route::match(array('GET', 'POST'), 'admin/add-product', 'ProductController@adminAddProduct');
	Route::get('admin/delete-product/{id}', 'ProductController@adminDeleteProduct');
	Route::match(array('GET', 'POST'), 'admin/edit-product/{id}', 'ProductController@adminEditProduct');
	// Products (E)

	// Sliders (S)
	Route::get('admin/sliders', 'SliderController@adminIndex');
	Route::match(array('GET', 'POST'), 'admin/add-slider', 'SliderController@adminAddSlider');
	Route::get('admin/delete-slider/{id}', 'SliderController@adminDeleteSlider');
	Route::match(array('GET', 'POST'), 'admin/edit-slider/{id}', 'SliderController@adminEditSlider');
	// Sliders (E)

	// Categories (S)
	Route::get('admin/categories', 'CategoriesController@adminCategories');
	// Categories (E)

	// Users (S)
	Route::get('admin/users', 'UserController@adminUserIndex');
	Route::match(array('GET', 'POST'), 'admin/add-user', 'UserController@adminAddUser');
	Route::match(array('GET', 'POST'), 'admin/edit-user/{id}', 'UserController@adminEditUser');
	Route::get('admin/delete-user/{id}', 'UserController@adminDeleteUser');
	// Users (E)

	// Subscribers (S)
	Route::get('admin/subscribes', 'SubscribeController@adminSubscribe');
	// Subscribers (E)

	// Menu (S)
	Route::get('admin/menus', 'MenuController@adminIndex');
	Route::match(array('GET', 'POST'), 'admin/add-menu', 'MenuController@adminAddMenu');
	Route::get('admin/delete-menu/{id}', 'MenuController@adminDeleteMenu');
	Route::match(array('GET', 'POST'), 'admin/edit-menu/{id}', 'MenuController@adminEditMenu');
	// Menu (E)

	// Services (S)
	Route::get('admin/services', 'ServiceController@adminIndex');
	Route::match(array('GET', 'POST'), 'admin/add-service', 'ServiceController@adminAddService');
	Route::get('admin/delete-service/{id}', 'ServiceController@adminDeleteService');
	Route::match(array('GET', 'POST'), 'admin/edit-service/{id}', 'ServiceController@adminEditService');
	// Services (E)

	// Jobs (S)
	Route::get('admin/jobs', 'JobController@adminIndex');
	Route::get('admin/job-type', 'JobController@adminJobTypes');
	Route::get('admin/job-type/{id}', 'JobController@adminEditJobType');
	Route::post('admin/add-jobtype', 'JobController@adminAddJobType');
	Route::post('admin/edit-jobtype/{id}', 'JobController@adminEditJobType');
	Route::post('admin/delete-jobtype', 'JobController@adminDeleteJobType');
	Route::match(array('GET', 'POST'), 'admin/add-job', 'JobController@adminAddJob');
	Route::get('admin/delete-job/{id}', 'JobController@adminDeleteJob');
	Route::match(array('GET', 'POST'), 'admin/edit-job/{id}', 'JobController@adminEditJob');
	// Jobs (E)

	// elFinder (S)
	Route::get('elfinder', 'Barryvdh\Elfinder\ElfinderController@showIndex');
    Route::any('elfinder/connector', 'Barryvdh\Elfinder\ElfinderController@showConnector');
    Route::get('elfinder/ckeditor4', 'Barryvdh\Elfinder\ElfinderController@showCKeditor4');
    // elFinder (E)
});

Route::group(array('before'=>'guest'),function(){
	Route::match(array('GET', 'POST'), 'login', 'HomeController@login');
});


// Event::listen('illuminate.query', function($sql) {
//     Log::info($sql);
// });