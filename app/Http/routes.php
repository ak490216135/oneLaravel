<?php
Route::group(['middleware' => ['web']], function () {

	Route::any('/', 'IndexController@index');
	Route::any('/login', 'LoginController@index');
	Route::any('/logout', 'LoginController@logout');
	Route::resource('article', 'ArticleController');

});