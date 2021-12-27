@foreach($children as $subcategory)
        <ul class="submenu custom"><a >{{$subcategory->title}}</a>
            @if(count($subcategory->$children))
                <li>{{$subcategory->title}}</li>
                <li>
                    @include('home._category',['children'=>$subcategory->children])
                </li>

            @endif

        </ul>
@endforeach
