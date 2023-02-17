@if ($paginator->hasPages())
<div class="col-lg-12 blog-pg-single">
<div class="blog-pagination">
  <ul class="wow fadeInUp list-style">
  
   <li class="prev-post">
    @if ($paginator->onFirstPage())
        <a href="javascript:void(0);">
        <div class="pagination-post disabled">
            <span class="tcolor roboto font-weight-bold fs-22">Previous</span><br>
            <p class="wow fadeInUp roboto font-weight-medium">
            <br/>
            <small></small> </p>
            </div>
        </a>
    @else
        <a href="{{ $paginator->previousPageUrl() }}">
        <div class="pagination-post">
            <span class="tcolor roboto font-weight-bold fs-22">Previous</span><br>
            <p class="wow fadeInUp roboto font-weight-medium">
            <br/>
            <small></small> </p>
            </div>
        </a>
    @endif
   
    </li>
    
    <li class="next-post">
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}">
                <div class="pagination-post text-right">
                <span class="tcolor roboto font-weight-bold fs-22">Next</span><br>
                <p class="wow fadeInUp roboto font-weight-medium">
                <br/>
                <small></small> </p>
                </div>
            </a>

        @else
            <a href="javascript:void(0);">
                <div class="pagination-post text-right">
                <span class="tcolor roboto font-weight-bold fs-22">Next</span><br>
                <p class="wow fadeInUp roboto font-weight-medium">
                <br/>
                <small></small> </p>
                </div>
            </a>

        @endif
     </li>
   </ul>
 </div>
</div>

@endif 
