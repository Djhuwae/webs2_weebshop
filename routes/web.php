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


use Illuminate\Support\Facades\DB;
use App\Category;
use App\Subcategory;
use App\Product;

Auth::routes();

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/itemList', function () {
    $categories = Category::all();
    $subcategories = \App\Subcategory::all();
    return view('itemList', compact('categories', 'subcategories'));
});


Route::get('/itemList/{category}', function ($id) {
    $category = Category::where('name', $id)->first();
    $products = Product::all();
    $subcategories = Subcategory::all();
    return view('category', compact('category', 'subcategories', 'products'));
});

Route::get('/itemList/{category}/{subcategory}', function ($category, $subcategory) {
    $category = Category::where('name', $category)->first();
    $products = Product::all();
    $subcategory = Subcategory::where('name', $subcategory)->first();
    return view('subcategory', compact('category', 'subcategory', 'products'));
});

Route::get('/itemList/{category}/{subcategory}/{product}', function ($category, $subcategory, $product) {
    $category = Category::where('name', $category)->first();
    $product = Product::where('id', $product)->first();
    $subcategory = Subcategory::where('name', $subcategory)->first();
    return view('product', compact('category', 'subcategory', 'product'));
});


Route::get('/cms', function () {
    return view('cms');
});

Route::get('/', ['as' => 'home', 'uses'=> 'HomeController@getMenu']);
View::composer('layouts.menu', function($view)
{
    $view->with(['categories' => \App\Category::all() ,'subcategories' => \App\Subcategory::all()]);
});
View::composer('layouts.menu2', function($view)
{
    $view->with(['categories' => \App\Category::all()]);
});