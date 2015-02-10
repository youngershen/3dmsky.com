<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//Route::controller('admin', 'Admin\IndexController');

# /admin/*

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){

	Route::get('/', ['as' => 'admin_get_index', 'uses' => 'IndexController@getIndex']);
	Route::get('articles', ['as' => 'admin_get_articles', 'uses' => 'IndexController@getArticles']);
	Route::get('add-article', ['as' => 'admin_get_add_article', 'uses' => 'IndexController@getAddArticle']);
	Route::get('tags', ['as' => 'admin_get_tags', 'uses' => 'IndexController@getTags']);
	Route::get('categories', ['as' => 'admin_get_categories', 'uses' => 'IndexController@getCategories']);
	Route::get('comments', ['as' => 'admin_get_comments', 'uses' => 'IndexController@getComments']);
	Route::get('users', ['as' => 'admin_get_users', 'uses' => 'IndexController@getUsers']);
	Route::get('systems', ['as' => 'admin_get_systems', 'uses' => 'IndexController@getSystems']);

});

# /cms/*

Route::group(['prefix' => 'cms', 'namespace' => 'Cms'], function(){

	Route::group(['prefix' => 'category'], function(){

		Route::get('index',  ['as' => 'cms_category_index',  'uses' => 'CategoryController@index']);
		Route::get('create', ['as' => 'cms_category_create', 'uses' => 'CategoryController@create']);
		Route::post('store', ['as' => 'cms_category_store',  'uses' => 'CategoryController@store']);
		Route::get('all', ['as' => 'cms_category_all', 'uses' => 'CategoryController@all']);

	});
});
