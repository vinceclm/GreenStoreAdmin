<ul class="list-group">
    <li class="list-group-item">
        <a class="nav-link" href="{{ URL::to('/profile')}}">
            <i class="fas fa-user"></i>
            @lang('website.Profile')
        </a>
    </li>
    <li class="list-group-item">
        <a class="nav-link" href="{{ URL::to('/wishlist')}}">
            <i class="fas fa-heart"></i>
            @lang('website.Wishlist')
        </a>
    </li>
    <li class="list-group-item">
        <a class="nav-link" href="{{ URL::to('/orders')}}">
            <i class="fas fa-shopping-cart"></i>
            @lang('website.Orders')
        </a>
    </li>
    <li class="list-group-item">
        <a class="nav-link" href="{{ URL::to('/shipping-address')}}">
            <i class="fas fa-map-marker-alt"></i>
            @lang('website.Shipping Address')
        </a>
    </li>
    <li class="list-group-item">
        <a class="nav-link" href="{{ URL::to('/coopmembership')}}">
            <i class="fas fa-id-card"></i>
            @lang('Coop Membership')
        </a>
    </li>
    <li class="list-group-item">
        <a class="nav-link" href="{{ URL::to('/logout')}}">
            <i class="fas fa-power-off"></i>
            @lang('website.Logout')
        </a>
    </li>
    <li class="list-group-item">
        <a class="nav-link" href="{{ URL::to('/change-password')}}">
            <i class="fas fa-unlock-alt"></i>
            @lang('website.Change Password')
        </a>
    </li>
</ul>
