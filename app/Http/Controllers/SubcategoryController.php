<?php

namespace App\Http\Controllers;

use \App\Subcategory;
use \App\Category;
use Illuminate\Http\Request;


class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('cms.subcategories.createsubcategory', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $categories = Category::all();

        $subcategory = new Subcategory;
        $subcategory->name = request('name');
        foreach($categories as $category){
            if($category->name == request('cat')){
                $subcategory->categories_id = $category->id;
            }
        }
        $subcategory->save();

        return redirect('/cms/categories')->with('success', 'Subcategory was added succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $subcategory = Subcategory::findOrFail($id);
        return view('cms.subcategories.editsubcategory', compact('subcategory', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcategory $subcategory)
    {
        $categories = Category::all();

        $subcategory->name = request('name');
        foreach($categories as $category){
            if($category->name == request('cat')){
                $subcategory->categories_id = $category->id;
            }
        }
        $subcategory->save();

        return redirect('cms/categories')->with('success', 'Subcategory was updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcategory $subcategory)
    {
        $subcategory->delete();
        return redirect('/cms/categories')->with('success', 'Subcategory deleted succesfully');
    }
}
