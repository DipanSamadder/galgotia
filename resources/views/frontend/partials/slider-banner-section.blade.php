@if(dsld_page_meta_value_by_meta_key('setting_page_slider_image', $page->id) !='Null') 
@if(dsld_page_meta_value_by_meta_key('setting_page_banner_slider', $page->id) == 'slider') 

@if(is_array(json_decode(dsld_page_meta_value_by_meta_key('setting_page_slider_image', $page->id), true)) && count(json_decode(dsld_page_meta_value_by_meta_key('setting_page_slider_image', $page->id), true)) > 0 ) 


<div class="banner">
	<div class="hero-slider owl-carousel">

		@foreach(json_decode(dsld_page_meta_value_by_meta_key('setting_page_slider_image', $page->id), true) as $key => $value)
		<div class="item bg-img" style="background:url('{{ dsld_uploaded_asset(json_decode(dsld_page_meta_value_by_meta_key('setting_page_slider_image', $page->id), true)[$key]) }}')">
			<div class="container">
				<div class="slider-content text-white">
					<div class="slider-heading roboto"><span class="tcolor">{{ json_decode(dsld_page_meta_value_by_meta_key('setting_page_slider_heading', $page->id), true)[$key] }}</span></div>
					<p class="slider-txt roboto">{{ json_decode(dsld_page_meta_value_by_meta_key('setting_page_slider_content', $page->id), true)[$key] }}</p>
					@if(json_decode(dsld_page_meta_value_by_meta_key('setting_page_slider_image', $page->id), true)[$key] !='Null')
					<a href="{{ json_decode(dsld_page_meta_value_by_meta_key('setting_page_slider_image', $page->id), true)[$key] }}" class="btn">Learn More</a>
					@endif
				</div>
				<!-- <div class="float-right text-white">
					*as of 2021
				</div> -->
			</div>
		</div><!-- item -->
		@endforeach

    </div>	
</div> <!-- banner -->


@endif
@endif
@if(dsld_page_meta_value_by_meta_key('setting_page_banner_slider', $page->id) == 'banner') 

<div class="main-section banner inner-banner bg-img" style="background:url('{{ dsld_uploaded_asset($page->banner) }}'">
  	<div class="container">
      <div class="row">
			@if(dsld_page_meta_value_by_meta_key('setting_page_name_hide', $page->id) != 'yes') 
				<div class="col-lg-8 col-sm-8 col-xs-12">
					<h1 class="text-white fs-50 mb-0">{{ $page->title }}
					@auth()
						<a href="{{ route('pages.edit', [$page->id]) }}"><i class="fas fa-edit"></i> </a>
					@endauth
					</h1>
				</div><!-- col -->
				<div class="col-lg-4 col-sm-4 col-xs-12 align-self-center">
					<div class="breadcrum text-right">
						<ul class="breadcrumb mb-0 roboto font-weight-medium">
							<li><a href="{{ route('home') }}">Home</a></li>
							<li>{{ $page->title }}</li>
						</ul>
					</div>
				</div><!-- col -->
			@endif
      </div>
    </div>
</div> <!-- banner -->
@endif

@endif
