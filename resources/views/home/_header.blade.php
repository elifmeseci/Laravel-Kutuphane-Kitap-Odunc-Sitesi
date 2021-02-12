@php
$setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
<!-- Header -->
<header>
    <div class="header-container">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <!-- Header Language -->
                    <div class="col-xs-7 col-sm-6">
                        <div class="dropdown block-language-wrapper hidden-xs"> <a role="button" data-toggle="dropdown" data-target="#" class="block-language dropdown-toggle" href="#"> <img src="{{asset('assets')}}/images/english.png" alt="language"> English <span class="caret"></span> </a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="{{asset('assets')}}/images/english.png" alt="language"> English </a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="{{asset('assets')}}/images/francais.png" alt="language"> French </a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="{{asset('assets')}}/images/german.png" alt="language"> German </a></li>
                            </ul>
                        </div>
                        <!-- End Header Language -->

                        <!-- Header Currency -->
                        <div class="dropdown block-currency-wrapper hidden-xs"> <a role="button" data-toggle="dropdown" data-target="#" class="block-currency dropdown-toggle" href="#"> USD <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> $ - Dollar </a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> £ - Pound </a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> € - Euro </a></li>
                            </ul>
                        </div>
                        <!-- End Header Currency -->

                        <div class="welcome-msg hidden-xs"> Wellcome to most wonderfull place </div>
                    </div>
                    <div class="col-xs-5 col-sm-6">

                        <!-- Search -->
                        <div class="top-search">
                            <div class="block-icon pull-right"> <a data-target=".bs-example-modal-lg" data-toggle="modal" class="search-focus dropdown-toggle links"> <i class="fa fa-search"></i> </a>
                                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button aria-label="Close" data-dismiss="modal" class="close" type="button"><img src="{{asset('assets')}}/images/interstitial-close.png" alt="close"> </button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="navbar-form" action="{{route('getbook')}}" method="post">
                                                    @csrf
                                                    <div id="search">
                                                        <button type="submit" class="btn-search"><i class="fa fa-search"></i></button>
                                                            @livewire('search')
                                                    </div>
                                                </form>
                                                @section('footerjs')
                                                    @livewireScripts
                                                @endsection
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Header Top Links -->
                        <div class="toplinks">
                            <div class="links">

                                @auth
                                    <div class="myaccount"><a title="My Account" href="{{ route('admin_home') }}"><span class="hidden-xs"><i class="fa fa-user"></i>{{ Auth::user()->name }}</span></a></div>
                                    <div class="myaccount"><a title="My Account" href="{{route('profile')}}"><span class="hidden-xs">My Account</span></a></div>
                                    <div class="myaccount"><a title="My Account" href="{{route('myreviews')}}"><span class="hidden-xs">My Reviews</span></a></div>
                                    <div class="wishlist"><a title="My Wish List" href="#"><span class="hidden-xs">My Wish List</span></a></div>
                                    <div class="wishlist"><a title="My Wish List" href="{{ route('user_books') }}"><span class="hidden-xs">My Books</span></a></div>
                                <div class="logout"><a href="{{route('logout')}}"><span class="hidden-xs">Log out</span></a></div>
                                @endauth
                                @guest
                                <div class="login"><a href="{{route('admin_login')}}"><span class="hidden-xs">Log In</span></a></div>
                                <div class="login"><a href="/register"><span class="hidden-xs">Register</span></a></div>
                                @endguest
                            </div>
                        </div>
                        <!-- End Header Top Links -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header -->
