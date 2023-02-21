
<div class="modal fade" id="add_new_larger_modals_user" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title">Add New {{ $name }}</h4>
            </div>
            <form id="add_new_form" action="{{ route('institutes.store') }}" method="POST" enctype="multipart/form-data" >
            @csrf 
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <div class="modal-body">
                <div id="add_new_larger_modals_user_body">
                    <div class="body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs p-0 mb-3 nav-tabs-success" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#about_with_icon_title"><i class="zmdi zmdi-home"></i> About </a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#details_with_icon_title"><i class="zmdi zmdi-hc-fw"></i> Details </a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#owner_with_icon_title"><i class="zmdi zmdi-account"></i> Owner</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#socails_with_icon_title"><i class="zmdi zmdi-hc-fw"></i> Socails</a></li>
                        </ul>
                                
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane in active" id="about_with_icon_title"> 
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">{{ $name }}<small class="text-danger">*</small></label>                                 
                                            <input type="text" name="title" class="form-control" placeholder="{{ $name }}" />                                   
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Type <small class="text-danger">*</small></label>                                 
                                            <select class="form-control w-100  ms select2 mr-2" name="institute_types_id">
                                                <option value="">-- Please select --</option>
                                                @if(App\Models\InstituteType::where('status', 1)->get() != '')
                                                    @foreach(App\Models\InstituteType::where('status', 1)->get() as $key => $value)
                                                        <option value="{{ $value->id }}">{{ $value->title }}</option>
                                                    @endforeach
                                                @endif
                                            </select>                             
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Logo </label>
                                            <select class="form-control show-tick ms select2" name="logo" onchange="is_edited()">
                                                <option value="">-- Please select --</option>
                                                @foreach(App\Models\Upload::where('user_id', Auth::user()->id)->where('type', 'image')->get() as $key => $value)
                                                    <option value="{{ $value->id }}">({{ $value->id }}) - {{ $value->file_title}} </option>
                                                @endforeach
                                            </select>
                                                                                                    
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Phone <small class="text-danger">*</small></label>                                 
                                            <input type="text" name="phone" class="form-control" placeholder="Phone" />                                   
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Email <small class="text-danger">*</small></label>                                 
                                            <input type="text" name="email" class="form-control" placeholder="Email" />                                   
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Order </label>                                 
                                            <input type="text" name="order" class="form-control" placeholder="Order" value="0" />                                   
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
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
                            <div role="tabpanel" class="tab-pane" id="details_with_icon_title">
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Country </label>                                 
                                            <select class="form-control w-100  ms select2 mr-2" name="country">
                                                <option value="">-- Please select --</option>
                                                @if(App\Models\InstituteType::where('status', 1)->get() != '')
                                                    @foreach(App\Models\InstituteType::where('status', 1)->get() as $key => $value)
                                                        <option value="{{ $value->id }}">{{ $value->title }}</option>
                                                    @endforeach
                                                @endif
                                            </select>                             
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">State </label>                                 
                                            <select class="form-control w-100  ms select2 mr-2" name="state">
                                                <option value="">-- Please select --</option>
                                                @if(App\Models\InstituteType::where('status', 1)->get() != '')
                                                    @foreach(App\Models\InstituteType::where('status', 1)->get() as $key => $value)
                                                        <option value="{{ $value->id }}">{{ $value->title }}</option>
                                                    @endforeach
                                                @endif
                                            </select>                             
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">City </label>                                 
                                            <select class="form-control w-100  ms select2 mr-2" name="city">
                                                <option value="">-- Please select --</option>
                                                @if(App\Models\InstituteType::where('status', 1)->get() != '')
                                                    @foreach(App\Models\InstituteType::where('status', 1)->get() as $key => $value)
                                                        <option value="{{ $value->id }}">{{ $value->title }}</option>
                                                    @endforeach
                                                @endif
                                            </select>                             
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Address</label>                                 
                                            <input type="text" name="address" class="form-control" placeholder="Address" />                                   
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Established year</label>                                 
                                            <input type="text" name="year" class="form-control" placeholder="Established year" />                                   
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Map </label>                                 
                                            <input type="text" name="Map" class="form-control" placeholder="Map" />                                   
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Website </label>                                 
                                            <input type="text" name="Website" class="form-control" placeholder="Website" />                                   
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="owner_with_icon_title">
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Owner Name </label>                                 
                                            <input type="hidden" name="owner[]" value="oname" />                                   
                                            <input type="text" name="oname" class="form-control" placeholder="Owner Name" />                                   
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Owner Phone </label>                                 
                                            <input type="hidden" name="owner[]" value="ophone" />                                   
                                            <input type="text" name="ophone" class="form-control" placeholder="Owner Phone" />                                   
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Owner Email </label>                                 
                                            <input type="hidden" name="owner[]" value="oemail" />                                   
                                            <input type="text" name="oemail" class="form-control" placeholder="Owner Email" />                                   
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
