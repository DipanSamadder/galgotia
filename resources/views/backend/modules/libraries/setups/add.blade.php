
<div class="modal fade" id="add_new_larger_modals" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form id="add_new_form" action="{{ route('library.setups.store') }}" method="POST" enctype="multipart/form-data" >
            @csrf 
            <input type="hidden" name="created_by" value="{{ Auth::user()->id }}">
                <div class="modal-header">
                    <h4 class="title">Add New {{ $name }}</h4>
                </div>
                <div class="modal-body">
                    <div id="add_new_larger_modals_body">
                        <div class="body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs p-0 mb-3 nav-tabs-success" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setup_with_icon_title"><i class="zmdi zmdi-hc-fw"></i> Setup</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#fine_with_icon_title"><i class="zmdi zmdi-hc-fw"></i> Fine</a></li>
                            </ul>
                                    
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane in active" id="setup_with_icon_title">
                                    
                                    <div class="row clearfix">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Title <small class="text-danger">*</small></label>                                 
                                                <input type="text" name="title" class="form-control" placeholder="Title" />                                   
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Message </label>                                 
                                                <input type="text" name="message" class="form-control" placeholder="Notification" />                                   
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">                                
                                                <input type="text" name="about" class="form-control" placeholder="About" />                                   
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="form-label">Open - Close Time </label>                                 
                                                <input type="text" name="open_close" class="form-control" placeholder="Open - Close Time" />                                   
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="form-label">Launch Time </label>                                 
                                                <input type="text" name="lunch_time" class="form-control" placeholder="Launch Time" />                                   
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="form-label">Holiday </label>                                 
                                                <input type="text" name="holiday" class="form-control" placeholder="Holiday" />                                   
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="form-label">Logo</label>                                 
                                                <select class="form-control show-tick ms select2" name="logo" >
                                                    <option value="">-- Please select --</option>
                                                    @foreach(App\Models\Upload::where('user_id', Auth::user()->id)->where('type', 'image')->get() as $key => $value)
                                                        <option value="{{ $value->id }}">({{ $value->id }}) - {{ $value->file_title}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="form-label">Institutes <small class="text-danger">*</small></label>                                 
                                                <select class="form-control w-100  ms select2 mr-2" name="institutes_id">
                                                    <option value="">-- Please select --</option>
                                                    @foreach(App\Models\Institute::where('status', 1)->get() as $key => $value)

                                                        @php
                                                            $library_setup = App\Models\LibrarySetup::where('institutes_id', $value->id)->first();
                                                            if(empty($library_setup)){
                                                        @endphp

                                                            <option value="{{ $value->id }}">{{ $value->title }}
                                                            </option>

                                                        @php } @endphp
                                                    @endforeach
                                                </select>                             
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="form-label">Status <small class="text-danger">*</small></label>                                 
                                                <select class="form-control w-100  ms select2 mr-2" name="status">
                                                    <option value="">-- Please select --</option>
                                                    <option value="1" selected>Active</option>
                                                    <option value="0">Deactive</option>
                                                </select>                             
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="fine_with_icon_title">
                                    <div class="row clearfix">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Return Days <small class="text-danger">*</small></label>                                 
                                                <input type="text" name="return_days" class="form-control" placeholder="Return Days" />                                   
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Fine <small class="text-danger">*</small></label>                                 
                                                <input type="text" name="fine" class="form-control" placeholder="Fine" />                                   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-round waves-effect" data-dismiss="modal">CLOSE</button>
                    <div class="swal-button-container">
                        <button type="submit" class="btn btn-success btn-round waves-effect dsld-btn-loader">SUBMIT</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
