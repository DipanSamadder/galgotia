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
                    <div class="imp-links p-4 my-5">
                        <h2 class="f22 gothammedium mt-2 mb-4">IMPORTANT LINKS</h2>
                        <a href="#" class="f22 gothammedium text-decoration-none o2o2o my-2 d-block"><i class="fa-solid fa-angle-right colorred"></i>&nbsp;&nbsp;&nbsp;Testimonials</a>
                        <a href="#" class="f22 gothammedium text-decoration-none o2o2o my-2 d-block"><i class="fa-solid fa-angle-right colorred"></i>&nbsp;&nbsp;&nbsp;What's Happening</a>
                        <a href="#" class="f22 gothammedium text-decoration-none o2o2o my-2 d-block"><i class="fa-solid fa-angle-right colorred"></i>&nbsp;&nbsp;&nbsp;Contact Us</a>
                        <a href="#" class="f22 gothammedium text-decoration-none o2o2o my-2 d-block lastaa"><i class="fa-solid fa-angle-right colorred"></i>&nbsp;&nbsp;&nbsp;Image Gallery</a>
                    </div>

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
                <li class="nav-item">
                    <a class="nav-link f22 gothammedium active " data-bs-toggle="pill" href="#undergrad">Under Graduate  </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link f22 gothammedium" data-bs-toggle="pill" href="#postgrad">Post Graduate</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link f22 gothammedium" data-bs-toggle="pill" href="#upsachiv">Diploma </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link f22 gothammedium" data-bs-toggle="pill" href="#programs">Integrated</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link f22 gothammedium" data-bs-toggle="pill" href="#set">Doctoral </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="tab-content">
        <div class="tab-pane active" id="undergrad">
            <div class="container">
                <div class="underGraduadRow">
                    <div class="row">
                        <div class="col-md-12 mt-5">
                            <h2 class="f36 gothambold">Computer Science</h2>
                        </div>
                    </div>
                </div>
                <div class="underGraduadRow">
                    <div class="row">
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
                    </div> 
                </div>
            </div>
            <div class="container">
                <div class="underGraduadRow">
                    <div class="row">
                        <div class="col-md-12 mt-5">
                            <h2 class="f36 gothambold">Engineering</h2>
                        </div>
                    </div>
                </div>
                <div class="underGraduadRow">
                    <div class="row">
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

                    </div> 
                </div>
            </div>
            <div class="container">
                <div class="underGraduadRow">
                    <div class="row">
                        <div class="col-md-12 mt-5">
                            <h2 class="f36 gothambold">Managements</h2>
                        </div>
                    </div>
                </div>
                <div class="underGraduadRow">
                    <div class="row">
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

                    </div> 
                </div>
            </div>
            <div class="container">
                <div class="underGraduadRow">
                    <div class="row">
                        <div class="col-md-12 mt-5">
                            <h2 class="f36 gothambold">Agriculture</h2>
                        </div>
                    </div>
                </div>
                <div class="underGraduadRow">
                    <div class="row">
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

                    </div> 
                </div>
            </div>
            <div class="container">
                <div class="underGraduadRow">
                    <div class="row">
                        <div class="col-md-12 mt-5">
                            <h2 class="f36 gothambold">Law</h2>
                        </div>
                    </div>
                    <div class="row">
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

                    </div> 
                </div>
            </div>
            <div class="container">

                <div class="underGraduadRow">
                    <div class="row">
                        <div class="col-md-12 mt-5">
                            <h2 class="f36 gothambold">Basic & Applied Sciences</h2>
                        </div>
                    </div>
                    <div class="row">
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

                    </div> 
                </div>
            </div>
            <div class="container">
                <div class="underGraduadRow">
                    <div class="row">
                        <div class="col-md-12 mt-5">
                            <h2 class="f36 gothambold">Architecture & Design</h2>
                        </div>
                    </div>
                    <div class="row">
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

                    </div> 
                </div>
            </div>
            <div class="container">
                <div class="underGraduadRow">
                    <div class="row">
                        <div class="col-md-12 mt-5">
                            <h2 class="f36 gothambold">Finance & Commerce</h2>
                        </div>
                    </div>
                    <div class="row">
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

                    </div> 
                </div>
            </div>
            <div class="container">
                <div class="underGraduadRow">
                    <div class="row">
                        <div class="col-md-12 mt-5">
                            <h2 class="f36 gothambold">Liberal Education</h2>
                        </div>
                    </div>
                    <div class="row">
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

                    </div> 
                </div>
            </div>
            <div class="container">
                <div class="underGraduadRow">
                    <div class="row">
                        <div class="col-md-12 mt-5">
                            <h2 class="f36 gothambold">Medical & Allied Sciences</h2>
                        </div>
                    </div>
                    <div class="row">
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

                    </div> 
                </div>
            </div>
        </div>
        <div class="tab-pane " id="postgrad">
            <div class="container">
                opkscsdss
            </div>
        </div>
    </div>
</section>
@endsection