@extends('frontend.layouts.app')

@include('frontend.partials.page_meta')

@section('content')

@include('frontend.partials.slider-banner-section')

@if(dsld_page_meta_value_by_meta_key('aboutus_about_file_0', $page->id) !='')
<section class="main-section about-section">
	<div class="dots-animation top-right"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-sm-6 col-xs-12">
				<div class="abt-collage">
					<img src="{{ dsld_uploaded_asset(json_decode(dsld_page_meta_value_by_meta_key('aboutus_about_file_0', $page->id), true)) }}" alt="{{ dsld_upload_file_title(json_decode(dsld_page_meta_value_by_meta_key('aboutus_about_file_0', $page->id), true)) }}">
				</div>
			</div><!-- col -->
			<div class="col-lg-6 col-sm-6 col-xs-12 align-self-center">
				<div class="about-content">
					<div class="main-title wow fadeInUp">
					    <h3 class="title-tag-line wow fadeInUp">{{ dsld_page_meta_value_by_meta_key('aboutus_about_text_1', $page->id) }}</h3>
					</div>
					
                <a href="{{ dsld_page_meta_value_by_meta_key('aboutus_about_button_2', $page->id) }}" class="btn">Certificates  </a>
				</div>
			</div><!-- col -->
		</div>
	</div>
	<div class="dots-animation bottom-left"></div>
</section>
@endif
@if(dsld_page_meta_value_by_meta_key('aboutus_ykkgroup_file_2', $page->id) !='Null')
<section class="main-section about-md bg-fixed">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-sm-6 col-xs-12 align-self-center order-2 order-xs-1">
				<div class="ykk-logo-img wow fadeInUp ml-auto">
					<img src="{{ dsld_uploaded_asset(json_decode(dsld_page_meta_value_by_meta_key('aboutus_ykkgroup_file_2', $page->id), true)) }}" alt="YKK Group">
				</div>
			</div><!-- col -->
			<div class="col-lg-6 col-sm-6 col-xs-12">
				<div class="md-message text-white">
					<div class="main-title wow fadeInUp">
 						<h2 class="wow fadeInUp  roboto  text-white fs-55">{{ dsld_page_meta_value_by_meta_key('aboutus_ykkgroup_text_0', $page->id) }}</h2>
					</div>
					<p class="wow fadeInUp">
					@php $home_initiative_editor_1 = dsld_page_meta_value_by_meta_key('aboutus_ykkgroup_editor_1', $page->id); @endphp
    				<?php echo htmlspecialchars_decode($home_initiative_editor_1); ?>
					
					</p>	
 				</div>
			</div><!-- col -->
			
		</div>
	</div>
</section>
@endif
@if(dsld_page_meta_value_by_meta_key('aboutus_networksection_file_0', $page->id) !='Null')
<section class="main-section mb-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-sm-12 col-xs-12 text-center">
			    <img src="{{ dsld_uploaded_asset(json_decode(dsld_page_meta_value_by_meta_key('aboutus_networksection_file_0', $page->id), true)) }}" alt="ykk group" class="img-fluid">
			</div><!-- col -->
			
		</div>
		<div class="row">
			<div class="col-lg-6 col-sm-6 col-xs-12 text-center">
			    <img src="{{ dsld_uploaded_asset(json_decode(dsld_page_meta_value_by_meta_key('aboutus_networksection_file_1', $page->id), true)) }}" alt="ykk group" class="img-fluid">
			</div><!-- col -->
			<div class="col-lg-6 col-sm-6 col-xs-12 text-center">
			    <img src="{{ dsld_uploaded_asset(json_decode(dsld_page_meta_value_by_meta_key('aboutus_networksection_file_2', $page->id), true)) }}" alt="ykk group" class="img-fluid">
			</div><!-- col -->
		</div>
	</div>
</section>
@endif

@endsection