@extends('layouts.default')


@section('content')
    <h1>Manage categories and subcategories</h1>
        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">{!! session('success') !!}</div>
        @elseif(Session::has('fail'))
            <div class="alert alert-warning" role="alert">{!! session('fail') !!}</div>
        @endif
    <button><a href="/cms/categories/create">Add category</a></button>
    <button><a href="/cms/subcategories/create">Add subcategory</a></button>

    @foreach($categories as $category)
        <ul>
            <li >{{$category->name}}<span class="caret"></span>
                <button><a href="/cms/categories/{{$category->id}}/edit">Edit</a></button>
                <button class="btn btn-danger m-2"><a href="/cms/categories/{{$category->id}}/delete" >Delete</a></button>
                <ul  role="menu" >
                    @foreach($subcategories as $subcategory)

                        @if($subcategory->categories_id == $category->id)

                            <li role="presentation">

                                    {{$subcategory->name}}
                                <button><a href="/cms/categories/{{$subcategory->id}}/edit">Edit</a></button>
                                <button class="btn btn-danger m-2"><a href="/cms/categories/{{$subcategory->id}}/delete" >Delete</a></button>
                            </li>


                        @endif

                    @endforeach
                </ul>
            </li>
        </ul>

    @endforeach
@endsection