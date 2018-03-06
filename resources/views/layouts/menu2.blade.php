@foreach($categories as $category)
    <a class="list-group-item" href="/itemList/{{$category->id}}">{{$category->name}}</a>
@endforeach