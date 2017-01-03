<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;

class IndexController extends Controller
{
	// 首页
	public function index(){
		// 所有文章
		$article = DB::table('article')->orderBy('id', 'desc')->paginate(10);
		foreach ($article as $k => $v) {
			$article[$k]->date = date('Y-m-d H:i:s', $v->date);
		}
		return view('index')->with('article', $article);
	}
}
