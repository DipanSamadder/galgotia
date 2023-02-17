@extends('frontend.layouts.app')
@include('frontend.partials.page_meta')

@section('content')

@include('frontend.partials.slider-banner-section')

@php 
 $mdmessagedirector_file_0 = dsld_page_meta_value_by_meta_key('mdmessage_mdmessagedirector_file_0', $page->id);
 $mdmessagedirector_editor_1 = dsld_page_meta_value_by_meta_key('mdmessage_mdmessagedirector_editor_1', $page->id);
 $mdmessagedirector_text_2 = dsld_page_meta_value_by_meta_key('mdmessage_mdmessagedirector_text_2', $page->id);
 $mdmessagedirector_editor_3 = dsld_page_meta_value_by_meta_key('mdmessage_mdmessagedirector_editor_3', $page->id);
@endphp

@if( $mdmessagedirector_editor_3 !='Null' && $mdmessagedirector_editor_3 !='')
<section class="main-section team-lead-section">
  <div class="container">
    <div class="dots-animation top-left"></div>
    <div class="row">
      <div class="col-lg-6 col-sm-6 col-xs-12 align-self-center">
        <div class="abt-collage text-center">
          <img src="{{ dsld_uploaded_asset($mdmessagedirector_file_0) }}" alt="{{ dsld_upload_file_title($mdmessagedirector_file_0) }}">
          <div class="team-lead-info bg-site m-auto">
          <?php echo htmlspecialchars_decode($mdmessagedirector_editor_1); ?>
          </div>
        </div>
      </div><!-- col -->
      <div class="col-lg-6 col-sm-6 col-xs-12">
        <div class="about-content">
          <div class="main-title wow fadeInUp">
            <h3 class="title-tag-line wow fadeInUp"> {{ $mdmessagedirector_text_2 }}</h3>
          </div>
          <?php echo htmlspecialchars_decode($mdmessagedirector_editor_3); ?>
        </div>
      </div><!-- col -->
    </div>
    <div class="dots-animation bottom-right"></div>
  </div>
</section>
@endif

@endsection