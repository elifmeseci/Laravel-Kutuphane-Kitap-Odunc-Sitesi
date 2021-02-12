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
                    <div class="table-responsive-xl">
                        <br>
                    <table class="table text-nowrap mb-0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>User Photo</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Adress</th>
                            <th>Roles</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $rs )
                            <tr>
                                <td>{{ $rs->id }}</td>
                                <td>@if($rs->profile_photo_path)
                                <img src="{{Storage::url($rs->profile_photo_path)}}"height="50" style="border-radius: 10px">
                                </td>
                                @endif
                                <td>{{ $rs->name }}</td>
                                <td>{{ $rs->email }}</td>
                                <td>{{ $rs->phone }}</td>
                                <td>{{ $rs->adress }}</td>
                                <td> @foreach( $rs->roles as $row)
                                        {{ $row->name }},
                                    @endforeach
                                    <a href="{{route('admin_user_roles', ['id'=> $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100, height=700')">
                                        <strong> +</strong>
                                    </a>
                                </td>

                                <td>
                                    <div class="position-relative">
                                        <a href="{{route('admin_user_edit', ['id'=> $rs->id])}}">
                                            edit
                                        </a>
                                        <a href="{{route('admin_user_delete', ['id'=> $rs->id])}}" onclick="return confirm('Are you sure?')">
                                            delete
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                        <div class="card-footer d-block d-md-flex align-items-center d-print-none">

                            <nav class="d-flex ml-md-auto d-print-none" aria-label="Pagination"><ul class="pagination justify-content-end font-weight-semi-bold mb-0">				<li class="page-item">				<a id="datatablePaginationPrev" class="page-link" href="#!" aria-label="Previous"><i class="gd-angle-left icon-text icon-text-xs d-inline-block"></i></a>				</li><li class="page-item d-none d-md-block"><a id="datatablePaginationPage0" class="page-link active" href="#!" data-dt-page-to="0">1</a></li><li class="page-item d-none d-md-block"><a id="datatablePagination1" class="page-link" href="#!" data-dt-page-to="1">2</a></li><li class="page-item d-none d-md-block"><a id="datatablePagination2" class="page-link" href="#!" data-dt-page-to="2">3</a></li><li class="page-item">				<a id="datatablePaginationNext" class="page-link" href="#!" aria-label="Next"><i class="gd-angle-right icon-text icon-text-xs d-inline-block"></i></a>				</li>				</ul></nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
