@if($data !='')

<input type="hidden" name="id" value="{{ $data->id }}">
<div class="body">
    <div class="row clearfix">
        <div class="col-sm-12">
            <div class="form-group">
                <label class="form-label">Session <small class="text-danger">*</small></label>                                 
                <input type="text" name="title" class="form-control" placeholder="Session" @if($data->title) value="{{ $data->title }}" @endif  />                                   
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
                <label class="form-label">Institutes <small class="text-danger">*</small></label>                                 
                <select class="form-control w-100  ms select2 mr-2" name="institutes_id">
                    <option value="">-- Please select --</option>
                    @foreach(App\Models\Institute::where('status', 1)->get() as $key => $value)
                        <option value="{{ $value->id }}" @if($value->id == $data->institutes_id) selected @endif>{{ $value->title }}
                        </option>
                    @endforeach
                </select>                             
            </div>
        </div>
        
        <div class="col-sm-6">
            <div class="form-group">
                <label class="form-label">Blook <small class="text-danger">*</small></label>                                 
                <select class="form-control w-100  ms select2 mr-2" name="blocks_id">
                    <option value="">-- Please select --</option>
                    <option value="1" @if(1 == $data->blocks_id) selected @endif>Block 1</option>
                    <option value="2" @if(2 == $data->blocks_id) selected @endif>Block 2</option>
                    <option value="3" @if(3 == $data->blocks_id) selected @endif>Block 3</option>
                    <option value="4" @if(4 == $data->blocks_id) selected @endif>Block 4</option>
                    <option value="5" @if(5 == $data->blocks_id) selected @endif>Block 5</option>
                </select>                             
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label class="form-label">Floor <small class="text-danger">*</small></label>                                 
                <select class="form-control w-100  ms select2 mr-2" name="floors_id">
                    <option value="">-- Please select --</option>
                    <option value="1" @if(1 == $data->floors_id) selected @endif>Floor 1</option>
                    <option value="2" @if(2 == $data->floors_id) selected @endif>Floor 2</option>
                    <option value="3" @if(3 == $data->floors_id) selected @endif>Floor 3</option>
                    <option value="4" @if(4 == $data->floors_id) selected @endif>Floor 4</option>
                    <option value="5" @if(5 == $data->floors_id) selected @endif>Floor 5</option>
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
                