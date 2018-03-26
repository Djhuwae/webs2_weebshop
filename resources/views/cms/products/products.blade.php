@extends('layouts.default')


@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">CMS</li>
            <li class="breadcrumb-item active" aria-current="page">Products</li>
        </ol>
    </nav>

    <h1>Manage products</h1>

    @if(Session::has('success'))
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                <div class="alert alert-success" role="alert">{!! session('success') !!}</div>
            </div>
        </div>
    @elseif(Session::has('fail'))
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                <div class="alert alert-warning" role="alert">{!! session('fail') !!}</div>
            </div>
        </div>
    @endif
    <a class="btn btn-success" href="/cms/products/create">Add product</a>

    @foreach($products->chunk(3) as $productChunk )
        <div class="row">
            @foreach($productChunk as $product)
                <div class="col-lg-3 col-md-6 col-sm-6 col-lg-offset-1 col-md-offset-4 col-sm-offset-3">
                    <div class="card w-75 h-100">
                        <a href="/itemList/{{$product->categories_id}}/{{$product->subcategories_id}}/{{$product->id}}"><img class="card-img-top img-fluid productimg" src={{$product->imageurl}} alt=""></a>
                        <div class="card-block">
                            <h4 class="card-title"><a href="/itemList/{{$product->categories_id}}/{{$product->subcategories_id}}/{{$product->id}}">{{$product->name }}</a></h4>
                            <h5>$ {{ $product->price }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                        </div>
                        <div class="card-footer">
                            <button><a href="/cms/products/{{$product->id}}/edit">Edit</a></button>
                            <button class="btn btn-danger m-2"><a href="/cms/products/{{$product->id}}/delete" >Delete</a></button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- /.row -->
    @endforeach
@endsection