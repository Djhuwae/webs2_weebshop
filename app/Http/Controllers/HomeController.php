<?php

namespace App\Http\Controllers;


use \App\Category;
use \App\Product;


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
    {
        $products = Product::all();
        return view('home', ['products' => $products]);
    }

    public function getMenu()
    {
        $categories = Category::all();
        $products = Product::all();

        return view('home', compact('categories', 'products'));
    }


}
