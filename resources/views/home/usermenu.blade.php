<aside class="col-right sidebar col-sm-2 animated" style="visibility: visible;">
    <div class="block block-account">
        <div class="block-title"> User Panel </div>
        <div class="block-content">
            <ul>
                <li><a href="{{route('profile')}}"><span> My Profile</span></a></li>
                <li><a href="{{route('myreviews')}}"><span> My Product Reviews</span></a></li>
                <li><a href="{{route('user_books')}}"><span> My Books</span></a></li>
                @php
                    $userRoles = Auth::user()->roles->pluck('name');
                @endphp
                @if($userRoles->contains('admin'))
                <li><a href="{{route('admin_home')}}"><span> Admin Home</span></a></li>
                <li><a href="{{route('admin_setting')}}"><span> Admin setting</span></a></li>
                @endif
                <li><a href="{{route('logout')}}"><span> Log out</span></a></li>
            </ul>
        </div>
        <!--block-content-->
    </div>
</aside>


