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
    
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2><strong>All</strong> {{ $name }}s </h2>
            </div>
            <div class="body">
                <div class="row">
                <div class="col-lg-6">
                    @if(dsld_have_user_permission('library-setup') == 1)
                    <button class="btn btn-success btn-round mb-4" title="Add New" onclick="add_new_lg_modal_form()"><i class="zmdi zmdi-hc-fw"></i> Add New</button>
                    @endif
                    <button class="btn btn-info btn-round mb-4" onclick="get_pages();"><i class="zmdi zmdi-hc-fw"></i> Reload</button>
                </div>
                <div class="col-lg-6">
                    <form class="form-inline" id="search_media">
                        <!-- <div class="form-group">                                
                            <input type="date" class="form-control ms  mr-2" name="get_date" onchange="filter()">
                        </div> -->
                        <div class="col-lg-6 form-group">                                
                            <select class="form-control" name="sort" onchange="filter()">
                                <option value="newest">New to Old</option>
                                <option value="oldest">Old to New</option>
                                <option value="active">Active</option>
                                <option value="deactive">Deactive</option>
                            </select>
                        </div>
                        <div class="col-lg-6 form-group">                                    
                            <input type="text" class="form-control w-100" name="search" onblur="filter()" placeholder="Search..">
                        </div>
                    </form>
                </div>
                </div>
                <div class="table-responsive">
                    <div id="data_table"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
    @include('backend.modules.libraries.setups.add')
        
    <!--Edit Section-->
    <div class="modal fade" id="edit_larger_modals" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="title">Edit {{ $name }}</h4>
                </div>
                <form id="update_form" action="{{ route('library.setups.update') }}" method="POST" enctype="multipart/form-data" >
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

    <!--Edit Section-->
    <div class="modal fade" id="edit_fine_larger_modals" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="title">Edit {{ $name }}</h4>
                </div>
                <form id="update_fine_form" action="{{ route('library.fine.setups.update') }}" method="POST" enctype="multipart/form-data" >
                @csrf 
                <div class="modal-body">
                    <div id="edit_fine_larger_modals_body">
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
    <input type="hidden" name="get_pages" id="get_pages" value="{{ route('ajax_library_setups') }}">
    @include('backend.inc.crul_ajax')
    <script>
        function add_new_lg_modal_form(){
            $('#add_new_larger_modals').modal('show');
        }

        function edit_fine_lg_modal_form(id, route, name){
                $('#edit_fine_larger_modals_body').html('');
                $('#edit_fine_larger_modals').modal('show');
                $('#edit_fine_larger_modals_title').text('Edit '+name);
                $.ajax({
                    url: route,
                    type: "post",
                    cache : false,
                    data: {
                        '_token':'{{ csrf_token() }}',
                        'id': id,
                    },
                    success: function(d) {
                        $('#edit_fine_larger_modals_body').html(d);
                    }
                });
            }


        $(document).ready(function(){
            $('#update_fine_form').on('submit', function(event){
            event.preventDefault();
                $('.dsld-btn-loader').addClass('btnloading');
                var Loader = ".btnloading";

                DSLDButtonLoader(Loader, "start");
                $.ajax({
                    url: $(this).attr('action'),
                    type: $(this).attr('method'),
                    cache : false,
                    data: $(this).serialize(),
                    success: function(data) {
                        DSLDButtonLoader(Loader, "");
                        dsldFlashNotification(data['status'], data['message']);
                        if(data['status'] =='success'){
                            get_pages();
                            $('#edit_fine_larger_modals').modal('hide');
                        }
                    }
                });
            });
        });

    
    
    </script>
@endsection