@extends('frontend.layouts.app')
@include('frontend.partials.page_meta')

@section('content')

@include('frontend.partials.slider-banner-section')
<section class="one-edge-shadow ">
    <div class="bannerdeen" style="background: url({{ dsld_static_asset('frontend/assets/images/deenbg.png') }}) 100% 0 no-repeat;">
        <div class="headingdeen m-auto pt10px">
            <h1 class="f48 white  text-center m-auto">Department of <br>Computer Science & Engineering</h1>
        </div>
        <div class="d-flex mt-4">
            <div class="linee" style="margin-left: 2rem;"></div>
            <p class="white w-50 text-center m-auto f24 gothammedium">Department Statics</p>
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
            <ul class="owl-carousel owl-theme tabslider1 nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link f22 gothammedium active " data-bs-toggle="pill" href="#visionmission">Vision & Mission </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link f22 gothammedium" data-bs-toggle="pill" href="#visionmission">Mission Message Deen </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link f22 gothammedium" data-bs-toggle="pill" href="#upsachiv">USPs & Achievements </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link f22 gothammedium" data-bs-toggle="pill" href="#programs">Programs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link f22 gothammedium" data-bs-toggle="pill" href="#set">BOS </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link f22 gothammedium" data-bs-toggle="pill" href="#faculty">Faculty</a>
                </li>
                <li class="nav-item"> 
                    <a class="nav-link f22 gothammedium" data-bs-toggle="pill" href="#campuslife">Campus Life</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link f22 gothammedium" data-bs-toggle="pill" href="#acred">Accreditations, Approvals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link f22 gothammedium" data-bs-toggle="pill" href="#set">Infrastructure</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link f22 gothammedium" data-bs-toggle="pill" href="#set">Lab Facilities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link f22 gothammedium" data-bs-toggle="pill" href="#set">Research Facilities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link f22 gothammedium" data-bs-toggle="pill" href="#set">Placements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link f22 gothammedium" data-bs-toggle="pill" href="#set">Publications</a>
                </li>

            </ul>

        </div>
    </div>
