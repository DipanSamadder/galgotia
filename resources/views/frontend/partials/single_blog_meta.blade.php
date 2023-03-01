@if(isset($post) && $post !='')

@section('meta_title'){{ $post->meta_title }}@stop
@section('meta_description'){{ $post->meta_description }}@stop
@section('meta_keywords'){{ $post->keywords }}@stop

@endif