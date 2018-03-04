@extends('layouts.default')


        <!DOCTYPE html>
<html>
<head>
    <title></title>
</head>

<body>
<h1>Categorieën en subcategorieën</h1>
@foreach($categories as $category)
    <ul>
        <li ><a  role="button" aria-expanded="false" href="/itemList/{{$category->name}}">{{$category->name}}<span class="caret"></span></a>
            <ul  role="menu" >
                @foreach($subcategories as $subcategory)

                    @if($subcategory->categories_id == $category->id)

                        <li role="presentation"><a href="itemList/{{$category->name}}/{{$subcategory->name}}" role="menuitem">

                                {{$subcategory->name}}

                            </a></li>


                    @endif

                @endforeach
            </ul>
        </li>
    </ul>

@endforeach
</body>

</html>

