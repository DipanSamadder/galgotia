@extends('frontend.layouts.app')
@include('frontend.partials.page_meta')

@section('content')

@include('frontend.partials.slider-banner-section')

@php 
 $qsqualitymanagement_text_0 = dsld_page_meta_value_by_meta_key('qualitystandard_qsqualitymanagement_text_0', $page->id);
 $qsqualitymanagement_editor_1 = dsld_page_meta_value_by_meta_key('qualitystandard_qsqualitymanagement_editor_1', $page->id);

@endphp

@if( $qsqualitymanagement_editor_1 !='Null' && $qsqualitymanagement_editor_1 !='')
<section class="main-section management-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 col-sm-9 col-xs-12 m-auto">
        <div class="main-title wow fadeInUp text-center ">
          <h3 class="wow fadeInUp fs-45">{{  $qsqualitymanagement_text_0 }}</h3>
          <?php echo htmlspecialchars_decode($qsqualitymanagement_editor_1); ?>
        </div>
      </div>
    </div>
    <div class="dots-animation bottom-right"></div>
  </div>
</section>
@endif

@php 
 $qsworldwidenetwork_file_0 = dsld_page_meta_value_by_meta_key('qualitystandard_qsworldwidenetwork_file_0', $page->id);
 $qsworldwidenetwork_text_1 = dsld_page_meta_value_by_meta_key('qualitystandard_qsworldwidenetwork_text_1', $page->id);
 $qsworldwidenetwork_editor_2 = dsld_page_meta_value_by_meta_key('qualitystandard_qsworldwidenetwork_editor_2', $page->id);
@endphp
@if( $qsworldwidenetwork_editor_2 !='Null' && $qsworldwidenetwork_editor_2 !='')
<section class="main-section ykk-network bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-sm-5 col-xs-12">
        <div class="ykk-network-map">
          <img src="{{ dsld_uploaded_asset($qsworldwidenetwork_file_0) }}" alt="{{ dsld_upload_file_title($qsworldwidenetwork_file_0) }}">
        </div>
      </div>
      <div class="col-lg-7 col-sm-7 col-xs-12 align-self-center">
        <div class="ykk-network-txt">
          <h4 class="wow fadeInUp fs-25">{{  $qsworldwidenetwork_text_1 }}</h4>
          <?php echo htmlspecialchars_decode($qsworldwidenetwork_editor_2); ?>
        </div>
      </div>
    </div>
    <div class="dots-animation bottom-left"></div>
  </div>
</section>
@endif

@php 
 $qstestingmethods_text_0 = dsld_page_meta_value_by_meta_key('qualitystandard_qstestingmethods_text_0', $page->id);
 $qstestingmethods_editor_1 = dsld_page_meta_value_by_meta_key('qualitystandard_qstestingmethods_editor_1', $page->id);
 $qstestingmethods_file_2 = dsld_page_meta_value_by_meta_key('qualitystandard_qstestingmethods_file_2', $page->id);
 $qstestingmethods_text_3 = dsld_page_meta_value_by_meta_key('qualitystandard_qstestingmethods_text_3', $page->id);
@endphp
@if( $qstestingmethods_editor_1 !='Null' && $qstestingmethods_editor_1 !='')
<section class="main-section alternet-section background-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-6 col-xs-12 order-2 order-xs-1 align-self-center">
        <div class="test-m-img bg-white text-center p-4">
          <img src="{{ dsld_uploaded_asset($qstestingmethods_file_2) }}" alt="{{ dsld_upload_file_title($qstestingmethods_file_2) }}">
        </div>
      </div>
      <div class="col-lg-6 col-sm-6 col-xs-12">
        <div class="test-m-txt">
          <h4 class="wow fadeInUp fs-25">{{ $qstestingmethods_text_0 }}</h4>
            <?php echo htmlspecialchars_decode($qstestingmethods_editor_1); ?>
          <!--<a href="#" class="btn">Learn More</a>-->
        </div>
      </div>
    </div>
  </div>
</section>

<section class="main-section management-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 col-sm-9 col-xs-12 m-auto">
        <div class="main-title wow fadeInUp text-center ">
          <h3 class="wow fadeInUp fs-45">{{  $qstestingmethods_text_3 }}</h3>
        </div>
      </div>
    </div>
    <div class="dots-animation bottom-right"></div>
  </div>
</section>
@endif

@php 
 $qsoeko_file_0 = dsld_page_meta_value_by_meta_key('qualitystandard_qsoeko_file_0', $page->id);
 $qsoeko_editor_2 = dsld_page_meta_value_by_meta_key('qualitystandard_qsoeko_editor_2', $page->id);
 $qsoeko_text_1 = dsld_page_meta_value_by_meta_key('qualitystandard_qsoeko_text_1', $page->id);
