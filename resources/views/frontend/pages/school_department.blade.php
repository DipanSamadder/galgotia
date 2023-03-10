@extends('frontend.layouts.app')
@include('frontend.partials.page_meta')

@section('content')
@php 
$section = App\Models\PageSection::where('page_id', 137)->orderBy('order', 'asc')->where('status', 1)->get();
@endphp

<section class="one-edge-shadow ">
    
    @if(dsld_page_meta_value_by_meta_key('setting_page_banner_slider', $page->id) !='') 
    @if(dsld_page_meta_value_by_meta_key('setting_page_banner_slider', $page->id) == 'banner') 
    <div class="bannerdeen" style="background: url({{ dsld_uploaded_asset($page->banner) }}) 100% 0 no-repeat;">
        <div class="headingdeen m-auto pt10px">
            @if(dsld_page_meta_value_by_meta_key('setting_page_name_hide', $page->id) != 'yes') 
                <h1 class="f48 white  text-center m-auto">
                    {{ $page->title }}
                    @auth()
                        <a href="{{ route('pages.edit', [$page->id]) }}"><i class="fas fa-edit"></i> </a>
                    @endauth
                </h1>
                @endif
        </div>
        <div class="d-flex mt-4">
            <div class="linee" style="margin-left: 2rem;"></div>
            <p class="white w-50 text-center m-auto f24 gothammedium">Department Statics</p>
            <div class="linee " style="margin-right: 2rem;"></div>
        </div>

        <div class="container">
            <div class=" d-flex align-items-center py-4 flexWrap">
                @php 

                $building_file_0 = dsld_page_meta_value_by_meta_key('wearegalgotias_building_file_0', 61);
                $building_text_1 = dsld_page_meta_value_by_meta_key('wearegalgotias_building_text_1', 61);
                $building_editor_2 = dsld_page_meta_value_by_meta_key('wearegalgotias_building_editor_2', 61);
                $building_text_3 = dsld_page_meta_value_by_meta_key('wearegalgotias_building_text_3', 61);
                $building_button_4 = dsld_page_meta_value_by_meta_key('wearegalgotias_building_button_4', 61);
                $building_text_5 = dsld_page_meta_value_by_meta_key('wearegalgotias_building_text_5', 61);
                $building_text_6 = dsld_page_meta_value_by_meta_key('wearegalgotias_building_text_6', 61);
                $building_text_7 = dsld_page_meta_value_by_meta_key('wearegalgotias_building_text_7', 61);
                $building_text_8 = dsld_page_meta_value_by_meta_key('wearegalgotias_building_text_8', 61);
                $building_text_9 = dsld_page_meta_value_by_meta_key('wearegalgotias_building_text_9', 61);

                @endphp
                @if(!empty($building_text_5))
                    <div class="tpCntrBox"> 
                        <h4 class="mb-0 white"> <?php echo htmlspecialchars_decode($building_text_5); ?></h4>
                        <p class="mb-0 white">Brilliant Students</p>
                    </div>
                @endif

                @if(!empty($building_text_6))
                    <div class="tpCntrBox">   
                        <h4 class="mb-0 white"> <?php echo htmlspecialchars_decode($building_text_6); ?></h4>
                        <p class="mb-0 white">Acre Campus</p>
                    </div>
                @endif
                @if(!empty($building_text_7))
                    <div class="tpCntrBox"> 
                        <h4 class="mb-0 white"> <?php echo htmlspecialchars_decode($building_text_7); ?></h4>
                        <p class="mb-0 white">Years of Legacy</p>
                    </div>
                @endif
                @if(!empty($building_text_8))
                    <div class="tpCntrBox">
                        <h4 class="mb-0 white"> <?php echo htmlspecialchars_decode($building_text_8); ?></h4>
                        <p class="mb-0 white">Awards</p>
                    </div>
                @endif
                @if(!empty($building_text_9))
                    <div class="tpCntrBox"> 
                        <h4 class="mb-0 white"> <?php echo htmlspecialchars_decode($building_text_9); ?></h4>
                        <p class="mb-0 white">Recruiters onboard</p>
                    </div>
                @endif

            </div>
        </div>
    </div>
    @endif
    @endif
    @php 
        $needsection_multi_select_0 = dsld_page_meta_value_by_meta_key('needsection_multi_select_0', $page->id);
    @endphp
    <div class="bgShadow">
        <div class="container">
            <!-- Nav tabs -->
            <ul class="owl-carousel owl-theme tabslider1 nav nav-pills">
                @foreach($section as $key2 => $sec)
                    @if(!empty($needsection_multi_select_0))
                        @if(in_array($sec->title, json_decode($needsection_multi_select_0)))
                        <li class="nav-item" role="presentation">
                            <a class="nav-link f22 gothammedium @if($key2 == 1 ) active @endif" data-bs-toggle="pill" href="#Details-{{ $sec->id }}"> {{ $sec->title }}</a>
                        </li>
                        @endif
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</section>

