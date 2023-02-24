@extends('backend.layouts.app')

@section('header')
<style>
    .table tbody td, .table tbody th {padding: 0.25rem 0.55rem;}

</style>


@endsection

@section('content')
@php
$name = 'page';
if(isset($page) && !empty($page['name'])){
    $name = $page['name'];
}
@endphp
 <!-- Exportable Table -->
 <div class="row clearfix">
    
    <div class="col-lg-8">
        <div class="card">
            <div class="header">
                <h2><strong>All</strong> {{ $name }}s </h2>
            </div>
            <div class="body">
                <div class="row">
                    <div class="col-lg-3">
                        <button class="btn btn-info btn-round mb-4" onclick="get_pages();"><i class="zmdi zmdi-hc-fw"></i> Reload</button>
                    </div>
                    <div class="col-lg-9">
                        <form class="form-inline" id="search_media">
                            <div class="col-lg-4 form-group">                                
                                <select class="form-control" name="type" id="type" onchange="filter()">
                                    <option value="all">All</option>
                                    <option value="student" selected>Student</option>
                                    <option value="faculty">Faculty</option>
                                </select>
                            </div>
                            <div class="col-lg-4 form-group">                                
                                <select class="form-control" name="sort" onchange="filter()">
                                    <option value="newest">New to Old</option>
                                    <option value="oldest">Old to New</option>
                                    <option value="active" selected>Issued</option>
                                    <option value="deactive">Submitted</option>
                                </select>
                            </div>
                            <div class="col-lg-4 form-group">                                    
                                <input type="text" class="form-control w-100" name="search" onblur="filter()" placeholder="Search..">
                            </div>
                        </form><br>  
                    </div>
                </div>
                <div class="table-responsive">
                    <div id="data_table"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="header">
                <h2><strong>Add New</strong> {{ $name }}s </h2>
            </div>
            <div class="body">
                <div class="row">
                    <div class="col-lg-12">
                        <form id="add_new_form" action="{{ route('library.issues.store') }}" method="POST" enctype="multipart/form-data" >
                            <input type="hidden" name="created_by" value="{{ Auth::user()->id }}">
                            @csrf 
                            <div class="modal-body">
                                <div class="row clearfix">
                                    
                                    <div class="col-sm-12">
                                        <div class="form-group">    
                                            <label class="form-label">Category </label>                             
                                            <select class="form-control w-100 ms select2 mr-2 need_book_list" name="library_cat_id">
                                                <option value="">-- Select Category --</option>
                                                @foreach(App\Models\LibraryCategory::where('status', 1)->get()  as $key => $value)
                                                <option value="{{ $value->id }}">{{ $value->title }}</option>
                                                @endforeach
                                            </select>                             
                                        </div>
                                    </div> 

                                    <div class="col-sm-12">
                                        <div class="form-group">    
                                            <label class="form-label">Book <span class="dropdown-loading"></span><small class="text-danger">*</small></label>                             
                                            <select class="form-control w-100 ms select2 mr-2 get_book_list" name="library_books_id">
                                                <option value="">-- Select Book --</option>
                                                @foreach(App\Models\LibraryBook::where('status', 1)->get()  as $key => $value)
                                                <option value="{{ $value->id }}">{{ $value->title }}</option>
                                                @endforeach
                                            </select>                             
                                        </div>
                                    </div> 
                                    
                                    <div class="col-sm-12">
                                        <div class="form-group">  
                                            <label class="form-label">Student <small class="text-danger">*</small></label>                                
                                            <select class="form-control w-100 ms select2 mr-2" name="user_id">
                                                <option value="">-- Select Student --</option>
                                                @foreach(App\Models\User::whereIn('user_type', ['students', 'staff'])->get()  as $key => $value)
                                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                @endforeach
                                            </select>                             
                                        </div>
                                    </div> 
                                    <div class="col-sm-12">
                                        <div class="swal-button-container">
                                            <button type="submit" class="btn btn-success btn-round waves-effect dsld-btn-loader">SUBMIT</button>
                                        </div>
                                    </div>
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

@section('footer')
    <!--Edit Section-->
    <div class="modal fade" id="edit_larger_modals" tabindex="-1" role="dialog">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="title" id="edit_larger_modals_title"></h4>
                </div>
                <form id="update_form" action="{{ route('library.issues.update') }}" method="POST" enctype="multipart/form-data" >
                @csrf 
                <div class="modal-body">
                    <div id="edit_larger_modals_body">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-round waves-effect" data-dismiss="modal">CLOSE</button>
                    <div class="swal-button-container">
                        <button type="submit" class="btn btn-success btn-round waves-effect dsld-btn-loader">UPDATE</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!--Edit Section-->


    <input type="hidden" name="page_no" id="page_no" value="1">
    <input type="hidden" name="get_pages" id="get_pages" value="{{ route('ajax_library_issues') }}">
    @include('backend.inc.crul_ajax')
@endsection