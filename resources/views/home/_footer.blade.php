@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
<div class="our-features-box">
    <div class="container">
        <ul>
            <li>
                <div class="feature-box red_bg"> <span class="icon-globe-alt"></span>
                    <div class="content">
                        <h3>FREE SHIPPING WORLDWIDE</h3>
                    </div>
                </div>
            </li>
            <li>
                <div class="feature-box yellow_bg"> <span class="icon-support"></span>
                    <div class="content">
                        <h3>24/7 CUSTOMER SUPPORT</h3>
                    </div>
                </div>
            </li>
            <li class="last">
                <div class="feature-box brown_bg"> <span class="icon-share-alt"></span>
                    <div class="content">
                        <h3>RETURNS AND EXCHANGES</h3>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="footer-inner">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12 col-lg-8">
                <div class="footer-column pull-left">
                    <h4>CUSTOMMER SERVICE</h4>
                    <ul class="links">
                        <li class="first"><a href="#" title="Contact us">My Account</a></li>
                        <li><a href="#" title="About us">Order History</a></li>
                        <li><a href="#" title="faq">FAQ</a></li>
                        <li><a href="#" title="Popular Searches">Specials</a></li>
                        <li class="last"><a href="#" title="Where is my order?">Help Center</a></li>

                    </ul>
                </div>
                <div class="footer-column pull-left">
                    <h4>Corporation</h4>
                    <ul class="links">
                        <li class="first"><a title="Your Account" href="{{route('aboutus')}}">About us</a></li>
                        <li><a title="Information" href="#">Customer Service</a></li>
                        <li><a title="Addresses" href="#">Company</a></li>
                        <li><a title="Addresses" href="#">Investor Relations</a></li>
                        <li class="last"><a title="Orders History" href="#">Advanced Search</a></li>

                    </ul>
                </div>
                <div class="footer-column pull-left">
                    <h4>Why choose Us</h4>
                    <ul class="links">
                        <li class="first"><a href="#" title="About us">Shopping Guide</a></li>
                        <li><a href="#" title="Blog">Blog</a></li>
                        <li><a href="#" title="Company">Company</a></li>
                        <li><a href="#" title="Investor Relations">Investor Relations</a></li>
                        <li class=" last"><a href="contact-us.html" title="Suppliers">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-lg-4">
                <div class="footer-column-last">
                    <div class="newsletter-wrap">
                        <h4>Sign up for emails</h4>
                        <form id="newsletter-validate-detail" method="post" action="#">
                            <div id="container_form_news">
                                <div id="container_form_news2">
                                    <input type="text" class="input-text required-entry validate-email" value="Enter your email address" onFocus=" this.value='' " title="Sign up for our newsletter" id="newsletter" name="email">
                                    <button class="button subscribe" title="Subscribe" type="submit"><span>Subscribe</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <br>
                    <div class="social">
                        <h4>Follow Us</h4>
                        <ul class="link">
                            @if ($setting->facebook != null)<li class="fb pull-left"><a href="{{$setting->facebook}}" target="_blank"></a></li> @endif
                            @if ($setting->twitter != null)<li class="tw pull-left"><a href="{{$setting->twitter}}" target="_blank"></a></li>@endif
                            @if ($setting->googleplus != null)<li class="googleplus pull-left"><a href="{{$setting->googleplus}}" target="_blank"></a></li>@endif
                            @if ($setting->pintrest != null)<li class="pintrest pull-left"><a href="{{$setting->pintrest}}" target="_blank"></a></li>@endif
                            @if ($setting->linkedin != null)<li class="linkedin pull-left"><a href="{{$setting->linkedin}}" target="_blank"></a></li>@endif
                            @if ($setting->youtube != null)<li class="youtube pull-left"><a href="{{$setting->youtube}}" target="_blank"></a></li>@endif
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container">
       <!--<div class="col-sm-12 col-xs-12 footer-logo"><a href="{{route('home')}}"></a> <img alt="Datson" src="{{asset('assets')}}/images/a1.jpg"></div>-->
        <address>
            <i class="fa fa-map-marker"></i>{{$setting->company}} / {{$setting->address}} <i class="fa fa-mobile"></i><span>{{$setting->phone}}</span> <i class="fa fa-envelope"></i><span> {{$setting->email}}</span>
        </address>
    </div>
</div>

<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12 coppyright">&copy; 2021 |  {{$setting->company}}.</div>
        </div>
    </div>
</div>
