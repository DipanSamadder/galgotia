@extends('frontend.layouts.app')
@include('frontend.partials.page_meta')

@section('content')

@include('frontend.partials.slider-banner-section')
<section class="one-edge-shadow ">
    <div class="bannerdeen" style="background: url({{ dsld_static_asset('frontend/assets/images/deenbg.png') }}) 100% 0 no-repeat;">
        <div class="headingdeen m-auto pt10px">
            <h1 class="f48 white  text-center m-auto">Research</h1>
        </div>
        <div class="d-flex mt-4">
            <div class="linee" style="margin-left: 2rem;"></div>
            <p class="white w-50 text-center m-auto f24 gothammedium">Research Statics</p>
            <div class="linee " style="margin-right: 2rem;"></div>
        </div>

        <div class="container">
            <div class=" d-flex align-items-center py-4 flexWrap">
                <div class="tpCntrBox"> 
                    <h4 class="mb-0 white"> <span class="counter">20</span>k+ </h4>
                    <p class="mb-0 white">Brilliant Students</p>
                </div>
                <div class="tpCntrBox">   
                    <h4 class="mb-0 white"> <span class="counter">52</span> </h4>
                    <p class="mb-0 white">Acre Campus</p>
                </div>
                <div class="tpCntrBox"> 
                    <h4 class="mb-0 white"> <span class="counter">20</span>+ </h4>
                    <p class="mb-0 white">Years of Legacy</p>
                </div>
                <div class="tpCntrBox">
                    <h4 class="mb-0 white"> <span class="counter">250</span>+ </h4>
                    <p class="mb-0 white">Awards</p>
                </div>
                <div class="tpCntrBox"> 
                    <h4 class="mb-0 white"> <span class="counter">200</span>+ </h4>
                    <p class="mb-0 white">Recruiters onboard</p>
                </div>

            </div>
        </div>
    </div>
    <div class="bgShadow">
        <div class="container">
            <!-- Nav tabs -->
            <ul class="owl-carousel owl-theme tabslider3 nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link f22 gothammedium active " data-bs-toggle="pill" href="#r-d">Research & Development Office/Cell</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link f22 gothammedium" data-bs-toggle="pill" href="#ref">Research Funding</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link f22 gothammedium" data-bs-toggle="pill" href="#pam">Policies and Mandates</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link f22 gothammedium" data-bs-toggle="pill" href="#rac">Research Advisory Committee</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link f22 gothammedium" data-bs-toggle="pill" href="#publi">Publications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link f22 gothammedium" data-bs-toggle="pill" href="#patent">Patents </a>
                </li>
                <li class="nav-item"> 
                    <a class="nav-link f22 gothammedium" data-bs-toggle="pill" href="#phdsch">Ph.D. Scholars </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link f22 gothammedium" data-bs-toggle="pill" href="#centroexcincu">Centres of Excellence Incubator</a>
                </li>



            </ul>


        </div>
    </div>
</section>

