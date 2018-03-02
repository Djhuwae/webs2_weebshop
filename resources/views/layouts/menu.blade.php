@foreach($categories as $category)
    <li class="dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="/itemList/{{$category->name}}">{{$category->name}}<span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu" class="nav-link ul-test" >
            @foreach($subcategories as $subcategory)

                @if($subcategory->category_id == $category->id)

                    <li role="presentation"><a href="category/{{$category->id}}/{{('subcategory/')}}{{$subcategory->id}}" role="menuitem">
                            {{$subcategory->name}}
                        </a></li>

                @endif
            @endforeach
        </ul>
    </li>
@endforeach