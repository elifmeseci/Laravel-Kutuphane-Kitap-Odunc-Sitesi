@extends('layouts.admin')

@section('title', 'Edit Book')
@section('javascript')
    <script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')
    <div class="content">
        <div class="py-4 px-3 px-md-4">
            <div class="card mb-3 mb-md-4">

                <div class="card-body">
                    <!-- Breadcrumb -->
                    <nav class="d-none d-md-block" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('admin_home')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Book</li>
                        </ol>
                    </nav>
                    <!-- End Breadcrumb -->

                    <div class="card">
                        <div class="card-header">
                            <div class="h3 mb-0">Edit Book</div>
                        </div>
                        <form action="{{route('admin_book_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Category</label>

                                    <select class="custom-select custom-select-sm" name="category_id" style="width: 100%;">
                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}" @if ($rs->id == $data->parent_id) selected="selected" @endif >
                                                {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label >Title</label>
                                    <input type="text" name="title" class="form-control" value="{{$data->title}}" placeholder="Enter title">
                                </div>
                                <div class="form-group">
                                    <label >Keywords</label>
                                    <input type="text" name="keywords" class="form-control" value="{{$data->keywords}}" placeholder="Enter keywords">
                                </div>
                                <div class="form-group">
                                    <label >Description</label>
                                    <textarea id="description"  name="description">{{$data->description}}</textarea>
                                    <script>
                                        ClassicEditor
                                            .create( document.querySelector( '#description' ) )
                                            .catch( error => {
                                                console.error( error );
                                            } );
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label >Detail</label>
                                    <textarea id="detail"  name="detail">{{$data->detail}}</textarea>
                                    <script>
                                        ClassicEditor
                                            .create( document.querySelector( '#detail' ) )
                                            .catch( error => {
                                                console.error( error );
                                            } );
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label >Type</label>
                                    <input type="text" name="type" class="form-control" value="{{$data->type}}" >
                                </div>
                                <div class="form-group">
                                    <label >Available</label>
                                    <input type="number" name="available" class="form-control" value="{{$data->available}}">
                                </div>
                                <div class="form-group">
                                    <label >Image</label>
                                    <input type="file" name="image" class="form-control">
                                    @if ($data->image)
                                        <img src="{{ Storage::url($data->image)}}" height="60" alt="">
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label >Status</label>
                                    <select class="custom-select custom-select-sm" name="status">
                                        <option selected="selected">{{$data->status}}</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-soft-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
