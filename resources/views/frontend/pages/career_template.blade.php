@extends('frontend.layouts.app')
@include('frontend.partials.page_meta')

@section('content')

@include('frontend.partials.slider-banner-section')

@php 

 $career_careerdetails_text_0 = dsld_page_meta_value_by_meta_key('career_careerdetails_text_0', $page->id);
 $career_careerdetails_editor_1 = dsld_page_meta_value_by_meta_key('career_careerdetails_editor_1', $page->id);
 $career_careerdetails_text_2 = dsld_page_meta_value_by_meta_key('career_careerdetails_text_2', $page->id);
 $career_careerdetails_editor_3 = dsld_page_meta_value_by_meta_key('career_careerdetails_editor_3', $page->id);

@endphp

@if( $career_careerdetails_editor_1 !='Null' && $career_careerdetails_editor_1 !='')

<section class="main-section career-pg">
   <div class="dots-animation top-right haff-bottom"></div>
   <div class="container">
     <div class="row">
       <div class="col-lg-4 col-sm-4 col-xs-12 order-2 order-xs-1">
         <div class="sidebar position-relative">
           <div class="sidebar-widget bg-light mb-3">
              <div class="sidebar-title  bg-site">
                  <h6 class="text-white mb-0">Post your Resume</h6>
                 </div> 
              <div class="sidebar-widget-box">
                 @php include_form_by_id(47);  @endphp
              </div>            
            </div><!-- sidebar widget -->
         </div>
       </div><!-- col -->

       <div class="col-lg-8 col-sm-8 col-xs-12">
         <div class="default-content">
           <h2 class="wow fadeInUp">{{  $career_careerdetails_text_0 }}</h2>
           <p class="wow fadeInUp"><?php echo htmlspecialchars_decode($career_careerdetails_editor_1); ?></p>
           <div class="openings table pt-3">
            <h3 class="wow fadeInUp fs-25">{{  $career_careerdetails_text_2 }}</h3>
              <h2 class="wow fadeInUp"></h2>
			        <?php echo htmlspecialchars_decode($career_careerdetails_editor_3); ?>
           </div> 
         </div>
      </div>
   </div>
   </div>
   <div class="dots-animation bottom-left haff-bottom"></div>
 </section> 

@endif


@endsection