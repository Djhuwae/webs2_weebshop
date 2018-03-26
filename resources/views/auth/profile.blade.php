@extends('layouts.default2')

@section('title','Profile - WeebShop')

@section('content')

        <div class="row">
                <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                    <h1>User Profile</h1>
                    <h2>My Orders</h2>
                    @foreach($orders as $order)
                    <div class="card text-center">
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($order->cart->items as $item)
                            <li class="list-group-item">
                                <span class="badge">{{$item['price']}}€ </span>
                                <span class="badge">{{$item['qty']}} </span>  {{$item['item']['name']}}
                            </li>
                                @endforeach
                        </ul>
                    </div>
                    <div class="card-footer">
                        <strong>Total price :€ {{ $order->cart->totalPrice }}</strong>
                    </div>
                    </div>
                        <hr>
                        @endforeach

                </div>
        </div>
@endsection

