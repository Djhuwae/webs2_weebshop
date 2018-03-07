@extends('layouts.default')


@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">CMS</li>
            <li class="breadcrumb-item"><a href="/cms/categories">Categories and subcategories</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create subcategory</li>
        </ol>
    </nav>

    <h1>Manage categories and subcategories</h1>

    <div class="col-sm-8">
        <h2>Add category</h2>
        <hr>

        <form method="POST" action="/cms/subcategories">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="'form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="cat">Category</label>
                <select id="cat" name="cat" class="custom-select">
                    <option selected>Choose a category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->name }}" >{{ ucfirst($category->name) }}</option>

                    @endforeach

                </select>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>

@endsection