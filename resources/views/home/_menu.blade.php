@php
    $parentCategories = \App\Http\Controllers\HomeController::categorylist()
@endphp
<div class="container">

   <div class="logo"><a title="Datson" href="{{route('home')}}"><img alt="Library" src="{{asset('assets')}}/images/book64.png"></a></div>


    <div class="mm-toggle-wrap">
        <div class="mm-toggle"><i class="fa fa-reorder"></i><span class="mm-label">Categories</span></div>
    </div>

    <ul class="nav hidden-xs menu-item menu-item-left">
        <li class="level0 parent drop-menu active"><a href="{{route('home')}}"><span>Home</span></a></li>
        <li class="level0 first"><a href="{{route('home')}}"><span>Company</span></a></li>
        <li class="level0 nav-10-2"> <a href="{{route('home')}}"> <span>New Products</span> </a> </li>
        <li class="level0 nav-10-3"> <a href="{{route('references')}}"> <span>References</span> </a> </li>

    </ul>
    <ul class="nav hidden-xs menu-item menu-item-right">
        <li class="level0"> <a href="{{route('aboutus')}}"> <span>About us</span> </a> </li>
        <li class="level0"> <a href="{{route('faq')}}"> <span>FAQ</span> </a> </li>
        <li class="level0"><a href="{{route('contact')}}"><span>Contact us</span></a> </li>
        <li class="mega-menu"><a href="grid.html" class="level-top"><span>Categories</span></a>
            <div style="left: 0px; display: none;" class="level0-wrapper dropdown-6col">
                <div class="container">
                    <div class="level0-wrapper2">
                        <div class="col-1">
                            <div class="nav-block nav-block-center">
                                <ul class="level0">
                                    @foreach($parentCategories as $rs)
                                        <li class="level1 nav-6-1 parent item"><a href="#.html" class=""><span>{{$rs->title}}</span></a>
                                            <ul class="level1">
                                                @if (count($rs->children))
                                                    <li class="level2 nav-6-1-1"><a href="#" class=""><span>@include('home.categorytree',['children'=>$rs->children])</span></a></li>
                                                @endif
                                            </ul>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!--nav-block nav-block-center-->

                    </div>
                    <!--level0-wrapper2-->
                </div>
            </div>
        </li>

    </ul>
</div>
