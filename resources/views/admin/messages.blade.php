@extends('layouts.admin')

@section('title', 'Contact Message List')

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
                        <div class="input-group">
                            <input class="form-control" placeholder="Search" type="text">
                            <div class="input-group-append input-group-append-infinity">
                                <a class="btn btn-soft-primary" href="#"><i class="gd-search"></i></a>
                            </div>
                        </div>
                        <br>
                        <table class="table text-nowrap mb-0">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Admin Note</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $rs )
                                <tr>
                                    <td>{{ $rs->id }}</td>
                                    <td>{{ $rs->name }}</td>
                                    <td>{{ $rs->email }}</td>
                                    <td>{{ $rs->phone }}</td>
                                    <td>{{ $rs->subject }}</td>
                                    <td>{{ $rs->message }}</td>
                                    <td>{{ $rs->note }}</td>
                                    <td>{{ $rs->status }}</td>
                                    <td>
                                        <div class="position-relative">
                                            <a href="{{route('admin_message_edit', ['id'=> $rs->id])}}" onclick="return !window.open(this.href,'', 'top=50 left=100 width=800 height=700')">
                                                <i class="gd-pencil icon-text"></i>
                                            </a>
                                            <a href="{{route('admin_message_delete', ['id'=> $rs->id])}}" onclick="return confirm('Are you sure?')">
                                                <i class="gd-trash icon-text"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="card-footer d-block d-md-flex align-items-center d-print-none">
                            <div class="d-flex mb-2 mb-md-0">Showing 1 to 8 of 24 Entries</div>

                            <nav class="d-flex ml-md-auto d-print-none" aria-label="Pagination"><ul class="pagination justify-content-end font-weight-semi-bold mb-0">				<li class="page-item">				<a id="datatablePaginationPrev" class="page-link" href="#!" aria-label="Previous"><i class="gd-angle-left icon-text icon-text-xs d-inline-block"></i></a>				</li><li class="page-item d-none d-md-block"><a id="datatablePaginationPage0" class="page-link active" href="#!" data-dt-page-to="0">1</a></li><li class="page-item d-none d-md-block"><a id="datatablePagination1" class="page-link" href="#!" data-dt-page-to="1">2</a></li><li class="page-item d-none d-md-block"><a id="datatablePagination2" class="page-link" href="#!" data-dt-page-to="2">3</a></li><li class="page-item">				<a id="datatablePaginationNext" class="page-link" href="#!" aria-label="Next"><i class="gd-angle-right icon-text icon-text-xs d-inline-block"></i></a>				</li>				</ul></nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
