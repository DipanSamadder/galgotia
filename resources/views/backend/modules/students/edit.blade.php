@if($data !='')

<input type="hidden" name="id" value="{{ $data->id }}">
<input type="hidden" name="created_by" value="{{ $data->students->id }}">

<div class="body">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs p-0 mb-3 nav-tabs-success" role="tablist">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#edit_personal_with_icon_title"><i class="zmdi zmdi-hc-fw"></i> Personal </a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#edit_education_with_icon_title"><i class="zmdi zmdi-hc-fw"></i> Education </a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#edit_socails_with_icon_title"><i class="zmdi zmdi-hc-fw"></i> Socails</a></li>
    </ul>
            
    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane in active" id="edit_personal_with_icon_title"> 
            <div class="row clearfix">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="form-label">Name <small class="text-danger">*</small></label>                                 
                        <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $data->students->name }}" />                                   
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="form-label">About </label>                                 
                        <input type="text" name="about" class="form-control" placeholder="About" value="{{ $data->about }}" />                                   
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="form-label">Photo</label>                                 
                        <select class="form-control show-tick ms select2" name="avatar_original" id="avatar_original" onchange="is_edited()">
                            <option value="">-- Please select --</option>
                            @foreach(App\Models\Upload::where('user_id', Auth::user()->id)->where('type', 'image')->get() as $key => $value)
                                <option value="{{ $value->id }}" @if($data->students->avatar_original == $value->id) Selected @endif>({{ $value->id }}) - {{ $value->file_title}} </option>
                            @endforeach
                        </select>                                                                
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="form-label">Father's Name </label>                                 
                        <input type="text" name="fname" class="form-control" placeholder="Father Name" value="{{ $data->fname }}" />                                   
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="form-label">Mother's Name </label>                                 
                        <input type="text" name="mname" class="form-control" placeholder="Mother Name" value="{{ $data->mname }}" />                                   
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="form-label">DOB </label>                                 
                        <input type="date" name="dob" class="form-control" placeholder="DOB" value="{{ $data->dob }}" />                                   
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="form-label">Blood Group </label>                                 
                        <select class="form-control w-100  ms select2 mr-2" name="blood">
                            <option value="">-- Please select --</option>
                            <option value="ab+" @if($data->blood == 'ab+') selected @endif>AB+</option>
                            <option value="ab-" @if($data->blood == 'ab-') selected @endif>AB-</option>
                            <option value="a+" @if($data->blood == 'a+') selected @endif>A+</option>
                            <option value="a-" @if($data->blood == 'a-') selected @endif>A-</option>
                            <option value="b+" @if($data->blood == 'b+') selected @endif>B+</option>
                            <option value="b-" @if($data->blood == 'b-') selected @endif>B-</option>
                            <option value="0+" @if($data->blood == '0+') selected @endif>0+</option>
                            <option value="0-" @if($data->blood == '0-') selected @endif>0-</option>
                        </select>                             
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="form-label">Order </label>                                 
                        <input type="text" name="order" class="form-control" placeholder="Order" value="0"  value="{{ $data->order }}"/>                                   
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="form-label">Status <small class="text-danger">*</small></label>                                 
                        <select class="form-control w-100  ms select2 mr-2" name="status">
                            <option value="">-- Please select --</option>
                            <option value="1" @if($data->status == '1') selected @endif>Active</option>
                            <option value="2" @if($data->status == '2') selected @endif>Alumni</option>
                            <option value="0" @if($data->status == '0') selected @endif>Deactive</option>
                        </select>                             
                    </div>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="edit_education_with_icon_title">
            <div class="row clearfix">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="form-label">Institutes <small class="text-danger">*</small></label>                                 
                        <select class="form-control w-100  ms select2 mr-2 need_program" name="institutes_id">
                            <option value="">-- Please select --</option>
                            @foreach(App\Models\Institute::where('status', 1)->get() as $key => $value)
                                <option value="{{ $value->id }}" @if($data->institutes_id == $value->id) Selected @endif>{{ $value->title }}
                                </option>
                            @endforeach
                        </select>                             
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="form-label">Program <small class="text-danger">*</small> <span class="dropdown-loading"></span></label>                                 
                        <select class="form-control show-tick ms select2 get_program" name="programs_id">
                            <option value="">-- Please select --</option>
                            
                            @if($data->programs_id !="")
                                @foreach(App\Models\Program::where('status', 1)->get() as $key => $value)
                                <option value="{{ $value->id }}" @if($data->programs_id == $value->id) Selected @endif>{{ $value->title }}
                                </option>
                                @endforeach
                             @endif
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="form-label">Sessions <small class="text-danger">*</small></label>                                 
                        <select class="form-control w-100  ms select2 mr-2" name="program_sessions_id">
                            <option value="">-- Please select --</option>
                            @foreach(App\Models\ProgramSession::where('status', 1)->get() as $key => $value)
                                <option value="{{ $value->id }}" @if($data->program_sessions_id == $value->id) Selected @endif>{{ $value->title }}
                                </option>
                            @endforeach
                        </select>                             
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="form-label">Registration </label>                                 
                        <input type="text" name="registration" class="form-control" placeholder="Registration" value="{{ $data->registration }}"/>                                   
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="form-label">Roll </label>                                 
                        <input type="text" name="roll" class="form-control" placeholder="Roll" disabled  value="{{ $data->roll }}"/>                                   
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
                        <input type="text" name="facebook" class="form-control" placeholder="Facebook"   value="@if($data->social_links) {{ json_decode($data->social_links)[0]->facebook }} @endif" />                                   
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="form-label">Instagram </label>                                 
                        <input type="hidden" name="socials[]" value="instagram" />                                   
                        <input type="text" name="instagram" class="form-control" placeholder="Instagram"   value="@if($data->social_links) {{ json_decode($data->social_links)[1]->instagram }} @endif" />                                   
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="form-label">Youtube </label>                                 
                        <input type="hidden" name="socials[]" value="youtube" />                                   
                        <input type="text" name="youtube" class="form-control" placeholder="Youtube"   value="@if($data->social_links) {{ json_decode($data->social_links)[2]->youtube }} @endif" />                                   
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="form-label">Twitter </label>                                 
                        <input type="hidden" name="socials[]" value="twitter" />                                   
                        <input type="text" name="twitter" class="form-control" placeholder="Twitter"   value="@if($data->social_links) {{ json_decode($data->social_links)[3]->twitter }} @endif" />                                   
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="form-label">Linkedin </label>                                 
                        <input type="hidden" name="socials[]" value="linkedin" />                                   
                        <input type="text" name="linkedin" class="form-control" placeholder="Linkedin"  value="@if($data->social_links) {{ json_decode($data->social_links)[4]->linkedin }} @endif"  />                                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
                