<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Category;
use \App\Product;
use DaveJamesMiller\Breadcrumbs;

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
        $data['breadcrumbs'] = Breadcrumbs::generate();
        return view('home', $data);
    }

    public function getMenu()
    {
        $categories = Category::all();
        $products = Product::all();

        return view('home', compact('categories', 'products'));
    }
}
