@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
@extends('layouts.home')

@section('title', 'Frequently Asked Question List')

@section('content')
    <section class="main-container col1-layout">
        <div class="main container">
            <div class="col-main">
                <div class="cart wow bounceInUp animated animated" style="visibility: visible;">
                    <div class="page-title">
                        <h2>Frequently Asked Questions</h2>
                    </div>
                    @foreach($datalist as $rs)
                    <div class="panel-group accordion-faq" id="faq-accordion">

                        <div class="panel">
                            <div class="panel-heading"> <a data-toggle="collapse" data-parent="#faq-accordion" href="#question1" aria-expanded="false" class="collapsed"> <span class="arrow-down">+</span> <span class="arrow-up">–</span> {{$rs->question}} </a> </div>
                            <div id="question1" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">{!! $rs->answer !!} </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection



