@extends('frontend.layouts.app')
@include('frontend.partials.page_meta')

@section('content')

@include('frontend.partials.slider-banner-section')

@php 

 $csr_csractivity_text_0 = dsld_page_meta_value_by_meta_key('csr_csractivity_text_0', $page->id);
 $csr_csractivity_editor_1 = dsld_page_meta_value_by_meta_key('csr_csractivity_editor_1', $page->id);
 $csr_csractivity_file_2 = dsld_page_meta_value_by_meta_key('csr_csractivity_file_2', $page->id);
@endphp

@if( $csr_csractivity_file_2 !='Null' && $csr_csractivity_file_2 !='')
<section class="main-section csr-section before-none">
  <div class="container">
      <div class="row">
        <div class="col-lg-6 col-sm-6 col-xs-12 order-2 order-xs-1">
           <div class="csr-img">
             <img src="{{ dsld_uploaded_asset($csr_csractivity_file_2) }}" alt="{{ dsld_upload_file_title($csr_csractivity_file_2) }}">
           </div>  
        </div>
        <div class="col-lg-6 col-sm-6 col-xs-12 align-self-center">
           <div class="csr-text">
              <h2 class="wow fadeInUp">{{  $csr_csractivity_text_0 }}</h2>
			  <?php echo htmlspecialchars_decode($csr_csractivity_editor_1); ?>
			</div>  
        </div>
      </div>
  </div>
  <div class="dots-animation bottom-left haff-bottom"></div>
</section>
@endif

@php 
$csr_csr2cbluesection_text_repeter_1 = dsld_page_meta_value_by_meta_key('csr_csr2cbluesection_text_repeter_1', $page->id);
$csr_csr2cbluesection_editor_0 = dsld_page_meta_value_by_meta_key('csr_csr2cbluesection_editor_0', $page->id);
@endphp

@if( $csr_csr2cbluesection_editor_0 !='Null' && $csr_csr2cbluesection_editor_0 !='')
<section class="main-section bg-site">
   <div class="container">
       <div class="row">
          <div class="col-lg-6 col-sm-6 col-xs-12">
		  <p class="wow fadeInUp fs-18 font-weight-bold animated" style="visibility: visible;">
			  <?php echo htmlspecialchars_decode($csr_csr2cbluesection_editor_0); ?></p>
           </div>
          <div class="col-lg-6 col-sm-6 col-xs-12">
                 <ol class="roboto">
					@foreach(json_decode($csr_csr2cbluesection_text_repeter_1, true) as $key => $value)
						<li class="wow fadeInUp">{{ json_decode($csr_csr2cbluesection_text_repeter_1, true)[$key] }}</li>
					@endforeach
                </ol>
           </div>
       </div>
   </div>
</section>
@endif
  
@php 
$csr_csrempowerment_text_0 = dsld_page_meta_value_by_meta_key('csr_csrempowerment_text_0', $page->id);
$csr_csrempowerment_editor_1 = dsld_page_meta_value_by_meta_key('csr_csrempowerment_editor_1', $page->id);
$csr_csrempowerment_file_2 = dsld_page_meta_value_by_meta_key('csr_csrempowerment_file_2', $page->id);
@endphp

@if( $csr_csrempowerment_file_2 !='Null' && $csr_csrempowerment_file_2 !='')
<section class="main-section alternet-section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-sm-5 col-xs-12">
        <div class="alternet-img">
          <img src="{{ dsld_uploaded_asset($csr_csrempowerment_file_2) }}" alt="{{ dsld_upload_file_title($csr_csrempowerment_file_2) }}">
        </div>
      </div>
      <div class="col-lg-7 col-sm-7 col-xs-12 align-self-center">
        <div class="alternet-section-txt">
          <h4 class="wow fadeInUp fs-25 mb-2">{{  $csr_csrempowerment_text_0 }}</h4>
          <p class="wow fadeInUp">
			  <?php echo htmlspecialchars_decode($csr_csrempowerment_editor_1); ?></p>
        </div>
      </div>
   </div>
   </div>
</section>
@endif


@php 
$csr_csrcomputerlab_editor_0 = dsld_page_meta_value_by_meta_key('csr_csrcomputerlab_editor_0', $page->id);
$csr_csrcomputerlab_file_1 = dsld_page_meta_value_by_meta_key('csr_csrcomputerlab_file_1', $page->id);
@endphp

