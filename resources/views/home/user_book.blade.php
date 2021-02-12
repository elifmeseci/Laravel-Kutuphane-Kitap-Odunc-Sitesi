@extends('layouts.home')

@section('title', 'My Books')

@section('content')
    <section class="main-container col2-right-layout">
        <div class="main container"><br><br>
            <div class="row">
            @include('home.usermenu')
                <!-- Main -->
                <div class="card-header">
                    <a type="button" class="btn btn-soft-primary" href="{{route('user_book_add')}}">+ Add Book</a>
                    @include('home.message')
                </div>
                <div class="table-responsive">

                    <br>
                    <div class="col-main col-sm-10 animated" style="visibility: visible;">
                    <table class="table text-nowrap mb-0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Type</th>
                            <th>Image</th>
                            <th>Gallery</th>
                            <th>Available</th>
                            <th>Status </th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $rs )
                            <tr>
                                <td>{{ $rs->id }}</td>
                                <td>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>
                                <td>{{ $rs->title }}</td>
                                <td>{{ $rs->type }}</td>
                                <td>
                                    @if ($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" height="30" alt="">
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('user_image_add', ['book_id'=> $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100, height=700')">
                                        <i class="gd-gallery icon-text d-inline-block text-dark mt-2 mb-3"></i>
                                    </a>
                                </td>
                                <td>{{ $rs->available }}</td>
                                <td>{{ $rs->status }}</td>
                                <td>
                                    <div class="position-relative">
                                        <a href="{{route('user_book_edit', ['id'=> $rs->id])}}">
                                            edit
                                        </a>
                                        <a href="{{route('user_book_delete', ['id'=> $rs->id])}}" onclick="return confirm('Are you sure?')">
                                            delete
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
                <!-- End main -->
            </div>
        </div>
    </section>
@endsection
