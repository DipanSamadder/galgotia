@extends('frontend.layouts.app')
@include('frontend.partials.page_meta')

@section('content')

@include('frontend.partials.slider-banner-section')

@php 
 $contactdetails_file_0 = dsld_page_meta_value_by_meta_key('contactus_contactdetails_file_0', $page->id);
@endphp

@if( $contactdetails_file_0 !='Null' && $contactdetails_file_0 !='')
<section class="main-section csr-section contact-pg before-none">
  <div class="container">
      <div class="row">
        <div class="col-lg-5 col-sm-5 col-xs-12 order-2 order-xs-1">
           <div class="csr-img">
             <img src="{{ dsld_uploaded_asset($contactdetails_file_0) }}" alt="{{ dsld_upload_file_title($contactdetails_file_0) }}">
           </div>  
        </div>
        <div class="col-lg-7 col-sm-7 col-xs-12 contact-scroll">       
        @php
          $contact = App\Models\Page::where('type', 'offices')->where('status', 1)->orderBy('order', 'asc')->get();
        @endphp
        @if($contact != '')
          @foreach($contact as $key => $value)
            
            <div class="cnt-address mb-4">
                <h2 class=" fs-25"> {{ json_decode($value->meta_fields)->section }}</h2>
                <div class="bg-light">
                <div class="bg-site roboto fs-18 contact-heading">
                  {{ $value->title }}
                </div>
                <div class="cnt-box">
                    <div class="row">
                      <div class="col-lg-6 col-sm-6 col-xs-12">                    
                        <address>
                            <span class="address-icon material-icons tcolor">location_on</span>
                            {{ $value->content }}
                        </address>                
                      </div>
                      <div class="col-lg-6 col-sm-6 col-xs-12">                        
                        <address>
                          <span class="address-icon material-icons tcolor">call</span>                        
                          {{ json_decode($value->meta_fields)->phone }}                       
                        </address>                       
                          <address>
                          <span class="address-icon material-icons tcolor">email</span>
                          <a href="mailto:{{ json_decode($value->meta_fields)->email }}" target="_blank">{{ json_decode($value->meta_fields)->email }}</a>
                        </address>                        
                      </div>
                    </div>
                  </div><!-- cnt-box -->
                </div>
            </div>
          @endforeach
        @endif
        </div>
      </div>
  </div>
  <div class="dots-animation bottom-left haff-bottom"></div>
</section>
@endif

@endsection