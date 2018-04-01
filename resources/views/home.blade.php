@extends('layouts.default')

@section('title','Home - WeebShop')

@section('content')
    @if(Session::has('success'))
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
            <div id="charge-message" class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        </div>
    </div>
    @elseif(Session::has('warning'))
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                <div class="alert alert-warning" role="alert">{!! session('warning') !!}</div>
            </div>
        </div>
    @endif
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-3">

                <h1 class="my-4"> </h1>
                <div class="list-group">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                        </ol>
                    </nav>
                    @include('layouts.menu2')
                    {{--{!! $breadcrumbs !!}--}}

                </div>

            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-9">
                {{--Carousel--}}
                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="https://www.ianvisits.co.uk/blog/wp-content/uploads/2018/01/1379257_Latvian_ShowDetailHeaderDesktop_99609434-7178-e711-8175-020165574d09.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="http://thegeekiary.com/wp-content/uploads/2018/01/shokugeki-no-soma.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="http://wallpaperlepi.com/wp-content/uploads/2015/09/Logo-One-Piece-Wallpaper.jpeg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="row">
                    <div class="col-sm-8 col-md-8 col-lg-8 col-md-offset-2 col-sm-offset-3">
                        <div class="input-group input-group-lg">
                            <form action="/search" method="POST" role="search">
                            {{ csrf_field() }}
                            <div class="input-group">
                                <input type="text" class="form-control" name="q" placeholder="Search Products"> <span class="input-group-btn">
                                        <button type="submit" class="btn btn-default">
                                            <span class="fa fa-search"></span>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><br>

                @foreach($products->chunk(3) as $productChunk )
                    <div class="row">
                        @foreach($productChunk as $product)
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
                    </div>
                    <!-- /.row -->
                @endforeach
            </div>

            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <script>
        $(document).ready(function(){
            $('#search').keyup(function (){
                var txt = $(this).val();
                if(txt != ''){

                }else{
                    $('#result').html('');
                    $.ajax({
                        url:"fetch.php",
                        method: "post",
                        data:{ search:txt},
                        dataType:"text",
                        success:function(data){
                            $('#result').html(data);
                        }
                    })
                }
            });
        });

    </script>
@endsection

