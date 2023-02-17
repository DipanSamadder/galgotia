@extends('frontend.layouts.app')
@include('frontend.partials.page_meta')

@section('content')

@include('frontend.partials.slider-banner-section')


<section class="main-section product-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-sm-4 col-xs-12 order-2 order-xs-1">
        <div class="sidebar position-relative">
          <div class="sidebar-widget mb-3">
            <div class="sidebar-widget-box download-btn pl-0 pr-0 mb-2 bg-light">
              <a href="images/Combination-zipper-catalogue.pdf" download><img src="images/pdf-file.png" alt="Combination Zipper Catalogue">
                <p class="tcolor mb-0"> Combination Zipper Catalogue</p>
              </a>
            </div>

            <div class="sidebar-widget-box download-btn pl-0 pr-0 mb-2 bg-light">
              <a href="images/Metal-Finish-card.pdf"><img src="images/pdf-file.png" alt="Metal Finish Card" download>
                <p class="tcolor mb-0">Metal Finish Card</p>
              </a>
            </div>

            <div class="sidebar-widget-box download-btn pl-0 pr-0 mb-2 bg-light">
              <a href="images/Printed-zipper-catalogue.pdf" download><img src="images/pdf-file.png" alt="Printed Zipper catalogue">
                <p class="tcolor mb-0"> Printed Zipper catalogue</p>
              </a>
            </div>

            <div class="sidebar-widget-box download-btn pl-0 pr-0 mb-2 bg-light">
              <a href="images/PU-Coted-color-card.pdf" download><img src="images/pdf-file.png" alt="PU Coted Color Catalogue">
                <p class="tcolor mb-0">PU Coted Color Catalogue</p>
              </a>
            </div>

            <div class="sidebar-widget-box download-btn pl-0 pr-0 mb-2 bg-light">
              <a href="images/Teeth-and-special-tape-variation-catalogue.pdf" download><img src="images/pdf-file.png" alt="Teeth and special tape variation">
                <p class="tcolor mb-0">Teeth and special tape variation</p>
              </a>
            </div>
          </div><!-- sidebar widget -->

        </div>
      </div><!-- col -->
      <div class="col-lg-8 col-sm-8 col-xs-12">
        <div class="main-title mb-5 wow fadeInUp">
          <h3 class="title-tag-line wow fadeInUp">YKK India Promotional Items</h3>
        </div>
        <div class="row load-data">

          <div class="col-lg-4 col-sm-6 col-xs-12 mb-4">
            <div class="product box-shadow h-100 text-center">
              <div class="product-img">
                <a href="product_detail.php">
                  <img src="images/products/everbright_493062497.png" alt="">
                </a>                   
                <p class="prd-status roboto">
                  <span>New</span>
                </p>                  
              </div>
              <div class="product-info">
                <a href="product_detail"><h6>EVERBRIGHT</h6></a>
                <div class="prd-key">
                  <span class="roboto"></span>
                  <span class="roboto">Close End</span>
                </div>
              </div>
            </div>  
          </div><!-- col -->
          <div class="col-lg-4 col-sm-6 col-xs-12 mb-4">
            <div class="product box-shadow h-100 text-center">
              <div class="product-img">
                <a href="product_detail.php">
                  <img src="images/products/05_1669587850.jpg" alt="">
                </a>                                    
              </div>
              <div class="product-info">
                <a href="product_detail"><h6>EVERBRIGHT</h6></a>
                <div class="prd-key">
                  <span class="roboto"></span>
                  <span class="roboto">Close End</span>
                </div>
              </div>
            </div>  
          </div><!-- col -->
          <div class="col-lg-4 col-sm-6 col-xs-12 mb-4">
            <div class="product box-shadow h-100 text-center">
              <div class="product-img">
                <a href="product_detail.php">
                  <img src="images/products/04_50350016.jpg" alt="">
                </a>                 
              </div>
              <div class="product-info">
                <a href="product_detail"><h6>EVERBRIGHT</h6></a>
                <div class="prd-key">
                  <span class="roboto"></span>
                  <span class="roboto">Close End</span>
                </div>
              </div>
            </div>  
          </div><!-- col -->

          <div class="col-lg-12">
            <div class="no-product">
              <img src="images/noproduct.png" alt="no-product">
            </div>
          </div>



          <div class="col-lg-12">
            <div class="pagination-bar blog-pagination">
              <nav aria-label="Page navigation example">

              </nav>
            </div>
          </div>


        </div>
      </div><!-- col -->

    </div>
  </div>
</section> 



@php 

 $productssustainable_file_0 = dsld_page_meta_value_by_meta_key('product_productssustainable_file_0', $page->id);
 $productssustainable_text_1 = dsld_page_meta_value_by_meta_key('product_productssustainable_text_1', $page->id);
 $productssustainable_editor_2 = dsld_page_meta_value_by_meta_key('product_productssustainable_editor_2', $page->id);
 $productssustainable_button_3 = dsld_page_meta_value_by_meta_key('product_productssustainable_button_3', $page->id);

