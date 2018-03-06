@extends('layouts.default')


@section('content')
    <h1>Producten beheren</h1>

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
                        <button><a href="/cms/products/{{$product->id}}/edit">Wijzigen</a></button>
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection