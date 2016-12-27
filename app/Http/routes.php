<?php
Route::any('/', 'IndexController@index');
Route::resource('article', 'ArticleController');