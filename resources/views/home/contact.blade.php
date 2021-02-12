@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
@extends('layouts.home')

@section('title', 'Contact Us-',$setting->title)
@section('description',){{$setting->description}}@endsection
@section('keywords',$setting->keywords)
@section('content')

    <section class="main-container col2-right-layout">
        <div class="main container"><br><br>
            <div class="row">

                <section class="col-left col-md-6">
                    <div class="page-title">
                        <h3>Contact Informations</h3><br><br><br>
                    </div>
                    <div class="static-contain">
                        {!! $setting->contact !!}
                        <br><br><br>
                        <iframe frameborder="0" height="400" id="I1" marginheight="0" marginwidth="0" name="I1" scrolling="no" src="https://maps.google.com/?ie=UTF8&amp;ll=41.213691,32.654114&amp;spn=0.02799,0.066047&amp;t=m&amp;z=15&amp;output=embed" width="75%"></iframe>
                    </div>
                </section>
                <!-- Contact us -->
                <section class="col-right col-md-6">
                        <h3 class="page-title">Contact Form</h3><br><br><br>
                    @include('home.message')
                    <form action="{{route('sendmessage')}}" id="form-validate" method="post" >
                        @csrf
                    <div class="static-contain">
                            <div class="form-group-lg">
                                <input class="input-text" type="text" name="name" placeholder="Name-Surname">
                            </div><br>
                            <div class="form-group-lg">
                                <input class="input-text" type="email" name="email" placeholder="Email">
                            </div><br>
                            <div class="form-group-lg">
                                <input class="input-text" type="text" name="phone" placeholder="Phone Number">
                            </div><br>
                            <div class="form-group-lg">
                                <textarea class="input" type="text" name="subject" cols="60" rows="1" placeholder="Subject"></textarea>
                            </div><br>
                            <div class="form-group-lg">
                                <textarea class="input" type="text" name="message" cols="60" rows="3" placeholder="Your Message"></textarea>
                            </div>
                        </div>
                        <div class="buttons-set">
                            <button type="submit" title="Submit" class="button submit"> <span> Submit </span> </button>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </section>
@endsection
