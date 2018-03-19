@extends('layouts.default')

@section('title','Shopping Cart')


@section('content')
    @if(Session::has('cart'))
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-8 container">
                <ul class="list-group">
                    @foreach($products as $product)
                       <li class="list-group-item">
                            <img style="max-height: 64px; max-width: 64px;" src="{{$product['item']['imageurl']}}">
                            <strong>{{ $product['item']['name'] }}</strong>
                            <span class="label label-success">{{ $product['price'] }}</span>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary btn-xs dropdown-toogle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('reducedByOne', ['id' => $product['item']['id']])}}">Reduce by 1</a></li>
                                    <li><a href="{{route('removeItem', ['id' => $product['item']['id']])}}">Reduce All</a></li>
                                </ul>
                            </div>
                            <span class="badge badge-primary badge-pill">{{ $product['qty'] }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3 container">
                <strong>Total: € {{ $totalPrice }}</strong>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3 container">
                <a href="{{route('checkout')}}" type="button" class="btn btn-success">Checkout</a>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3 container">
                <h2>No Items in Cart!</h2>
            </div>
        </div>
    @endif


@endsection
