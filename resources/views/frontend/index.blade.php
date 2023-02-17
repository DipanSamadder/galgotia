@extends('frontend.layouts.app')

@section('content')
@include('frontend.partials.slider-banner-section')

@if(dsld_page_meta_value_by_meta_key('home_globalgreenbusiness_file_1', 3) !='Null')
<section class="main-section about-section">
	<div class="dots-animation top-right"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-sm-6 col-xs-12">
				<div class="abt-collage">
					<img src="{{ dsld_uploaded_asset(dsld_page_meta_value_by_meta_key('home_globalgreenbusiness_file_1', 3)) }}" alt="About">
				</div>
			</div><!-- col -->
			<div class="col-lg-6 col-sm-6 col-xs-12">
				<div class="about-content">
					<div class="main-title wow fadeInUp">
						<h1>{{ dsld_page_meta_value_by_meta_key('home_globalgreenbusiness_text_0', 3) }}</h1>
					</div>
					@php $home_globalgreenbusiness_editor_2 = dsld_page_meta_value_by_meta_key('home_globalgreenbusiness_editor_2', 3); @endphp
    				<?php echo htmlspecialchars_decode($home_globalgreenbusiness_editor_2); ?>
				</div>
			</div><!-- col -->
		</div>
	</div>
	<div class="dots-animation bottom-left"></div>
</section>
@endif

@if(dsld_page_meta_value_by_meta_key('home_initiative_editor_1', 3) !='Null')
<section class="main-section about-md bg-fixed pb-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-sm-12 col-xs-12">
				<div class="md-message text-white pb-5">
					<div class="main-title wow fadeInUp">
						<h2 class="wow fadeInUp text-white fs-55">{{ dsld_page_meta_value_by_meta_key('home_initiative_text_0', 3) }}</h2>
					</div>
					@php $home_initiative_editor_1 = dsld_page_meta_value_by_meta_key('home_initiative_editor_1', 3); @endphp
    				<?php echo htmlspecialchars_decode($home_initiative_editor_1); ?>
				</div>
			</div><!-- col -->
			
		</div>
	</div>
</section>
@endif

@if(dsld_page_meta_value_by_meta_key('home_newproduct_file_repeter_0', 3) !='Null')
 <section class="main-section prd-section">
 	<div class="container">
 		<div class="dots-animation top-right"></div>
 		<div class="row">
 			<div class="col-lg-6 col-sm-6 col-xs-12">
 				<div class="prd-slider-section">
 					<div class="prd-slider nav-center owl-carousel m-auto">
						@if(is_array(json_decode(dsld_page_meta_value_by_meta_key('home_newproduct_file_repeter_0', 3), true)) && count(json_decode(dsld_page_meta_value_by_meta_key('home_newproduct_file_repeter_0', 3), true)) > 0)
						@foreach(json_decode(dsld_page_meta_value_by_meta_key('home_newproduct_file_repeter_0', 3), true) as $key => $value)
 						<div class="item">
 							<img src="{{ dsld_uploaded_asset(json_decode(dsld_page_meta_value_by_meta_key('home_newproduct_file_repeter_0', 3), true)[$key]) }}" alt="product">
 						</div>
						@endforeach
						@endif
						
 					</div>
 				</div>
 			</div><!-- col -->
 			<div class="col-lg-6 col-sm-6 col-xs-12">
 				<div class="prd-content">
 					<div class="main-title wow fadeInUp">
 						<h3 class="wow fadeInUp title-tag-line pb-2">{{ dsld_page_meta_value_by_meta_key('home_newproduct_text_1', 3) }}</h3>
					</div>
					<p class="wow fadeInUp">{{ dsld_page_meta_value_by_meta_key('home_newproduct_editor_2', 3) }}</p>
 					<div class="btn-section">
 						<a href="{{ dsld_page_meta_value_by_meta_key('home_newproduct_button_3', 3) }}" class="btn mr-2">Learn More</a>
 						<a href="{{ dsld_page_meta_value_by_meta_key('home_newproduct_button_4', 3) }}" class="btn outline-btn" download>Download Catalogue</a>
 					</div>
 				</div>
 			</div><!-- col -->

 		</div>
 		<div class="dots-animation bottom-left"></div>
 	</div>
 </section>
 @endif

 @if(dsld_page_meta_value_by_meta_key('home_quality_file_2', 3) !='Null' && dsld_page_meta_value_by_meta_key('home_quality_file_2', 3) !='')
 <section class="main-section quality-section mb-5">
     	<div class="container-left">
    		<div class="row mr-0">
    			<div class="col-lg-7 col-sm-7 col-xs-12 order-2 order-xs-1">
    				<div class="quality-img object-fit">
    					<img src="{{ dsld_uploaded_asset(dsld_page_meta_value_by_meta_key('home_quality_file_2', 3)) }}" alt="quality">
    				</div>
    			</div>
    			<div class="col-lg-5 col-sm-5 col-xs-12">
    				<div class="quality-content">
 					<div class="main-title wow fadeInUp">
 						<h3 class="wow fadeInUp title-tag-line pb-2">{{ dsld_page_meta_value_by_meta_key('home_quality_text_0', 3) }}</h3>
					</div>
					<p class="wow fadeInUp">{{ dsld_page_meta_value_by_meta_key('home_quality_editor_1', 3) }}</p>
 				</div>
    			</div>
    		</div>
     </div>	
 </section>
 @endif

@endsection