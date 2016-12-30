<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Article;

class ArticleController extends Controller
{
	public function index(){
		return view('article/index');
	}
	public function create(){
		return view('article/create');
	}
	public function store(Requests\StoreArticleRequest $request){

		$input = $request->all();

		var_dump($input);

	    $article_insert = DB::table('article')->insert(
	    	[
	    		'title' => $input['title'],
	    		'description' => $input['description'],
	    		'date' => time(),
	    		'content' => $input['content']
	    	]
	    );

	    if ($article_insert) {
	        return redirect('/');
	    } else {
	        return redirect()->back()->withInput()->withErrors('保存失败！');
	    }
	}
	public function show($id){
		$article = DB::table('article')->where('id', $id)->first();
		$article->date = date('Y-m-d H:i:s', $article->date);
		return view('article/show')->with('article', $article);
	}
}