</section>
<section class="schoolDep">


    <div class="tab-content">

        <!-- vissioni mission -->
        <div class="tab-pane  active" id="visionmission">
            <div class="container">
                <div class="row m-md-4">
                    <div class="col-md-12">
                        <div class="tabcntnt1 m-md-4 mt-5">
                            <h1 class="f36 gothambold o2o2o">Vision & Mission </h1>
                            <div class="mt-4">
                                <div class="row bannercntnt"
                                style="background: url({{ dsld_static_asset('frontend/assets/images/OLO2DT0.png') }}) 100% 0 no-repeat;">
                                <div class="col-lg-6 mb-4">
                                    <div class="cntnt">
                                        <h2 class="f28 white gothambold">
                                            Vision
                                        </h2>
                                        <p class="f18 white ">
                                            To be recognized globally as a premier school of Computing Science and
                                            Engineering for imparting quality and value based education engaged in
                                            multi-disciplinary and collaborative research.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="cntnt">
                                        <h2 class="f28 white gothambold mb-4">
                                            Mission
                                        </h2>
                                        <div class="misionscnts d-flex">
                                            <div class="mspoint">
                                                <p class="white gothambold f28">M1</p>
                                            </div>
                                            <p class="mscntnt f18 white  pl-4 ">
                                                To be recognized globally as a premier school of Computing Science
                                                and Engineering for imparting quality and value based education
                                                engaged in multi-disciplinary and collaborative research.
                                            </p>
                                        </div>
                                        <div class="misionscnts d-flex">
                                            <div class="mspoint">
                                                <p class="white gothambold f28">M2</p>
                                            </div>
                                            <p class="mscntnt f18 white  pl-4">
                                                Establishing state-of-the-art facilities and adopt education 4.0
                                                practices to analyse, develop, test and deploy sustainable ethical
                                                IT solutions by involving multiple stakeholders.
                                            </p>
                                        </div>
                                        <div class="misionscnts d-flex">
                                            <div class="mspoint">
                                                <p class="white gothambold f28">M3</p>
                                            </div>
                                            <p class="mscntnt f18 white  pl-4">
                                                Establishing Centres of Excellence for multidisciplinary
                                                collaborative research in association with industry and academia.
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
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
                                    <p class="f18 a2a2a2">
                                        SCSE is committed to academic excellence, with special focus on
                                        teaching-learning process, research and holistic development through our
                                        Fully Flexible Credit Based System (FFCBS). We inculcate multi-disciplinary
                                        and inter-disciplinary competence and leadership skills in our students.
                                        SCSE aims to equip the students with the ability and skills to analyze,
                                        design and develop computer systems and their applications, with a
                                        curriculum that has a balanced emphasis on theory, practical’s and projects.
                                        The focus will be on development and strengthening systems thinking, problem
                                        solving, analysis, design, research, team work, communication skills, and
                                        readiness for lifelong learning in areas of Artificial Intelligence, Machine
                                        Learning, Deep Learning, Cloud Computing, Cyber Security, Internet of
                                        Things. The courses run by the Department will use mixed techniques of
                                        interactive lectures, tutorials, laboratory work, guided case studies,
                                        literature surveys and project work that require team work, critical and
                                        creative thinking. Creativity flourishes in an atmosphere that is free,
                                        friendly and above all, democratic and participatory in nature. Every course
                                        is designed, delivered and monitored in a manner that will add a significant
                                        value to a student. We equally emphasize on the development of core human
                                        values, mental well-being and physical well-being of our students.
                                    </p>
                                    <p class="f18 a2a2a2">
                                        SCSE is headed by Dr. Munish Sabharwal, has two departments, Department of
                                        Computer Science and Engineering and Department of Computer Applications and
                                        Information Science with a team of more than 6000 students and 180 core
                                        faculty members with rich experience in research, industry and academics as
                                        well as many visiting professors, distinguished professionals from industry,
                                        eminent researchers and teaching/ research assistants. These team members
                                        are handpicked from reputed institutions on the basis of their expertise in
                                        the different domains of Computing Science and Engineering.
                                    </p>
                                    <p class="f18 a2a2a2">
                                        The school offers UG (B.Tech [CSE], B.Tech [CSE+ Specializations], BCA), PG
                                        (MCA, MTech (CSE), MTech [AI & ML]) and research programs in Computer
                                        Science and Engineering. The curricula offered are contemporary and updated
                                        regularly. The B. Tech. (CSE+ Specialization) offered by the school is an
                                        attempt to keep pace with the fast-changing computing technology and to
                                        satisfy the requirements of the industry. The SCSE takes initiative to bring
                                        together the latest software applications, real-world industry experiences,
                                        hands-on lab course, the best project- based teaching & learning practices
                                        along with case studies all into a single unique educational program.
                                    </p>
                                    <p class="f18 a2a2a2">
                                        The responsibilities of Academic Programs in the school are shared among
                                        Academic program Chairs (PC) of respective domains and faculty teams with
                                        different areas of expertise. Each academic program is led by a program
                                        chair. The program chair is assisted by members of the academic program
                                        committee. The program chair and members of the academic program committee
                                        administer the delivery of the academic program and its development.
                                    </p>
                                    <p class="f18 a2a2a2">
                                        Currently there are six Research Groups in the school: Computer Networks,
                                        Data Science and AI, Cyber Security & Privacy, computer Graphics and Digital
                                        Image Processing, Cloud Computing and Distributed Systems and Emerging
                                        technologies. Each Research Group consists of a small team of 8-12 competent
                                        faculty led by a Research Group Chair. The Research Group Chair and members
                                        are responsible for the administration of the and the technical development
                                        of the Research Group and its members.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
    <!-- ups tab -->
    <div class="tab-pane bg-dark " id="upsachiv">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="aspachiv ">
                        <h1 class="f36 white gothambold mt45rem mb45rem">USPs & Achievements</h1>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mb-4 mb-md-5 px-md-4">
                                <div class="cntntdf">
                                    <p class="f36 white gothammedium">01</p>
                                    <p class="f23 white gothammedium">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud e</p>
                                    <hr class="new5" />
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4 mb-md-5 px-md-4">
                                <div class="cntntdf">
                                    <p class="f36 white gothammedium">01</p>
                                    <p class="f23 white gothammedium">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud e</p>
                                    <hr class="new5" />
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4 mb-md-5 px-md-4">
                                <div class="cntntdf">
                                    <p class="f36 white gothammedium">01</p>
                                    <p class="f23 white gothammedium">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud e</p>
                                    <hr class="new5" />
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4 mb-md-5 px-md-4">
                                <div class="cntntdf">
                                    <p class="f36 white gothammedium">01</p>
                                    <p class="f23 white gothammedium">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud e</p>
                                    <hr class="new5" />
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4 mb-md-5 px-md-4">
                                <div class="cntntdf">
                                    <p class="f36 white gothammedium">01</p>
                                    <p class="f23 white gothammedium">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud e</p>
                                    <hr class="new5" />
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4 mb-md-5 px-md-4">
                                <div class="cntntdf">
                                    <p class="f36 white gothammedium">01</p>
                                    <p class="f23 white gothammedium">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud e</p>
                                    <hr class="new5" />
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
                <div class="col-md-12 mb45rem">
                    <h1 class="f36 white gothambold mt45rem mb45rem">Value Added Programs</h1>
                    <div class="aspachiv owl-carousel owl-theme tabslider2">

                        <div class="cardforblog">
                            <img class="cardimage" src="{{ dsld_static_asset('frontend/assets/images/oplkio.png') }}">
                            <p class="f24 white gothammedium mt-4">RPA Developer course under UiPath Academic Alliance program</p>
                            <div class="readmoree ">
                                <a class="f18 gothammedium white"href="#">Read More <i class="fa-solid fa-arrow-right white"></i></a>

                            </div>
                        </div>
                        <div class="cardforblog">
                            <img class="cardimage" src="{{ dsld_static_asset('frontend/assets/images/oplkio.png') }}">
                            <p class="f24 white gothammedium mt-4">RPA Developer course under UiPath Academic Alliance program</p>
                            <div class="readmoree ">
                                <a class="f18 gothammedium white"href="#">Read More <i class="fa-solid fa-arrow-right white"></i></a>

                            </div>
                        </div>
                        <div class="cardforblog">
                            <img class="cardimage" src="{{ dsld_static_asset('frontend/assets/images/oplkio.png') }}">
                            <p class="f24 white gothammedium mt-4">RPA Developer course under UiPath Academic Alliance program</p>
                            <div class="readmoree ">
                                <a class="f18 gothammedium white"href="#">Read More <i class="fa-solid fa-arrow-right white"></i></a>

                            </div>
                        </div>
                        <div class="cardforblog">
                            <img class="cardimage" src="{{ dsld_static_asset('frontend/assets/images/oplkio.png') }}">
                            <p class="f24 white gothammedium mt-4">RPA Developer course under UiPath Academic Alliance program</p>
                            <div class="readmoree ">
                                <a class="f18 gothammedium white"href="#">Read More <i class="fa-solid fa-arrow-right white"></i></a>

                            </div>
                        </div>
                        <div class="cardforblog">
                            <img class="cardimage" src="{{ dsld_static_asset('frontend/assets/images/oplkio.png') }}">
                            <p class="f24 white gothammedium mt-4">RPA Developer course under UiPath Academic Alliance program</p>
                            <div class="readmoree ">
                                <a class="f18 gothammedium white"href="#">Read More <i class="fa-solid fa-arrow-right white"></i></a>

                            </div>
                        </div>
                        <div class="cardforblog">
                            <img class="cardimage" src="{{ dsld_static_asset('frontend/assets/images/oplkio.png') }}">
                            <p class="f24 white gothammedium mt-4">RPA Developer course under UiPath Academic Alliance program</p>
                            <div class="readmoree ">
                                <a class="f18 gothammedium white"href="#">Read More <i class="fa-solid fa-arrow-right white"></i></a>

                            </div>
                        </div>
                        <div class="cardforblog">
                            <img class="cardimage" src="{{ dsld_static_asset('frontend/assets/images/oplkio.png') }}">
                            <p class="f24 white gothammedium mt-4">RPA Developer course under UiPath Academic Alliance program</p>
                            <div class="readmoree ">
                                <a class="f18 gothammedium white"href="#">Read More <i class="fa-solid fa-arrow-right white"></i></a>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- profram tab -->
    <div class="tab-pane " id="programs">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="aspachiv ">
                        <h1 class="f36 gothambold mt45rem mb45rem">Programs</h1>

                    </div>

                </div>
                <div class="col-md-12 mb45rem">

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
                            <div class="col-lg-4 col-md-6 mt-4">
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
                    <div class="pgp mb45rem">
                        <h2 class="f30 colorred gothammedium mt-4">Post Graduate Programs</h2>
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
                    <div class="dp mb45rem">
                        <h2 class="f30 colorred gothammedium mt-4">Doctoral Programs</h2>
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


                </div>
            </div>

        </div>
    </div>
    <!-- faculty -->
    <div class="tab-pane " id="faculty">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="aspachiv ">
                        <h1 class="f36 gothambold mt45rem mb45rem">Faculty</h1>

                    </div>

                </div>
                <div class="col-md-12">

                    <div class="facltycntnt mb45rem">

                        <div class="row">
                            <div class="col-lg-4 col-md-6 mb45rem">
                                <div class="facultycard">
                                    <div class="facultyimg text-center pdt25rem">
                                        <img src="{{ dsld_static_asset('frontend/assets/images/facultyimg.png') }}">
                                    </div>
                                    <div class="facultyname my-4">
                                        <p class="f23 gothammedium">Faculty Name goes here</p>
                                    </div>
                                    <div class="facultyabt">
                                        <p class="f18 gothamnarrow325">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="facultycard">
                                    <div class="facultyimg text-center pdt25rem">
                                        <img src="{{ dsld_static_asset('frontend/assets/images/facultyimg.png') }}">
                                    </div>
                                    <div class="facultyname my-4">
                                        <p class="f23 gothammedium">Faculty Name goes here</p>
                                    </div>
                                    <div class="facultyabt">
                                        <p class="f18 gothamnarrow325">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb45rem">
                                <div class="facultycard">
                                    <div class="facultyimg text-center pdt25rem">
                                        <img src="{{ dsld_static_asset('frontend/assets/images/facultyimg.png') }}">
                                    </div>
                                    <div class="facultyname my-4">
                                        <p class="f23 gothammedium">Faculty Name goes here</p>
                                    </div>
                                    <div class="facultyabt">
                                        <p class="f18 gothamnarrow325">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb45rem">
                                <div class="facultycard">
                                    <div class="facultyimg text-center pdt25rem">
                                        <img src="{{ dsld_static_asset('frontend/assets/images/facultyimg.png') }}">
                                    </div>
                                    <div class="facultyname my-4">
                                        <p class="f23 gothammedium">Faculty Name goes here</p>
                                    </div>
                                    <div class="facultyabt">
                                        <p class="f18 gothamnarrow325">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb45rem">
                                <div class="facultycard">
                                    <div class="facultyimg text-center pdt25rem">
                                        <img src="{{ dsld_static_asset('frontend/assets/images/facultyimg.png') }}">
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



                </div>
            </div>

        </div>
    </div>
    <!-- campus life -->
    <div class="tab-pane bggray" id="campuslife" >
        <div class="container">
            <div class="row pt80px">
                <h1 class="f36 gothambold mb-4">Campus life</h1>
                <div class="col-lg-7 col-md-6 mb-4">
                    <div class="blogLeft">

                        <div class="blgBoxImg"><img src="{{ dsld_static_asset('frontend/assets/images/sportsfaci.png') }}" class="img-fluid"> </div>

                        <div class="blgBoxCnt">
                            <h4>Sport facilities</h4>
                            <p>At the School of Galgotias, excellence is what we strive to achieve. Our infrastructure, faculty, vision, ideals, and teaching methods make us a premier university.</p>
                            <a href="#" class="knowMore">know More <svg class="svg-inline--fa fa-chevron-right ms-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z"></path></svg><!-- <i class="fa-solid fa-chevron-right ms-2"></i> Font Awesome fontawesome.com --></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 mb-4">
                    <div class="blogRight mb-4">

                        <div class="blgBoxImg"><img src="{{ dsld_static_asset('frontend/assets/images/pexels-pixabay-3.png') }}" class="img-fluid"> </div>

                        <div class="blgBoxCnt">
                            <h4>Sport Councils</h4>
                            <p>Here is a glimpse of the innovation and creativity done by the students of Galgotias</p>
                        </div>
                    </div>
                    <div class="blogRight mb-0">
                        <div class="blgBox">
                            <div class="blgBoxImg"><img src="{{ dsld_static_asset('frontend/assets/images/pexels-pixabay-4.png') }}" class="img-fluid"> </div>
                        </div>
                        <div class="blgBoxCnt">
                            <h4>Sport Infrastructure</h4>
                            <p>Here is a glimpse of the innovation and creativity done by the students of Galgotias</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="facilityRow p-0">
                        <div class="facilityImg mb-4"><img src="{{ dsld_static_asset('frontend/assets/images/facility1.png') }}" class="img-fluid"> </div>
                        <div class="facilityCnt">
                            <h4 class="mb-2">Student Council &amp; Groups</h4>
                            <p class="mb-0">Here is a glimpse of the innovation and creativity done by the students of Galgotias</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="facilityRow p-0">
                        <div class="facilityImg mb-4"><img src="{{ dsld_static_asset('frontend/assets/images/pexels-pixabay.png') }}" class="img-fluid"> </div>
                        <div class="facilityCnt">
                            <h4 class="mb-2">Tech Laboratories</h4>
                            <p class="mb-0">Here is a glimpse of the innovation and creativity done by the students of Galgotias</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="facilityRow p-0">
                        <div class="facilityImg mb-4"><img src="{{ dsld_static_asset('frontend/assets/images/Swimmer.png') }}" class="img-fluid"> </div>
                        <div class="facilityCnt">
                            <h4 class="mb-2">Campus infrastructure</h4>
                            <p class="mb-0">Here is a glimpse of the innovation and creativity done by the students of Galgotias</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- campus life -->
    <div class="tab-pane " id="acred">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="f36 gothambold mt45rem mb45rem">Accreditations, Approvals and Ratings</h1>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="facilityRow p-0">
                        <div class="facilityImg mb-4"><img src="{{ dsld_static_asset('frontend/assets/images/jklosaa.png') }}" class="img-fluid"> </div>
                        <div class="facilityCnt">
                            <h4 class="mb-2">NBA Accredited</h4>
                            <p class="mb-0">Here is a glimpse of the innovation and creativity done by the students of
                            Galgotias</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="facilityRow p-0">
                        <div class="facilityImg mb-4"><img src="{{ dsld_static_asset('frontend/assets/images/jklosaa.png') }}" class="img-fluid"> </div>
                        <div class="facilityCnt">
                            <h4 class="mb-2">Tech Laboratories</h4>
                            <p class="mb-0">Here is a glimpse of the innovation and creativity done by the students of
                            Galgotias</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="facilityRow p-0">
                        <div class="facilityImg mb-4"><img src="{{ dsld_static_asset('frontend/assets/images/jklosaa.png') }}" class="img-fluid"> </div>
                        <div class="facilityCnt">
                            <h4 class="mb-2">Campus infrastructure</h4>
                            <p class="mb-0">Here is a glimpse of the innovation and creativity done by the students of
                            Galgotias</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1 class="f36 gothambold mt-4 ">Approvals</h1>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mt-4">
                    <div class="cardprograma ">
                        <div class="cardcontenta">
                            <p class="f23 gothammedium">
                                Approvals name goes here
                            </p>
                            <div class="knowmore pt-3">
                                <a class="f18 gothammedium" href="">VIEW DOC <i class="fa-solid fa-eye"></i></a>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-lg-3 col-md-6  mt-4">
                    <div class="cardprograma ">
                        <div class="cardcontenta">
                            <p class="f23 gothammedium">
                                Approvals name goes here
                            </p>
                            <div class="knowmore pt-3">
                                <a class="f18 gothammedium" href="">VIEW DOC <i class="fa-solid fa-eye"></i></a>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-lg-3 col-md-6  mt-4">
                    <div class="cardprograma ">
                        <div class="cardcontenta">
                            <p class="f23 gothammedium">
                                Approvals name goes here
                            </p>
                            <div class="knowmore pt-3">
                                <a class="f18 gothammedium" href="">VIEW DOC <i class="fa-solid fa-eye"></i></a>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-lg-3 col-md-6  mt-4">
                    <div class="cardprograma ">
                        <div class="cardcontenta">
                            <p class="f23 gothammedium">
                                Approvals name goes here
                            </p>
                            <div class="knowmore pt-3">
                                <a class="f18 gothammedium" href="">VIEW DOC <i class="fa-solid fa-eye"></i></a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1 class="f36 gothambold mt-5 ">Ratings</h1>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="facilityImg mb-4">
                        <img src="{{ dsld_static_asset('frontend/assets/images/top-6july20-banner2th.png') }}" class="img-fluid pt-3">
                        <h2 class="f23 gothammedium py-4">Ranked Amongst Top 5</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facilityImg mb-4">
                        <img src="{{ dsld_static_asset('frontend/assets/images/Ranking-1th.png') }}" class="img-fluid pt-3">
                        <h2 class="f23 gothammedium py-4">Ranked Amongst Top 10</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facilityImg mb-4">
                        <img src="{{ dsld_static_asset('frontend/assets/images/top-6july20-banner1th.png') }}" class="img-fluid pt-3">
                        <h2 class="f23 gothammedium py-4">Top Ranked Amongst 5</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facilityImg mb-4">
                        <img src="{{ dsld_static_asset('frontend/assets/images/ranking-top-th.png') }}" class="img-fluid pt-3">
                        <h2 class="f23 gothammedium py-4">Top Ranked Amongst 5</h2>
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