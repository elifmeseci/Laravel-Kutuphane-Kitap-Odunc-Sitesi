@extends('layouts.home')

@section('title', 'Add Book')
@section('headerjs')
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
@endsection
@section('content')
    <section class="main-container col2-right-layout">
        <div class="main container"><br><br>
            <div class="row">
            @include('home.usermenu')
                <!-- Main -->
                <div class="col-main col-sm-9 animated" style="visibility: visible;">
                    <form action="{{route('user_book_store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Category</label>
                                <select class="custom-select custom-select-sm" name="category_id" style="width: 100%;">
                                    @foreach($datalist as $rs)
                                        <option value="{{$rs->id}}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter title">
                            </div>
                            <div class="form-group">
                                <label >Keywords</label>
                                <input type="text" name="keywords" class="form-control" placeholder="Enter keywords">
                            </div>
                            <div class="form-group">
                                <label >Description</label>
                                <textarea id="description"  name="description"></textarea>
                                <script>
                                    CKEDITOR.replace('description')
                                </script>
                            </div>
                            <div class="form-group">
                                <label >Detail</label>
                                <textarea id="detail" name="detail"></textarea>
                                <script>
                                    CKEDITOR.replace('detail')
                                </script>
                            </div>
                            <div class="form-group">
                                <label >Type</label>
                                <input type="text" name="type" class="form-control">
                            </div>
                            <div class="form-group">
                                <label >Available</label>
                                <input type="number" name="available" class="form-control">
                            </div>
                            <div class="form-group">
                                <label >Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="form-group">
                                <label >Status</label>
                                <select class="custom-select custom-select-sm">
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
                <!-- End main -->
            </div>
        </div>
    </section>
@endsection
