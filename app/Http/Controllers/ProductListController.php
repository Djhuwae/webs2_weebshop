<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ProductListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($category = null,$subCategory = null){
        $subCategories = App\Subcategory::where("id",$category->subcategories_id)->get();
        return View("pages/productlist",[ "category" => $category, "subcategory" => $subCategory, "subCategories" => $subcategories, "products" => $products]);

    }
}
