@extends('layouts.default')


@section ('content')
    <h1>{{ $category->name }}</h1>

                @foreach($subcategories as $subcategory)

                    @if($subcategory->categories_id == $category->id)
                        <ul class="list-group">
                            <li role="presentation" class="list-group-item"><a href="/itemList/{{$category->id}}/{{$subcategory->id}}" role="menuitem">

                                    {{$subcategory->name}}
                                    @foreach($products as $product)
                                        @if($product->subcategories_id == $subcategory->id)
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6 mb-4">
                                                    <div class="card h-100">
                                                        <a href="/itemList/{{$category->id}}/{{$subcategory->id}}/{{$product->id}}"><img class="card-img-top img-fluid" src={{$product->imageurl }} alt=""></a>
                                                        <div class="card-block">
                                                            <h4 class="card-title"><a href="/itemList/{{$category->id}}/{{$subcategory->id}}/{{$product->id}}">{{$product->name }}</a></h4>
                                                            <h5>$ {{ $product->price }}</h5>
                                                        </div>
                                                        <div class="card-footer">
                                                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach


                                </a></li>
                        </ul>

                    @endif

                @endforeach
@endsection

