@extends('layouts.admin')

@section('title', 'Add Book')
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
                            <li class="breadcrumb-item active" aria-current="page">Add FAQ</li>
                        </ol>
                    </nav>
                    <!-- End Breadcrumb -->

                    <div class="card">
                        <div class="card-header">
                            <div class="h3 mb-0">Add FAQ</div>
                        </div>
                        <form action="{{route('admin_faq_store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">

                                <div class="form-group">
                                    <label >Question</label>
                                    <input type="text" id="question" name="question" class="form-control" placeholder="Enter Question">
                                </div>
                                <div class="form-group">
                                    <label >Answer</label>
                                    <textarea id="answer" name="answer"></textarea>
                                    <script>
                                        CKEDITOR.replace('answer')
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label >Status</label>
                                    <select id="status" name="status" class="custom-select custom-select-sm">
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-soft-primary">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
