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
Route::get('/itemList', 'ProductListController@index');

Route::get('/itemList/{category}', 'ProductListController@showCategory');

Route::get('/itemList/{category}/{subcategory}', 'ProductListController@showSubcategory');

Route::get('/itemList/{category}/{subcategory}/{product}', 'ProductListController@showProduct');


Route::get('/cms/products', 'ProductController@index');

Route::get('/cms/products/create', 'ProductController@createPage');

Route::post('/cms/products', 'ProductController@store');

Route::get('/', ['as' => 'home', 'uses'=> 'HomeController@getMenu']);
View::composer('layouts.menu', function($view)
{
    $view->with(['categories' => \App\Category::all() ,'subcategories' => \App\Subcategory::all()]);
});
View::composer('layouts.menu2', function($view)
{
    $view->with(['categories' => \App\Category::all()]);
});