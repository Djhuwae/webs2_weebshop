<?php



// Home
Breadcrumbs::register('home', function ($breadcrumbs) {
    $breadcrumbs->push('Home', route('home'));
});

// Home > About
Breadcrumbs::register('about', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('About', route('about'));
});

// Home > itemlist
Breadcrumbs::register('itemList', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Itemlist', route('itemList'));
});

// Home > itemlist > [Category]
Breadcrumbs::register('category', function ($breadcrumbs, $category) {
    $breadcrumbs->parent('itemList');
    $breadcrumbs->push($category->name, route('category', $category->id));
});

// Home > itemlist > [Category] > [subcategory]
Breadcrumbs::register('subcategory', function ($breadcrumbs, $subcategory) {
    $breadcrumbs->parent('category', $subcategory->category);
    $breadcrumbs->push($subcategory->name, route('subcategory', $subcategory->id));
});

// Home > itemlist > [Category] > [subcategory] > product
Breadcrumbs::register('product', function ($breadcrumbs, $product) {
    $breadcrumbs->parent('subcategory', $product->subcategory);
    $breadcrumbs->push($product->name, route('product', $product->id));
});