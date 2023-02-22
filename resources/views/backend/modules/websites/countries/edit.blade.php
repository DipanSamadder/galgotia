@if($data !='')

<input type="hidden" name="id" value="{{ $data->id }}">
<div class="body">
    <div class="row clearfix">
        <div class="col-sm-6">
            <div class="form-group">
                <label class="form-label">State <small class="text-danger">*</small></label>                                 
                <input type="text" name="name" class="form-control" placeholder="State" @if($data->name) value="{{ $data->name }}" @endif  />                                   
            </div>
        </div>
        
        <div class="col-sm-6">
            <div class="form-group">
                <label class="form-label">Sort Name<small class="text-danger">*</small></label>                                 
                <input type="text" name="sortname" class="form-control" placeholder="Sort Name" value="{{ $data->sortname }}"/>                                   
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label class="form-label">Phone Code<small class="text-danger">*</small></label>                                 
                <input type="text" name="phonecode" class="form-control" placeholder="Phone Code" value="{{ $data->phonecode }}" />                                   
            </div>
        </div>
        <div class="col-sm-6">
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
                