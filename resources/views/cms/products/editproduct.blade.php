@extends('layouts.default')


@section('content')
    <h1>Producten beheren</h1>

    <div class="col-sm-8">
        <h2>Product wijzigen: {!! $product->name !!}</h2>
        <hr>

        <form method="POST" action="/cms/products/{{$product->id}}/edit" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Naam</label>
                <input type="text" class="'form-control" id="name" name="name" value="{{$product->name}}">
            </div>

            <div class="form-group">
                <label for="price">Prijs</label>
                <input type="number" step="0.01" class="'form-control" id="price" name="price" value="{{$product->price}}">
            </div>

            <div class="form-group">
                <label for="desc">Beschrijving</label>
                <textarea class="'form-control" id="desc" name="desc">{{$product->description}}</textarea>
            </div>

            <div class="form-group">
                <label for="cat">Categorie</label>
                <select id="cat" name="cat" class="custom-select">
                    <option selected>Kies een categorie</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->name }}" {{ ($product->categories_id == $category->id ? 'selected' : '') }}>{{ucfirst($category->name)}}</option>

                    @endforeach

                </select>
            </div>

            <div class="form-group">
                <label for="sub">Subcategorie</label>
                <select id="sub" name="sub" class="custom-select">
                    <option selected>Kies een subcategorie</option>
                    @foreach($subcategories as $subcategory)
                        {{--@if($subcategory->categories_id == $category->id)--}}
                        <option value="{{ $subcategory->name }}" {{$product->subcategories_id == $subcategory->id ? 'selected': ''}}>{{ ucfirst($subcategory->name) }}</option>
                        {{--@endif--}}
                    @endforeach
                </select>

            </div>

            <div class="form-group">
                <label for="img">Afbeelding URL</label>
                <input type="url" class="'form-control" id="img" name="img" value="{{$product->imageurl}}">


            </div>
            <button type="submit" class="btn btn-primary">Opslaan</button>
        </form>
    </div>

@endsection