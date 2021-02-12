    @extends('layouts.admin')

    @section('title', 'Edit Category')

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
                                <li class="breadcrumb-item active" aria-current="page">Edit Category</li>
                            </ol>
                        </nav>
                        <!-- End Breadcrumb -->

                        <div class="card">
                            <div class="card-header">
                                <div class="h3 mb-0">Edit Category</div>
                            </div>
                            <form action="{{route('admin_category_update',['id'=>$data->id])}}" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Parent</label>
                                        <select class="custom-select custom-select-sm" name="parent_id" style="width: 100%;">
                                            <option value="0" selected="selected">Main Category</option>
                                            @foreach($datalist as $rs)
                                                <option value="{{$rs->id}}" @if ($rs->id == $data->parent_id) selected="selected" @endif >
                                                    {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label >Title</label>
                                        <input type="text" name="title" value="{{$data->title}}" class="form-control" placeholder="Enter title">
                                    </div>
                                    <div class="form-group">
                                        <label >Keywords</label>
                                        <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control" placeholder="Enter keywords">
                                    </div>
                                    <div class="form-group">
                                        <label >Description</label>
                                        <textarea name="description" value="{{$data->description}}" class="form-control" rows="3"></textarea>
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
        </div>
    @endsection
