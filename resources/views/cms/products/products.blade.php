@extends('layouts.default')


@section('content')
    {{--@if($flash = session('message'))--}}
        {{--<div id="flash-message" class="alert alert-success" role="alert">--}}
            {{--{{$flash}}--}}
        {{--</div>--}}
    {{--@endif--}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">CMS</li>
            <li class="breadcrumb-item active" aria-current="page">Products</li>
        </ol>
    </nav>

    <h1>Producten beheren</h1>

    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">{!! session('success') !!}</div>
    @elseif(Session::has('fail'))
        <div class="alert alert-warning" role="alert">{!! session('fail') !!}</div>
    @endif
    <button><a href="/cms/products/create">Toevoegen</a></button>


    @foreach($products as $product)
        <div class="row">
            <div class="col-lg-3 col-md-1 mb-2">
                <div class="card h-100 ">
                    <img class="card-img-top img-fluid" src={{$product->imageurl }} alt="">
                    <div class="card-block">
                        <h4 class="card-title">{{$product->name }}</h4>
                        <h5>$ {{ $product->price }}</h5>
                        <p class="card-text">{{$product->description }}</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        <button><a href="/cms/products/{{$product->id}}/edit">Edit</a></button>
                        <button class="btn btn-danger m-2"><a href="/cms/products/{{$product->id}}/delete" >Delete</a></button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection