@if($data != '')
    @foreach($data as $key => $value)
        <option value="{{ $value->id }}">{{ $value->title }}</option>                            
    @endforeach
@endif