@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
@extends('layouts.home')

@section('title', $setting->title)
@section('description')
    {{$setting->description}}
@endsection
@section('keywords',$setting->keywords)

@section('content')
    @include('home._slider1')

    <!-- Featured Slider -->
    <section class="featured-pro container wow bounceInUp animated">
        <div class="slider-items-products container">
            <div class="new_title center">
                <h2>Nora Library</h2>
                <div class="starSeparator"></div>
            </div>

            <div id="featured-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 products-grid">

                @foreach($slider as $rs)
                    <!-- Item -->
                        <div class="item">
                            <div class="item-inner">
                                <div class="item-img">
                                    <div class="item-img-info"> <a class="product-image" title="{{$rs->title}}" href="#"> <img alt="{{$rs->title}}" src="{{Storage::url($rs->image)}}"> </a>
                                        <div class="new-label new-top-left">new</div>
                                        <div class="box-timer">
                                            <div class="countbox_2 timer-grid"></div>
                                        </div>
                                        <div class="actions">
                                            <div class="quick-view-btn"><a href="{{route('book',['id'=>$rs->id])}}" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                            <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                            <div class="button btn-cart"><a href="{{route('user_reservation_add',['id'=>$rs->id])}}"data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></a></div>
                                            <p data-original-title="Out of Stock" title="" data-placement="right" data-toggle="tooltip" class="availability out-of-stock"><span class="ava-out-of-stock">Out of stock</span></p>
                                        </div>
                                        <div class="rating">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div style="width:80%" class="rating"></div>
                                                </div>
                                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title"> <a title="{{$rs->title}}" href="#">{{$rs->title}}</a></div>
                                        <div class="item-content">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>

    <section class="featured-pro container wow bounceInUp animated">
        <div class="slider-items-products container">
            <div class="new_title center">
                <h2>Most Recently Added Books</h2>
                <div class="starSeparator"></div>
            </div>

            <div id="featured-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 products-grid">

                @foreach($last as $rs)
                    <!-- Item -->
                        <div class="item">
                            <div class="item-inner">
                                <div class="item-img">
                                    <div class="item-img-info"> <a class="product-image" title="{{$rs->title}}" href="#"> <img alt="{{$rs->title}}" src="{{Storage::url($rs->image)}}"> </a>
                                        <div class="new-label new-top-left">new</div>
                                        <div class="box-timer">
                                            <div class="countbox_2 timer-grid"></div>
                                        </div>
                                        <div class="actions">
                                            <div class="quick-view-btn"><a href="{{route('book',['id'=>$rs->id])}}" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                            <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                            <div class="button btn-cart"><a href="{{route('user_reservation_add',['id'=>$rs->id])}}"data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></a></div>
                                            <p data-original-title="Out of Stock" title="" data-placement="right" data-toggle="tooltip" class="availability out-of-stock"><span class="ava-out-of-stock">Out of stock</span></p>
                                        </div>
                                        <div class="rating">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div style="width:80%" class="rating"></div>
                                                </div>
                                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title"> <a title="{{$rs->title}}" href="#">{{$rs->title}}</a></div>
                                        <div class="item-content">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
    <section class="featured-pro container wow bounceInUp animated">
        <div class="slider-items-products container">
            <div class="new_title center">
                <h2>Most Preferred Books</h2>
                <div class="starSeparator"></div>
            </div>

            <div id="featured-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 products-grid">

                @foreach($best as $rs)
                    <!-- Item -->
                        <div class="item">
                            <div class="item-inner">
                                <div class="item-img">
                                    <div class="item-img-info"> <a class="product-image" title="{{$rs->title}}" href="#"> <img alt="{{$rs->title}}" src="{{Storage::url($rs->image)}}"> </a>
                                        <div class="new-label new-top-left">new</div>
                                        <div class="box-timer">
                                            <div class="countbox_2 timer-grid"></div>
                                        </div>
                                        <div class="actions">
                                            <div class="quick-view-btn"><a href="{{route('book',['id'=>$rs->id])}}" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                            <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                            <div class="button btn-cart"><a href="{{route('user_reservation_add',['id'=>$rs->id])}}"data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></a></div>
                                            <p data-original-title="Out of Stock" title="" data-placement="right" data-toggle="tooltip" class="availability out-of-stock"><span class="ava-out-of-stock">Out of stock</span></p>
                                        </div>
                                        <div class="rating">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div style="width:80%" class="rating"></div>
                                                </div>
                                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title"> <a title="{{$rs->title}}" href="#">{{$rs->title}}</a></div>
                                        <div class="item-content">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
    <!-- End Featured Slider -->
@endsection

