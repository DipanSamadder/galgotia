
<table class="table table-bordered table-striped table-hover dataTable">

    <thead>
        <tr class="text-center">
            <th>Sr</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Department</th>

            @if(dsld_have_user_permission('student_edit') == 1)
            <th>Status</th>
            @endif

            @if(dsld_have_user_permission('student_delete') == 1 || dsld_have_user_permission('student_edit') == 1)
            <th>Action</th>
            @endif
        </tr>
    </thead>

    <tfoot>
        <tr class="text-center">
            <th>Sr</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Department</th>

            @if(dsld_have_user_permission('student_edit') == 1)
            <th>Status</th>
            @endif

            @if(dsld_have_user_permission('student_delete') == 1 || dsld_have_user_permission('student_edit') == 1)
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
                        @if($value->faculty->avatar_original > 0)<img src="{{ dsld_uploaded_asset($value->faculty->avatar_original) }}" alt="{{ dsld_upload_file_title($value->faculty->avatar_original) }}" class="page_banner_icon">
                        @else
                            <img src="{{ dsld_static_asset('backend/assets/images/xs/avatar1.jpg') }}" alt="Dummy Image" class="page_banner_icon">
                        
                        @endif
                    </td>
                    <td><b>{{ $value->faculty->name }}</b>
                    
                        @if($value->faculty->email != null) <br><small>Email: {{$value->faculty->email }}</small> @endif
                        @if($value->faculty->phone != null) <br><small>Phone: {{$value->faculty->phone }}</small> @endif
                        <br> <br>
                        @if($value->social_links !='')
                            @if(json_decode($value->social_links)[0]->facebook != '')
                                <a href="{{ json_decode($value->social_links)[0]->facebook }}" target="_blank"><i class="zmdi zmdi-hc-fw"></i></a>
                            @endif
                        @endif

                        @if($value->social_links !='')
                            @if(json_decode($value->social_links)[1]->instagram != '')
                                <a href="{{ json_decode($value->social_links)[1]->instagram }}" target="_blank"><i class="zmdi zmdi-hc-fw"></i></a>
                            @endif
                        @endif

                        @if($value->social_links !='')
                            @if(json_decode($value->social_links)[2]->youtube != '')
                                <a href="{{ json_decode($value->social_links)[2]->youtube }}" target="_blank"><i class="zmdi zmdi-hc-fw"></i></a>
                            @endif
                        @endif

                        @if($value->social_links !='')
                            @if(json_decode($value->social_links)[3]->twitter != '')
                                <a href="{{ json_decode($value->social_links)[3]->twitter }}" target="_blank"><i class="zmdi zmdi-hc-fw"></i></a>
                            @endif
                        @endif
                        

                        @if($value->social_links !='')
                            @if(json_decode($value->social_links)[4]->linkedin != '')
                                <a href="{{ json_decode($value->social_links)[4]->linkedin }}" target="_blank"><i class="zmdi zmdi-hc-fw"></i></a>
                            @endif
                        @endif
                    </td>
                    <td><b>{{ $value->department->title }}</b><br><small>{{ $value->institutes->title }}</small>
                        @if($value->created_at != null) <br><small>Join: {{ date('d m, Y', strtotime($value->created_at)) }}</small> @endif
                    </td>
                    @if(dsld_have_user_permission('student_edit') == 1)
                    <td>

                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="status_student{{$value->id }}" onchange="DSLDStatusUpdate('{{ $value->id }}','{{ $value->status == 1 ? 0 : 1  }}', '{{ route('faculty.status') }}','{{ csrf_token() }}')" @if($value->status == 1) checked @endif >
                        <label class="custom-control-label" for="status_student{{$value->id }}"></label>
                    </div>

                    </td>
                    @endif

                    @if(dsld_have_user_permission('student_delete') == 1 || dsld_have_user_permission('student_edit') == 1)
                    <td>
                            @if(dsld_have_user_permission('student_edit') == 1)
                            <a href="javascript:void(0)"  onclick="edit_lg_modal_form({{ $value->id }});" class="btn btn-default waves-effect waves-float btn-sm waves-red bg-primary">
                                <i class="zmdi zmdi-edit"></i>
                            </a>
                            @endif
                            @if(dsld_have_user_permission('student_delete') == 1)
                            <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-red bg-danger" onclick="DSLDDeleteAlert('{{ $value->id }}','{{ route('faculty.destory') }}','{{ csrf_token() }}')">
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
