@if($data !='')

<input type="hidden" name="id" value="{{ $data->id }}">
<input type="hidden" name="library_setups_id" value="{{ $data->library_setups_id }}">

<div class="body">
    <div class="row clearfix">
        <div class="col-sm-6">
            <div class="form-group">
                <label class="form-label">Return Days <small class="text-danger">*</small></label>                                 
                <input type="text" name="return_days" class="form-control" placeholder="Return Days" value="{{ $data->return_days }}" />                                   
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label class="form-label">Fine <small class="text-danger">*</small></label>                                 
                <input type="text" name="fine" class="form-control" placeholder="Return Days" value="{{ $data->fine }}" />                               
            </div>
        </div>
    </div>

</div>
@endif
                