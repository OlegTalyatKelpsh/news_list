<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
      Route::get('/', 'NewsListController@index')->name('index');
      Route::get('/category/{id}', 'NewsListController@category')->name('category.show');
      Route::get('/news/{id}', 'NewsListController@show')->name('news.show');




//crud manager

Route::group(['prefix'=>'manager','namespace'=>'Manager'], function(){


	Route::get('/', 'DashboardController@index')->name('main.manager');
	
// route news

	Route::get('/news', 'NewsController@index')->name('news.index');
	Route::get('/news/create', 'NewsController@create')->name('news.create');
    Route::post('/news/store', 'NewsController@store')->name('news.store');
	Route::get('/news/edit/{id}', 'NewsController@edit')->name('news.edit');
    Route::get('/news/destroy/{id}', 'NewsController@destroy')->name('news.destroy');
    Route::post('/news/update/{id}', 'NewsController@update')->name('news.update'); 



// route category

	Route::get('/categories', 'CategoriesController@index')->name('categories.index');
	Route::get('/categories/create', 'CategoriesController@create')->name('categories.create');
	Route::post('/categories/store', 'CategoriesController@store')->name('categories.store');
	Route::get('/categories/edit/{id}', 'CategoriesController@edit')->name('categories.edit');
    Route::get('/categories/destroy/{id}', 'CategoriesController@destroy')->name('categories.destroy');
    Route::post('/categories/update/{id}', 'CategoriesController@update')->name('categories.update');      
	
});