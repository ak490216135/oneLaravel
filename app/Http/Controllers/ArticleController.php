<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ArticleController extends Controller
{
	public function index(){
		return view('article/index');
	}
	public function create(){
		return view('article/create');
	}
}