@if( $csr_csrcomputerlab_file_1 !='Null' && $csr_csrcomputerlab_file_1 !='')
<section class="main-section alternet-section">
  <div class="dots-animation top-left"></div>
  <div class="container">
  <div class="row">
    <div class="col-lg-5 col-sm-5 col-xs-12 order-2 order-xs-1 align-self-center">
      <div class="alternet-img  text-right">
        <img src="{{ dsld_uploaded_asset($csr_csrcomputerlab_file_1) }}" alt="{{ dsld_upload_file_title($csr_csrcomputerlab_file_1) }}">
      </div>
    </div>
    <div class="col-lg-7 col-sm-7 col-xs-12 align-self-center">
      <div class="test-m-txt pr-3">
         <p class="wow fadeInUp"><?php echo htmlspecialchars_decode($csr_csrcomputerlab_editor_0); ?></p>
       </div>
    </div>
  </div>
</div>
</section>
@endif


@php 
$csr_csreducationsegment_editor_2 = dsld_page_meta_value_by_meta_key('csr_csreducationsegment_editor_2', $page->id);
$csr_csreducationsegment_text_1 = dsld_page_meta_value_by_meta_key('csr_csreducationsegment_text_1', $page->id);
$csr_csreducationsegment_file_0 = dsld_page_meta_value_by_meta_key('csr_csreducationsegment_file_0', $page->id);
@endphp

@if( $csr_csreducationsegment_file_0 !='Null' && $csr_csreducationsegment_file_0 !='')

<section class="main-section alternet-section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-sm-5 col-xs-12">
        <div class="alternet-img">
          <img src="{{ dsld_uploaded_asset($csr_csreducationsegment_file_0) }}" alt="{{ dsld_upload_file_title($csr_csreducationsegment_file_0) }}">
        </div>
      </div>
      <div class="col-lg-7 col-sm-7 col-xs-12 align-self-center">
        <div class="alternet-section-txt">
          <h4 class="wow fadeInUp fs-25 mb-2">{{  $csr_csreducationsegment_text_1 }}</h4>
          <p class="wow fadeInUp"><?php echo htmlspecialchars_decode($csr_csreducationsegment_editor_2); ?></p>
        </div>
      </div>
   </div>
   </div>
</section>
@endif


@php 
$csr_csrrenovation_text_0 = dsld_page_meta_value_by_meta_key('csr_csrrenovation_text_0', $page->id);
$csr_csrrenovation_text_repeter_1 = dsld_page_meta_value_by_meta_key('csr_csrrenovation_text_repeter_1', $page->id);
$csr_csrrenovation_file_2 = dsld_page_meta_value_by_meta_key('csr_csrrenovation_file_2', $page->id);
@endphp

@if( $csr_csrrenovation_file_2 !='Null' && $csr_csrrenovation_file_2 !='')
 <section class="main-section alternet-section background-light">
  <div class="dots-animation top-left"></div>
	<div class="container">
	<div class="row">
		<div class="col-lg-5 col-sm-5 col-xs-12 order-2 order-xs-1 align-self-center">
		<div class="alternet-img  text-center">
			<img src="{{ dsld_uploaded_asset($csr_csrrenovation_file_2) }}" alt="{{ dsld_upload_file_title($csr_csrrenovation_file_2) }}">
		</div>
		</div>
		<div class="col-lg-7 col-sm-7 col-xs-12 align-self-center">
		<div class="test-m-txt">
			<h4 class="wow fadeInUp fs-25">{{  $csr_csrrenovation_text_0 }}</h4>
			<div class="site-list">
			<ul class="roboto list-style-none pl-0"> 
				@foreach(json_decode($csr_csrrenovation_text_repeter_1, true) as $key => $value)
					<li><em class="tyellow font-weight-bold">01</em> &nbsp; {{ json_decode($csr_csrrenovation_text_repeter_1, true)[$key] }}</li>
				@endforeach
			</ul>
			</div>
		</div>
		</div>
	</div>
	</div>
</section>

 @endif


@php 
$csr_csrdevelopment_text_1 = dsld_page_meta_value_by_meta_key('csr_csrdevelopment_text_1', $page->id);
$csr_csrdevelopment_editor_2 = dsld_page_meta_value_by_meta_key('csr_csrdevelopment_editor_2', $page->id);
$csr_csrdevelopment_file_repeter_0 = dsld_page_meta_value_by_meta_key('csr_csrdevelopment_file_repeter_0', $page->id);
@endphp

