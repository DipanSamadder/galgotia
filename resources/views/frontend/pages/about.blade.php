@extends('frontend.layouts.app')
@include('frontend.partials.page_meta')

@section('content')
<section class="abtBanner">
	<div class="container">
		<div class="abtBnrCnt">
			<div class="abtBnrRow">
				<div class="abtBnrBox">
					<div class="abtBnrBoxCnt pos-rel">
						<div class="abtBnrBoxImg"><img src="{{ dsld_static_asset('frontend/assets/images/newImg/leaf.png') }}" class="img-fluid"> </div>
						<span>Ranked</span>
						<h1 class="mb-0">93<sup>rd</sup> </h1>
					</div>
					<p class="mb-0">In Management</p>
				</div>
				<div class="abtBnrBox">
					<div class="abtBnrBoxCnt pos-rel">
						<div class="abtBnrBoxImg"><img src="{{ dsld_static_asset('frontend/assets/images/newImg/leaf.png') }}" class="img-fluid"> </div>
						<span>Ranked</span>
						<h1 class="mb-0">29<sup>th</sup> </h1>
					</div>
					<p class="mb-0">in India - Pharmacy</p>
				</div>
				<div class="abtBnrBox">
					<div class="abtBnrBoxCnt pos-rel">
						<div class="abtBnrBoxImg"><img src="{{ dsld_static_asset('frontend/assets/images/newImg/leaf.png') }}" class="img-fluid"> </div>
						<span>Ranked</span>
						<h1 class="mb-0">147<sup>th</sup> </h1>
					</div>
					<p class="mb-0">in Engineering</p>
				</div>
			</div>
			<h2 class="mb-0">We are Galgotias University</h2>
		</div>
	</div>
</section>
<section class="smtTab">
	<div class="container">
		<div class="row">
            @if($page !='')
                
            <div class="col-lg-3 col-md-4 pe-md-4">
				@include('frontend.partials.sidebar')
			</div>
			<div class="col-lg-9 col-md-8 ps-md-4">
				<div class="abtPilsCnt">
					<h2 class="mb-5">{{ $page->title }}</h2>
                    @php $str = $page->content; @endphp
                    <?php echo htmlspecialchars_decode($str); ?>
				</div>
			</div>
            @else
                <div class="col-lg-12 col-md-12 ps-md-4">
                   <center>Content Not Found.</center>
                </div>
            @endif
		</div>
	</div>
</section>





@endsection