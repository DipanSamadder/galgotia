@if($data != '')
    @foreach($data as $key => $value)
        <option value="{{ $value->id }}">{{ $value->name }}</option>                            
    @endforeach
@endif