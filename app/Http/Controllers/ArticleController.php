<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;

class ArticleController extends Controller
{
	public function index(){
		return view('article/index');
	}
	public function create(){
		return view('article/create');
	}
	public function store(){
		return view('article/store');
	}
	public function show($id){
		$article = DB::table('article')->where('id', $id)->first();
		$article->date = date('Y-m-d H:i:s', $article->date);
		return view('article/show')->with('article', $article);
	}
}