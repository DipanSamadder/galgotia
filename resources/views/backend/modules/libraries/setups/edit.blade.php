@if($data !='')

<input type="hidden" name="id" value="{{ $data->id }}">

<div class="body">
    <form id="update_form" action="{{ route('library.setups.update') }}" method="POST" enctype="multipart/form-data" >
        @csrf 
        <div class="row clearfix">
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="form-label">Title <small class="text-danger">*</small></label>                                 
                    <input type="text" name="title" class="form-control" placeholder="Title" value="{{ @$data->title }}" />                                   
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="form-label">Message </label>                                 
                    <input type="text" name="message" class="form-control" placeholder="Message" value="{{ @$data->message }}" />                                   
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">                                
                    <input type="text" name="about" class="form-control" placeholder="About" value="{{ @$data->about }}" />                                   
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="form-label">Open - Close Time </label>                                 
                    <input type="text" name="open_close" class="form-control" placeholder="Open - Close Time" value="{{ @$data->open_close }}" />                                   
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="form-label">Launch Time </label>                                 
                    <input type="text" name="lunch_time" class="form-control" placeholder="Launch Time" value="{{ @$data->lunch_time }}" />                                   
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="form-label">Holiday </label>                                 
                    <input type="text" name="holiday" class="form-control" placeholder="Holiday" value="{{ @$data->holiday }}" />                                   
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="form-label">Logo</label>                                 
                    <select class="form-control show-tick ms select2" name="logo" >
                        <option value="">-- Please select --</option>
                        @foreach(App\Models\Upload::where('user_id', Auth::user()->id)->where('type', 'image')->get() as $key => $value)
                            <option value="{{ $value->id }}" @if($data->logo == $value->id) selected @endif>({{ $value->id }}) - {{ $value->file_title}} </option>
                        @endforeach
                    </select>                                                                
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
    </form>
</div>
@endif
                