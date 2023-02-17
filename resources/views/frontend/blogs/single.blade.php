@extends('frontend.layouts.app')
@include('frontend.partials.single_blog_meta')

@section('content')

<div class="main-section banner inner-banner bg-img" style="background:url('{{ dsld_static_asset('frontend/assets/images/national-sales.jpg') }}">
 <div class="container">
  <div class="row">
    <div class="col-lg-7 col-sm-7 col-xs-12">
      <h1 class="text-white fs-50 mb-0">Events & Blogs</h1>
    </div><!-- col -->
    <div class="col-lg-5 col-sm-5 col-xs-12 align-self-center">
      <div class="breadcrum text-right">
        <ul class="breadcrumb mb-0 roboto font-weight-medium">
          <li><a href="#">Home</a></li>
          <li><a href="blog.php">blogs</a></li>
          <li></li>
        </ul>
      </div>
    </div><!-- col -->
  </div>
</div>
</div> <!-- banner -->

<section class="main-section blog-pg blog-single-pg">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-sm-4 col-xs-12 order-2">
        @include('frontend.blogs.sidebar')

        <!-- <div class="sidebar position-relative">
          <div class="sidebar-widget bg-light mb-3">
            <div class="sidebar-title  bg-site">
              <h6 class="text-white mb-0">Recent Posts</h6>
            </div>
            <div class="sidebar-widget-box">
              <ul class="recent-post p-0">

                <li>  
                  <div class="recent-post-img object-fit">
                    <a href="blog_detail.php">
                      <img src="images/blogs/national-sales_2094142938.jpg" alt="" >
                    </a>
                  </div>
                  <div class="recent-post-txt">
                    <a href="images/blogs/national-sales_2094142938.jpg"><p class="fs-14 mb-1"></p></a>
                    <ul class="article-meta list-style">
                      <li>
                        <span class="material-icons tyellow"> event_note </span>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="sidebar-widget bg-light mb-3">
            <div class="sidebar-widget-box download-btn pl-0 pr-0">
              <a href="images/catalogue/YKK-Zipper-Catalogue.pdf" download><img src="images/pdf-file.png" alt="Download Now Catalogue">
                <p class="tcolor mb-0"> Download Now Catalogue</p>
              </a>
            </div>
          </div>
        </div> -->
        
      </div><!-- col -->
      <div class="col-lg-8 col-sm-8 col-xs-12 blog-pg-single">
        <div class="article-single">
          
          <h2 class="wow fadeInUp fs-30 mb-2">
            {{ $post->title }} 
            @auth()
            <a href="{{ route('posts.edit', [$post->id]) }}"><i class="fas fa-edit"></i> </a>
            @endauth
          </h2>
            <div class="article-info p-0">
            <ul class="article-meta list-style">
              <li><span class="material-icons tyellow"> event_note </span> {{ date('d M, Y', strtotime($post->created_at)) }}</li>
              <li><span class="material-icons tyellow">person</span> {{ $post->author }}</li>
            </ul>
          </div>
          {{ $post->content }}

        </div>
        <div class="blog-pagination">
          <ul class="wow fadeInUp list-style">

            <li class="prev-post">
              <a href="">
                <div class="pagination-post">
                  <span class="tcolor roboto font-weight-bold fs-22">Previous</span><br>
                  <p class="wow fadeInUp roboto font-weight-medium">
                    <br/>
                    <small></small> </p>
                  </div>
                </a>
              </li>

              <li class="next-post">
                <a href="">
                  <div class="pagination-post text-right">
                    <span class="tcolor roboto font-weight-bold fs-22">Next</span><br>
                    <p class="wow fadeInUp roboto font-weight-medium">
                      <br/>
                      <small></small> </p>
                    </div>
                  </a>
                </li>

              </ul>
            </div>
          </div><!-- col -->
        </div>
      </div>
      <div class="dots-animation bottom-left haff-bottom"></div>
    </section> 

@endsection