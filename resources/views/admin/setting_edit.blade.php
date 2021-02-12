@extends('layouts.admin')

@section('title', 'Edit Setting')
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
                            <li class="breadcrumb-item active" aria-current="page">Edit Setting</li>
                        </ol>
                    </nav>
                    <!-- End Breadcrumb -->

                    <div class="card">

                        <form action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="px-3">
                                    <ul id="tabs1" class="nav nav-tabs mb-3" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#tab1" role="tab" aria-selected="true"
                                               data-toggle="tab">General Settings
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#tab2" role="tab" aria-selected="false"
                                               data-toggle="tab">Smtp
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#tab3" role="tab" aria-selected="false"
                                               data-toggle="tab">Social Media
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#tab4" role="tab" aria-selected="false"
                                               data-toggle="tab">About Us
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#tab5" role="tab" aria-selected="false"
                                               data-toggle="tab">Contact Page
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#tab6" role="tab" aria-selected="false"
                                               data-toggle="tab">References
                                            </a>
                                        </li>
                                    </ul>
                                    <div id="tabsContent1" class="card-body tab-content p-0">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                            <input type="hidden" id="id" name="id" class="form-control" value="{{$data->id}}" placeholder="Enter title">
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
                                                <input type="text" name="description" class="form-control" value="{{$data->description}}">
                                            </div>
                                            <div class="form-group">
                                                <label >Company</label>
                                                <input type="text" name="company" class="form-control" value="{{$data->company}}" >
                                            </div>
                                            <div class="form-group">
                                                <label >Address</label>
                                                <input type="text" name="address" class="form-control" value="{{$data->address}}">
                                            </div>
                                            <div class="form-group">
                                                <label >Phone</label>
                                                <input id="phone" type="text" name="phone" class="form-control" value="{{$data->phone}}">
                                            </div>
                                            <div class="form-group">
                                                <label >Fax</label>
                                                <input type="text" name="fax" class="form-control" value="{{$data->fax}}">
                                            </div>
                                            <div class="form-group">
                                                <label >Email</label>
                                                <input type="text" name="email" class="form-control" value="{{$data->email}}">
                                            </div>
                                            <div class="form-group">
                                                <label >status</label>
                                                <select class="custom-select custom-select-sm" name="status">
                                                    <option selected="selected">{{$data->status}}</option>
                                                    <option>True</option>
                                                    <option>False</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="form-group">
                                                <label >Smtp Server</label>
                                                <input type="text" name="smtpserver" class="form-control" value="{{$data->smtpserver}}">
                                            </div>
                                            <div class="form-group">
                                                <label >Smtp Email</label>
                                                <input type="email" name="smtpemail" class="form-control" value="{{$data->smtpemail}}">
                                            </div>
                                            <div class="form-group">
                                                <label >Smtp Password</label>
                                                <input type="password" name="smtppassword" class="form-control" value="{{$data->smtppassword}}">
                                            </div>
                                            <div class="form-group">
                                                <label >Smtp Port</label>
                                                <input type="text" name="smtpport" class="form-control" value="{{$data->smtpport}}">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="form-group">
                                                <label >facebook</label>
                                                <input type="text" name="facebook" class="form-control" value="{{$data->facebook}}">
                                            </div>
                                            <div class="form-group">
                                                <label >instagram</label>
                                                <input type="text" name="instagram" class="form-control" value="{{$data->instagram}}">
                                            </div>
                                            <div class="form-group">
                                                <label >twitter</label>
                                                <input type="text" name="twitter" class="form-control" value="{{$data->twitter}}">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="form-group">
                                                <label >About us</label>
                                                <textarea id="aboutus" name="aboutus" value="{{$data->aboutus}}">{{$data->aboutus}}</textarea>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab5" role="tabpanel">
                                            <div class="form-group">
                                                <label >Contact</label>
                                                <textarea id="contact" name="contact" value="{{$data->contact}}">{{$data->contact}}</textarea>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab6" role="tabpanel">
                                            <div class="form-group">
                                                <label >References</label>
                                                <textarea id="references" name="references" value="{{$data->references}}">{{$data->references}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    ClassicEditor
                                        .create( document.querySelector( '#aboutus' ) )
                                        .catch( error => {
                                            console.error( error );
                                        } );
                                </script>
                                <script>
                                    ClassicEditor
                                        .create( document.querySelector( '#contact' ) )
                                        .catch( error => {
                                            console.error( error );
                                        } );
                                </script>
                                <script>
                                    ClassicEditor
                                        .create( document.querySelector( '#references' ) )
                                        .catch( error => {
                                            console.error( error );
                                        } );
                                </script>

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
