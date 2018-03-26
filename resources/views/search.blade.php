@extends('layouts.default')

@section('title','Home - WeebShop')

@section('content')
<div class="container">
@if(isset($details))
    <p> The Search results for  <b> {{ $query }} </b> are :</p>
    <h2>Search Results</h2>

        @foreach($details as $product)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <a href="/itemList/{{$product->categories_id}}/{{$product->subcategories_id}}/{{$product->id}}"><img class="card-img-top img-fluid productimg" src={{$product->imageurl}} alt=""></a>
                    <div class="card-block">
                        <h4 class="card-title"><a href="/itemList/{{$product->categories_id}}/{{$product->subcategories_id}}/{{$product->id}}">{{$product->name }}</a></h4>
                        <h5>$ {{ $product->price }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('addToCart', ['id'=>$product->id ])}}" class="btn btn-success" role="button">Add to Cart</a>
                    </div>
                </div>
            </div>
        @endforeach

    @else
    <p>Sorry their we're no results!</p>

    @endif
    </div>

    @endsection