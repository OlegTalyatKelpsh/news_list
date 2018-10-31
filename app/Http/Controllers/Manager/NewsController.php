<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;
use App\Category;

class NewsController extends Controller
{
    

public function index()
    {
      $news = News::all();

        return view('manager.news.index', ['news'=>$news]);
      
    }


     public function create()
    {
        $categories = Category::pluck('title', 'id')->all();
      
        return view('manager.news.create', compact('categories'));
    }





     public function store(Request $request)
    {
        $this->validate($request, [
            'title' =>'required',
            'content'   =>  'required',
            'date'  =>  'required',
           
        ]);

       News::create($request->all());
      return redirect()->route('news.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        $categories = Category::pluck('title', 'id')->all();
      

        return view('manager.news.edit', compact(
            'categories',
            'news'
        ));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' =>'required',
            'content'   =>  'required',
            'date'  =>  'required',
            ]);

        $news = News::find($id);
        $news->update($request->all());
       

        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      News::find($id)->delete();
      return redirect()->route('news.index');
    }

}
