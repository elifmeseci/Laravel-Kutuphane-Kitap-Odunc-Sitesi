@extends('layouts.admin')

@section('title', 'Category List')

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
                            <li class="breadcrumb-item active" aria-current="page">Category List</li>
                        </ol>
                    </nav>
                    <!-- End Breadcrumb -->

                    <div class="card-header">
                        <a type="button" class="btn btn-soft-primary" href="{{route('admin_category_add')}}">+ Add Category</a>
                    </div>
                    <div class="table-responsive-xl">

                        <br>
                        <table class="table text-nowrap mb-0">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Parent ID</th>
                                <th>Title</th>
                                <th>Status </th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $rs )
                                <tr>
                                    <td>{{ $rs->id }}</td>
                                    <td>{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title) }}</td>
                                    <td>{{ $rs->title }}</td>
                                    <td>{{ $rs->status }}</td>
                                    <td>
                                        <div class="position-relative">
                                            <a href="{{route('admin_category_edit', ['id'=> $rs->id])}}">
                                                <i class="gd-pencil icon-text"></i>
                                            </a>
                                            <a href="{{route('admin_category_delete', ['id'=> $rs->id])}}" onclick="return confirm('Are you sure?')">
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
