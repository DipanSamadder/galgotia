@extends('frontend.layouts.app')
@include('frontend.partials.page_meta')

@section('content')

@include('frontend.partials.slider-banner-section')
<section class="admApply">
    <div class="container">
        <div class="admApplyRow">
            <div class="row">
                <div class="col-lg-5 stepwise">
                    <img src="{{ dsld_static_asset('frontend/assets/images/Group-19523.png') }}" class="stepsbgimg">
                    <div class="timeline-container admApplyHead">
                        <h2>How to Apply</h2>
                        <ul class="vertical-scrollable-timeline">
                            <li>
                                <h2 class="f24 gothambold">Fill the Application Form</h2>
                                <p class="f16 gothamnarrow325">I authorize Galgotias University to contact me with
                                    updates/notifications via Email/SMS/Whatsapp/Call, which overrides DND/NDNC registration
                                </p>
                                <div class="icon-holder text-center">
                                    <span class="f20 colorred gothambold">STEP<br> 01</span>
                                </div>
                            </li>
                            <li>
                                <h2 class="f24 gothambold">Fill the Application Form</h2>
                                <p class="f16 gothamnarrow325">I authorize Galgotias University to contact me with
                                    updates/notifications via Email/SMS/Whatsapp/Call, which overrides DND/NDNC registration
                                </p>
                                <div class="icon-holder text-center">
                                    <span class="f20 colorred gothambold">STEP<br> 02</span>
                                </div>
                            </li>
                            <li>
                                <h2 class="f24 gothambold">Fill the Application Form</h2>
                                <p class="f16 gothamnarrow325">I authorize Galgotias University to contact me with
                                    updates/notifications via Email/SMS/Whatsapp/Call, which overrides DND/NDNC registration
                                </p>
                                <div class="icon-holder text-center">
                                    <span class="f20 colorred gothambold">STEP<br> 03</span>
                                </div>
                            </li>
                            <li>
                                <h2 class="f24 gothambold">Fill the Application Form</h2>
                                <p class="f16 gothamnarrow325">I authorize Galgotias University to contact me with
                                    updates/notifications via Email/SMS/Whatsapp/Call, which overrides DND/NDNC registration
                                </p>
                                <div class="icon-holder text-center">
                                    <span class="f20 colorred gothambold">STEP<br> 04</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 ps-lg-5">
                    <div class="form-box p-5">
                        <h2 class="f36 gothambold colorred">Admissions Open 2023</h2>
                        <p class="f16 gothamnarrow325">Register Now to Get Information.</p>
                        <div class="form-div">
                            <form>
                                <div class="row">

                                    <div class="form-group col-md-6">
                                        <label for="fname" class="pb-2 pt-3 f16 gothamnarrow325">Full Name</label>
                                        <input type="text" class="form-control rounded-0" id="fname">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="emailid" class="pb-2 pt-3 f16 gothamnarrow325">Email ID</label>
                                        <input type="email" class="form-control rounded-0" id="emailid">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="cntctn" class="pb-2 pt-3 f16 gothamnarrow325">Contact No.</label>
                                        <input type="text" class="form-control rounded-0" id="cntctn">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="password" class="pb-2 pt-3 f16 gothamnarrow325">Any Password of Your
                                            Choice</label>
                                            <div class="pos-rel">
                                        <input type="password" class="form-control rounded-0" id="password">
                                        <i class="fa-solid fa-eye eye"></i>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="slctprogram" class="pb-2 pt-3 f16 gothamnarrow325">Select
                                            Program</label>
                                        <select class="form-select rounded-0" aria-label="Default select example">
                                            <option selected></option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="slctcourse" class="pb-2 pt-3 f16 gothamnarrow325">Select Cource</label>
                                        <select class="form-select rounded-0" aria-label="Default select example">
                                            <option selected></option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="slctcourse" class="pb-2 pt-3 f16 gothamnarrow325">Select
                                            Specialization</label>
                                        <select class="form-select rounded-0" aria-label="Default select example">
                                            <option selected></option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="slctcourse" class="pb-2 pt-3 f16 gothamnarrow325">Select
                                            State</label>
                                        <select class="form-select rounded-0" aria-label="Default select example">
                                            <option selected></option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="slctcourse" class="pb-2 pt-3 f16 gothamnarrow325">Select
                                            City</label>
                                        <select class="form-select rounded-0" aria-label="Default select example">
                                            <option selected></option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">

                                        <div class="input-group mb-3 mt-4 rounded-0">
                                            <span class="input-group-text rounded-0 w-50"
                                                id="basic-addon1 text-center">AvnMZ</span>
                                            <input type="text" class="form-control rounded-0 w-50"
                                                placeholder="Enter text as shown" aria-label="Username"
                                                aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input mt-4 mb-3 rounded-0" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label mt-3 mb-3 f14 gothamnarrow325"
                                                for="flexCheckDefault">
                                                I authorize Galgotias University to contact me with updates/notifications
                                                via Email/SMS/Whatsapp/Call, which overrides DND/NDNC registrations
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <p class="gothamnarrow325 f16">EXISTING USER? 
                                            <a href="#" class="colorred">LOGIN </a><br>
                                            <a href="# " class="colorred">RESEND VERIFICATION EMAIL</a></p>
                                    </div>
                                    <div class="form-group col-md-6 text-center">
                                        <a href="#" class="btn text-decoration-none f22 gothamnarrow325 applynowwe rounded-0">
                                        <b>APPLY NOW<b>

                                        </a>
                                       
                                    </div>


                                </div>
                            </form>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection