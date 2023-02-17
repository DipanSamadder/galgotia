@extends('frontend.layouts.app')
@include('frontend.partials.page_meta')

@section('content')

@include('frontend.partials.slider-banner-section')

@php 
	$timeline = App\Models\Page::where('status', 1)->where('type', 'history_timeline')->orderBy('order', 'asc')->get();
@endphp


<section class="main-section country-timeline-section ">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-sm-8 col-xs-12 m-auto">
        <div class="main-title wow fadeInUp text-center mb-5">
			<h3 class="wow fadeInUp  fs-45">{{ dsld_page_meta_value_by_meta_key('ykkindiahistory_indiahistory_text_0', $page->id) }}</h3>
          	<p class="wow fadeInUp">{{ dsld_page_meta_value_by_meta_key('ykkindiahistory_indiahistory_editor_1', $page->id) }}</p>
        </div>
      </div>
    </div>
    <div class="row">

      <div class="col-lg-11 col-sm-12 col-xs-12 m-auto text-center">
        <ul class="timeline-list timeline-list-2 divider-active mb-4">

		  @php 
				$timeline = App\Models\Page::where('status', 1)->where('type', 'history_timeline')->orderBy('order', 'asc')->get();
				$i = 0;
			@endphp
			@foreach($timeline as $key => $value)
			
				@php
					$details = json_decode($value->meta_fields);
				@endphp

				@if($details->cat == 'indian')
				@php $i++ @endphp

				<li class="timeline-point wow fadeInUp">
					<div class="timeline-box  text-right">
						<div class="d-flex">
							<div>
								<h5 class="wow fadeInUp">{{ $details->month }} {{ $value->title }}</h5>
								{{ $value->content }}
							</div>
						</div>
					</div>
					<div class="timeline-box-img  object-fit">
						<img src="{{ dsld_uploaded_asset($value->banner) }}" alt="{{ dsld_upload_file_title($value->banner) }}">
					</div>
				</li><!-- col -->
				@endif
			@endforeach
      </ul>
    </div>
  </div>
  </div>
</section>

@endsection