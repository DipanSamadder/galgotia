@extends('frontend.layouts.app')
@include('frontend.partials.page_meta')

@section('content')

@php 
$section = App\Models\PageSection::where('page_id', 56)->orderBy('order', 'asc')->where('status', 1)->get();
@endphp
@php 

 $abouttheprogramme_text_0 = dsld_page_meta_value_by_meta_key('abouttheprogramme_text_0', $page->id);
 $abouttheprogramme_text_1 = dsld_page_meta_value_by_meta_key('abouttheprogramme_text_1', $page->id);
 $abouttheprogramme_text_2 = dsld_page_meta_value_by_meta_key('abouttheprogramme_text_2', $page->id);
 
@endphp
@if(dsld_page_meta_value_by_meta_key('setting_page_banner_slider', $page->id) !='') 
@if(dsld_page_meta_value_by_meta_key('setting_page_banner_slider', $page->id) == 'banner') 

<section class="bgpdeta mt-5" style="background: url('{{ dsld_uploaded_asset($page->banner) }}');
    background-position: center;
    background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 p-5 mt-5 mb-5">
                @if(dsld_page_meta_value_by_meta_key('setting_page_name_hide', $page->id) != 'yes') 
                <h1 class="f48 white gothambold p-5">
                    {{ $page->title }}
                    @auth()
                        <a href="{{ route('pages.edit', [$page->id]) }}"><i class="fas fa-edit"></i> </a>
                    @endauth
                </h1>
                @endif
            </div>
            <div class="col-lg-4 bg-whitegrey py-3 px-4"> 
                <h2 class="f32 gothambold colorred">Get Started</h2>
                <p class="2a2a2a f13 gothamnarrow325">Register Now to Get Information.</p>
                <form>
                    <input type="text" class="form-control rounded-0 my-2" id="fname" placeholder="Full Name">
                    <input type="text" class="form-control rounded-0 my-2" id="fname" placeholder="Email ID">
                    <input type="text" class="form-control rounded-0 my-2" id="fname" placeholder="Contact No.">
                    <div class="row py3">
                        <div class="col-md-6">
                            <select class="form-select rounded-0" aria-label="Default select example">
                                <option selected>Select Program</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <select class="form-select rounded-0" aria-label="Default select example">
                                <option selected>Select Cource</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="row py-3">
                        <div class="col-md-6">
                            <select class="form-select rounded-0" aria-label="Default select example">
                                <option selected>Select State</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <select class="form-select rounded-0" aria-label="Default select example">
                                <option selected>Select City</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="row d-flex">
                        <div class="input-group  rounded-0">
                            <span class="input-group-text rounded-0 w-50"
                            id="basic-addon1 text-center">AvnMZ</span>
                            <input type="text" class="form-control rounded-0 w-50"
                            placeholder="Enter text as shown" aria-label="Username"
                            aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input mt-4 mb-3 rounded-0" type="checkbox" value=""
                        id="flexCheckDefault">
                        <label class="form-check-label mt-3 mb-3 f10 gothamnarrow325"
                        for="flexCheckDefault">
                        I authorize Galgotias University to contact me with updates/notifications
                        via Email/SMS/Whatsapp/Call, which overrides DND/NDNC registrations
                    </label>
                </div>
                <div class="form-group  text-center">
                    <a href="#" class="btn text-decoration-none f19 gothamnarrow325 applynowwe rounded-0">
                        <b>APPLY NOW<b>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endif
@endif

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8 my-5">
                <h2 class="f36 gothambold">{{ $page->title }}</h2>
                <a class="text-decoration-none colorred f24 gothambold"><i class="fa-regular fa-share-from-square"></i>&nbsp;&nbsp; {{ $page->parents->title }}</a>
            </div>
        </div>
        <div class="d-flex pca">

            @if(!empty($abouttheprogramme_text_0))
            <div class="pcaBox"> 
                <p class="mb-0">Programme Code</p>
                <strong>{{ $abouttheprogramme_text_0 }}</strong>
            </div>
            @endif

            @if(!empty($abouttheprogramme_text_1))

            <div class="pcaBox"> 
                <p class="mb-0">Programme Level</p>
                <strong>{{ $abouttheprogramme_text_1 }}</strong>
            </div>
            @endif

            @if(!empty($abouttheprogramme_text_2))
            <div class="pcaBox"> 
                <p class="mb-0">Duration</p>
                <strong>{{ $abouttheprogramme_text_2 }}</strong>
            </div>
            @endif
        </div>
    </div>
