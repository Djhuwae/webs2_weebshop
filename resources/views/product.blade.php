@extends('layouts.default')


        <!DOCTYPE html>
<html>
<head>
    <title></title>
</head>

<body>
<h1>{{ $product->name }}</h1>


        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <a href="/itemList/{{$category->id}}/{{$subcategory->id}}/{{$product->id}}"><img class="card-img-top img-fluid" src={{$product->imageurl }} alt=""></a>
                    <div class="card-block">
                        <h4 class="card-title"><a href="/itemList/{{$category->id}}/{{$subcategory->id}}/{{$product->id}}">{{$product->name }}</a></h4>
                        <h5>$ {{ $product->price }}</h5>
                        <p class="card-text">{{$product->description }}</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                    </div>
                </div>
            </div>
        </div>






</body>

</html>

