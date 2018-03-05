<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Category;
use \App\Subcategory;

class ProductController extends Controller
{
    public function index(){
        $categories = Category::all();
        $subcategories = Subcategory::all();
        return view('cms', compact('categories', 'subcategories'));
    }
}
