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
use Illuminate\Support\Facades\Input;

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

Route::get('/search', function(){
    return view('search');
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

Route::any('/search',function(){
    $q = Input::get ( 'q' );
    $product = Product::where('name','LIKE','%'.$q.'%')->orWhere('description','LIKE','%'.$q.'%')->get();
    if(count($product) > 0)
        return view('search')->withDetails($product)->withQuery ( $q );
    else return view ('search')->withMessage('No Details found. Try to search again !');
});

Route::prefix('itemList')->group(function () {
    Route::get('/', 'ProductListController@index');

    Route::get('/{category}', 'ProductListController@showCategory');

    Route::get('/{category}/{subcategory}', 'ProductListController@showSubcategory');

    Route::get('/{category}/{subcategory}/{product}', 'ProductListController@showProduct');
});


Route::group(['prefix'=>'cms', 'middleware'=> ['auth', 'admin']], function(){


    Route::prefix('products')->group(function () {
        Route::get('/',[
            'uses' => 'ProductController@index',
            'as' => 'cms.products',
            'middleware' => 'admin'
        ]);

        Route::get('/create', 'ProductController@createPage');

        Route::post('/', 'ProductController@store');

        Route::get('/{product}/edit', 'ProductController@edit');

        Route::post('/{product}/edit', 'ProductController@update');

        Route::get('/{product}/delete', 'ProductController@destroy');
    });


    Route::prefix('categories')->group(function () {
        Route::get('/',[
            'uses' => 'CategoryController@index',
            'as' => 'cms.categories',
            'middleware' => 'admin'
        ]);

        Route::get('/create', 'CategoryController@create');

        Route::post('/', 'CategoryController@store');

        Route::get('/{category}/edit', 'CategoryController@edit');

        Route::post('/{category}/edit', 'CategoryController@update');

        Route::get('/{category}/delete', 'CategoryController@destroy');
    });

    Route::prefix('subcategories')->group(function () {
        Route::get('/create', 'SubcategoryController@create');

        Route::post('/', 'SubcategoryController@store');

        Route::get('/{subcategory}/edit', 'SubcategoryController@edit');

        Route::post('/{subcategory}/edit', 'SubcategoryController@update');

        Route::get('/{subcategory}/delete', 'SubcategoryController@destroy');
    });

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