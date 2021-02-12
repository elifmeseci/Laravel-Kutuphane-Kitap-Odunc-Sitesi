@foreach($children as $subcategory)
    <ul class="list">
        @if(count($subcategory->children))
            <li>{{$subcategory->title}}</li>
            <ul class="links">
                @include('home.categorytree',['children'=>$subcategory->children])
            </ul>
            <hr>
        @else
        <li><a href="{{route('categorybooks',['id'=>$subcategory->id])}}">{{$subcategory->title}}</a> </li>
        @endif
    </ul>
@endforeach
