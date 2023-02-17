@if(isset($page) && $page !='')

@section('meta_title'){{ $page->meta_title }}@stop
@section('meta_description'){{ $page->meta_description }}@stop
@section('meta_keywords'){{ $page->keywords }}@stop

@endif