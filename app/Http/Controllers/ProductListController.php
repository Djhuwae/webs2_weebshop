<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Category;
use App\Subcategory;
use App\Product;

class ProductListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index($category = null,$subCategory = null){
//        $subCategories = App\Subcategory::where("id",$category->subcategories_id)->get();
//        return View("pages/productlist",[ "category" => $category, "subcategory" => $subCategory, "subCategories" => $subcategories, "products" => $products]);
//
//    }
//
    public function index(){
            $categories = Category::all();
            $subcategories = \App\Subcategory::all();
            return view('itemList', compact('categories', 'subcategories'));
    }

    public function showCategory(Category $category){
        $products = Product::all();
        $subcategories = Subcategory::all();
        return view('category', compact('category', 'subcategories', 'products'));
    }

    public function showSubcategory(Category $category, Subcategory $subcategory){
        $products = Product::all();
        return view('subcategory', compact('category', 'subcategory', 'products'));
    }

    public function showProduct(Category $category, Subcategory $subcategory, Product $product){
        return view('product', compact('category', 'subcategory', 'product'));
    }
}