@if( $csr_csrdevelopment_file_repeter_0 !='Null' && $csr_csrdevelopment_file_repeter_0 !='')
 <section class="main-section alternet-section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-6 col-xs-12">
        <div class="alternet-img">
			@foreach(json_decode($csr_csrdevelopment_file_repeter_0, true) as $key => $value)
				<div class="alternet-img-collage object-fit">
					<img src="{{ dsld_uploaded_asset(json_decode($csr_csrdevelopment_file_repeter_0, true)[$key]) }}" alt="{{ dsld_upload_file_title(json_decode($csr_csrdevelopment_file_repeter_0, true)[$key]) }}">
				</div>
			@endforeach
        </div>
      </div>
      <div class="col-lg-6 col-sm-6 col-xs-12 align-self-center">
        <div class="alternet-section-txt">
          <h4 class="wow fadeInUp fs-25 mb-2">{{  $csr_csrdevelopment_text_1 }}</h4>
          <?php echo htmlspecialchars_decode($csr_csrdevelopment_editor_2); ?>
        </div>
      </div>
   </div>
   </div>
</section>
@endif


@php 
$csr_csrdeaddictiondrive_text_0 = dsld_page_meta_value_by_meta_key('csr_csrdeaddictiondrive_text_0', $page->id);
$csr_csrdeaddictiondrive_editor_1 = dsld_page_meta_value_by_meta_key('csr_csrdeaddictiondrive_editor_1', $page->id);
$csr_csrdeaddictiondrive_file_2 = dsld_page_meta_value_by_meta_key('csr_csrdeaddictiondrive_file_2', $page->id);
@endphp

@if( $csr_csrdeaddictiondrive_file_2 !='Null' && $csr_csrdeaddictiondrive_file_2 !='')
<section class="main-section alternet-section background-light">
    <div class="dots-animation top-left"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-sm-5 col-xs-12 order-2 order-xs-1">
        <div class="alternet-img">
          <img src="{{ dsld_uploaded_asset($csr_csrdeaddictiondrive_file_2) }}" alt="{{ dsld_upload_file_title($csr_csrdeaddictiondrive_file_2) }}">
        </div>
      </div>
      <div class="col-lg-7 col-sm-7 col-xs-12 align-self-center">
        <div class="alternet-section-txt">
          <h4 class="wow fadeInUp fs-25 mb-2"> {{  $csr_csrdeaddictiondrive_text_0 }}</h4>
          <p class="wow fadeInUp"><?php echo htmlspecialchars_decode($csr_csrdeaddictiondrive_editor_1); ?></p>
        </div>
      </div>
   </div>
   </div>
</section>
@endif


@php 
$csr_csrsupport_text_1 = dsld_page_meta_value_by_meta_key('csr_csrsupport_text_1', $page->id);
$csr_csrsupport_editor_2 = dsld_page_meta_value_by_meta_key('csr_csrsupport_editor_2', $page->id);
$csr_csrsupport_file_repeter_0 = dsld_page_meta_value_by_meta_key('csr_csrsupport_file_repeter_0', $page->id);
@endphp

@if( $csr_csrsupport_file_repeter_0 !='Null' && $csr_csrsupport_file_repeter_0 !='')
 <section class="main-section alternet-section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-6 col-xs-12">
        <div class="alternet-img">
			@foreach(json_decode($csr_csrsupport_file_repeter_0, true) as $key => $value)
				<div class="alternet-img-collage object-fit"><img src="{{ dsld_uploaded_asset(json_decode($csr_csrsupport_file_repeter_0, true)[$key]) }}" alt="{{ dsld_upload_file_title(json_decode($csr_csrsupport_file_repeter_0, true)[$key]) }}"></div>
			@endforeach
        </div>
      </div>
      <div class="col-lg-6 col-sm-6 col-xs-12 align-self-center">
        <div class="alternet-section-txt">
          <h4 class="wow fadeInUp fs-25 mb-2">{{  $csr_csrsupport_text_1 }}</h4>
          <p class="wow fadeInUp"><?php echo htmlspecialchars_decode($csr_csrsupport_editor_2); ?>  
          </p>
        </div>
      </div>
   </div>
   </div>
   <div class="dots-animation bottom-left haff-bottom"></div>
</section>
@endif


@php 
$csr_csrcommittee_text_0 = dsld_page_meta_value_by_meta_key('csr_csrcommittee_text_0', $page->id);
$csr_csrcommittee_editor_1 = dsld_page_meta_value_by_meta_key('csr_csrcommittee_editor_1', $page->id);
@endphp

@if( $csr_csrcommittee_editor_1 !='Null' && $csr_csrcommittee_editor_1 !='')
 <section class="main-section alternet-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-sm-12 col-xs-12 align-self-center">
        <div class="alternet-section-txt">
          <h5 class="wow fadeInUp fs-25 mb-2">{{  $csr_csrcommittee_text_0 }}</h5>
		  <?php echo htmlspecialchars_decode($csr_csrcommittee_editor_1); ?>
		</div>
      </div>
   </div>
   </div>
</section> 
@endif

@endsection