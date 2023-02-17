@extends('frontend.layouts.app')
@include('frontend.partials.page_meta')

@section('content')

@include('frontend.partials.slider-banner-section')

@php 
 $philosophycycleofgoodness_text_0 = dsld_page_meta_value_by_meta_key('philosophy_philosophycycleofgoodness_text_0', $page->id);
 $philosophycycleofgoodness_editor_2 = dsld_page_meta_value_by_meta_key('philosophy_philosophycycleofgoodness_editor_2', $page->id);
 $philosophycycleofgoodness_file_1 = dsld_page_meta_value_by_meta_key('philosophy_philosophycycleofgoodness_file_1', $page->id);
@endphp

@if( $philosophycycleofgoodness_file_1 !='Null' && $philosophycycleofgoodness_file_1 !='')
<section class="main-section csr-section before-none">
  <div class="container">
      <div class="row">
        <div class="col-lg-6 col-sm-6 col-xs-12 order-2 order-xs-1 align-self-center">
           <div class="csr-img">
             <img src="{{ dsld_uploaded_asset($philosophycycleofgoodness_file_1) }}" alt="{{ dsld_upload_file_title($philosophycycleofgoodness_file_1) }}">
           </div>  
        </div>
        <div class="col-lg-6 col-sm-6 col-xs-12 align-self-center">
           <div class="csr-text">
              <h2 class="wow fadeInUp">{{  $philosophycycleofgoodness_text_0 }}</h2>
              <?php echo htmlspecialchars_decode($philosophycycleofgoodness_editor_2); ?>
           </div>  
        </div>

      </div>
  </div>
</section>
@endif

@php 
 $philosophyhighersignificance_text_0 = dsld_page_meta_value_by_meta_key('philosophy_philosophyhighersignificance_text_0', $page->id);
 $philosophyhighersignificance_file_1 = dsld_page_meta_value_by_meta_key('philosophy_philosophyhighersignificance_file_1', $page->id);
 $philosophyhighersignificance_editor_2 = dsld_page_meta_value_by_meta_key('philosophy_philosophyhighersignificance_editor_2', $page->id);
 $philosophyhighersignificance_editor_3 = dsld_page_meta_value_by_meta_key('philosophy_philosophyhighersignificance_editor_3', $page->id);
@endphp

@if( $philosophyhighersignificance_file_1 !='Null' && $philosophyhighersignificance_file_1 !='')
<section class="main-section activity-process bg-light">
    <div class="dots-animation top-left haff-bottom"></div>
     <div class="container">
         <div class="row">
           <div class="col-lg-6 col-sm-6 col-xs-12 align-self-center text-center">
               <h5 class="text-dark wow fadeInUp">{{  $philosophyhighersignificance_text_0 }}</h5>
                <img src="{{ dsld_uploaded_asset($philosophyhighersignificance_file_1) }}" alt="{{ dsld_upload_file_title($philosophyhighersignificance_file_1) }}"><br>
                <?php echo htmlspecialchars_decode($philosophyhighersignificance_editor_2); ?>
            
          </div><!-- col -->
          <div class="col-lg-6 col-sm-6 col-xs-12 align-self-center">
            <?php echo htmlspecialchars_decode($philosophyhighersignificance_editor_3); ?>
          </div><!-- col -->
         </div>     
     </div>
</section>
@endif

@php 
 $philosophycorevalues_text_0 = dsld_page_meta_value_by_meta_key('philosophy_philosophycorevalues_text_0', $page->id);
 $philosophycorevalues_text_1 = dsld_page_meta_value_by_meta_key('philosophy_philosophycorevalues_text_1', $page->id);
 $philosophycorevalues_editor_2 = dsld_page_meta_value_by_meta_key('philosophy_philosophycorevalues_editor_2', $page->id);
 $philosophycorevalues_editor_3 = dsld_page_meta_value_by_meta_key('philosophy_philosophycorevalues_editor_3', $page->id);
@endphp

@if( $philosophycycleofgoodness_file_1 !='Null' && $philosophycycleofgoodness_file_1 !='')
<section class="main-section csr-section before-none">
  <div class="container">
      <div class="row">
        <div class="col-lg-6 col-sm-6 col-xs-12 order-2 order-xs-1 align-self-center">
            <h6 class="wow fadeInUp fs-22 text-center"><?php echo htmlspecialchars_decode($philosophycorevalues_editor_3); ?></h6>
        </div>
        <div class="col-lg-6 col-sm-6 col-xs-12 align-self-center">
           <div class="csr-text">
              <h2 class="wow fadeInUp">{{  $philosophycorevalues_text_0 }}</h2>
              <h5>{{  $philosophycorevalues_text_1 }}</h5>
              <?php echo htmlspecialchars_decode($philosophycorevalues_editor_2); ?>
           </div>  
        </div>

      </div>
  </div>
</section>
@endif

@endsection