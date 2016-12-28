<?php
Route::group(['middleware' => ['web']], function () {

	Route::any('/', 'IndexController@index');
	Route::resource('article', 'ArticleController');

});