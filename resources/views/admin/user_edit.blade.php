@extends('layouts.admin')

@section('title', 'My Books')

@section('content')
    <div class="content">
        <div class="py-4 px-3 px-md-4">
            <div class="card mb-3 mb-md-4">
                <div class="card-body">
                    <!-- Breadcrumb -->
                    <nav class="d-none d-md-block" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin_home')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Message List</li>
                        </ol>
                    </nav>
                    <!-- End Breadcrumb -->

                    <div class="card-header">
                        @include('home.message')
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="h3 mb-0">Edit User</div>
                        </div>
                        <form class="card" role="form" action="{{ route('admin_user_update',['id'=>$data->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <div class="card">
                                    <div class="card-body">

                                        <div class="form-group">
                                            <label>Name</label>
                                            <input id="name" type="text" value="{{$data->name}}" name="name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" value="{{$data->email}}" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" name="phone" value="{{$data->phone}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" name="adress" value="{{$data->adress}}" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="image" class="form-control">

                                            @if( $data->profile_photo_path )
                                                <img src="{{ Storage::url($data->profile_photo_path) }}" height="30" alt="">
                                            @endif
                                        </div>


                                        <div class="card-action">
                                            <button type="submit" class="btn btn-success">Update User</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
