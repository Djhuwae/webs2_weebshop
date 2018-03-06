@extends('layouts.default')


@section('content')
    <h1>Manage categories and subcategories</h1>

    <div class="col-sm-8">
        <h2>Edit category: {!! $category->name !!}</h2>
        <hr>

        <form method="POST" action="/cms/categories/{{$category->id}}/edit" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="'form-control" id="name" name="name" value="{{$category->name}}" required>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>

@endsection