</section>
@php 
    $needsection_multi_select_0 = dsld_page_meta_value_by_meta_key('needsection_multi_select_0', $page->id);
@endphp
<section>
    <div class="bgShadow bg-dardsk">
        <div class="container">
            <!-- Nav tabs -->
            <ul class="owl-carousel owl-theme tabslider5 nav nav-pills">
        
                @foreach($section as $key => $sec)
     
                    
                    @if(in_array($sec->title, json_decode($needsection_multi_select_0)))
                    <li class="nav-item">
                        <a class="nav-link f22 gothammedium  white @if($key == 0 ) active @endif" data-bs-toggle="pill" href="#programDetails-{{ $key }}-{{ $sec->id }}"> {{ $sec->title }}</a>
                    </li>
                    @endif
                @endforeach

            </ul>
        </div>
    </div>
</section>


@php
$abouttheprogramme_text_3 = dsld_page_meta_value_by_meta_key('abouttheprogramme_text_3', $page->id);
 $abouttheprogramme_editor_4 = dsld_page_meta_value_by_meta_key('abouttheprogramme_editor_4', $page->id);

 $admissiondetails_text_0 = dsld_page_meta_value_by_meta_key('admissiondetails_text_0', $page->id);
 $admissiondetails_editor_1 = dsld_page_meta_value_by_meta_key('admissiondetails_editor_1', $page->id);

 $eligibility_editor_0 = dsld_page_meta_value_by_meta_key('eligibility_editor_0', $page->id);

 $feestructure_text_0 = dsld_page_meta_value_by_meta_key('feestructure_text_0', $page->id);
 $feestructure_text_1 = dsld_page_meta_value_by_meta_key('feestructure_text_1', $page->id);
 $feestructure_text_2 = dsld_page_meta_value_by_meta_key('feestructure_text_2', $page->id);
 
 $coremodulesscheme_button_0 = dsld_page_meta_value_by_meta_key('coremodulesscheme_button_0', $page->id);
 $coremodulesscheme_editor_1 = dsld_page_meta_value_by_meta_key('coremodulesscheme_editor_1', $page->id);

@endphp
<section class="Aboutcourse">
    <div class="tab-content">
        <div class="tab-pane active" id="abtcor">
            <div class="container">
                <div class="row my-4">
                    <div class="col-lg-8 my-4">
                    @if(in_array($abouttheprogramme_text_3, json_decode($needsection_multi_select_0)))
                    @if(!empty($abouttheprogramme_text_3))
                        <h2 class="gothambold f30 my-2 pt-5 pb-2">{{ $abouttheprogramme_text_3 }}</h2>
                    @endif

                    @if(!empty($abouttheprogramme_editor_4))
                    <p class="f18 gothamnarrow325"><?php echo htmlspecialchars_decode($abouttheprogramme_editor_4); ?></p>
                    @endif
                    @endif
                    
                    @if(in_array($admissiondetails_text_0 , json_decode($needsection_multi_select_0)))
                    @if(!empty($admissiondetails_text_0))
                        <h2 class="gothambold f30 my-2 pt-5 pb-2">{{ $admissiondetails_text_0 }}</h2>
                    @endif
                    
                    @if(!empty($admissiondetails_editor_1))
                    <p class="f18 gothamnarrow325"><?php echo htmlspecialchars_decode($admissiondetails_editor_1); ?></p>
                    @endif
                    @endif

                    @if(in_array('Eligibility', json_decode($needsection_multi_select_0)))
                    @if(!empty($eligibility_editor_0))
                    <h2 class="gothambold f30 my-2 pt-5 pb-2">Eligibility</h2>
                    @endif

                    @if(!empty($eligibility_editor_0)) 
                    <p class="f18 gothamnarrow325"><?php echo htmlspecialchars_decode($eligibility_editor_0); ?>
                    </p>
                    @endif
                    @endif

                    @if(in_array('Fee Structure', json_decode($needsection_multi_select_0)))
                    @if(!empty($feestructure_text_0) && !empty($feestructure_text_1) && !empty($feestructure_text_2))
                    <div class="feestruc bg-ligry my-4 w-50 p-4">
                        <h2 class="gothambold f30 my-2 pt-4 pb-3 ">Fee Structure</h2>
                        @if(!empty($feestructure_text_0))
                        <div class="one1 d-flex gothamnarrow325 my-3 ">
                            <div class="w-50 f24">Duration </div>
                            <div class="w-50 text-center f24">{{ $feestructure_text_0 }}</div>
                        </div>
                        @endif
                        @if(!empty($feestructure_text_1))
                        <div class="one1 d-flex gothamnarrow325 my-3 ">
                            <div class="w-50 f24">Annual Fees </div>
                            <div class="w-50 text-center f24">{{ $feestructure_text_1 }}</div>
                        </div>
                        @endif
                        @if(!empty($feestructure_text_2))
                        <div class="one1 d-flex gothamnarrow325 my-3 lastaa">
                            <div class="w-50 f24">Exam Fee </div>
                            <div class="w-50 text-center f24">{{ $feestructure_text_2 }}</div>
                        </div>
                        @endif
                    </div>
                    @endif
                    @endif


                    @if(in_array('Core Modules & Scheme', json_decode($needsection_multi_select_0)))
                    @if(!empty($coremodulesscheme_editor_1))
                    <h2 class="gothambold f30 my-2 pt-5 pb-2">Core Modules & Scheme</h2>
                    <p class="f18 gothamnarrow325">
                        <?php echo htmlspecialchars_decode($coremodulesscheme_editor_1); ?>
                    </p>
                    @endif
                    
                    @if(!empty($coremodulesscheme_button_0))
                        <a href="{{ $coremodulesscheme_button_0 }}" class="explore">Core Module</a>
                    @endif
                    @endif

                    @php
                        $pos = json_decode(dsld_page_meta_value_by_meta_key('programmeobjectives_text_repeter_0', $page->id), true);
                    @endphp
                    
                    @if(in_array('Programme Objectives', json_decode($needsection_multi_select_0)))
                    @if(is_array($pos) && count($pos) > 0)
                    <div class="aspachiv ">
                        <h1 class="f30  gothambold mt45rem mb45rem">Programme Objectives</h1>
                        <div class="row">
                            @foreach($pos as $key => $value)
                            <div class="col-md-4 mb-4 mb-md-5 px-md-4">
                                <div class="cntntdf">
                                    <p class="f36  gothammedium">{{ str_pad($key+1, 2, '0', STR_PAD_LEFT) }}</p>
                                    <p class="f23  gothammedium">{{ $pos[$key] }}</p>
                                    <hr class="new5" />
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                    @endif
                    @endif

                    @php
                        $psos = json_decode(dsld_page_meta_value_by_meta_key('programmespecificoutcomespsos_text_repeter_0', $page->id), true);
                    @endphp
                    @if(is_array($psos) && count($psos) > 0)
                    
                    @if(in_array('Programme Specific Outcomes (PSOs)', json_decode($needsection_multi_select_0)))
                    <div class="aspachiv profilecard">
                        <h1 class="f30  gothambold  white">Programme Specific Outcomes (PSOs)</h1>
                        <div class="row">

                            @foreach($psos as $key => $value)
                            <div class="col-md-4 mb-4 mb-md-5 px-md-4">
                                <div class="cntntdf">
                                    <p class="f36  gothammedium white">{{ str_pad($key+1, 2, '0', STR_PAD_LEFT) }}</p>
                                    <p class="f23  gothammedium white">{{ $psos[$key] }}</p>
                                    <hr class="new5" />
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                @endif
                @endif
                </div>

                <div class="col-lg-4">
                    
                   @include('frontend.partials.important_links')
                   
                    <div class="indian-st-ap p-4 text-center bg-ligry">
                        <div class="cntntnt">
                            <h2 class="f30 gothambold mt-3">Indian Students Apply</h2>
                            <p class="f18 gothamnarrow325 my-3">Passed Diploma examination with at least 50% marks in any
                            branch of Engineering and Technology. 2. Passed B.Sc.</p>
                            <div class="form-group  text-center">
                                <a href="#" class="btn text-decoration-none f19 gothamnarrow325 applynowwe rounded-0">
                                    <b>APPLY NOW<b>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="indian-st-ap p-4 my-5 text-center bg-ligry">
                        <div class="cntntnt">
                            <h2 class="f30 gothambold mt-3">Indian Students Apply</h2>
                            <p class="f18 gothamnarrow325 my-3">Passed Diploma examination with at least 50% marks in any
                            branch of Engineering and Technology. 2. Passed B.Sc.</p>
                            <div class="form-group  text-center">
                                <a href="#" class="btn text-decoration-none f19 gothamnarrow325 applynowwe rounded-0">
                                    <b>APPLY NOW<b>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection