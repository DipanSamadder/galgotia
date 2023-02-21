@if($data !='')

<input type="hidden" name="id" value="{{ $data->id }}">
<div class="body">
    <div class="row clearfix">
        <div class="col-sm-12">
            <div class="form-group">
                <label class="form-label">Type <small class="text-danger">*</small></label>                                 
                <input type="text" name="title" class="form-control" placeholder="Type" @if($data->title) value="{{ $data->title }}" @endif  />                                   
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label class="form-label">Order </label>                                 
                <input type="text" name="order" class="form-control" placeholder="Order"  @if($data->title) value="{{ $data->order }}" @endif  />                                   
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
                