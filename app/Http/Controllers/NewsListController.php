<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Category;

class NewsListController extends Controller
{
    
        public function index()
    {
       
    	// $news = News::paginate(2);

$news = News::all()->sortByDesc('date');//->paginate(2);

    	// foreach ($news as  $value) {
     	//$news = $news_not_sort->sortByDesc('date');
    	// }

    	//dd($news);
        //$news->sortBy('id');
        //$news = collect(News::paginate(3))->sortByDesc('date');
    	return view('pages.index',['news'=>$news ]);
    }


     public function show($id)
    {
    	$news = News::where('id', $id)->firstOrFail();

    	
    	return view('pages.show', compact('news'));
    }


    public function category($id)
    {
        $category = Category::where('id', $id)->firstOrFail();

        $news= $category->news()->paginate(2);

        return view('pages.list', ['news'  =>  $news]);   
    }

      
    
}