<section class="schoolDep">
    <div class="tab-content">

        @foreach($section as $key2 => $sec)
            @if(!empty($needsection_multi_select_0))
                @if(in_array($sec->title, json_decode($needsection_multi_select_0)))
                
                <div class="tab-pane @if($sec->title == 'USPs & Achievements' || $sec->title == 'Value Added Programs') bg-dark @endif <?= $key2 == 1 ? 'active' : '' ; ?>" id="Details-{{ $sec->id }}">
                    <div class="container">
                        <div class="row m-md-4">
                            <div class="col-md-12">

                                <!-- vissioni mission -->
                                @if('Vision & Mission' == $sec->title) 
                                @php 
                                    $visionmission_file_0 = dsld_page_meta_value_by_meta_key('visionmission_file_0', $page->id);
                                    $visionmission_text_2 = dsld_page_meta_value_by_meta_key('visionmission_text_2', $page->id);
                                @endphp
                
                                    <div class="tabcntnt1 m-md-4 mt-5">
                                        <h1 class="f36 gothambold o2o2o">Vision & Mission </h1>
                                        <div class="mt-4">
                                            <div class="row bannercntnt" style="background: url({{ dsld_uploaded_asset($visionmission_file_0) }}) 100% 0 no-repeat;">
                                                <div class="col-lg-6 mb-4">
                                                    <div class="cntnt">
                                                        <h2 class="f28 white gothambold">
                                                            Vision
                                                        </h2>
                                                        <p class="f18 white ">{{ $visionmission_text_2 }}</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="cntnt">
                                                        <h2 class="f28 white gothambold mb-4">
                                                            Mission
                                                        </h2>
                                                        <!-- ---- problem start  her ----- -->
                                                        @if(is_array(json_decode(dsld_page_meta_value_by_meta_key('visionmission_text_repeter_1', $page->id), true)) && count(json_decode(dsld_page_meta_value_by_meta_key('visionmission_text_repeter_1', $page->id), true)) > 0)

                                                        @foreach(json_decode(dsld_page_meta_value_by_meta_key('visionmission_text_repeter_1', $page->id), true) as $key3 => $value)
                                                    
                                                        <div class="misionscnts d-flex">
                                                            <div class="mspoint">
                                                                <p class="white gothambold f28">M{{ $key3 }}</p>
                                                            </div>
                                                            <p class="mscntnt f18 white  pl-4 ">
                                                            {{ $value }}
                                                            </p>
                                                        </div>
                                                        @endforeach

                                                        @endif
                                                        
                                                        <!-- ---- problem end  her ----- -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @php 
                                 $str = array('Mission Message Deen', 'Vision & Mission','USPs & Achievements', 'Value Added Programs', 'Programs', 'Faculty', 'Campus Life', 'Accreditations Approvals')
                                @endphp

                                <!-- Drean Message-->
                                @if(!in_array($sec->title, $str))
                                    <div class="aspachiv ">
                                        <div class="mt25rem">
                                            <h1 class="f36 gothambold o2o2o mt-4">{{ $sec->title }}</h1>
                                            @php 
                                            $slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '_', $sec->title));
                                            $cont = dsld_page_meta_value_by_meta_key(strtolower($slug).'_editor_0', $page->id);
                                            @endphp
                                            <?php echo htmlspecialchars_decode($cont); ?>
                                                    
                                        </div>
                                    </div>
                                @endif

                                <!-- Drean Message-->
                                @if('Mission Message Deen'== $sec->title) 
                                    <div class="aspachiv ">
                                        <div class="mt25rem" id="">
                                            <h1 class="f36 gothambold o2o2o mt-4">Message from the Dean</h1>
                                            <div class="row mt-5">
                                                <div class="col-lg-4 pe-lg-4 mb-4">
                                                    <div class="profilecard p-4">
                                                        <div class="imgboxdeen">
                                                            <img src="">
                                                        </div>

                                                        <h2 class="f28 white gothambold mt-3">Dr Munish Sabharwal</h2>

                                                        <div class="cntntclgdeen pr2rem">
                                                            <span>
                                                                <p class="white f20">
                                                                    PhD (CS) & PhD (Management)<br>
                                                                    LMIAENG, LMTAEI, LMCSI, LMAIMA, LMYHAI, MACM, SMIEEE, SMIACSIT,
                                                                    SMIRED, MASI, MAIS<br>
                                                                    Professor & Dean
                                                                </p>
                                                            </span>
                                                            <span class="mt-4">
                                                                <p class="white f20">
                                                                    <span class="gothammedium">School of Computing Science &
                                                                        Engineering (SCSE)</span><br>
                                                                    Galgotias University
                                                                </p>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 ps-lg-4 mb-4">
                                                    <p class="f18 a2a2a2">
                                                        The mission of School of Computing Science and Engineering (SCSE) is to try
                                                        obstinately for accomplishing distinction in computing disciplines. It is
                                                        being pursued through its gamut of academic programmes in computing of
                                                        contemporary standards. The main objective is to make computing graduates
                                                        with capability to design and develop systems involving the integration of
                                                        software and hardware devices through innovative approaches to programming
                                                        and solving problems of an organization.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                <!-- ups tab -->
                                @php
                                    $usps = json_decode(dsld_page_meta_value_by_meta_key('uspsachievements_text_repeter_0', $page->id), true);
                                @endphp

                                @if(!empty($needsection_multi_select_0))
                                @if('USPs & Achievements'== $sec->title) 
                                @if(is_array($usps) && count($usps) > 0)
                            
                                <div class="aspachiv ">
                                    <h1 class="f36 white gothambold mt45rem mb45rem">USPs & Achievements</h1>
                                    <div class="row">
                                    @foreach($usps as $key => $value)
                                        <div class="col-lg-4 col-md-6 mb-4 mb-md-5 px-md-4">
                                            <div class="cntntdf">
                                                <p class="f36 white gothammedium">{{ str_pad($key+1, 2, '0', STR_PAD_LEFT) }}</p>
                                                <p class="f23 white gothammedium">{{ $usps[$key] }}</p>
                                                <hr class="new5" />
                                            </div>
                                        </div>
                                    @endforeach
                                    </div>
                                </div>
                                        
                                @endif
                                @endif
                                @endif

                                @php
                                    $vprograms = json_decode(dsld_page_meta_value_by_meta_key('valueaddedprograms_image_box_repeter_0', $page->id), true);
                                    $vimage = json_decode(dsld_page_meta_value_by_meta_key($vprograms[4], $page->id), true);
                                @endphp
                                @if(!empty($needsection_multi_select_0))
                                @if('Value Added Programs'== $sec->title) 
                                @if(is_array($vprograms) && count($vprograms) > 0)
                                <!-- Value Added Programs -->
                        
                                    <h1 class="f36 white gothambold mt45rem mb45rem">Value Added Programs</h1>
                                    <div class="aspachiv owl-carousel owl-theme tabslider2">
                                        @foreach($vimage as $key => $value)
                                        @php 
                                        
                                        $vcontent = json_decode(dsld_page_meta_value_by_meta_key('valueaddedprograms_image_box_repeter_0_content', $page->id), true)[$key];
                                        $vimg = json_decode(dsld_page_meta_value_by_meta_key('valueaddedprograms_image_box_repeter_0_img', $page->id), true)[$key];
                                        $vbtn = json_decode(dsld_page_meta_value_by_meta_key('valueaddedprograms_image_box_repeter_0_btn', $page->id), true)[$key];
                                        $vlink = json_decode(dsld_page_meta_value_by_meta_key('valueaddedprograms_image_box_repeter_0_link', $page->id), true)[$key];

                                        @endphp
                                        
                                            <div class="cardforblog">
                                                <img class="cardimage" src="{{ dsld_uploaded_asset($vimg) }}">
                                                <p class="f24 white gothammedium mt-4">{{ $vcontent }}<p>
                                                <div class="readmoree ">
                                                    <a class="f18 gothammedium white"href="{{ $vlink }}">{{ $vbtn }} <i class="fa-solid fa-arrow-right white"></i></a>
                                                </div>
                                            </div>

                                        @endforeach
                                    </div>
                                @endif
                                @endif
                                @endif


                                <!-- profram tab -->
                                @if('Programs'== $sec->title) 
                                    <div class="ugp mb45rem">
                                        <h2 class="f30 colorred gothammedium">Under Graduate Programs</h2>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6  mt-4">
                                                <div class="cardprogram ">
                                                    <div class="cardcontent">
                                                    <p class="f23 gothammedium">
                                                        B.Tech CSE with specialization in Geographical Information Systems and Remote Sensing (GIS)
                                                    </p>
                                                    <div class="knowmore">
                                                        <a class="f18 gothammedium" href="">Know More <i class="fa-solid fa-arrow-right "></i></a>
                                                    </div>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>           
                                @endif


                                <!-- faculty -->
                                @if('Faculty'== $sec->title) 
                                    <div class="facltycntnt mb45rem">
                                        <div class="row">

                                            <div class="col-lg-4 col-md-6 mb45rem">
                                                <div class="facultycard">
                                                    <div class="facultyimg text-center pdt25rem">
                                                        <img src="./assets/images/facultyimg.png">
                                                    </div>
                                                    <div class="facultyname my-4">
                                                        <p class="f23 gothammedium">Faculty Name goes here</p>
                                                    </div>
                                                    <div class="facultyabt">
                                                        <p class="f18 gothamnarrow325">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>   
                                @endif


                                <!-- campus life -->
                                @php
                                    $vcampuslife = json_decode(dsld_page_meta_value_by_meta_key('campuslife_image_box_repeter_0', $page->id), true);
                                    $vimage = json_decode(dsld_page_meta_value_by_meta_key($vcampuslife[4], $page->id), true);
                                @endphp
                                @if(!empty($needsection_multi_select_0))
                                @if('Campus Life'== $sec->title) 
                                @if(is_array($vcampuslife) && count($vcampuslife) > 0)

                                    <div class="row pt80px">
                                        <h1 class="f36 gothambold mb-4">Campus life</h1>
                                        <div class="col-lg-7 col-md-6 mb-4">
                                            <div class="blogLeft">

                                                <div class="blgBoxImg"><img src="{{ dsld_uploaded_asset(json_decode(dsld_page_meta_value_by_meta_key('campuslife_image_box_repeter_0_img', $page->id), true)[0]) }}" class="img-fluid"> </div>

                                                <div class="blgBoxCnt">
                                                    <h4>{{ json_decode(dsld_page_meta_value_by_meta_key('campuslife_image_box_repeter_0_heading', $page->id), true)[0] }}</h4>
                                                    <p>{{ json_decode(dsld_page_meta_value_by_meta_key('campuslife_image_box_repeter_0_content', $page->id), true)[0] }}</p>
                                                    <a href="{{ json_decode(dsld_page_meta_value_by_meta_key('campuslife_image_box_repeter_0_link', $page->id), true)[0] }}" class="knowMore">know More <svg class="svg-inline--fa fa-chevron-right ms-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z"></path></svg><!-- <i class="fa-solid fa-chevron-right ms-2"></i> Font Awesome fontawesome.com --></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-6 mb-4">
                                            <div class="blogRight mb-4">

                                                <div class="blgBoxImg"><img src="{{ dsld_uploaded_asset(json_decode(dsld_page_meta_value_by_meta_key('campuslife_image_box_repeter_0_img', $page->id), true)[1]) }}" class="img-fluid"> </div>

                                                <div class="blgBoxCnt">
                                                    <h4>{{ json_decode(dsld_page_meta_value_by_meta_key('campuslife_image_box_repeter_0_heading', $page->id), true)[1] }}</h4>
                                                    <p>{{ json_decode(dsld_page_meta_value_by_meta_key('campuslife_image_box_repeter_0_content', $page->id), true)[1] }}</p>
                                                </div>
                                            </div>
                                            <div class="blogRight mb-0">
                                                <div class="blgBox">
                                                    <div class="blgBoxImg"><img src="{{ dsld_uploaded_asset(json_decode(dsld_page_meta_value_by_meta_key('campuslife_image_box_repeter_0_img', $page->id), true)[2]) }}" class="img-fluid"> </div>
                                                </div>
                                                <div class="blgBoxCnt">
                                                    <h4>{{ json_decode(dsld_page_meta_value_by_meta_key('campuslife_image_box_repeter_0_heading', $page->id), true)[2] }}</h4>
                                                    <p>{{ json_decode(dsld_page_meta_value_by_meta_key('campuslife_image_box_repeter_0_content', $page->id), true)[2] }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pb-5">


                                        
                                            @foreach($vimage as $key => $value)
                                            @if($key > 2)
                                            @php 
                                            
                                            $camcontent = json_decode(dsld_page_meta_value_by_meta_key('campuslife_image_box_repeter_0_content', $page->id), true)[$key];
                                            $camimg = json_decode(dsld_page_meta_value_by_meta_key('campuslife_image_box_repeter_0_img', $page->id), true)[$key];
                                            $camheading = json_decode(dsld_page_meta_value_by_meta_key('campuslife_image_box_repeter_0_heading', $page->id), true)[$key];

                                            @endphp
                                                <div class="col-lg-4 col-md-6 mb-4">
                                                    <div class="facilityRow p-0">
                                                        <div class="facilityImg mb-4"><img src="{{ dsld_uploaded_asset($camimg) }}" class="img-fluid"> </div>
                                                        <div class="facilityCnt">
                                                            <h4 class="mb-2">{{ $camheading }}</h4>
                                                            <p class="mb-0">{{ $camcontent }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                        @endif
                                        @endforeach

                                    </div>
                        
                                @endif
                                @endif
                                @endif

                                @if(!empty($needsection_multi_select_0))
                                    @if('Accreditations Approvals'== $sec->title) 
                                    
                                    <!-- campus life -->
                                    @php
                                        $accreditationsapprovals = json_decode(dsld_page_meta_value_by_meta_key('accreditationsapprovals_image_box_repeter_0', $page->id), true);
                                        $vimage = json_decode(dsld_page_meta_value_by_meta_key('accreditationsapprovals_image_box_repeter_0_img', $page->id), true);
                                    @endphp

                                    @if(is_array($accreditationsapprovals) && count($accreditationsapprovals) > 0)
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h1 class="f36 gothambold mt45rem mb45rem">Accreditations, Approvals and Ratings</h1>
                                        </div>
                                    </div>
                                    <div class="row">
                                        
                                        @foreach($vimage as $key => $value)
                                            
                                            @php 
                                            
                                            $acccontent = json_decode(dsld_page_meta_value_by_meta_key('accreditationsapprovals_image_box_repeter_0_content', $page->id), true)[$key];
                                            $accimg = json_decode(dsld_page_meta_value_by_meta_key('accreditationsapprovals_image_box_repeter_0_img', $page->id), true)[$key];
                                            $accheading = json_decode(dsld_page_meta_value_by_meta_key('accreditationsapprovals_image_box_repeter_0_heading', $page->id), true)[$key];

                                            @endphp

                                            <div class="col-lg-4 col-md-6 mb-4">
                                                <div class="facilityRow p-0">
                                                    <div class="facilityImg mb-4"><img src="{{ dsld_uploaded_asset($accimg) }}" class="img-fluid"> </div>
                                                    <div class="facilityCnt">
                                                        <h4 class="mb-2">{{ $accheading }}</h4>
                                                        <p class="mb-0">{{ $acccontent }}</p>
                                                    </div>
                                                </div>
                                            </div>

                                        
                                        @endforeach
                                        
                                    </div>
                        
                                    @endif

                                    @php
                                        $accreditationsapprovals1 = json_decode(dsld_page_meta_value_by_meta_key('accreditationsapprovals_image_box_repeter_1', $page->id), true);
                                        $vimage1 = json_decode(dsld_page_meta_value_by_meta_key('accreditationsapprovals_image_box_repeter_1_img', $page->id), true);
                                    @endphp
                                    @if(is_array($accreditationsapprovals1) && count($accreditationsapprovals1) > 0)

                                    <div class="row">
                                        <div class="col-md-12">
                                            <h1 class="f36 gothambold mt-4 ">Approvals</h1>
                                        </div>
                                    </div>
                                    <div class="row">
                                        
                                        @foreach($vimage1 as $key => $value)
                                            
                                            @php 
                                            
                                            $acclink = json_decode(dsld_page_meta_value_by_meta_key('accreditationsapprovals_image_box_repeter_1_link', $page->id), true)[$key];
                                            $accheading = json_decode(dsld_page_meta_value_by_meta_key('accreditationsapprovals_image_box_repeter_1_heading', $page->id), true)[$key];

                                            @endphp
                                            <div class="col-lg-3 col-md-6 mt-4">
                                                <div class="cardprograma ">
                                                    <div class="cardcontenta">
                                                        <p class="f23 gothammedium">{{ $accheading }}</p>
                                                        <div class="knowmore pt-3">
                                                            <a class="f18 gothammedium" href="{{ $acclink }}">VIEW DOC <i class="fa-solid fa-eye"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                    
                                        @endforeach

                                    </div>
                                    @endif
                                    @php
                                        $accreditationsapprovals2 = json_decode(dsld_page_meta_value_by_meta_key('accreditationsapprovals_image_box_repeter_2', $page->id), true);
                                        $vimage2 = json_decode(dsld_page_meta_value_by_meta_key('accreditationsapprovals_image_box_repeter_2_img', $page->id), true);
                                    @endphp
                                    @if(is_array($accreditationsapprovals2) && count($accreditationsapprovals2) > 0)
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h1 class="f36 gothambold mt-5 ">Ratings</h1>

                                        </div>
                                    </div>
                                    <div class="row">


                                        
                                        @foreach($vimage2 as $key => $value)
                                            
                                            @php 
                                            
                                            $accimg = json_decode(dsld_page_meta_value_by_meta_key('accreditationsapprovals_image_box_repeter_2_img', $page->id), true)[$key];
                                            $accheading = json_decode(dsld_page_meta_value_by_meta_key('accreditationsapprovals_image_box_repeter_2_heading', $page->id), true)[$key];

                                            @endphp
                                            <div class="col-lg-3 col-md-6">
                                                <div class="facilityImg mb-4">
                                                    <img src="{{ dsld_uploaded_asset($accimg) }}" class="img-fluid pt-3">
                                                    <h2 class="f23 gothammedium py-4">{{ $accheading }}</h2>
                                                </div>
                                            </div>                    
                                        @endforeach
                                    </div>
                                    @endif
                    
                                @endif
                                @endif
                                    
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            @endif
        @endforeach
    
    </div>
</section>
@endsection