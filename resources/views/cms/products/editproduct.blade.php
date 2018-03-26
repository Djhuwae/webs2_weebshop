@extends('layouts.default')


@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">CMS</li>
            <li class="breadcrumb-item"><a href="/cms/products">Products</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit product</li>
        </ol>
    </nav>

    <h1>Manage products</h1>

    <div class="col-sm-8">
        <h2>Edit product: {!! $product->name !!}</h2>
        <hr>

        <form method="POST" action="/cms/products/{{$product->id}}/edit" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="'form-control" id="name" name="name" value="{{$product->name}}">
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" step="0.01" class="'form-control" id="price" name="price" value="{{$product->price}}">
            </div>

            <div class="form-group">
                <label for="desc">Description</label>
                <textarea class="'form-control" id="desc" name="desc">{{$product->description}}</textarea>
            </div>

            <div class="form-group">
                <label for="cat">Category</label>
                <select id="cat" name="cat" class="custom-select">
                    <option selected>Choose a category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->name }}" {{ ($product->categories_id == $category->id ? 'selected' : '') }}>{{ucfirst($category->name)}}</option>

                    @endforeach

                </select>
            </div>

            <div class="form-group">
                <label for="sub">Subcategory</label>
                <select id="sub" name="sub" class="custom-select">
                    <option selected>Choose a subcategory</option>
                    @foreach($subcategories as $subcategory)
                        {{--@if($subcategory->categories_id == $category->id)--}}
                        <option value="{{ $subcategory->name }}" {{$subcategory->categories_id == $category->id ? 'selected': ''}}>{{ ucfirst($subcategory->name) }}</option>
                        {{--@endif--}}
                    @endforeach
                </select>

            </div>

            <div class="form-group">
                <label for="img">Image URL</label>
                <input type="url" class="'form-control" id="img" name="img" value="{{$product->imageurl}}">


            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>

@endsection