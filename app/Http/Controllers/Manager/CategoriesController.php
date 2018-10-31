<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;
use App\Category;

class CategoriesController extends Controller
{
    public function index()
    {
      $categories = Category::all();

        return view('manager.categories.index', ['categories'=>$categories]);
      
    }


     public function create()
    {
        $categories = Category::pluck('title', 'id')->all();
      // dd($categories);

        return view('manager.categories.create', compact('categories'));
    }


     public function store(Request $request)
    {
      $this->validate($request, [
        'title' =>  'required' //обязательно
      ]);

      Category::create($request->all());
      return redirect()->route('categories.index');
    }



     public function edit($id)
    {

      
      $category = Category::find($id);
     
      return view('manager.categories.edit', ['category'=> $category]);
    }

    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'title' =>  'required' //обязательно
      ]);

      $category = Category::find($id);

      $category->update($request->all());

      return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
      Category::find($id)->delete();
      return redirect()->route('categories.index');
    }


}
