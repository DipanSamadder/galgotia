@php 

if($page->parent != 0){
$sidebar = App\Models\Page::where('status', 1)->where('parent', $page->parents->id)->orderBy('order', 'asc')->get();
$name = $page->parents->title;
$slug = $page->parents->slug;
}else{

$sidebar = App\Models\Page::where('status', 1)->where('parent', $page->id)->orderBy('order', 'asc')->get();
$name = $page->title;
$slug = $page->slug;
}


@endphp

<div class="tabCntDiv d-block d-md-none">
<span class="tabCnt">{{ $name }}</span>
<span class="tabCntArrow"></span>
</div>

<div class="nav flex-column nav-pills me-3 abtPils" id="v-pills-tab" role="tablist" aria-orientation="vertical">

<a href="{{ route('custom-pages.show_custom_page', [$slug]) }}" class="nav-link {{ dsld_is_slug_active([$slug]) }}" id="side-tab-0"  type="button"  aria-selected="{{ dsld_is_slug_active([$slug], 'true') }}">{{ $name }}</a>

@if(!empty($sidebar))
@foreach($sidebar as $key => $value)
<a href="{{ route('custom-pages.show_custom_page', [$value->slug ]) }}" class="nav-link {{ dsld_is_slug_active([$value->slug]) }}" id="side-tab-{{ $key }}"  type="button"  aria-selected="@if($key == 0) true @else false @endif">{{ $value->title }}</a>
@endforeach
@endif

</div>
