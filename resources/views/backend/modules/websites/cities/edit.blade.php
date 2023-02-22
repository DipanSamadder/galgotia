@if($data !='')

<input type="hidden" name="id" value="{{ $data->id }}">
<div class="body">
    <div class="row clearfix">
        <div class="col-sm-6">
            <div class="form-group">
                <label class="form-label">City <small class="text-danger">*</small></label>                                 
                <input type="text" name="name" class="form-control" placeholder="City" @if($data->name) value="{{ $data->name }}" @endif  />                                   
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label class="form-label">State <small class="text-danger">*</small></label>                                 
                <select class="form-control w-100  ms select2 mr-2" name="state_id">
                    <option value="">-- Please select --</option>
                    @foreach(App\Models\State::where('status', 1)->get() as $key => $value)
                        <option value="{{ $value->id }}" @if($value->id == $data->state_id) selected @endif>{{ $value->name }}
                        </option>
                    @endforeach
                </select>                             
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
                