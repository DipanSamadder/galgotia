@if($data !='')

<input type="hidden" name="id" value="{{ $data->id }}">
<div class="body">
    <div class="row clearfix">
        <div class="col-sm-12">
            <div class="form-group">
                <label class="form-label">State <small class="text-danger">*</small></label>                                 
                <input type="text" name="name" class="form-control" placeholder="State" @if($data->name) value="{{ $data->title }}" @endif  />                                   
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label class="form-label">Country <small class="text-danger">*</small></label>                                 
                <select class="form-control w-100  ms select2 mr-2" name="country_id">
                    <option value="">-- Please select --</option>
                    @foreach(App\Models\Country::where('status', 1)->get() as $key => $value)
                        <option value="{{ $value->id }}" @if($value->id == $data->country_id) selected @endif>{{ $value->name }}
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
                