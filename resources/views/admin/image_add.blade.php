<html>
    <head>
        <title>Image Gallery</title>
        <link rel="stylesheet" href="{{asset('assets')}}/admin/graindashboard/css/graindashboard.css">
        </head>
    <body>
        <div class="card">
            <div class="card-header">
                <div class="h3 mb-0">{{$data->title}}</div>
            </div>
            <form action="{{route('admin_image_store', ['book_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label >Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter title">
                    </div>

                    <div class="form-group">
                        <label >Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-soft-primary">Add</button>
                    </div>
                </div>
            </form>
            <table class="table text-nowrap mb-0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($images as $rs )
                    <tr>
                        <td>{{ $rs->id }}</td>
                        <td>{{ $rs->title }}</td>
                        <td>
                            @if ($rs->image)
                                <img src="{{Storage::url($rs->image)}}" height="30" alt="">
                            @endif
                        </td>
                        <td>
                            <a href="{{route('admin_image_delete', ['id'=> $rs->id, 'book_id'=>$data->id])}}" onclick="return confirm('Are you sure?')">
                                <i class="gd-trash icon-text"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>

