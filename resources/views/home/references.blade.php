@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
@extends('layouts.home')

@section('title', 'References-',$setting->title)
@section('description'){{$setting->description}}@endsection
@section('keywords',$setting->keywords)
@section('content')

    <section class="main-container col2-right-layout">
        <div class="main container"><br><br>
            <div class="row">
                @include('home.usermenu')

                <section class="col-main col-sm-9">
                    <div class="page-title">
                        <h1>References</h1>
                    </div>
                    <div class="static-contain">
                        {!! $setting->references !!}
                        <br><br><br>
                    </div>
                </section>

            </div>
        </div>
    </section>
@endsection
