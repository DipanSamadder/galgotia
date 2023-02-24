
<table class="table table-bordered table-striped table-hover dataTable">
    <thead>
            <tr class="text-center">
                <th>Sr</th>
                <th>Book</th>
                <th>Details</th>
                <th>Availability</th>

                @if(dsld_have_user_permission('library-book_edit') == 1)
                <th>Status</th>
                @endif

                @if(dsld_have_user_permission('library-book_delete') == 1 || dsld_have_user_permission('library-book_edit') == 1)
                <th>Action</th>
                @endif
            </tr>
        </thead>
        <tfoot>
            <tr class="text-center">
                <th>Sr</th>
                <th>Book</th>
                <th>Details</th>
                <th>Availability</th>

                @if(dsld_have_user_permission('library-book_edit') == 1)
                <th>Status</th>
                @endif

                @if(dsld_have_user_permission('library-book_delete') == 1 || dsld_have_user_permission('institute_type_edit') == 1)
                <th>Action</th>
                @endif
            </tr>
        </tfoot>
    <tbody>
        @if(is_array($data) || count($data) > 0 )
            @foreach($data as $key => $value)
        
                <tr>
                    <th scope="row">{{ $key+1 }}</th>

                    <td><b>{{ $value->title }} </b><br>
                        <small><b>Code:</b> {{ $value->code }} <br></small>
                        <small><b>Stock:</b> {{ $value->stock }}</small>
                    </td>

                    <td><b>{{ @$value->categories->title }}</b> <br>
                        <small>{{ @$value->authors->title }} <br></small>
                        <small>{{ @$value->publishers->title }}</small>
                    </td>
                    <td>{{ $value->stock }}</td>
                    @if(dsld_have_user_permission('library-book_edit') == 1)
                    <td>

                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="status_institute_type{{$value->id }}" onchange="DSLDStatusUpdate('{{ $value->id }}','{{ $value->status == 1 ? 0 : 1  }}', '{{ route('library.books.status') }}','{{ csrf_token() }}')" @if($value->status == 1) checked @endif >
                        <label class="custom-control-label" for="status_institute_type{{$value->id }}"></label>
                    </div>

                    </td>
                    @endif

                    @if(dsld_have_user_permission('library-book_delete') == 1 || dsld_have_user_permission('library-book_edit') == 1)
                    <td>
                            @if(dsld_have_user_permission('library-book_edit') == 1)
                            <a href="javascript:void(0)"  onclick="edit_lg_modal_form({{ $value->id }}, '{{ route('library.books.edit') }}', 'Book');" class="btn btn-default waves-effect waves-float btn-sm waves-red bg-primary">
                                <i class="zmdi zmdi-edit"></i>
                            </a>
                            @endif
                            @if(dsld_have_user_permission('library-book_delete') == 1)
                            <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-red bg-danger" onclick="DSLDDeleteAlert('{{ $value->id }}','{{ route('library.books.destory') }}','{{ csrf_token() }}')">
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