@endphp
@if( $qsoeko_editor_2 !='Null' && $qsoeko_editor_2 !='')
<section class="main-section ykk-network bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-sm-5 col-xs-12">
        <div class="eko-tex-standard h-100 bg-white justify-content-center d-flex align-center">
          <img src="{{ dsld_uploaded_asset($qsoeko_file_0) }}" alt="{{ dsld_upload_file_title($qsoeko_file_0) }}">
        </div>
      </div>
      <div class="col-lg-7 col-sm-7 col-xs-12 align-self-center">
        <div class="ykk-network-txt pl-3">
          <h4 class="wow fadeInUp fs-25">{{ $qsoeko_text_1 }}</h4>
          <?php echo htmlspecialchars_decode($qsoeko_editor_2); ?>
        </div>
      </div>
    </div>
    <div class="dots-animation bottom-left"></div>
  </div>
</section>
@endif

@php 
 $qsiso_text_0 = dsld_page_meta_value_by_meta_key('qualitystandard_qsiso_text_0', $page->id);
 $qsiso_editor_1 = dsld_page_meta_value_by_meta_key('qualitystandard_qsiso_editor_1', $page->id);
 $qsiso_file_2 = dsld_page_meta_value_by_meta_key('qualitystandard_qsiso_file_2', $page->id);
@endphp
@if( $qsiso_file_2 !='Null' && $qsiso_file_2 !='')
<section class="main-section alternet-section background-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-6 col-xs-12 order-2 order-xs-1 align-self-center">
        <div class="test-m-img bg-white text-center p-4">
          <img src="{{ dsld_uploaded_asset($qsiso_file_2) }}" alt="{{ dsld_upload_file_title($qsiso_file_2) }}">
        </div>
      </div>
      <div class="col-lg-6 col-sm-6 col-xs-12 align-self-center">
        <div class="test-m-txt">
          <h4 class="wow fadeInUp fs-25">{{ $qsiso_text_0 }}</h4>
          <?php echo htmlspecialchars_decode($qsiso_editor_1); ?>
        </div>
      </div>
    </div>
    <div class="dots-animation bottom-right"></div>
  </div>
</section>
@endif

@php 
 $qscertification_file_0 = dsld_page_meta_value_by_meta_key('qualitystandard_qscertification_file_0', $page->id);
 $qscertification_text_1 = dsld_page_meta_value_by_meta_key('qualitystandard_qscertification_text_1', $page->id);
 $qscertification_editor_2 = dsld_page_meta_value_by_meta_key('qualitystandard_qscertification_editor_2', $page->id);
@endphp
@if( $qscertification_editor_2 !='Null' && $qscertification_editor_2 !='')
<section class="main-section alternet-section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-6 col-xs-12">
        <div class="test-m-img bg-white d-flex align-center justify-content-center p-4 h-100">
          <div>
            <img src="{{ dsld_uploaded_asset($qscertification_file_0) }}" alt="{{ dsld_upload_file_title($qscertification_file_0) }}">
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-sm-6 col-xs-12 align-self-center">
        <div class="test-m-txt">
          <h4 class="wow fadeInUp fs-25">{{ $qscertification_text_1 }}</h4>
          <?php echo htmlspecialchars_decode($qscertification_editor_2); ?>
        </div>
      </div>
    </div>
  </div>
</section>
@endif

@php 
 $qscpsia_text_0 = dsld_page_meta_value_by_meta_key('qualitystandard_qscpsia_text_0', $page->id);
 $qscpsia_editor_1 = dsld_page_meta_value_by_meta_key('qualitystandard_qscpsia_editor_1', $page->id);
 $qscpsia_text_2 = dsld_page_meta_value_by_meta_key('qualitystandard_qscpsia_text_2', $page->id);
@endphp
@if( $qscpsia_editor_1 !='Null' && $qscpsia_editor_1 !='')

<section class="main-section alternet-section background-light mb-80">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-6 col-xs-12 order-2 order-xs-1">
        <div class="test-m-img bg-white d-flex align-center justify-content-center p-4 h-100">
          <div>
            <div class="text-logo fs-55 tcolor">{{  $qscpsia_text_0 }}</div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-sm-6 col-xs-12 align-self-center">
        <div class="test-m-txt">
          <h4 class="wow fadeInUp fs-25">{{  $qscpsia_text_2 }}</h4>
          <?php echo htmlspecialchars_decode($qscpsia_editor_1); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="dots-animation bottom-left haff-bottom"></div>
</section>
@endif

@endsection