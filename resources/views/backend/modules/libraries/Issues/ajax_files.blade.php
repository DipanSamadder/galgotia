
<table class="table table-bordered table-striped table-hover dataTable">
    <thead>
            <tr class="text-center">
                <th>Sr</th>
                <th>Receiver</th>
                <th>Book Details</th>
                <th>Issue Details</th>


                @if(dsld_have_user_permission('library-category_delete') == 1 || dsld_have_user_permission('library-category_edit') == 1)
                <th>Action</th>
                @endif
            </tr>
        </thead>
        <tfoot>
            <tr class="text-center">
                <th>Sr</th>
                <th>Receiver</th>
                <th>Book Details</th>
                <th>Issue Details</th>

                @if(dsld_have_user_permission('library-category_delete') == 1 || dsld_have_user_permission('institute_type_edit') == 1)
                <th>Action</th>
                @endif
            </tr>
        </tfoot>
    <tbody>
        @if(is_array($data) || count($data) > 0 )
            @foreach($data as $key => $value)
        
                <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td> @if(@$value->is_faculty == 0) <i class="zmdi zmdi-hc-fw"></i> @else <i class="zmdi zmdi-hc-fw"></i> @endif<b>{{ $value->user->name }}</b><br>
                        <small><b>Phone:</b> {{ $value->user->phone }}</small><br>
                        <small><b>Email:</b> {{ $value->user->email }}</small><br>
                    </td>

                    <td><b>{{ $value->books->title }}</b><br>
                        <small><b>Code:</b> {{ $value->books->code }}</small><br>
                        <small><b>A:</b> {{ $value->books->authors->title }}</small><br>
                    </td>

                    <td><small><b>Issued: {{ $value->issue }}</b></small><br>
                        <small><b>Return:</b>  {{ $value->return }}</small><br>
                        @if($value->return < date('Y-m-d h:i:s')) <span class="badge badge-danger mr-2">Fine: {{ $value->fine }}</span> @endif <br>
                    </td>
                    @if(dsld_have_user_permission('library-category_delete') == 1 || dsld_have_user_permission('library-category_edit') == 1)
                    @if($value->status == 1)
                    <td>
                            @if(dsld_have_user_permission('library-category_edit') == 1)
                            <a href="javascript:void(0)"  onclick="edit_lg_modal_form({{ $value->id }}, '{{ route('library.issues.edit') }}', 'Book Issue');" class="btn btn-default waves-effect waves-float btn-sm waves-red bg-primary">
                                <i class="zmdi zmdi-edit"></i>
                            </a>
                            @endif
                            @if(dsld_have_user_permission('library-category_delete') == 1)
                            <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-red bg-danger" onclick="DSLDDeleteAlert('{{ $value->id }}','{{ route('library.issues.destory') }}','{{ csrf_token() }}')">
                                    <i class="zmdi zmdi-delete"></i>
                            </a>
                            @endif
                        </p>
                    </td>
                    @else
                    <td><span class="badge badge-success">Submitted</span></td>
                    @endif
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
