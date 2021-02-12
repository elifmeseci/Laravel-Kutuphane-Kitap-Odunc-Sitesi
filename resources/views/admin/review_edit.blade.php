<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/simple-line-icons.css" media="all">
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/jquery.bxslider.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/jquery.mobile-menu.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/revslider.css" >
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/style.css" media="all">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600,600italic,400italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

<div class="content">
        <div class="py-4 px-3 px-md-4">
            <div class="card mb-3 mb-md-4">
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">
                            <div class="h3 mb-0">Message Detail</div>
                            @include('home.message')
                        </div>
                        <form action="{{route('admin_message_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <table class="table text-nowrap mb-0">

                                        <th>ID</th><td>{{ $data->id }}</td>
                                    <tr>
                                    </tr>
                                        <th>Name</th><td>{{ $data->name }}</td>
                                    <tr>
                                    </tr>

                                        <th>Book</th><td>{{ $data->book }}</td>
                                    <tr>
                                    </tr>
                                        <th>Subject</th><td>{{ $data->subject }}</td>
                                    <tr>
                                    </tr>
                                        <th>Review</th><td>{{ $data->review }}</td>
                                    <tr>
                                    </tr>
                                        <th>Rate</th><td>{{ $data->rate }}</td>
                                    <tr>
                                    </tr>
                                        <th>IP</th><td>{{ $data->IP }}</td>
                                    <tr>
                                    </tr>
                                        <th>Created date</th><td>{{ $data->created_at }}</td>
                                    <tr>
                                    </tr>
                                        <th>Updated date</th><td>{{ $data->updated_at }}</td>
                                    <tr>
                                    </tr>
                                        <th>Status</th>
                                        <td>
                                            <select name="status">
                                                <option selected>{{ $data->status}}</option>
                                                <option>True</option>
                                                <option>False</option>
                                            </select>
                                        </td>
                                    <tr>

                                    <tr>
                                        <td></td><td>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-soft-primary">Update Review</button>
                                        </div></td>
                                    </tr>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
