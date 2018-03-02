@foreach($categories as $category)
    <a class="list-group-item" href="/itemList/{{$category->name}}">{{$category->name}}</a>
@endforeach