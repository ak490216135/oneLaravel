<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Session;
use App\Http\Requests;

class LoginController extends Controller
{
	// 登录
	public function index(){
		Session::put('ab.key', 'dd');
		Session::put('ab.we', '321');
		Session::put('hg', 'er44');
		Session::put('nbc', '56s');
		Session::put('xzcvb', 'gfd');

	}
	// 登出
	public function logout(){

		var_dump(Session::get('ab'));
	}
}
