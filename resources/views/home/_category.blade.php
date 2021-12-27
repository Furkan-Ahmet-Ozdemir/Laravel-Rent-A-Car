

    @php
        $parentCategories = \App\Http\Controllers\HomeController::categorylist()
    @endphp

    <li class="menu-item menu-item-has-children"><a href="#">Categories</a>
        <ul class="submenu custom">
        @foreach($parentCategories as $rs){
            <li class="menu-item menu-item-has-children"><a href="#">{{$rs->title}}</a>
                @if($rs->children){
                    @include('categorytree',['children'=>$rs->children])
                @endif}
            </li>
        </ul>
        @endforeach}
    </li>

