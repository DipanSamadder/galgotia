
<div class="modal fade" id="add_new_larger_modals" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title">Add New {{ $name }}</h4>
            </div>
            <form id="add_new_form" action="{{ route('faculty.store') }}" method="POST" enctype="multipart/form-data" >
            @csrf 
            <input type="hidden" name="created_by" value="{{ Auth::user()->id }}">
            <div class="modal-body">
                <div id="add_new_larger_modals_body">
                    <div class="body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs p-0 mb-3 nav-tabs-success" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#about_with_icon_title"><i class="zmdi zmdi-home"></i> About </a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#socails_with_icon_title"><i class="zmdi zmdi-hc-fw"></i> Socails</a></li>
                        </ul>
                                
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane in active" id="about_with_icon_title"> 
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">User <small class="text-danger">*</small></label>                                 
                                            <select class="form-control w-100  ms select2 mr-2" name="user_id">
                                                <option value="">-- Please select --</option>
                                                @foreach(App\Models\user::where('banned', 0)->where('user_type', 'staff')->get() as $key => $value)
                                                    <option value="{{ $value->id }}">{{ $value->name }}
                                                    </option>
                                                @endforeach
                                            </select>                             
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Types <small class="text-danger">*</small></label>                                 
                                            <select class="form-control w-100  ms select2 mr-2" name="faculty_types_id">
                                                <option value="">-- Please select --</option>
                                                @foreach(App\Models\FacultyType::where('status', 1)->get() as $key => $value)
                                                    <option value="{{ $value->id }}">{{ $value->title }}
                                                    </option>
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
                                                    <option value="{{ $value->id }}">{{ $value->title }}
                                                    </option>
                                                @endforeach
                                            </select>                             
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Department <small class="text-danger">*</small></label>                                 
                                            <select class="form-control w-100  ms select2 mr-2" name="departments_id">
                                                <option value="">-- Please select --</option>
                                                @foreach(App\Models\Department::where('status', 1)->get() as $key => $value)
                                                    <option value="{{ $value->id }}">{{ $value->title }}
                                                    </option>
                                                @endforeach
                                            </select>                             
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Order </label>                                 
                                            <input type="text" name="order" class="form-control" placeholder="Order" value="0" />                                   
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Status </label>                                 
                                            <select class="form-control w-100  ms select2 mr-2" name="status">
                                                <option value="">-- Please select --</option>
                                                <option value="1" selected>Active</option>
                                                <option value="0">Deactive</option>
                                            </select>                             
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">About </label>                                 
                                            <input type="text" name="about" class="form-control" placeholder="About" />                                   
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="socails_with_icon_title">
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Facebook </label>                                 
                                            <input type="hidden" name="socials[]" value="facebook" />                                   
                                            <input type="text" name="facebook" class="form-control" placeholder="Facebook" />                                   
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Instagram </label>                                 
                                            <input type="hidden" name="socials[]" value="instagram" />                                   
                                            <input type="text" name="instagram" class="form-control" placeholder="Instagram" />                                   
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Youtube </label>                                 
                                            <input type="hidden" name="socials[]" value="youtube" />                                   
                                            <input type="text" name="youtube" class="form-control" placeholder="Youtube" />                                   
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Twitter </label>                                 
                                            <input type="hidden" name="socials[]" value="twitter" />                                   
                                            <input type="text" name="twitter" class="form-control" placeholder="Twitter" />                                   
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Linkedin </label>                                 
                                            <input type="hidden" name="socials[]" value="linkedin" />                                   
                                            <input type="text" name="linkedin" class="form-control" placeholder="Linkedin" />                                   
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