<section>
    <div class="tab-content">
        <div class="tab-pane active" id="r-d">
            <div class="container ">
                <div class="row mt-5 pt-5">
                    <div class="col-md-12 mb-5">
                        <h1 class="f30 gothambold">Research & Development Office/Cell</h1>
                    </div>
                </div>
                <div class="row bgmissionvission">
                    <div class="col-lg-5 col-md-8">
                        <div class="quotee">
                            <p class="f29 gothamnarrow325 white" Style="  font-style: italic;">
                                "The mission of Research and developments is to try obstinately for accomplishing distinction in
                                computing disciplines. It is being pursued through its gamut of academic programmes in computing
                                of contemporary standards.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-7"></div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-7  my-4">
                        <p class="f18 gothamnarrow325 my-5 ">
                            The Galgotias University achieved the Highest Benchmark towards Academic Excellence NAAC A+
                            Accreditation in First Cycle. This makes Galgotias the Only Private University in Uttar Pradesh with
                            the Highest NAAC Score of 3.37 out of 4 Awarded by NAAC & the Highest Graded Autonomous Institute of
                            the UGC, Ministry of Education, Govt. of India. <br><br>The Galgotias University, Uttar Pradesh,
                            sponsored by Smt. Shakuntala Educational and Welfare Society, has been established by state of Uttar
                            Pradesh under section 2(f) of the UGC Act, 1956 vide The Galgotias University Uttar Pradesh Act, 14
                            of 2011. The University commenced its operation from the academic session 2011-12.<br><br> Galgotias
                            University opened its door to the first batch in July of 2011 and in year 2022-2023, the university
                            has grown to more than 15000 students. Galgotias University aspires to be and is on a fast-track to
                            become an internationally recognized university that excels in multidisciplinary and
                            interdisciplinary education, research and innovation, educating globally competitive graduates with
                            potential to become leaders in their fields of endeavour. The graduates will have deep knowledge
                            within their fields but will also excel in problem solving skills, will be aware of the societal
                            context of their chosen profession, will function effectively in teams, will have good
                            communications skills and above all, be life-long learners.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-5 my-5">
                        <div class="imp-links p-4 my-md-5 mb-5">
                            <h2 class="f22 gothammedium my-2">IMPORTANT LINKS</h2>
                            <a href="#" class="f22 gothammedium text-decoration-none o2o2o my-2 d-flex"><span><i
                            class="fa-solid fa-angle-right colorred"></i></span><span class="ms-3">Testimonials</span></a>
                            <a href="#" class="f22 gothammedium text-decoration-none o2o2o my-2 d-flex"><span><i
                                class="fa-solid fa-angle-right colorred"></i></span><span class="ms-3">What's Happening</span></a>
                            <a href="#" class="f22 gothammedium text-decoration-none o2o2o my-2 d-flex"><span><i
                                class="fa-solid fa-angle-right colorred"></i></span><span class="ms-3">Contact Us</span></a>
                            <a href="#" class="f22 gothammedium text-decoration-none o2o2o my-2 d-flex lastaa"><span><i
                                class="fa-solid fa-angle-right colorred"></i></span><span class="ms-3">Image Gallery</span></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h1 class="f30 gothambold mb-4">Research Funding</h1>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="facilityRow p-0">
                            <div class="facilityImg mb-4"><img src="{{ dsld_static_asset('frontend/assets/images/jklosaa.png') }}" class="img-fluid"> </div>
                            <div class="facilityCnt">
                                <h4 class="mb-2 f24">Seed Grant Money Policy</h4>
                                <p class="mb-0">Here is a glimpse of the innovation and creativity done by the students of
                                Galgotias</p>
                                <div class="readmoree mt-3">
                                    <a class="f18 gothammedium colorred" href="#">Read More <i
                                        class="fa-solid fa-arrow-right colorred"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="facilityRow p-0">
                            <div class="facilityImg mb-4">
                                <img src="{{ dsld_static_asset('frontend/assets/images/jklosaa.png') }}" class="img-fluid">
                            </div>
                            <div class="facilityCnt">
                                <h4 class="mb-2 f24">Seed Funding 2020-21</h4>
                                <p class="mb-0">Here is a glimpse of the innovation and creativity done by the students of
                                Galgotias</p>
                                <div class="readmoree mt-3">
                                    <a class="f18 gothammedium colorred" href="#">Read More <i
                                        class="fa-solid fa-arrow-right colorred"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="facilityRow p-0">
                            <div class="facilityImg mb-4"><img src="{{ dsld_static_asset('frontend/assets/images/jklosaa.png') }}" class="img-fluid"> </div>
                            <div class="facilityCnt">
                                <h4 class="mb-2 f24">Industry Collaborations</h4>
                                <p class="mb-0">Here is a glimpse of the innovation and creativity done by the students of
                                Galgotias</p>
                                <div class="readmoree mt-3">
                                    <a class="f18 gothammedium colorred" href="#">Read More <i
                                        class="fa-solid fa-arrow-right colorred"></i></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="row">
                    <h2 class="f30 gothambold mt-5">Policies and Mandates</h2>
                    <div class="col-md-6 ">
                        <div class="policmanimg mt-4">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="imp-links p-md-4 py-5" style="background: transparent;">

                            <a href="#" class="f22 gothammedium text-decoration-none o2o2o my-2 d-flex"><span><i class="fa-solid fa-angle-right colorred"></i></span><span class="ms-3">Research Policy</span></a>
                            <a href="#" class="f22 gothammedium text-decoration-none o2o2o my-2 d-flex"><span><i class="fa-solid fa-angle-right colorred"></i></span><span class="ms-3">Ethical Policy </span></a>
                            <a href="#" class="f22 gothammedium text-decoration-none o2o2o my-2 d-flex"><span><i class="fa-solid fa-angle-right colorred"></i></span><span class="ms-3">Research Mandate</span></a>
                            <a href="#" class="f22 gothammedium text-decoration-none o2o2o my-2 d-flex"><span><i class="fa-solid fa-angle-right colorred"></i></span><span class="ms-3">Research Guidelines Policy</span></a>
                            <a href="#" class="f22 gothammedium text-decoration-none o2o2o my-2 d-flex"><span><i class="fa-solid fa-angle-right colorred"></i></span><span class="ms-3">Innovations Policy</span></a>
                            <a href="#" class="f22 gothammedium text-decoration-none o2o2o my-2 d-flex"><span><i class="fa-solid fa-angle-right colorred"></i></span><span class="ms-3">Consultancy Project Policy</span>
                            </a>
                            <a href="#" class="f22 gothammedium text-decoration-none o2o2o my-2 d-flex"><span><i class="fa-solid fa-angle-right colorred"></i></span><span class="ms-3">Module #3 – Mandate #2 - Creativity, Innovation & Entrepreneurship</span></a>
                            <a href="#" class="f22 gothammedium text-decoration-none o2o2o my-2 d-flex"><span><i class="fa-solid fa-angle-right colorred"></i></span><span class="ms-3">Plagiarism Policy</span></a>
                            <a href="#" class="f22 gothammedium text-decoration-none o2o2o my-2 d-flex"><span><i class="fa-solid fa-angle-right colorred"></i></span><span class="ms-3">Seed Grant Money Policy</span></a>
                            <a href="#" class="f22 gothammedium text-decoration-none o2o2o my-2 d-flex"><span><i class="fa-solid fa-angle-right colorred"></i></span><span class="ms-3">Module #2 – Mandate #2 - Research & Innovation - Ph.D</span></a>
                            <a href="#" class="f22 gothammedium text-decoration-none o2o2o my-2 d-flex lastaa"><span><i
                                class="fa-solid fa-angle-right colorred"></i></span><span class="ms-3">IPR Policy</span></a>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="bg-dark">
                <div class="container ">
                    <h2 class="white f30 gothambold pt-5">Research Advisory Committee</h2>
                    <div class="row pb-5 pb-1 owl-carousel owl-theme researchadvm">

                        <div class="">
                            <div class="facultycard my-5">
                                <div class="facultyimg2 text-center pdt25rem">
                                    <img src="{{ dsld_static_asset('frontend/assets/images/jkloiuos.png') }}">
                                </div>
                                <div class="facultyname my-3">
                                    <p class="f22 gothammedium white">Name goes here</p>
                                </div>
                                <div class="facultyabt">
                                    <p class="f16 gothamnarrow325 white"><span class="vc">Vice Chancellor<span><br><span
                                        class="clgnme"> Galgotias University, Uttar Pradesh.</span></p>
                                </div>
                            </div>
                            <div class="facultyimg2 text-center pdt25rem">
                                <img src="{{ dsld_static_asset('frontend/assets/images/jkloiuos.png') }}">
                            </div>
                            <div class="facultyname my-3">
                                <p class="f22 gothammedium white">Name goes here</p>
                            </div>
                            <div class="facultyabt">
                                <p class="f16 gothamnarrow325 white"><span class="vc">Vice Chancellor<span><br><span
                                    class="clgnme"> Galgotias University, Uttar Pradesh.</span></p>
                            </div>
                        </div>
                        <div class="">
                            <div class="facultycard my-5">
                                <div class="facultyimg2 text-center pdt25rem">
                                    <img src="{{ dsld_static_asset('frontend/assets/images/jkloiuos.png') }}">
                                </div>
                                <div class="facultyname my-3">
                                    <p class="f22 gothammedium white">Name goes here</p>
                                </div>
                                <div class="facultyabt">
                                    <p class="f16 gothamnarrow325 white"><span class="vc">Vice Chancellor<span><br><span
                                        class="clgnme"> Galgotias University, Uttar Pradesh.</span></p>
                                </div>
                            </div>
                            <div class="facultyimg2 text-center pdt25rem">
                                <img src="{{ dsld_static_asset('frontend/assets/images/jkloiuos.png') }}">
                            </div>
                            <div class="facultyname my-3">
                                <p class="f22 gothammedium white">Name goes here</p>
                            </div>
                            <div class="facultyabt">
                                <p class="f16 gothamnarrow325 white"><span class="vc">Vice Chancellor<span><br><span class="clgnme"> Galgotias University, Uttar Pradesh.</span></p>
                            </div>
                        </div>
                        <div class="">
                            <div class="facultycard my-5">
                                <div class="facultyimg2 text-center pdt25rem">
                                    <img src="{{ dsld_static_asset('frontend/assets/images/jkloiuos.png') }}">
                                </div>
                                <div class="facultyname my-3">
                                    <p class="f22 gothammedium white">Name goes here</p>
                                </div>
                                <div class="facultyabt">
                                    <p class="f16 gothamnarrow325 white"><span class="vc">Vice Chancellor<span><br><span class="clgnme"> Galgotias University, Uttar Pradesh.</span></p>
                                </div>
                            </div>
                            <div class="facultyimg2 text-center pdt25rem">
                                <img src="{{ dsld_static_asset('frontend/assets/images/jkloiuos.png') }}">
                            </div>
                            <div class="facultyname my-3">
                                <p class="f22 gothammedium white">Name goes here</p>
                            </div>
                            <div class="facultyabt">
                                <p class="f16 gothamnarrow325 white"><span class="vc">Vice Chancellor<span><br><span class="clgnme"> Galgotias University, Uttar Pradesh.</span></p>
                            </div>
                        </div>
                        <div class="">
                            <div class="facultycard my-5">
                                <div class="facultyimg2 text-center pdt25rem">
                                    <img src="{{ dsld_static_asset('frontend/assets/images/jkloiuos.png') }}">
                                </div>
                                <div class="facultyname my-3">
                                    <p class="f22 gothammedium white">Name goes here</p>
                                </div>
                                <div class="facultyabt">
                                    <p class="f16 gothamnarrow325 white"><span class="vc">Vice Chancellor<span><br><span class="clgnme"> Galgotias University, Uttar Pradesh.</span></p>
                                </div>
                            </div>
                            <div class="facultyimg2 text-center pdt25rem">
                                <img src="{{ dsld_static_asset('frontend/assets/images/jkloiuos.png') }}">
                            </div>
                            <div class="facultyname my-3">
                                <p class="f22 gothammedium white">Name goes here</p>
                            </div>
                            <div class="facultyabt">
                                <p class="f16 gothamnarrow325 white"><span class="vc">Vice Chancellor<span><br><span
                            class="clgnme"> Galgotias University, Uttar Pradesh.</span></p>
                            </div>
                        </div>
                        <div class="">
                            <div class="facultycard my-5">
                                <div class="facultyimg2 text-center pdt25rem">
                                    <img src="{{ dsld_static_asset('frontend/assets/images/jkloiuos.png') }}">
                                </div>
                                <div class="facultyname my-3">
                                    <p class="f22 gothammedium white">Name goes here</p>
                                </div>
                                <div class="facultyabt">
                                    <p class="f16 gothamnarrow325 white"><span class="vc">Vice Chancellor<span><br><span class="clgnme"> Galgotias University, Uttar Pradesh.</span></p>
                                </div>
                            </div>
                            <div class="facultyimg2 text-center pdt25rem">
                                <img src="{{ dsld_static_asset('frontend/assets/images/jkloiuos.png') }}">
                            </div>
                            <div class="facultyname my-3">
                                <p class="f22 gothammedium white">Name goes here</p>
                            </div>
                            <div class="facultyabt">
                                <p class="f16 gothamnarrow325 white"><span class="vc">Vice Chancellor<span><br><span class="clgnme"> Galgotias University, Uttar Pradesh.</span></p>
                                </div>
                            </div>
                            <div class="">
                                <div class="facultycard my-5">
                                    <div class="facultyimg2 text-center pdt25rem">
                                        <img src="{{ dsld_static_asset('frontend/assets/images/jkloiuos.png') }}">
                                    </div>
                                    <div class="facultyname my-3">
                                        <p class="f22 gothammedium white">Name goes here</p>
                                    </div>
                                    <div class="facultyabt">
                                        <p class="f16 gothamnarrow325 white"><span class="vc">Vice Chancellor<span><br><span class="clgnme"> Galgotias University, Uttar Pradesh.</span></p>
                                    </div>
                                </div>
                                <div class="facultyimg2 text-center pdt25rem">
                                    <img src="{{ dsld_static_asset('frontend/assets/images/jkloiuos.png') }}">
                                </div>
                                <div class="facultyname my-3">
                                    <p class="f22 gothammedium white">Name goes here</p>
                                </div>
                                <div class="facultyabt">
                                    <p class="f16 gothamnarrow325 white"><span class="vc">Vice Chancellor<span><br><span
                                        class="clgnme"> Galgotias University, Uttar Pradesh.</span></p>
                                </div>
                            </div>
                            <div class="">
                                <div class="facultycard my-5">
                                    <div class="facultyimg2 text-center pdt25rem">
                                        <img src="{{ dsld_static_asset('frontend/assets/images/jkloiuos.png') }}">
                                    </div>
                                    <div class="facultyname my-3">
                                        <p class="f22 gothammedium white">Name goes here</p>
                                    </div>
                                    <div class="facultyabt">
                                        <p class="f16 gothamnarrow325 white"><span class="vc">Vice Chancellor<span><br><span class="clgnme"> Galgotias University, Uttar Pradesh.</span></p>
                                    </div>
                                </div>
                                <div class="facultyimg2 text-center pdt25rem">
                                    <img src="{{ dsld_static_asset('frontend/assets/images/jkloiuos.png') }}">
                                </div>
                                <div class="facultyname my-3">
                                    <p class="f22 gothammedium white">Name goes here</p>
                                </div>
                                <div class="facultyabt">
                                    <p class="f16 gothamnarrow325 white"><span class="vc">Vice Chancellor<span><br><span
                                        class="clgnme"> Galgotias University, Uttar Pradesh.</span></p>
                                </div>
                            </div>
                            <div class="">
                                <div class="facultycard my-5">
                                    <div class="facultyimg2 text-center pdt25rem">
                                        <img src="{{ dsld_static_asset('frontend/assets/images/jkloiuos.png') }}">
                                    </div>
                                    <div class="facultyname my-3">
                                        <p class="f22 gothammedium white">Name goes here</p>
                                    </div>
                                    <div class="facultyabt">
                                        <p class="f16 gothamnarrow325 white"><span class="vc">Vice Chancellor<span><br><span class="clgnme"> Galgotias University, Uttar Pradesh.</span></p>
                                    </div>
                                </div>
                                <div class="facultyimg2 text-center pdt25rem">
                                    <img src="{{ dsld_static_asset('frontend/assets/images/jkloiuos.png') }}">
                                </div>
                                <div class="facultyname my-3">
                                    <p class="f22 gothammedium white">Name goes here</p>
                                </div>
                                <div class="facultyabt">
                                    <p class="f16 gothamnarrow325 white"><span class="vc">Vice Chancellor<span><br><span
                                        class="clgnme"> Galgotias University, Uttar Pradesh.</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="container">
                <div class="row my-5">
                    <h1 class="f30 gothambold mb-4">Publications</h1>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="facilityRow p-0">
                            <div class="facilityImg mb-4"><img src="{{ dsld_static_asset('frontend/assets/images/2020_12$largeimg_203524215.png') }}" class="img-fluid"> </div>
                            <div class="facilityCnt">
                                <h4 class="mb-2 f24">GU Publications</h4>
                                <p class="mb-0">Here is a glimpse of the innovation and creativity done by the students of
                                Galgotias</p>
                                <div class="readmoree mt-3">
                                    <a class="f18 gothammedium colorred" href="#">Read More <i
                                        class="fa-solid fa-arrow-right colorred"></i></a>

                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="facilityRow p-0">
                            <div class="facilityImg mb-4"><img src="{{ dsld_static_asset('frontend/assets/images/2020_12$largeimg_203524215.png') }}" class="img-fluid"> </div>
                            <div class="facilityCnt">
                                <h4 class="mb-2 f24">Scopus</h4>
                                <p class="mb-0">Here is a glimpse of the innovation and creativity done by the students of
                                Galgotias</p>
                                <div class="readmoree mt-3">
                                    <a class="f18 gothammedium colorred" href="#">Read More <i
                                        class="fa-solid fa-arrow-right colorred"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="facilityRow p-0">
                            <div class="facilityImg mb-4"><img src="{{ dsld_static_asset('frontend/assets/images/2020_12$largeimg_203524215.png') }}" class="img-fluid"> </div>
                            <div class="facilityCnt">
                                <h4 class="mb-2 f24">WoS</h4>
                                <p class="mb-0">Here is a glimpse of the innovation and creativity done by the students of
                                Galgotias</p>
                                <div class="readmoree mt-3">
                                    <a class="f18 gothammedium colorred" href="#">Read More <i
                                        class="fa-solid fa-arrow-right colorred"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            <div class="bgimgfored">
                <img src="{{ dsld_static_asset('frontend/assets/images/jhiunsdfsa.png') }}" class="w-100">
            </div>
            <div class="container bg-grey fromrd">
                <div class="row mt-5 mb-0">
                    <h1 class="f30 gothambold mb-4">Patents</h1>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="facilityRow p-0">
                            <div class="facilityImg mb-4"><img src="{{ dsld_static_asset('frontend/assets/images/Swimmer-1200x675.png') }}" class="img-fluid"> </div>
                            <div class="facilityCnt">
                                <h4 class="mb-2 f24">GU Patents</h4>
                                <p class="mb-0">Here is a glimpse of the innovation and creativity done by the students of
                                Galgotias</p>
                                <div class="readmoree mt-3">
                                    <a class="f18 gothammedium colorred" href="#">Know More <i
                                        class="fa-solid fa-arrow-right colorred"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="facilityRow p-0">
                            <div class="facilityImg mb-4"><img src="{{ dsld_static_asset('frontend/assets/images/Swimmer-1200x675.png') }}" class="img-fluid"> </div>
                            <div class="facilityCnt">
                                <h4 class="mb-2 f24">Designs Patents</h4>
                                <p class="mb-0">Here is a glimpse of the innovation and creativity done by the students of
                                Galgotias</p>
                                <div class="readmoree mt-3">
                                    <a class="f18 gothammedium colorred" href="#">Know More <i
                                        class="fa-solid fa-arrow-right colorred"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="facilityRow p-0">
                            <div class="facilityImg mb-4"><img src="{{ dsld_static_asset('frontend/assets/images/Swimmer-1200x675.png') }}" class="img-fluid"> </div>
                            <div class="facilityCnt">
                                <h4 class="mb-2 f24">Other Patents</h4>
                                <p class="mb-0">Here is a glimpse of the innovation and creativity done by the students of
                                Galgotias</p>
                                <div class="readmoree mt-3">
                                    <a class="f18 gothammedium colorred" href="#">Know More <i
                                        class="fa-solid fa-arrow-right colorred"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container  pb-5">
                <div class="row my-5 py-5">
                    <div class="col-md-6">
                        <h2 class="f30 gothambold">Centres of Excellence</h2>
                        <p class="f18 gothamnarrow325">The Galgotias University achieved the Highest Benchmark towards Academic Excellence NAAC A+ Accreditation in First Cycle. This makes Galgotias the Only Private University in Uttar Pradesh with the Highest NAAC Score of 3.37 out of 4 Awarded by NAAC & the Highest Graded Autonomous Institute of the UGC, Ministry of Education, Govt. of India.</p>
                        <div class="imp-links mt-4 " style="background: transparent;">

                            <a href="#" class="f22 gothammedium text-decoration-none o2o2o my-2 d-flex"><span><i
                                class="fa-solid fa-angle-right colorred"></i></span><span class="ms-2">Centre of Excellence - Physiotherapy</span></a>
                            <a href="#" class="f22 gothammedium text-decoration-none o2o2o my-2 d-flex"><span><i
                                    class="fa-solid fa-angle-right colorred"></i></span><span class="ms-2"> Centre of Excellence - Pharmacy</span></a>
                            <a href="#" class="f22 gothammedium text-decoration-none o2o2o my-2 d-flex"><span><i
                                        class="fa-solid fa-angle-right colorred"></i></span><span class="ms-2">Centre of Excellence - Optometry</span></a>
                            <a href="#" class="f22 gothammedium text-decoration-none o2o2o my-2 d-flex"><span><i
                                            class="fa-solid fa-angle-right colorred"></i></span><span class="ms-2">Centre of Excellence - Power Engineering and clean Energy integration </span></a>
                            <a href="#" class="f22 gothammedium text-decoration-none o2o2o my-2 d-flex lastaa"><span><i class="fa-solid fa-angle-right colorred"></i></span><span class="ms-2">Centre of Excellence - Artificial Intelligence & Machine Learning</span></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ dsld_static_asset('frontend/assets/images/Swimmer-1200x675.png') }}" class="w-100">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection