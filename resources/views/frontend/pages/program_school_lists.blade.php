@extends('frontend.layouts.app')
@include('frontend.partials.page_meta')

@section('content')

@include('frontend.partials.slider-banner-section')
<section class="underGraduad">
    <div class="container">
        <div class="underGraduadRow">
            <div class="row">

                <div class="col-lg-8 my-5">
                    <h1 class="f48 samsungbold mt-5 mb-md-5 mb-4">Programs</h1>
                    <div class="InputGroup">
                        <label for="exampleDataList" class="form-label f24 gothamnarrow325">Search Program</label>
                        <div class="InputGroupBtn">
                            <input class="form-control rounded-0 inptsclan" list="datalistOptions" id="exampleDataList">
                            <datalist id="datalistOptions">
                            </datalist>
                            <button class="searchprogrambtn gothammedium">SEARCH
                                <span><i class="fa-solid fa-angle-right float-end p-1"></i></span>     
                            </button>
                        </div>
                    </div>    
                </div>
                <div class="col-lg-4 my-5">
                   @include('frontend.partials.important_links')

                </div>
            </div>
        </div>
    </div>
</section>
<section class="mb-5 underSec">

    <div class="container" style="margin-top:10px; ">
        <div class="underGraduadRow">
            <!-- Nav tabs -->
            <ul class="nav nav-pills ugppage">
            
                @foreach(App\Models\Page::where('type', 'program_page')->where('level', 1)->where('status', 1)->orderBy('order', 'desc')->get() as $key => $value)
                @php
                
                if($page->id == 124){
                    $active = $key ==0 ? 'active' : '';
                }elseif($value->id == $page->id){
                    $active = 'active';
                }else{
                    $active = '';
                }
                @endphp
                <li class="nav-item">
                    <a class="nav-link f22 gothammedium {{ $active }}" data-bs-toggle="pill" href="#tab_program{{ $page->id }}{{ $value->id }}"> {{ $value->title }} </a>
                </li>
                @endforeach
            
            </ul>
        </div>
    </div>
    <div class="tab-content">
        @foreach(App\Models\Page::where('type', 'program_page')->where('level', 1)->where('status', 1)->orderBy('order', 'desc')->get() as $key => $value)

            @php
            
            if($page->id == 124){
                $active = $key ==0 ? 'active' : '';
            }elseif($value->id == $page->id){
                $active = 'active';
            }else{
                $active = '';
            }

            @endphp

            <div class="tab-pane {{ $active }}" id="tab_program{{ $page->id }}{{ $value->id }}">
                
                @foreach(App\Models\Page::where('type', 'program_page')->where('level', 2)->where('status', 1)->where('parent', $value->id)->orderBy('order', 'desc')->get() as $key => $value2)
                @php 
                    $plevel3 = App\Models\Page::where('type', 'program_page')->where('level', 3)->where('status', 1)->where('parent', $value2->id)->orderBy('order', 'desc')->get();
                    echo is_array($plevel3);
                @endphp
                @if(count($plevel3) > 0)
                <div class="container">
                    <div class="underGraduadRow">
                        <div class="row">
                            <div class="col-md-12 mt-5">
                                <h2 class="f36 gothambold">{{ $value2->title }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="underGraduadRow">
                        <div class="row">
                            @foreach($plevel3 as $key => $value3)
                            <div class="col-lg-4 col-md-6 mt-4">
                                <div class="cardprogram ">
                                    <div class="cardcontent">
                                        <p class="f23 gothammedium">{{ $value3->title }}</p>
                                        <div class="knowmore">
                                            <a class="f18 gothammedium" href="{{ route('custom-pages.show_custom_page', [$value3->slug]) }}">Know More <i class="fa-solid fa-arrow-right "></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div> 
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        @endforeach
    </div>
</section>
@endsection