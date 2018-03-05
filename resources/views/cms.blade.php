@extends('layouts.default')


@section('content')
        <h1>Dit is het cms</h1>


                        <h2>Product toevoegen</h2>
                        <hr>

                        <form method="POST" action="/posts">
                                {{ csrf_field() }}
                                <div class="form-group">
                                        <label for="name">Naam</label>
                                        <input type="text" class="'form-control" id="name" name="name">


                                </div>
                                <div class="form-group">
                                        <label for="price">Prijs</label>
                                        <input type="number" class="'form-control" id="price" name="price">


                                </div>
                                <div class="form-group">
                                        <label for="desc">Beschrijving</label>
                                        <input type="text" class="'form-control" id="desc" name="desc">


                                <div class="form-group">
                                        <label for="cat">Categorie</label>
                                        <select id="cat" name="cat" class="custom-select">
                                                <option selected>Kies een categorie</option>
                                                @foreach($categories as $category)
                                                        <option value="{{ $category->name }}">{{ ucfirst($category->name) }}</option>
                                                @endforeach
                                        </select>

                                </div>

                                        <div class="form-group">
                                                <label for="sub">Subcategorie</label>
                                                <select id="sub" name="sub" class="custom-select">
                                                        <option selected>Kies een subcategorie</option>
                                                        @foreach($subcategories as $subcategory)
                                                                <option value="{{ $subcategory->name }}">{{ ucfirst($subcategory->name) }}</option>
                                                        @endforeach
                                                </select>

                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="img">Afbeelding URL</label>
                                        <input type="url" class="'form-control" id="img" name="img">


                                </div>
                                <button type="submit" class="btn btn-primary">Opslaan</button>
                        </form>

        <h2>Categorie toevoegen</h2>
        <hr>

        <form method="POST" action="/posts">

                <div class="form-group">
                        <label for="name">Naam</label>
                        <input type="text" class="'form-control" id="name" name="name">



                </div>
                <button type="submit" class="btn btn-primary">Opslaan</button>
        </form>

        <h2>Subcategorie toevoegen</h2>
        <hr>

        <form method="POST" action="/posts">

                <div class="form-group">
                        <label for="name">Naam</label>
                        <input type="text" class="'form-control" id="name" name="name">

                        <div class="form-group">
                                <label for="cat">Categorie</label>
                                <select id="cat" name="cat" class="custom-select">
                                        <option selected>Kies een categorie</option>
                                        @foreach($categories as $category)
                                                <option value="{{ $category->name }}">{{ ucfirst($category->name) }}</option>
                                        @endforeach
                                </select>

                        </div>

                </div>
                <button type="submit" class="btn btn-primary">Opslaan</button>
        </form>

@endsection
