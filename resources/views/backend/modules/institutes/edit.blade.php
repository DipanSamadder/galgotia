@if($data !='')

<input type="hidden" name="page_id" value="{{ $data->id }}">
<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
<div class="body">
   <!-- Nav tabs -->
   <ul class="nav nav-tabs p-0 mb-3 nav-tabs-success" role="tablist">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#edit_about_with_icon_title"><i class="zmdi zmdi-home"></i> About </a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#edit_details_with_icon_title"><i class="zmdi zmdi-hc-fw"></i> Details </a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#edit_owner_with_icon_title"><i class="zmdi zmdi-account"></i> Owner</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#edit_socails_with_icon_title"><i class="zmdi zmdi-hc-fw"></i> Socails</a></li>
    </ul>
            
    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane in active" id="edit_about_with_icon_title"> 
            <div class="row clearfix">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="form-label">Institute<small class="text-danger">*</small></label>                                 
                        <input type="text" name="title" class="form-control" placeholder="Institute" value="{{ $data->title }}" />                                   
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="form-label">Type <small class="text-danger">*</small></label>                                 
                        <select class="form-control w-100  ms select2 mr-2" name="institute_types_id">
                            <option value="">-- Please select --</option>
                            @if(App\Models\InstituteType::where('status', 1)->get() != '')
                                @foreach(App\Models\InstituteType::where('status', 1)->get() as $key => $value)
                                    <option value="{{ $value->id }}" @if($data->institute_types_id == $value->id) selected @endif>{{ $value->title }}</option>
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
                                <option value="{{ $value->id }}" @if($data->logo == $value->id) selected @endif>({{ $value->id }}) - {{ $value->file_title}} </option>
                            @endforeach
                        </select>
                                                                                
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="form-label">Phone <small class="text-danger">*</small></label>                                 
                        <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ $data->phone }}" />                                   
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="form-label">Email <small class="text-danger">*</small></label>                                 
                        <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $data->email }}" />                                   
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="form-label">Order </label>                                 
                        <input type="text" name="order" class="form-control" placeholder="Order"  value="{{ $data->order }}" />                                   
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="form-label">Status <small class="text-danger">*</small></label>                                 
                        <select class="form-control w-100  ms select2 mr-2" name="status">
                            <option value="">-- Please select --</option>
                            <option value="1"  @if($data->status == 1) selected @endif>Active</option>
                            <option value="0"  @if($data->status == 0) selected @endif>Deactive</option>
                        </select>                             
                    </div>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="edit_details_with_icon_title">
            <div class="row clearfix">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="form-label">Country </label>                                 
                        <select class="form-control w-100  ms select2 mr-2" name="country">
                            <option value="">-- Please select --</option>
                            @if(App\Models\InstituteType::where('status', 1)->get() != '')
                                @foreach(App\Models\InstituteType::where('status', 1)->get() as $key => $value)
                                    <option value="{{ $value->id }}" @if($data->country == $value->id) selected @endif>{{ $value->title }}</option>
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
                                    <option value="{{ $value->id }}" @if($data->country == $value->id) selected @endif>{{ $value->title }}</option>
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
                                    <option value="{{ $value->id }}" @if($data->country == $value->id) selected @endif>{{ $value->title }}</option>
                                @endforeach
                            @endif
                        </select>                             
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="form-label">Address</label>                                 
                        <input type="text" name="address" class="form-control" placeholder="Address" value="{{ $data->address }}"/>                                   
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="form-label">Established year</label>                                 
                        <input type="text" name="year" class="form-control" placeholder="Established year" value="{{ $data->year }}" />                                   
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="form-label">Map </label>                                 
                        <input type="text" name="map" class="form-control" placeholder="Map" value="{{ $data->map }}"/>                                   
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="form-label">Website </label>                                 
                        <input type="text" name="website" class="form-control" placeholder="Website" value="{{ $data->website }}"/>                                   
                    </div>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="edit_owner_with_icon_title">
            <div class="row clearfix">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="form-label">Owner Name </label>                                 
                        <input type="hidden" name="owner[]" value="oname" />                                   
                        <input type="text" name="oname" class="form-control" placeholder="Owner Name" value="@if($data->owner_details) {{ json_decode($data->owner_details)[0]->oname }} @endif" />                                   
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="form-label">Owner Phone </label>                                 
                        <input type="hidden" name="owner[]" value="ophone" />                                   
                        <input type="text" name="ophone" class="form-control" placeholder="Owner Phone"  value="@if($data->owner_details) {{ json_decode($data->owner_details)[1]->ophone }} @endif" />                                   
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="form-label">Owner Email </label>                                 
                        <input type="hidden" name="owner[]" value="oemail" />                                   
                        <input type="text" name="oemail" class="form-control" placeholder="Owner Email"  value="@if($data->owner_details) {{ json_decode($data->owner_details)[2]->oemail }} @endif" />                                   
                    </div>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="edit_socails_with_icon_title">
            <div class="row clearfix">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="form-label">Facebook </label>                                 
                        <input type="hidden" name="socials[]" value="facebook" />                                   
                        <input type="text" name="facebook" class="form-control" placeholder="Facebook"   value="@if($data->social_link) {{ json_decode($data->social_link)[0]->facebook }} @endif" />                                   
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="form-label">Instagram </label>                                 
                        <input type="hidden" name="socials[]" value="instagram" />                                   
                        <input type="text" name="instagram" class="form-control" placeholder="Instagram"   value="@if($data->social_link) {{ json_decode($data->social_link)[1]->instagram }} @endif" />                                   
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="form-label">Youtube </label>                                 
                        <input type="hidden" name="socials[]" value="youtube" />                                   
                        <input type="text" name="youtube" class="form-control" placeholder="Youtube"   value="@if($data->social_link) {{ json_decode($data->social_link)[2]->youtube }} @endif" />                                   
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="form-label">Twitter </label>                                 
                        <input type="hidden" name="socials[]" value="twitter" />                                   
                        <input type="text" name="twitter" class="form-control" placeholder="Twitter"   value="@if($data->social_link) {{ json_decode($data->social_link)[3]->twitter }} @endif" />                                   
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="form-label">Linkedin </label>                                 
                        <input type="hidden" name="socials[]" value="linkedin" />                                   
                        <input type="text" name="linkedin" class="form-control" placeholder="Linkedin"  value="@if($data->social_link) {{ json_decode($data->social_link)[4]->linkedin }} @endif"  />                                   
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endif
                