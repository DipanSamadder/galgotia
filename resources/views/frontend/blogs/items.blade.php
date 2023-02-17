
@if($blog != '')
<div class="col-lg-4 col-sm-6 col-xs-12">
    <article class="article box-shadow">
        <div class="article-img object-fit">
            <a href="{{ route('blogs.show_blog', [$blog->slug]) }}">
                <img src="{{ dsld_uploaded_asset($blog->thumbnail) }}" alt="{{ dsld_upload_file_title($blog->thumbnail) }}">
            </a>
        </div>
        <div class="article-info">
            <a href="{{ route('blogs.show_blog', [$blog->slug]) }}">
                <h3 class="tcolor fs-14">{{ $blog->title }}</h3>
            </a>
            <ul class="article-meta list-style">
                <li><span class="material-icons tyellow"> event_note </span> {{ date('d M, Y', strtotime($blog->created_at)) }}</li> 
                <li><span class="material-icons tyellow"> person</span> {{ $blog->author }}</li>
            </ul>
        </div>
    </article>
</div><!-- col -->
@endif