@if($data !='')

<input type="hidden" name="id" value="{{ $data->id }}">
<div class="body">
    <div class="row clearfix">
        <div class="col-sm-4">
            <div class="form-group">
                <label class="form-label">Name <small class="text-danger">*</small></label>                                 
                <input type="text" name="title" class="form-control" placeholder="Name" @if($data->title) value="{{ $data->title }}" @endif  />                                   
            </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <label class="form-label">Package <small class="text-danger">*</small></label>                                 
                <input type="text" name="package" class="form-control" placeholder="Package"  @if($data->is_meta == 1) value="{{ json_decode($data->meta_fields)->package }}" @endif/>                                   
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label class="form-label">Company <small class="text-danger">*</small></label>                                 
                <input type="text" name="company" class="form-control" placeholder="Company"  @if($data->is_meta == 1) value="{{ json_decode($data->meta_fields)->company }}" @endif />                                   
            </div>
        </div>
        
        <div class="col-sm-12">
            <div class="form-group">
                <label class="form-label">Content <small class="text-danger">*</small></label>   
                <textarea name="content" class="form-control" placeholder="Content"> @if($data->content) {{ $data->content }} @endif</textarea>                                  
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label class="form-label">Banner</label>
                <select class="form-control show-tick ms select2" name="banner" id="banner" onchange="is_edited()">
                    <option value="">-- Please select --</option>
                    @foreach(App\Models\Upload::where('user_id', Auth::user()->id)->where('type', 'image')->get() as $key => $value)
                        <option value="{{ $value->id }}" @if($data->banner == $value->id) selected @endif>({{ $value->id }}) - {{ $value->file_title}} </option>
                    @endforeach
                </select>
                @if($data->banner > 0)
                <div class="image mt-2">
                    <img src="{{ dsld_uploaded_asset($data->banner) }}"  alt="{{ dsld_upload_file_title($data->banner) }}" class="img-fluid">
                </div> 
                @endif  
                                                                            
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label class="form-label">Order</label>                                 
                <input type="text" name="order" class="form-control" placeholder="Order" value="{{ $data->order }}" />                                   
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">                                 
                <label class="form-label">Status <small class="text-danger">*</small></label>                                 
                <select class="form-control w-100  ms select2 mr-2" name="status">
                    <option value="">-- Please select --</option>
                    <option value="1"  @if($data->status == 1) selected @endif>Active</option>
                    <option value="0" @if($data->status == 0) selected @endif>Deactive</option>
                </select>                            
            </div>
        </div>
    </div>

</div>
@endif
                