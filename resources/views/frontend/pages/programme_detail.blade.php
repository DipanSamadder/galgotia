@extends('frontend.layouts.app')
@include('frontend.partials.page_meta')

@section('content')

@include('frontend.partials.slider-banner-section')
<section class="bgpdeta mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 p-5 mt-5 mb-5">
                <h1 class="f48 white gothambold p-5">B.Tech in Artificial Intelligence and Data Science</h1>
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
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8 my-5">
                <h2 class="f36 gothambold">B.Tech in Artificial Intelligence and Data Science</h2>
                <a class="text-decoration-none colorred f24 gothambold"><i class="fa-regular fa-share-from-square"></i>&nbsp;&nbsp; Galgotias school of computer science</a>
            </div>
        </div>
        <div class="d-flex pca">
            <div class="pcaBox"> 
                <p class="mb-0">Programme Code</p>
                <strong>ABV0121M</strong>
            </div>
            <div class="pcaBox"> 
                <p class="mb-0">Programme Level</p>
                <strong>Under Graduate</strong>
            </div>
            <div class="pcaBox"> 
                <p class="mb-0">Duration</p>
                <strong>4 Years</strong>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="bgShadow bg-dardsk">
        <div class="container">
            <!-- Nav tabs -->
            <ul class="owl-carousel owl-theme tabslider5 nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link f22 gothammedium active white " data-bs-toggle="pill" href="#abtcor">About the Course</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link f22 gothammedium white" data-bs-toggle="pill" href="#visionmission"> Admission Details </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link f22 gothammedium white" data-bs-toggle="pill" href="#upsachiv">Fee Structure & Eligibility</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link f22 gothammedium white" data-bs-toggle="pill" href="#programs">Core Modules & Scheme</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link f22 gothammedium white" data-bs-toggle="pill" href="#set">Programme Objectives </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link f22 gothammedium white" data-bs-toggle="pill" href="#faculty">Programme Specific Outcomes (PSOs)</a>
                </li>
                <li class="nav-item"> 
                    <a class="nav-link f22 gothammedium white" data-bs-toggle="pill" href="#campuslife">Financial Assistance and Education Loans FAQs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link f22 gothammedium white" data-bs-toggle="pill" href="#acred">Career Prospects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link f22 gothammedium white" data-bs-toggle="pill" href="#set">Apply Now</a>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="Aboutcourse">
    <div class="tab-content">
        <div class="tab-pane active" id="abtcor">
            <div class="container">
                <div class="row my-4">
                    <div class="col-lg-8 my-4">
                    <h2 class="gothambold f30 my-2 pt-5 pb-2">About the programme</h2>
                    <p class="f18 gothamnarrow325">B.Tech. in Artificial Intelligence and Data Science is a bachelor’s
                        program offered at School of Computing Science and Engineering having a comprehensive coverage of
                        core fundamentals of computer engineering along with coverage of applied mathematics used in data
                        science and artificial intelligence while preparing the students to analyse, design and experiment
                        solutions to problems. Intelligent machines are influenced by emerging technologies, smart devices,
                        sensors, computing power, faster data processing, huge storage and human-machine interaction
                        capabilities. Building human-level thought processes through the creation of artificial intelligence
                        (AI) is the state-of-the-art in Computer Science. Data Science is an interdisciplinary field with
                        the ability to extract knowledge/insights from data - be it structured, unstructured, or
                        semi-structured data. Twinned with Artificial Intelligence, more efficient solutions to find
                        meaningful information from huge pools of data are possible today, with data from multiple sources -
                        sensors, images, streaming video, satellite, medical imagery and the cloud. The curriculum targets
                        technical and design skills, AI knowledge, and competencies needed to master strategic analytical
                        methods and tools, and data management, with the objective of creating innovative strategies to
                    solve challenging real-world problems.</p>
                    <h2 class="gothambold f30 my-2 pt-5 pb-2">Admission Details</h2>
                    <p class="f18 gothamnarrow325">B.Tech. in Artificial Intelligence and Data Science is a bachelor’s
                        program offered at School of Computing Science and Engineering having a comprehensive coverage of
                        core fundamentals of computer engineering along with coverage of applied mathematics used in data
                        science and artificial intelligence while preparing the students to analyse, design and experiment
                        solutions to problems. Intelligent machines are influenced by emerging technologies, smart devices,
                        sensors, computing power, faster data processing, huge storage and human-machine interaction
                        capabilities. Building human-level thought processes through the creation of artificial intelligence
                        (AI) is the state-of-the-art in Computer Science. Data Science is an interdisciplinary field with
                        the ability to extract knowledge/insights from data - be it structured, unstructured, or
                        semi-structured data. Twinned with Artificial Intelligence, more efficient solutions to find
                        meaningful information from huge pools of data are possible today, with data from multiple sources -
                        sensors, images, streaming video, satellite, medical imagery and the cloud. The curriculum targets
                        technical and design skills, AI knowledge, and competencies needed to master strategic analytical
                        methods and tools, and data management, with the objective of creating innovative strategies to
                    solve challenging real-world problems.</p>
                    <h2 class="gothambold f30 my-2 pt-5 pb-2">Eligibility</h2>
                    <p class="f18 gothamnarrow325">
                        Require minimum 60% marks in Physics / Chemistry / Mathematics / Biology / Computer Science /
                        Electronics / Information Technology / Information Practices / Biotechnology / Agriculture /
                        Engineering Graphics / Business Studies / Entrepreneurship (Any of Three Subjects) in Class XIIth
                    </p>
                    <p class="f18 gothamnarrow325">
                        <span class="gothambold">For Lateral Entry:1.</span> Passed Diploma examination with at least 50%
                        marks in any branch of Engineering and Technology.<br> 2. Passed B.Sc. Degree from a recognized
                        University with at least 50% marks and passed 10+2 examination with Mathematics as a subject.<br> 3.
                        Passed D. Voc. Stream in the same or allied sector.
                    </p>
                    <p class="f18 gothamnarrow325">
                        <span class="gothambold">For Migration from Other Universities:.</span> <br>1) B.E./B.Tech Ist year
                        minimum 60% marks or 6.0 CGPA on a 10 point scale<br> 2) 65% PCM or above at XII level.
                    </p>
                    <div class="feestruc bg-ligry my-4 w-50 p-4">
                        <h2 class="gothambold f30 my-2 pt-4 pb-3 ">Fee Structure</h2>
                        <div class="one1 d-flex gothamnarrow325 my-3 ">
                            <div class="w-50 f24">Duration </div>
                            <div class="w-50 text-center f24">4 years</div>
                        </div>
                        <div class="one1 d-flex gothamnarrow325 my-3 ">
                            <div class="w-50 f24">Duration </div>
                            <div class="w-50 text-center f24">4 years</div>
                        </div>
                        <div class="one1 d-flex gothamnarrow325 my-3 lastaa">
                            <div class="w-50 f24">Duration </div>
                            <div class="w-50 text-center f24">4 years</div>
                        </div>

                    </div>
                    <h2 class="gothambold f30 my-2 pt-5 pb-2">Core Modules & Scheme</h2>
                    <p class="f18 gothamnarrow325">
                        Require minimum 60% marks in Physics / Chemistry / Mathematics / Biology / Computer Science / Electronics / Information Technology / Information Practices / Biotechnology / Agriculture / Engineering Graphics / Business Studies / Entrepreneurship (Any of Three Subjects) in Class XIIth
                    </p>
                    <p class="f18 gothamnarrow325">
                        <span class="gothambold">For Lateral Entry:1.</span> Passed Diploma examination with at least 50% marks in any branch of Engineering and Technology.<br> 2. Passed B.Sc. Degree from a recognized University with at least 50% marks and passed 10+2 examination with Mathematics as a subject.<br> 3. Passed D. Voc. Stream in the same or allied sector.
                    </p>
                    <p class="f18 gothamnarrow325 mb-4">
                        <span class="gothambold">For Migration from Other Universities:.</span> <br>1) B.E./B.Tech Ist year minimum 60% marks or 6.0 CGPA on a 10 point scale<br> 2) 65% PCM or above at XII level.
                    </p>
                    <button class="explore">Core Module</button>
                    <div class="aspachiv ">
                        <h1 class="f30  gothambold mt45rem mb45rem">Programme Objectives</h1>
                        <div class="row">
                            <div class="col-md-4 mb-4 mb-md-5 px-md-4">
                                <div class="cntntdf">
                                    <p class="f36  gothammedium">01</p>
                                    <p class="f23  gothammedium">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud e</p>
                                    <hr class="new5" />
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 mb-md-5 px-md-4">
                                <div class="cntntdf">
                                    <p class="f36  gothammedium">01</p>
                                    <p class="f23  gothammedium">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud e</p>
                                    <hr class="new5" />
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 mb-md-5 px-md-4">
                                <div class="cntntdf">
                                    <p class="f36  gothammedium">01</p>
                                    <p class="f23  gothammedium">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud e</p>
                                    <hr class="new5" />
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 mb-md-5 px-md-4">
                                <div class="cntntdf">
                                    <p class="f36  gothammedium">01</p>
                                    <p class="f23  gothammedium">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud e</p>
                                    <hr class="new5" />
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 mb-md-5 px-md-4">
                                <div class="cntntdf">
                                    <p class="f36  gothammedium">01</p>
                                    <p class="f23  gothammedium">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud e</p>
                                    <hr class="new5" />
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 mb-md-5 px-md-4">
                                <div class="cntntdf">
                                    <p class="f36  gothammedium">01</p>
                                    <p class="f23  gothammedium">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud e</p>
                                    <hr class="new5" />
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="aspachiv profilecard">
                        <h1 class="f30  gothambold  white">Programme Specific Outcomes</h1>
                        <div class="row">
                            <div class="col-md-4 mb-4 mb-md-5 px-md-4">
                                <div class="cntntdf">
                                    <p class="f36  gothammedium white">01</p>
                                    <p class="f23  gothammedium white">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud e</p>
                                    <hr class="new5" />
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 mb-md-5 px-md-4">
                                <div class="cntntdf">
                                    <p class="f36  gothammedium white">01</p>
                                    <p class="f23  gothammedium white">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud e</p>
                                    <hr class="new5" />
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 mb-md-5 px-md-4">
                                <div class="cntntdf">
                                    <p class="f36  gothammedium white">01</p>
                                    <p class="f23  gothammedium white">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud e</p>
                                    <hr class="new5" />
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 mb-md-5 px-md-4">
                                <div class="cntntdf">
                                    <p class="f36  gothammedium white">01</p>
                                    <p class="f23  gothammedium white">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud e</p>
                                    <hr class="new5" />
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 mb-md-5 px-md-4">
                                <div class="cntntdf">
                                    <p class="f36  gothammedium white">01</p>
                                    <p class="f23  gothammedium white">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud e</p>
                                    <hr class="new5" />
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 mb-md-5 px-md-4">
                                <div class="cntntdf">
                                    <p class="f36  gothammedium white">01</p>
                                    <p class="f23  gothammedium white">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud e</p>
                                    <hr class="new5" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="imp-links p-4 my-5">
                        <h2 class="f22 gothammedium my-2">IMPORTANT LINKS</h2>
                        <a href="#" class="f22 gothammedium text-decoration-none o2o2o my-2 d-block"><i
                            class="fa-solid fa-angle-right colorred"></i>&nbsp;&nbsp;&nbsp;Testimonials</a>
                        <a href="#" class="f22 gothammedium text-decoration-none o2o2o my-2 d-block"><i
                                class="fa-solid fa-angle-right colorred"></i>&nbsp;&nbsp;&nbsp;What's Happening</a>
                        <a href="#" class="f22 gothammedium text-decoration-none o2o2o my-2 d-block"><i
                                    class="fa-solid fa-angle-right colorred"></i>&nbsp;&nbsp;&nbsp;Contact Us</a>
                        <a href="#" class="f22 gothammedium text-decoration-none o2o2o my-2 d-block lastaa"><i
                                        class="fa-solid fa-angle-right colorred"></i>&nbsp;&nbsp;&nbsp;Image Gallery</a>
                    </div>
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