@foreach($categories as $category)
    <ul class="nav navbar-nav">
    <li class="dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="/itemList/{{$category->id}}">{{$category->name}}<span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu" class="nav-link ul-test" >
            @foreach($subcategories as $subcategory)

                @if($subcategory->categories_id == $category->id)

                    <li role="presentation"><a href="itemList/{{$category->id}}/{{$subcategory->id}}" role="menuitem">

                            {{$subcategory->name}}

                        </a></li>
                    

                @endif

            @endforeach
        </ul>
    </li>
    </ul>

@endforeach
