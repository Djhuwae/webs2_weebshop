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
use App\Cart;

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

Route::get('/cart', function(){
    return view('cart');
});

Route::get('/add-to-cart/{id}',[
    'uses' => 'ShoppingCartController@getAddToCart',
    'as' => 'addToCart'
]);

Route::get('/reduce/{id}',[
   'uses' =>  'ShoppingCartController@getReducedByOne',
    'as' => 'reducedByOne'
]);

Route::get('/remove/{id}',[
    'uses' =>  'ShoppingCartController@getRemoveItem',
    'as' => 'removeItem'
]);

Route::get('/shoppingcart',[
    'uses' => 'ShoppingCartController@getCart',
    'as' => 'shoppingCart'
]);

Route::get('/checkout', [
   'uses' => 'ShoppingCartController@getCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'
]);

Route::post('/checkout', [
    'uses' => 'ShoppingCartController@postCheckout',
    'as' => 'checkout'
]);

Route::get('/profile',[
    'uses' => 'UserController@getProfile',
    'as' => 'auth.profile',
    'middleware' => 'auth'
    ]);

Route::get('/itemList', 'ProductListController@index');

Route::get('/itemList/{category}', 'ProductListController@showCategory');

Route::get('/itemList/{category}/{subcategory}', 'ProductListController@showSubcategory');

Route::get('/itemList/{category}/{subcategory}/{product}', 'ProductListController@showProduct');


Route::get('/cms/products', 'ProductController@index');

Route::get('/cms/products/create', 'ProductController@createPage');

Route::post('/cms/products', 'ProductController@store');

Route::get('/cms/products/{product}/edit', 'ProductController@edit');

Route::post('/cms/products/{product}/edit', 'ProductController@update');

Route::get('/cms/products/{product}/delete', 'ProductController@destroy');


Route::get('/cms/categories', 'CategoryController@index');

Route::get('/cms/categories/create', 'CategoryController@create');

Route::post('/cms/categories', 'CategoryController@store');

Route::get('/cms/categories/{category}/edit', 'CategoryController@edit');

Route::post('/cms/categories/{category}/edit', 'CategoryController@update');

Route::get('/cms/categories/{category}/delete', 'CategoryController@destroy');



Route::get('/cms/subcategories/create', 'SubcategoryController@create');

Route::post('/cms/subcategories', 'SubcategoryController@store');

Route::get('/cms/subcategories/{subcategory}/edit', 'SubcategoryController@edit');

Route::post('/cms/subcategories/{subcategory}/edit', 'SubcategoryController@update');

Route::get('/cms/subcategories/{subcategory}/delete', 'SubcategoryController@destroy');


Route::get('/', ['as' => 'home', 'uses'=> 'HomeController@getMenu']);
View::composer('layouts.menu', function($view)
{
    $view->with(['categories' => \App\Category::all() ,'subcategories' => \App\Subcategory::all()]);
});
View::composer('layouts.menu2', function($view)
{
    $view->with(['categories' => \App\Category::all()]);
});