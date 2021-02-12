@extends('layouts.admin')

@section('title', 'Edit FAQ')
@section('javascript')
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
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
                            <li class="breadcrumb-item active" aria-current="page">Edit FAQ</li>
                        </ol>
                    </nav>
                    <!-- End Breadcrumb -->

                    <div class="card">
                        <div class="card-header">
                            <div class="h3 mb-0">Edit FAQ</div>
                        </div>
                        <form action="{{route('admin_faq_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label >Question</label>
                                    <input type="text" id="question" name="question" class="form-control" value="{{$data->question}}" placeholder="Enter title">
                                </div>
                                <div class="form-group">
                                    <label >Answer</label>
                                    <textarea id="answer"  name="answer">{!!  $data->answer !!}</textarea>
                                    <script>
                                        CKEDITOR.replace('answer')
                                    </script>
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
