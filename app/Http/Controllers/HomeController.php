<?php

namespace App\Http\Controllers;


use \App\Category;
use \App\Product;
use \App\Subcategory;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $categories = Category::all();
        $subcategories = Subcategory::all();
        $products = Product::paginate(6);
        return view('home',compact('products', 'categories','subcategories'));
    }

    public function getMenu()
    {
        $categories = Category::all();
        $products = Product::all();

        return view('home', compact('categories', 'products'));
    }


}