@endphp

@if($productssustainable_editor_2 !='')
<section class="main-section alternet-section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-sm-5 col-xs-12">
        <div class="alternet-img">
          <img src="{{ dsld_uploaded_asset( $productssustainable_file_0) }}" alt="{{ dsld_upload_file_title( $productssustainable_file_0) }}">
        </div>
      </div>
      <div class="col-lg-7 col-sm-7 col-xs-12 align-self-center">
        <div class="alternet-section-txt">
          <h4 class="wow fadeInUp fs-25 mb-2">{{  $productssustainable_text_1 }}</h4>
          <p class="wow fadeInUp"><?php echo htmlspecialchars_decode($productssustainable_editor_2); ?></p>
          @if($productssustainable_button_3)
          <a href="{{  $productssustainable_button_3 }}" class="btn" target="_blank">Learn More</a>
          @endif
        </div>
      </div>
    </div>
  </div>
</section>
@endif


@php 

 $productindia_text_0 = dsld_page_meta_value_by_meta_key('product_productindia_text_0', $page->id);
 $productindia_editor_1 = dsld_page_meta_value_by_meta_key('product_productindia_editor_1', $page->id);
 $productindia_file_2 = dsld_page_meta_value_by_meta_key('product_productindia_file_2', $page->id);

@endphp

@if($productindia_editor_1 !='')
<section class="main-section alternet-section ">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-sm-5 col-xs-12 order-2 order-xs-1 align-self-center">
        <div class="alternet-img  text-right">
          <img src="{{ dsld_uploaded_asset( $productindia_file_2) }}" alt="{{ dsld_upload_file_title( $productindia_file_2) }}">
        </div>
      </div>
      <div class="col-lg-7 col-sm-7 col-xs-12 align-self-center">
        <div class="test-m-txt">
          <h4 class="wow fadeInUp fs-25">{{  $productindia_text_0 }}</h4>
          <p class="wow fadeInUp"><?php echo htmlspecialchars_decode($productindia_editor_1); ?></p>
          </div>
        </div>
      </div>
    </div>
</section>
@endif


@php 

 $productglobal_file_0 = dsld_page_meta_value_by_meta_key('product_productglobal_file_0', $page->id);
 $productglobal_text_1 = dsld_page_meta_value_by_meta_key('product_productglobal_text_1', $page->id);
 $productglobal_editor_2 = dsld_page_meta_value_by_meta_key('product_productglobal_editor_2', $page->id);
 $productglobal_button_3 = dsld_page_meta_value_by_meta_key('product_productglobal_button_3', $page->id);

@endphp

@if($productglobal_editor_2 !='')
<section class="main-section alternet-section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-sm-5 col-xs-12">
        <div class="alternet-img">
        <img src="{{ dsld_uploaded_asset( $productglobal_file_0) }}" alt="{{ dsld_upload_file_title( $productglobal_file_0) }}">
        </div>
      </div>
      <div class="col-lg-7 col-sm-7 col-xs-12 align-self-center">
        <div class="alternet-section-txt">
          <h4 class="wow fadeInUp fs-25 mb-2">{{  $productglobal_text_1 }}</h4>
          <p class="wow fadeInUp"><?php echo htmlspecialchars_decode($productglobal_editor_2); ?></p>
          @if($productglobal_button_3)
            <a href="{{  $productglobal_button_3 }}" class="btn" target="_blank">Learn More</a>
          @endif
        </div>
      </div>
    </div>
  </div>
</section>
@endif


@php 

 $productdigital_text_0 = dsld_page_meta_value_by_meta_key('product_productdigital_text_0', $page->id);
 $productdigital_button_2 = dsld_page_meta_value_by_meta_key('product_productdigital_button_2', $page->id);
 $productdigital_file_3 = dsld_page_meta_value_by_meta_key('product_productdigital_file_3', $page->id);

@endphp

@if($productdigital_file_3 !='')
<section class="main-section alternet-section background-light mb-80">
  <div class="container">
      <div class="row">
        <div class="col-lg-5 col-sm-5 col-xs-12 order-2 order-xs-1 align-self-center">
          <div class="alternet-img  text-center p-4 ">
            <img src="{{ dsld_uploaded_asset($productdigital_file_3) }}" alt="{{ dsld_upload_file_title( $productdigital_file_3) }}">
          </div>
        </div>
        <div class="col-lg-7 col-sm-7 col-xs-12 align-self-center">
          <div class="test-m-txt">
            <h4 class="wow fadeInUp fs-25">{{  $productdigital_text_0 }}</h4>
            
            @if($productdigital_button_2)
                <a href="{{  $productssustainable_button_3 }}" class="btn" target="_blank">Learn More</a>
            @endif
          </div>
        </div>
      </div>
    </div>
  <div class="dots-animation bottom-left haff-bottom"></div>
</section>

@endif


@endsection