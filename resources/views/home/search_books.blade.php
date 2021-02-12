@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
@extends('layouts.home')

@section('title', $search.' List')
@section('content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="breadcrumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->
    <!-- Main Container -->
    <section class="main-container col2-left-layout bounceInUp animated">
        <div class="container">
            <div class="row">
                <div class="col-main col-sm-9 col-sm-push-3">
                    <div class="category-description std">
                        <div class="slider-items-products">
                            <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                                <div class="slider-items slider-width-col1 owl-carousel owl-theme">

                                    <!-- Item -->
                                    <div class="item"> <a href="#"><img alt="" src="{{asset('assets')}}/images/category-img1.jpg"></a>
                                        <div class="cat-img-title cat-bg cat-box">
                                            <div class="small-tag"><span>Hot Sale</span> 49% OFF</div>
                                            <h2 class="cat-heading">Women Collection</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                        </div>
                                    </div>
                                    <!-- End Item -->

                                    <!-- Item -->
                                    <div class="item"> <a href="#"><img alt="" src="{{asset('assets')}}/images/category-img2.jpg"></a>

                                        <!-- End Item -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <article class="col-main">
                        <div class="page-title">
                            <h1>Aradığınız burada mı?</h1>
                        </div>
                        <div class="toolbar">
                            <div class="sorter">
                                <div class="view-mode"> <span title="Grid" class="button button-active button-grid">&nbsp;</span><a href="list.html" title="List" class="button-list">&nbsp;</a> </div>
                            </div>
                            <div id="sort-by">
                                <label class="left">Sort By: </label>
                                <ul>
                                    <li><a href="#">Position<span class="right-arrow"></span></a>
                                        <ul>
                                            <li><a href="#">Name</a></li>
                                            <li><a href="#">Price</a></li>
                                            <li><a href="#">Position</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <a class="button-asc left" href="#" title="Set Descending Direction"><span class="top_arrow"></span></a> </div>
                            <div class="pager">
                                <div id="limiter">
                                    <label>View: </label>
                                    <ul>
                                        <li><a href="#">15<span class="right-arrow"></span></a>
                                            <ul>
                                                <li><a href="#">20</a></li>
                                                <li><a href="#">30</a></li>
                                                <li><a href="#">35</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pages">
                                    <label>Page:</label>
                                    <ul class="pagination">
                                        <li><a href="#">&laquo;</a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">&raquo;</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="category-products">
                            <ul class="products-grid">
                                @foreach($datalist as $rs)
                                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                                    <div class="item-inner">
                                        <div class="item-img">
                                            <div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image"><img src="{{Storage::url($rs->image)}}" alt="Retis lapen casen"></a>
                                                <div class="new-label new-top-left">New</div>
                                                <div class="actions">
                                                    <div class="quick-view-btn"><a href="{{route('book',['id'=>$rs->id])}}" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                                    <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                                    <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                                    <div class="button btn-cart"><a href="{{route('addtocart',['id'=>$rs->id])}}"data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></a></div>
                                                </div>
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating" style="width:80%"></div>
                                                        </div>
                                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title"><a href="#" title="Retis lapen casen">{{$rs->title}}</a> </div>
                                                <div class="item-content">
                                                    <div class="item-price">
                                                        <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </article>
                    <!--	///*///======    End article  ========= //*/// -->
                </div>
                <div class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9">
                    <aside class="col-left sidebar">
                        <div class="side-nav-categories">
                            <div class="block-title"> Categories </div>
                            <!--block-title-->
                            <!-- BEGIN BOX-CATEGORY -->
                            <div class="box-content box-category">
                                <ul>
                                    <li> <a class="active" href="#/women.html">Women</a> <span class="subDropdown minus"></span>
                                        <ul class="level0_415" style="display:block">
                                            <li> <a href="#/women/tops.html"> Handbags </a> <span class="subDropdown plus"></span>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/women/tops/evening-tops.html"> Clutch Handbags </a> </li>
                                                    <li> <a href="#/women/tops/shirts-blouses.html"> Diaper Bags </a> </li>
                                                    <li> <a href="#/women/tops/tunics.html"> Back Bags </a> </li>
                                                    <li> <a href="#/women/tops/vests.html"> Hobo handbags </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="#/women/bags.html"> Jackets </a> <span class="subDropdown plus"></span>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/women/bags/bags.html"> Bags </a> </li>
                                                    <li> <a href="#/women/bags/designer-handbags.html"> Designer Handbags </a> </li>
                                                    <li> <a href="#/women/bags/purses.html"> Purses </a> </li>
                                                    <li> <a href="#/women/bags/shoulder-bags.html"> Shoulder Bags </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="#/women/shoes.html"> Shoes </a> <span class="subDropdown plus"></span>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/women/shoes/flat-shoes.html"> Flat Shoes </a> </li>
                                                    <li> <a href="#/women/shoes/flat-sandals.html"> Flat Sandals </a> </li>
                                                    <li> <a href="#/women/shoes/boots.html"> Boots </a> </li>
                                                    <li> <a href="#/women/shoes/heels.html"> Heels </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="#/women/Jewellery.html"> Jewellery </a>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/women/Jewellery/bracelets.html"> Bracelets </a> </li>
                                                    <li> <a href="#/women/Jewellery/necklaces-pendants.html"> Necklaces &amp; Pendants </a> </li>
                                                    <li> <a href="#/women/Jewellery/pins-brooches.html"> Pins &amp; Brooches </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="#/women/dresses.html"> Dresses </a> <span class="subDropdown plus"></span>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/women/dresses/casual-dresses.html"> Casual Dresses </a> </li>
                                                    <li> <a href="#/women/dresses/evening.html"> Evening </a> </li>
                                                    <li> <a href="#/women/dresses/designer.html"> Designer </a> </li>
                                                    <li> <a href="#/women/dresses/party.html"> Party </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>


                                            <!--level1-->
                                            <li> <a href="#/women/swimwear.html"> Swimwear </a> <span class="subDropdown plus"></span>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/women/swimwear/swimsuits.html"> Swimsuits </a> </li>
                                                    <li> <a href="#/women/swimwear/beach-clothing.html"> Beach Clothing </a> </li>
                                                    <li> <a href="#/women/swimwear/bikinis.html"> Bikinis </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                        </ul>
                                        <!--level0-->
                                    </li>
                                    <!--level 0-->
                                    <li> <a href="#/men.html">Men</a> <span class="subDropdown plus"></span>
                                        <ul class="level0_455" style="display:none">
                                            <li> <a href="#/men/shoes.html"> Shoes </a> <span class="subDropdown plus"></span>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/men/shoes/flat-shoes.html"> Flat Shoes </a> </li>
                                                    <li> <a href="#/men/shoes/boots.html"> Boots </a> </li>
                                                    <li> <a href="#/men/shoes/heels.html"> Heels </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="#/men/Jewellery.html"> Jewellery </a> <span class="subDropdown plus"></span>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/men/Jewellery/bracelets.html"> Bracelets </a> </li>
                                                    <li> <a href="#/men/Jewellery/necklaces-pendants.html"> Necklaces &amp; Pendants </a> </li>
                                                    <li> <a href="#/men/Jewellery/pins-brooches.html"> Pins &amp; Brooches </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="#/men/dresses.html"> Dresses </a> <span class="subDropdown plus"></span>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/men/dresses/casual-dresses.html"> Casual Dresses </a> </li>
                                                    <li> <a href="#/men/dresses/evening.html"> Evening </a> </li>
                                                    <li> <a href="#/men/dresses/designer.html"> Designer </a> </li>
                                                    <li> <a href="#/men/dresses/party.html"> Party </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="#/men/jackets.html"> Jackets </a> <span class="subDropdown plus"></span>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/men/jackets/coats.html"> Coats </a> </li>
                                                    <li> <a href="#/men/jackets/jackets.html"> Jackets </a> </li>
                                                    <li> <a href="#/men/jackets/leather-jackets.html"> Leather Jackets </a> </li>
                                                    <li> <a href="#/men/jackets/blazers.html"> Blazers </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="#/men/swimwear.html"> Swimwear </a> <span class="subDropdown plus"></span>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/men/swimwear/swimsuits.html"> Swimsuits </a> </li>
                                                    <li> <a href="#/men/swimwear/beach-clothing.html"> Beach Clothing </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                        </ul>
                                        <!--level0-->
                                    </li>
                                    <!--level 0-->
                                    <li> <a href="#.html">Electronics</a> <span class="subDropdown plus"></span>
                                        <ul class="level0_482" style="display:none">
                                            <li> <a href="#/smartphones.html"> Smartphones </a> <span class="subDropdown plus"></span>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/smartphones/samsung.html"> Samsung </a> </li>
                                                    <li> <a href="#/smartphones/apple.html"> Apple </a> </li>
                                                    <li> <a href="#/smartphones/blackberry.html"> Blackberry </a> </li>
                                                    <li> <a href="#/smartphones/nokia.html"> Nokia </a> </li>
                                                    <li> <a href="#/smartphones/htc.html"> HTC </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="#/cameras.html"> Cameras </a> <span class="subDropdown plus"></span>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/cameras/digital-cameras.html"> Digital Cameras </a> </li>
                                                    <li> <a href="#/cameras/camcorders.html"> Camcorders </a> </li>
                                                    <li> <a href="#/cameras/lenses.html"> Lenses </a> </li>
                                                    <li> <a href="#/cameras/filters.html"> Filters </a> </li>
                                                    <li> <a href="#/cameras/tripod.html"> Tripod </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="#/accesories.html"> Accesories </a> <span class="subDropdown plus"></span>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/accesories/headsets.html"> HeadSets </a> </li>
                                                    <li> <a href="#/accesories/batteries.html"> Batteries </a> </li>
                                                    <li> <a href="#/accesories/screen-protectors.html"> Screen Protectors </a> </li>
                                                    <li> <a href="#/accesories/memory-cards.html"> Memory Cards </a> </li>
                                                    <li> <a href="#/accesories/cases.html"> Cases </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                        </ul>
                                        <!--level0-->
                                    </li>
                                    <!--level 0-->
                                    <li> <a href="#/digital.html">Furniture</a> </li>
                                    <!--level 0-->
                                    <li class="last"> <a href="#/fashion.html">Kids</a> </li>
                                    <!--level 0-->
                                </ul>
                            </div>
                            <!--box-content box-category-->
                        </div>
                        <div class="block block-layered-nav">
                            <div class="block-title">Shop By</div>
                            <div class="block-content">
                                <p class="block-subtitle">Shopping Options</p>
                                <dl id="narrow-by-list">
                                    <dt class="odd">Price</dt>
                                    <dd class="odd">
                                        <ol>
                                            <li> <a href="#"><span class="price">$0.00</span> - <span class="price">$199.99</span></a> (6) </li>
                                            <li> <a href="#"><span class="price">$200.00</span> and above</a> (6) </li>
                                        </ol>
                                    </dd>
                                    <dt class="even">Manufacturer</dt>
                                    <dd class="even">
                                        <ol>
                                            <li> <a href="#">Superb</a> (9) </li>
                                            <li> <a href="#">Nexus</a> (4) </li>
                                            <li> <a href="#">Xperia</a> (1) </li>
                                        </ol>
                                    </dd>
                                    <dt class="odd">Color</dt>
                                    <dd class="odd">
                                        <ol>
                                            <li> <a href="#">Green</a> (1) </li>
                                            <li> <a href="#">White</a> (5) </li>
                                            <li> <a href="#">Black</a> (5) </li>
                                            <li> <a href="#">Gray</a> (4) </li>
                                            <li> <a href="#">Dark Gray</a> (3) </li>
                                            <li> <a href="#">Blue</a> (1) </li>
                                        </ol>
                                    </dd>
                                    <dt class="last even">Size</dt>
                                    <dd class="last even">
                                        <ol>
                                            <li> <a href="#">S</a> (6) </li>
                                            <li> <a href="#">M</a> (6) </li>
                                            <li> <a href="#">L</a> (4) </li>
                                            <li> <a href="#">XL</a> (4) </li>
                                        </ol>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <div class="block block-cart">
                            <div class="block-title ">My Cart</div>
                            <div class="block-content">
                                <div class="summary">
                                    <p class="amount">There are <a href="#">2 items</a> in your cart.</p>
                                    <p class="subtotal"> <span class="label">Cart Subtotal:</span> <span class="price">$49.99</span> </p>
                                </div>
                                <div class="ajax-checkout">
                                    <button class="button button-checkout" title="Submit" type="submit"><span>Checkout</span></button>
                                </div>
                                <p class="block-subtitle">Recently added item(s) </p>
                                <ul>
                                    <li class="item"> <a href="#" title="Retis lapen casen" class="product-image"><img src="{{asset('assets')}}/products-images/product.jpg" alt="Fisher-Price Bubble Mower"></a>
                                        <div class="product-details">
                                            <div class="access"> <a href="#" title="Remove This Item" class="btn-remove1"> <span class="icon"></span> Remove </a> </div>
                                            <strong>1</strong> x <span class="price">$19.99</span>
                                            <p class="product-name"> <a href="#">Office Colored Ladies Shirt</a> </p>
                                        </div>
                                    </li>
                                    <li class="item last"> <a href="#" title="Retis lapen casen" class="product-image"><img src="{{asset('assets')}}/products-images/product.jpg" alt="Prince Lionheart Jumbo Toy Hammock"></a>
                                        <div class="product-details">
                                            <div class="access"> <a href="#" title="Remove This Item" class="btn-remove1"> <span class="icon"></span> Remove </a> </div>
                                            <strong>1</strong> x <span class="price">$8.00</span>
                                            <p class="product-name"> <a href="#">Office Colored Ladies Shirt</a> </p>

                                            <!--access clearfix-->
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- Main Container End -->
@endsection

