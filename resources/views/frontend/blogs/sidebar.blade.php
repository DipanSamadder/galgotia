<div class="sidebar position-relative">
    <div class="sidebar-widget bg-light mb-3">
    <div class="sidebar-title  bg-site">
        <h6 class="text-white mb-0">Popular Posts</h6>
    </div>
    <div class="sidebar-widget-box">
        <ul class="recent-post p-0">

            @php 
                $posts = App\Models\Post::where('type', 'posts')->orderBy('visitor', 'desc');
                if(isset($post) && $post !=''){
                    $posts = $posts->where('id', '!=', $post->id);
                }
                $posts = $posts->limit(3)->get();
            @endphp

            @foreach($posts as $key => $blog)

                <li>  
                    <div class="recent-post-img object-fit">
                        <a href="{{ route('blogs.show_blog', [$blog->slug]) }}">
                            <img src="{{ dsld_uploaded_asset($blog->thumbnail) }}" alt="{{ dsld_upload_file_title($blog->thumbnail) }}">
                        </a>
                    </div>
                    <div class="recent-post-txt">
                        <a href="{{ route('blogs.show_blog', [$blog->slug]) }}">
                            <p class="fs-14 mb-1">{{ $blog->title }}</p>
                        </a>
                        <ul class="article-meta list-style">
                            <li><span class="material-icons tyellow"> event_note </span> {{ date('d M, Y', strtotime($blog->created_at)) }}</li> 
                            <li><span class="material-icons tyellow"> person</span> {{ $blog->author }}</li>
                        </ul>
                    </div>
                </li><!-- list -->

            @endforeach

        </ul>

    </div>
    </div><!-- sidebar widget -->
    @if(isset($post))
        @if($post->catalogue != 0)
        <div class="sidebar-widget bg-light mb-3">
            <div class="sidebar-widget-box download-btn pl-0 pr-0">
                <a href="{{ dsld_uploaded_asset($post->catalogue) }}" download><img src="{{ dsld_static_asset('frontend/assets/images/pdf-file.png')}}" alt="Download Now Catalogue">
                <p class="tcolor mb-0"> Download Now Catalogue</p>
                </a>
            </div>
        </div><!-- sidebar widget -->
        @endif
    @endif
</div>