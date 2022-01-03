<div class="sidebar">

    <div class="sidebar_widgets mb-xl-30">
        <div class="widget_title">
            <h5 class="no-margin text-custom-white">User Panel</h5>
        </div>
        <ul class="categories custom">
            <li>
                <a href="{{route('user_profile')}}" class="text-custom-black fs-14"> Profile {{--<span class="text-light-dark">(122)</span>--}}</a>
            </li>
            <li>
                <a href="{{route('user_reservation')}}" class="text-custom-black fs-14"> Reservations </a>
            </li>
            <li>
                <a href="{{route('user_comments')}}" class="text-custom-black fs-14"> Comments </a>
            </li>
            <li>
                <a href="{{route('logout')}}" class="text-custom-black fs-14"> Log Out </a>
            </li>

        </ul>
    </div>

</div>
