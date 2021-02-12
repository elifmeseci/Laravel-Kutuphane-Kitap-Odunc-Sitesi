@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
@extends('layouts.home')

@section('title', $data->title.' Books List')
@section('description'){{$data->description}}@endsection
@section('keywords',$data->keywords)

@section('content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="breadcrumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="#">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data,$data->category->title)}}</a></li>
                        <li><a href="#">{{$data->title}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->
    <!-- Main Container -->
    <section class="main-container col1-layout wow bounceInUp animated">
        <div class="main container">
            <div class="col-main">
                <div class="row">
                    <div class="product-view">
                        <div class="product-next-prev"> <a class="product-next" href="#"><span></span></a> <a class="product-prev" href="#"><span></span></a> </div>
                        <div class="product-essential">
                            <form action="#" method="post" id="product_addtocart_form">
                                <input name="form_key" value="6UbXroakyQlbfQzK" type="hidden">
                                <div class="product-img-box col-sm-4 col-xs-12">
                                    <div class="new-label new-top-left"> New </div>
                                    <div class="product-image">
                                        <!-- Product Image -->
                                        <div class="large-image"> <a href="products-images/product.jpg" class="cloud-zoom" id="zoom1"> <img src="{{Storage::url($data->image)}}" alt="product image"> </a> </div>
                                        <!-- Galery Images -->
                                        <div class="flexslider flexslider-thumb">
                                            <ul class="previews-list slides">
                                                @foreach($datalist as $rs)
                                                <li><a href='products-images/product.jpg' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'products-images/product.jpg' "><img src="{{Storage::url($rs->image)}}" alt = "Thumbnail 1"/></a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end: more-images -->
                                </div>
                                <div class="product-shop col-sm-8 col-xs-12">

                                    <div class="product-name">
                                        <h1>{{$data->title}}</h1>
                                    </div>
                                    <div>
                                        @php
                                            $avgrev = \App\Http\Controllers\HomeController::avrgreview($data->id);
                                            $countreview = \App\Http\Controllers\HomeController::Countreview($data->id);
                                        @endphp
                                        <div class="rating-box">
                                            <div class="rating">
                                                <i class="fa fa-star @if ($avgrev<1) -o empty @endif"></i>
                                                <i class="fa fa-star @if ($avgrev<2) -o empty @endif"></i>
                                                <i class="fa fa-star @if ($avgrev<3) -o empty @endif"></i>
                                                <i class="fa fa-star @if ($avgrev<4) -o empty @endif"></i>
                                                <i class="fa fa-star @if ($avgrev<5) -o empty @endif"></i>
                                                <i>({{$countreview}}</i>
                                            </div>
                                        </div>

                                        <a href="#">{{$countreview}} Review(s)</a> <span class="separator">|{{$avgrev}}|</span> <a href="#">Add Your Review</a> </p>
                                    </div>

                                    <div class="price-block">
                                        <p class="availability in-stock pull-right"><span>In Stock</span></p>
                                    </div>
                                    <div class="short-description">
                                        <h2>Quick Overview</h2>
                                        <p>{!!$data->detail  !!}</p>
                                    </div>
                                    <div class="add-to-box">
                                        <div class="add-to-cart">
                                            <div class="pull-left">
                                                <div class="custom pull-left">
                                                    <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="fa fa-minus">&nbsp;</i></button>
                                                    <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                                    <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="fa fa-plus">&nbsp;</i></button>
                                                </div>
                                            </div>

                                            <button class="button btn-cart" title="Make Reservation" type="button"><a href="{{route('user_reservations',['data'=>$data->id])}}"><span>Make Reservation</span></a></button>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="product-collateral col-lg-12 col-sm-12 col-xs-12 bounceInUp animated">
                            <div class="add_info">
                                <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                                    <li class="active"> <a href="#product_tabs_description" data-toggle="tab"> Product Description </a> </li>
                                    <li> <a href="#reviews_tabs" data-toggle="tab">Reviews</a> </li>
                                </ul>
                                <div id="productTabContent" class="tab-content">
                                    <div class="tab-pane fade in active" id="product_tabs_description">
                                        <div class="std">
                                            <p>{!! $data->description !!}</p>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="reviews_tabs">
                                        <div class="box-collateral box-reviews" id="customer-reviews">
                                            <div class="box-reviews1">
                                                <div class="form-add">
                                                    <h3>Write Your Own Review</h3>
                                                    <h4>How do you rate this product?</h4><br><br>

                                                            @livewire('review',['id'=>$data->id])

                                                </div>
                                            </div>
                                            <div class="box-reviews2">
                                                <h3>Customer Reviews {{$countreview}}</h3>
                                                <div class="box visible">
                                                    <ul>
                                                        @foreach($reviews as $rs)
                                                        <li>
                                                            <div class="review">
                                                                <h6><a href="#">{{$rs->subject}}</a></h6>
                                                                <small>Review by <span>{{$rs->user->name}} </span>{{$rs->created_at}}</small>
                                                                <div class="review-txt">{{$rs->review}}</div>
                                                                <i class="fa fa-star"></i>
                                                                <i class="@if($rs->rate<1) fa fa-star  @endif"></i>
                                                                <i class="@if($rs->rate<2) fa fa-star @endif"></i>
                                                                <i class="@if($rs->rate<3) fa fa-star  @endif"></i>
                                                                <i class="@if($rs->rate<4) fa fa-star  @endif"></i>
                                                                <i class="@if($rs->rate<5) fa fa-star  @endif"></i>
                                                            </div>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="actions"> <a class="button view-all" id="revies-button" href="#"><span><span>View all</span></span></a> </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main Container End -->
@endsection

