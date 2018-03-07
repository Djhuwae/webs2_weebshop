@extends('layouts.default')


@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">CMS</li>
            <li class="breadcrumb-item"><a href="/cms/categories">Categories and subcategories</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create category</li>
        </ol>
    </nav>

    <h1>Manage categories</h1>

    <div class="col-sm-8">
        <h2>Add category</h2>
        <hr>

        <form method="POST" action="/cms/categories">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="'form-control" id="name" name="name" required>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>

@endsection