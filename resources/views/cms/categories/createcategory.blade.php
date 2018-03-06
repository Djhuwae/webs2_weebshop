@extends('layouts.default')


@section('content')
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