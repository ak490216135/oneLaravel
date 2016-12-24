<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// 带参数过滤条件的路由
Route::get('/{id?}', function ($id) {
    return view('welcome')->with('id', $id);
})->where('id', '[0-9]+');

// 带参数的路由
/*Route::get('/{id?}', function ($id = '您没有输入参数') {
    return view('welcome')->with('id', $id);
});*/

// 命名路由 跳转路由 自动跳转到 test
/*Route::get('/', function () {
	$url = route('test');
    return redirect()->route('test');
});

Route::any('/test', function(){
	return 'mytest';
})->name('test');*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

/*Route::group(['middleware' => ['web']], function () {
    //
});*/
