<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Request;

class ArticlesController extends Controller {

	public function index() 
	{
		// $articles = Article::latest('published_at')->where('published_at', '<=', Carbon::now())->get();
		$articles = Article::latest('published_at')->unpublished()->get();
		return view('articles.index', compact('articles'));
	}

	public function show($id)
	{
		$article = Article::findOrFail($id);

		//dd($article); 
		//shows value in browser



		return view('articles.show', compact('article'));
	}

	public function create() 
	{
		return view('articles.create');
	}

	public function store() 
	{

		Article::create(Request::all());

		return redirect('articles');
	}

}
