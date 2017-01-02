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
	// 添加
	public function create(){
		return view('article/create');
	}
	// 存储
	public function store(Requests\StoreArticleRequest $request){

		$input = $request->all();
	    $article_insert = DB::table('article')->insert(
	    	[
	    		'title' => $input['title'],
	    		'description' => $input['description'],
	    		'date' => time(),
	    		'content' => $input['content']
	    	]
	    );
	    if ($article_insert) {
	    	// 存储成功
	        return redirect('/');
	    } else {
	    	// 存储失败
	        return redirect('/')->with('error', '存储失败！');
	    }
	}
	// 修改页面
	public function edit($id){
		$article = DB::table('article')->where('id', $id)->first();
		$article->date = date('Y-m-d H:i:s', $article->date);
		return view('article/edit')->with('article', $article);
	}
	// 修改提交
	public function update(Requests\StoreArticleRequest $request, $id){
		$input = $request->all();
		$article = DB::table('article')->where('id', $id)->update(
			[ 
				'title' => $input['title'],
				'tag' => $input['tag'],
				'description' => $input['description'],
				'content' => $input['content']
			]
		);
        if ($article) {
            return redirect('/');
        } else {
            return redirect()->back()->withInput()->withErrors('更新失败！');
        }
	}
	// 单页展示
	public function show($id){
		$article = DB::table('article')->where('id', $id)->first();
		$article->date = date('Y-m-d H:i:s', $article->date);
		return view('article/show')->with('article', $article);
	}
	// 删除
	public function destroy($id){
	    $article = DB::table('article')->where('id', $id)->delete();
	    return redirect('/')->with('error', '已删除！');
	}
}