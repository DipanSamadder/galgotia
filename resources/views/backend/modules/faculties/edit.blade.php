@if($data !='')

<input type="hidden" name="id" value="{{ $data->id }}">
<input type="hidden" name="created_by" value="{{ Auth::user()->id }}">
<div class="body">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs p-0 mb-3 nav-tabs-success" role="tablist">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#edit_about_with_icon_title"><i class="zmdi zmdi-home"></i> About </a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#edit_socails_with_icon_title"><i class="zmdi zmdi-hc-fw"></i> Socails</a></li>
    </ul>
            
    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane in active" id="edit_about_with_icon_title"> 
            <div class="row clearfix">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="form-label">User <small class="text-danger">*</small></label>                                 
                        <select class="form-control w-100  ms select2 mr-2" name="user_id">
                            <option value="">-- Please select --</option>
                            @php 
                                $arr[] = '';
                                $faculty = App\Models\Faculty::whereNot('user_id', $data->user_id)->get();
                                foreach($faculty as $key => $value){
                                    $arr[] = $value->user_id;
                                }
                            @endphp

                            @foreach(App\Models\user::where('banned', 0)->where('user_type', 'staff')->whereNotIn('id', $arr)->get() as $key => $value)
                                <option value="{{ $value->id }}" @if($value->id == $data->user_id) Selected @endif > {{ $value->name }}
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
                                <option value="{{ $value->id }}" @if($value->id == $data->faculty_types_id) Selected @endif>{{ $value->title }}
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
                                <option value="{{ $value->id }}" @if($value->id == $data->institutes_id) Selected @endif>{{ $value->title }}
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
                            @foreach(App\Models\Page::where('status', 1)->where('level', 2)->where('type', 'department_page')->get() as $key => $value)
                                <option value="{{ $value->id }}" @if($value->id == $data->departments_id) Selected @endif>{{ $value->title }}
                                </option>
                            @endforeach
                        </select>                             
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="form-label">Order </label>                                 
                        <input type="text" name="order" class="form-control" placeholder="Order" value="{{ $data->order }}" />                                   
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="form-label">Status </label>                                 
                        <select class="form-control w-100  ms select2 mr-2" name="status">
                            <option value="">-- Please select --</option>
                            <option value="1"  @if($data->status == 1) Selected @endif>Active</option>
                            <option value="0" @if($data->status == 0) Selected @endif>Deactive</option>
                        </select>                             
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="form-label">About </label>                                 
                        <input type="text" name="about" class="form-control" placeholder="About"  value="{{ $data->about }}"/>                                   
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="form-label">Designation </label>                                 
                        <input type="text" name="designation" class="form-control" placeholder="Designation"  value="{{ $data->designation }}"/>                                   
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="form-label">Qualification </label>                                 
                        <input type="text" name="qualification" class="form-control" placeholder="Qualification"  value="{{ $data->qualification }}"/>                                   
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
                