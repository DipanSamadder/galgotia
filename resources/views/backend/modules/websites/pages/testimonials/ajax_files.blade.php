
<table class="table table-bordered table-striped table-hover dataTable">
    <thead>
            <tr class="text-center">
                <th>Sr</th>
                <th>Photo</th>
                <th>Detials</th>

                @if(dsld_have_user_permission('testimonials_edit') == 1)
                <th>Status</th>
                @endif

                @if(dsld_have_user_permission('testimonials_delete') == 1 || dsld_have_user_permission('testimonials_edit') == 1)
                <th>Action</th>
                @endif
            </tr>
        </thead>
        <tfoot>
            <tr class="text-center">
                <th>Sr</th>
                <th>Photo</th>
                <th>Detials</th>
                @if(dsld_have_user_permission('testimonials_edit') == 1)
                <th>Status</th>
                @endif

                @if(dsld_have_user_permission('testimonials_delete') == 1 || dsld_have_user_permission('institute_type_edit') == 1)
                <th>Action</th>
                @endif
            </tr>
        </tfoot>
    <tbody>
        @if(is_array($data) || count($data) > 0 )
            @foreach($data as $key => $value)
        
                <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    
                    <td>
                        @if($value->banner > 0)<img src="{{ dsld_uploaded_asset($value->banner) }}" alt="{{ dsld_upload_file_title($value->banner) }}" class="page_banner_icon">
                        @else
                            <img src="{{ dsld_static_asset('backend/assets/images/xs/avatar1.jpg') }}" alt="Dummy Image" class="page_banner_icon">
                        
                        @endif
                    </td>
                    <td>
                       Name: <strong>{{ $value->title }}</strong><br>
                       <small>{{ json_decode($value->meta_fields)->package }} | {{ json_decode($value->meta_fields)->company }}</small><br>
                       <small><strong>Message: </strong>{{ $value->content }}</small>

                    </td>
                    @if(dsld_have_user_permission('testimonials_edit') == 1)
                    <td>

                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="status_institute_type{{$value->id }}" onchange="DSLDStatusUpdate('{{ $value->id }}','{{ $value->status == 1 ? 0 : 1  }}', '{{ route('pages.status') }}','{{ csrf_token() }}')" @if($value->status == 1) checked @endif >
                        <label class="custom-control-label" for="status_institute_type{{$value->id }}"></label>
                    </div>

                    </td>
                    @endif

                    @if(dsld_have_user_permission('testimonials_delete') == 1 || dsld_have_user_permission('testimonials_edit') == 1)
                    <td>
                            @if(dsld_have_user_permission('testimonials_edit') == 1)
                            <a href="javascript:void(0)"  onclick="edit_lg_modal_form({{ $value->id }}, '{{ route('testimonials.edit') }}', 'Category');" class="btn btn-default waves-effect waves-float btn-sm waves-red bg-primary">
                                <i class="zmdi zmdi-edit"></i>
                            </a>
                            @endif
                            @if(dsld_have_user_permission('testimonials_delete') == 1)
                            <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-red bg-danger" onclick="DSLDDeleteAlert('{{ $value->id }}','{{ route('pages.destory') }}','{{ csrf_token() }}')">
                                    <i class="zmdi zmdi-delete"></i>
                            </a>
                            @endif
                        </p>
                    </td>
                    @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="8" class="text-center">Nothing Found</td>
            </tr>
        @endif
    </tbody>
</table>

{{  $data->links('backend.pagination.custom') }}
