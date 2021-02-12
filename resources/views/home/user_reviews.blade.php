@extends('layouts.home')

@section('title', 'User Profile')

@section('content')
    <section class="main-container col2-right-layout">
        <div class="main container"><br><br>
            <div class="row">
            @include('home.usermenu')
                <!-- Main -->
                <div class="col-main col-sm-9 animated" style="visibility: visible;">
                    <table class="table text-nowrap mb-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Book</th>
                                <th>Subject</th>
                                <th>Review</th>
                                <th>Rate</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @include('home.message')
                        @foreach($datalist as $rs )
                            <tr>
                                <td>{{ $rs->id }}</td>
                                <td><a href="{{route('book',['id'=>$rs->book->id])}}"target="_blank">{{$rs->book->title}}</a></td>
                                <td>{{ $rs->subject }}</td>
                                <td>{{ $rs->review }}</td>
                                <td>{{ $rs->rate }}</td>
                                <td>{{ $rs->status }}</td>
                                <td>{{ $rs->created_at }}</td>
                                <td>
                                    <a href="{{route('admin_review_delete', ['id'=> $rs->id])}}" onclick="return confirm('Are you sure?')">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- End main -->
            </div>
        </div>
    </section>
@endsection
