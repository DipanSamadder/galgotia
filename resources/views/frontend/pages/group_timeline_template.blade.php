@extends('frontend.layouts.app')
@include('frontend.partials.page_meta')

@section('content')

@include('frontend.partials.slider-banner-section')

@php 
	$timeline = App\Models\Page::where('status', 1)->where('type', 'history_timeline')->orderBy('order', 'asc')->get();
@endphp
<section class="main-section timeline-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-sm-8 col-xs-12 m-auto">
        <div class="main-title wow fadeInUp text-center mb-5">
          <h3 class="wow fadeInUp  fs-45">{{ dsld_page_meta_value_by_meta_key('ykkgrouphistory_grouphistory_text_0', $page->id) }}</h3>
          <p class="wow fadeInUp">{{ dsld_page_meta_value_by_meta_key('ykkgrouphistory_grouphistory_editor_1', $page->id) }}</p>
        </div>
      </div>
    </div>
    <div class="row responsive-tab">
      <div class="col-lg-12 cust-nav1">
        <div class="nav nav-pills" id="custom-tab1" role="tablist" aria-orientation="vertical">
			<a href="#tab0" class="nav-link active" data-toggle="pill" >ALL</a>

			@for($ystart = 1930; $ystart < date('Y'); $ystart = $ystart+20 )

				@php $is_hav = 0;  @endphp
				@foreach($timeline as $key => $value)
					@if($value->title > $ystart && $value->title <= $ystart+20)
					@php $details = json_decode($value->meta_fields); @endphp
						@if($details->cat == 'group')
							@php $is_hav = 1;  @endphp
						@endif
					@endif
				@endforeach

				@if($is_hav == 1)
					<a href="#tab{{ $ystart }}" class="nav-link" data-toggle="pill">{{ $ystart }}</a>
				@endif
			@endfor
        </div>
      </div>
      <div class="col-lg-12">
        <div id="content" class="tab-content" role="tablist">
          <div id="tab0" class="card tab-pane show active" aria-labelledby="tab2">
            <div class="card-header" id="heading-A">
              <h5 class="mb-0">
                <a data-toggle="collapse" href="#collapse-A" aria-expanded="true" aria-controls="collapse-A">
                  All<span class="accordin-icon"><i class="mins"></i></span>
                </a>
              </h5>
            </div>
            <div id="collapse-A" class="collapse show" data-parent="#content" role="tabpanel" aria-labelledby="heading-A">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-11 col-sm-12 col-xs-12 m-auto">
                   <ul class="timeline-list">

					 @php 
						$timeline = App\Models\Page::where('status', 1)->where('type', 'history_timeline')->orderBy('order', 'asc')->get();
						$i = 0;
					@endphp
					@foreach($timeline as $key => $value)
					
					@php
						$details = json_decode($value->meta_fields);
					@endphp
						@if($details->cat == 'group')
						@php $i++ @endphp
							<li class="timeline-point">
								<div class="bg-site timeline-box @if($i % 2 == 1) float-left text-right @else float-right text-left @endif">
								<h5 class="text-white">{{ $details->month }} {{ $value->title }}</h5>
								{{ $value->content }}
								</div>
							</li><!-- col -->
						@endif
					@endforeach

                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

		  	@for($ystart = 1930; $ystart < date('Y'); $ystart = $ystart+20 )
				<div id="tab{{ $ystart }}" class="card tab-pane" aria-labelledby="tab{{ $ystart }}">
					<div class="card-header" id="heading-{{ $ystart }}">
					<h5 class="mb-0">
						<a data-toggle="collapse" href="#collapse-{{ $ystart }}" aria-expanded="false" aria-controls="collapse-{{ $ystart }}" class="collapsed">
						2000 <span class="accordin-icon"><i class="mins"></i></span>
						</a>
					</h5>
					</div>
					<div id="collapse-{{ $ystart }}" class="collapse" data-parent="#content" aria-labelledby="heading-{{ $ystart }}">
					<div class="card-body">
						<div class="row">
						<div class="col-lg-11 col-sm-12 col-xs-12 m-auto">
							<ul class="timeline-list">
							@php $i=0; @endphp
							@foreach($timeline as $key => $value) 
								@if($value->title > $ystart && $value->title <= $ystart+20)
									
									@php
										$i++;
										$details = json_decode($value->meta_fields);
									@endphp
									@if($details->cat == 'group')

										<li class="timeline-point">
											<div class="bg-site timeline-box @if($i % 2 == 0) float-right text-left @else  float-left text-right @endif">
											<h5 class="text-white">{{ $details->month }} {{ $value->title }}</h5>
											{{ $value->content }}
											</div>
										</li><!-- col -->
									@endif
								@endif
							@endforeach

							</ul>
						</div>
						</div>
					</div>
					</div>
				</div><!-- tab -->
		  	@endfor
        </div>
      </div>
    </div>
  </div><!-- container -->
  <div class="dots-animation bottom-left"></div>
</section>

@endsection