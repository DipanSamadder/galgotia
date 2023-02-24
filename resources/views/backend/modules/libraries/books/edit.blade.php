@if($data !='')

<input type="hidden" name="id" value="{{ $data->id }}">
<input type="hidden" name="created_by" value="{{ $data->created_by }}">
<div class="body">
    <div class="row clearfix">
        <div class="col-sm-12">
            <div class="form-group">
                <label class="form-label">Book <small class="text-danger">*</small></label>                                 
                <input type="text" name="title" class="form-control" placeholder="Book" @if($data->title) value="{{ $data->title }}" @endif  />                                   
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label class="form-label">Code <small class="text-danger">*</small></label>                                 
                <input type="text" name="code" class="form-control" placeholder="Code" disabled @if($data->code) value="{{ $data->code }}" @endif />                                   
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label class="form-label">Stock <small class="text-danger">*</small></label>                                 
                <input type="text" name="stock" class="form-control" placeholder="Stock" @if($data->stock) value="{{ $data->stock }}" @endif  />                                   
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">  
                <label class="form-label">Category <small class="text-danger">*</small></label>                               
                <select class="form-control w-100 ms select2 mr-2" name="library_categories_id">
                    <option value="">-- Select Category --</option>
                    @foreach(App\Models\LibraryCategory::where('status', 1)->get()  as $key => $value)
                    <option value="{{ $value->id }}" @if($data->library_categories_id == $value->id) selected @endif >{{ $value->title }}</option>
                    @endforeach
                </select>                             
            </div>
        </div>                                    
        <div class="col-sm-6">
            <div class="form-group"> 
                <label class="form-label">Author <small class="text-danger">*</small></label>                              
                <select class="form-control w-100 ms select2 mr-2" name="library_authors_id">
                    <option value="">-- Select Author--</option>
                    @foreach(App\Models\LibraryAuthor::where('status', 1)->get()  as $key => $value)
                    <option value="{{ $value->id }}" @if($data->library_authors_id == $value->id) selected @endif>{{ $value->title }}</option>
                    @endforeach
                </select>                             
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group"> 
                <label class="form-label">Publisher <small class="text-danger">*</small></label>                               
                <select class="form-control w-100 ms select2 mr-2" name="library_publishers_id">
                    <option value="">-- Select Publisher--</option>
                    @foreach(App\Models\LibraryPublisher::where('status', 1)->get()  as $key => $value)
                    <option value="{{ $value->id }}" @if($data->library_publishers_id == $value->id) selected @endif >{{ $value->title }}</option>
                    @endforeach
                </select>                             
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label class="form-label">Order</label>                                 
                <input type="text" name="order" class="form-control" placeholder="Order" @if($data->order) value="{{ $data->order }}" @endif  />                                   
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
                