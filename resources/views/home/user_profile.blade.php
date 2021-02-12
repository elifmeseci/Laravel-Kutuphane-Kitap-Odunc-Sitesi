@extends('layouts.home')

@section('title', 'User Profile')

@section('content')
    <section class="main-container col2-right-layout">
        <div class="main container"><br><br>
            <div class="row">
            @include('home.usermenu')
                <!-- Main -->
                <div class="col-main col-sm-9 animated" style="visibility: visible;">
                    @include('profile.show')
                </div>
                <!-- End main -->
            </div>
        </div>
    </section>
@endsection
