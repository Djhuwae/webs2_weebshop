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


Auth::routes();

Route::get('/home', function () {
    return view('home');
});
Route::get('/', function () {
    return view('home');
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