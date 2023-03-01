<header>
      <div class="tpHeader">
        <div class="container">
          <ul class="tpUl">        
            <li><a href="#">International</a> </li>
            <li><a href="#">Placements</a> </li>
            <li><a href="#">Awards & Recognitions</a> </li>
            <li><a href="https://cilearningschool.com/galgotia/about-us.php">About us</a> </li>
            <li><a href="#">Alumni</a> </li>
            <li><a href="#">Media</a> </li>
            <li><a href="#">Careers</a> </li>
            <li><a href="#">NIRFNEP-2020</a> </li>
            <li><a href="#">Contact us</a> </li>
          </ul>
        </div>
      </div>
     <div class="container">
       <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">

            @if(dsld_get_setting('site_logo') > 0)
                <a href="{{ route('home') }}"><img src="{{ dsld_uploaded_asset(dsld_get_setting('site_logo')) }}"  alt="{{ dsld_upload_file_title(dsld_get_setting('site_logo')) }}" class="img-fluid"></a>
            @else
                <a href="{{ route('home') }}"><img src="{{ dsld_static_asset('backend/assets/images/logo.svg') }}" alt='{{ env("APP_NAME", "Backend New" ) }}' class="img-fluid"></a>
            @endif
            
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>    
          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav me-4">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="schools" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Schools
                </a>
                <ul class="navCrousal navDrop owl-theme" aria-labelledby="schools">
                  <li class="item">
                    <a class="dropdown-item" href="https://cilearningschool.com/galgotia/School-Department.php">
                      <div class="dropdown-item-Img">
                        <img src="assets/images/newImg/computer-science.png" class="img-fluid"> 
                      </div>
                      <div class="dropdown-item-Cnt">
                        <p class="mb-0">School of Computing Science & Engineering</p>
                      </div>
                    </a>
                  </li>
                  <li class="item">
                     <a class="dropdown-item" href="#">
                      <div class="dropdown-item-Img">
                        <img src="assets/images/newImg/11.png" class="img-fluid"> 
                      </div>
                      <div class="dropdown-item-Cnt">
                        <p class="mb-0">School of Computing Science & Engineering</p>
                      </div>
                    </a>
                  </li>
                  <li class="item">
                     <a class="dropdown-item" href="#">
                      <div class="dropdown-item-Img">
                        <img src="assets/images/newImg/Gautam-Adani-IRMA-Speech.png" class="img-fluid"> 
                      </div>
                      <div class="dropdown-item-Cnt">
                        <p class="mb-0">School of Computing Science & Engineering</p>
                      </div>
                    </a>
                  </li>
                  <li class="item">
                     <a class="dropdown-item" href="#">
                      <div class="dropdown-item-Img">
                        <img src="assets/images/newImg/Civil-Engineering-Projects.png" class="img-fluid"> 
                      </div>
                      <div class="dropdown-item-Cnt">
                        <p class="mb-0">School of Computing Science & Engineering</p>
                      </div>
                    </a>
                  </li>
                  <li class="item">
                     <a class="dropdown-item" href="#">
                      <div class="dropdown-item-Img">
                        <img src="assets/images/newImg/mobile.png" class="img-fluid"> 
                      </div>
                      <div class="dropdown-item-Cnt">
                        <p class="mb-0">School of Computing Science & Engineering</p>
                      </div>
                    </a>
                  </li>
                  <li class="item">
                     <a class="dropdown-item" href="#">
                      <div class="dropdown-item-Img">
                        <img src="assets/images/newImg/What-is-Financial-Management.png" class="img-fluid"> 
                      </div>
                      <div class="dropdown-item-Cnt">
                        <p class="mb-0">School of Computing Science & Engineering</p>
                      </div>
                    </a>
                  </li>
                  <li class="item">
                     <a class="dropdown-item" href="#">
                      <div class="dropdown-item-Img">
                        <img src="assets/images/newImg/What-is-Financial-Management.png" class="img-fluid"> 
                      </div>
                      <div class="dropdown-item-Cnt">
                        <p class="mb-0">School of Computing Science & Engineering</p>
                      </div>
                    </a>
                  </li>
                  <li class="item">
                     <a class="dropdown-item" href="#">
                      <div class="dropdown-item-Img">
                        <img src="assets/images/newImg/What-is-Financial-Management.png" class="img-fluid"> 
                      </div>
                      <div class="dropdown-item-Cnt">
                        <p class="mb-0">School of Computing Science & Engineering</p>
                      </div>
                    </a>
                  </li>
                  <li class="item">
                     <a class="dropdown-item" href="#">
                      <div class="dropdown-item-Img">
                        <img src="assets/images/newImg/What-is-Financial-Management.png" class="img-fluid"> 
                      </div>
                      <div class="dropdown-item-Cnt">
                        <p class="mb-0">School of Computing Science & Engineering</p>
                      </div>
                    </a>
                  </li>
                  <li class="item">
                     <a class="dropdown-item" href="#">
                      <div class="dropdown-item-Img">
                        <img src="assets/images/newImg/What-is-Financial-Management.png" class="img-fluid"> 
                      </div>
                      <div class="dropdown-item-Cnt">
                        <p class="mb-0">School of Computing Science & Engineering</p>
                      </div>
                    </a>
                  </li>
                  <li class="item">
                     <a class="dropdown-item" href="#">
                      <div class="dropdown-item-Img">
                        <img src="assets/images/newImg/What-is-Financial-Management.png" class="img-fluid"> 
                      </div>
                      <div class="dropdown-item-Cnt">
                        <p class="mb-0">School of Computing Science & Engineering</p>
                      </div>
                    </a>
                  </li>
                  <li class="item">
                     <a class="dropdown-item" href="#">
                      <div class="dropdown-item-Img">
                        <img src="assets/images/newImg/What-is-Financial-Management.png" class="img-fluid"> 
                      </div>
                      <div class="dropdown-item-Cnt">
                        <p class="mb-0">School of Computing Science & Engineering</p>
                      </div>
                    </a>
                  </li>
                  <hr class="dropdown-divider">
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="Programs" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Programs
                </a>
                <ul class="navCrousal navDrop owl-theme" aria-labelledby="Programs">
                   <li class="item">
                    <a class="dropdown-item" href="#">
                      <div class="dropdown-item-Img">
                        <img src="assets/images/newImg/computer-science.png" class="img-fluid"> 
                      </div>
                      <div class="dropdown-item-Cnt">
                        <p class="mb-0">School of Computing Science & Engineering</p>
                      </div>
                    </a>
                  </li>
                  <li class="item">
                     <a class="dropdown-item" href="#">
                      <div class="dropdown-item-Img">
                        <img src="assets/images/newImg/11.png" class="img-fluid"> 
                      </div>
                      <div class="dropdown-item-Cnt">
                        <p class="mb-0">School of Computing Science & Engineering</p>
                      </div>
                    </a>
                  </li>
                  <li class="item">
                     <a class="dropdown-item" href="#">
                      <div class="dropdown-item-Img">
                        <img src="assets/images/newImg/Gautam-Adani-IRMA-Speech.png" class="img-fluid"> 
                      </div>
                      <div class="dropdown-item-Cnt">
                        <p class="mb-0">School of Computing Science & Engineering</p>
                      </div>
                    </a>
                  </li>
                  <li class="item">
                     <a class="dropdown-item" href="#">
                      <div class="dropdown-item-Img">
                        <img src="assets/images/newImg/Civil-Engineering-Projects.png" class="img-fluid"> 
                      </div>
                      <div class="dropdown-item-Cnt">
                        <p class="mb-0">School of Computing Science & Engineering</p>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="Academics" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Academics
                </a>
                <div class="navCrousal">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-4 col-3 mb-4">
                        <div class="accedmicImg">
                          <img src="assets/images/newImg/computer-science2.png" class="img-fluid">
                        </div>
                      </div>
                      <div class="col-lg-8 col-9 mb-0 mb-md-0 resMob">
                        <div class="accedmicUl d-flex">
                          <div class="accedmicList">
                            <span>Link style 01</span>
                            <ul>
                              <li>
                                <a href="#" class="accedmicItem">School of Engineering </a>
                              </li>
                              <li>
                                <a href="#" class="accedmicItem">School of Agriculture</a>
                              </li>
                              <li>
                                <a href="#" class="accedmicItem">School of Architecture & Design</a>
                              </li>
                              <li>
                                <a href="#" class="accedmicItem">School of Basic & Applied Sciences </a>
                              </li>
                              <li>
                                <a href="#" class="accedmicItem">School of Business </a>
                              </li>
                              <li>
                                <a href="#" class="accedmicItem">School of Education</a>
                              </li>
                              <li>
                                <a href="#" class="accedmicItem">School of Finance & Commerce</a>
                              </li>
                              <li>
                                <a href="#" class="accedmicItem"> School of Hospitality & Tourism</a>
                              </li>
                            </ul>
                          </div>
                          <div class="accedmicList">
                            <span>Link style 02</span>
                            <ul>
                              <li>
                                <a href="#" class="accedmicItem">School of Computing Science & Engineering</a>
                              </li>
                              <li>
                                <a href="#" class="accedmicItem">School of Engineering </a>
                              </li>
                              <li>
                                <a href="#" class="accedmicItem">School of Agriculture </a>
                              </li>
                              <li>
                                <a href="#" class="accedmicItem">School of Architecture & Design</a>
                              </li>
                              <li>
                                <a href="#" class="accedmicItem">School of Basic & Applied Sciences</a>
                              </li>
                              <li>
                                <a href="#" class="accedmicItem">School of Business</a>
                              </li>
                              <li>
                                <a href="#" class="accedmicItem">School of Education </a>
                              </li>
                              <li>
                                <a href="#" class="accedmicItem">School of Finance & Commerce</a>
                              </li>
                              <li>
                                <a href="#" class="accedmicItem">School of Hospitality & Tourism</a>
                              </li>
                              <li>
                                <a href="#" class="accedmicItem">School of Law</a>
                              </li>
                            </ul>
                          </div>
                          <div class="accedmicList">
                            <span>Link style 03</span>
                            <ul>
                              <li>
                                <a href="#" class="accedmicItem">School of Business</a>
                              </li>
                              <li>
                                <a href="#" class="accedmicItem">School of Education</a>
                              </li>
                              <li>
                                <a href="#" class="accedmicItem">School of Finance & Commerce</a>
                              </li>
                              <li>
                                <a href="#" class="accedmicItem">School of Hospitality & Tourism</a>
                              </li>
                              <li>
                                <a href="#" class="accedmicItem">School of Law</a>
                              </li>
                              <li>
                                <a href="#" class="accedmicItem">School of Liberal Education</a>
                              </li>
                              <li>
                                <a href="#" class="accedmicItem">School of Medical and Allied Sciences</a>
                              </li>
                              <li>
                                <a href="#" class="accedmicItem">School of Nursing</a>
                              </li>
                              <li>
                                <a href="#" class="accedmicItem">University Polytechnic</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>

                    
                    
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="Research" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Research
                </a>
                <ul class="navCrousal navDrop owl-theme" aria-labelledby="Programs">
                   <li class="item">
                    <a class="dropdown-item" href="#">
                      <div class="dropdown-item-Img">
                        <img src="assets/images/newImg/computer-science.png" class="img-fluid"> 
                      </div>
                      <div class="dropdown-item-Cnt">
                        <p class="mb-0">School of Computing Science & Engineering</p>
                      </div>
                    </a>
                  </li>
                  <li class="item">
                     <a class="dropdown-item" href="#">
                      <div class="dropdown-item-Img">
                        <img src="assets/images/newImg/11.png" class="img-fluid"> 
                      </div>
                      <div class="dropdown-item-Cnt">
                        <p class="mb-0">School of Computing Science & Engineering</p>
                      </div>
                    </a>
                  </li>
                  <li class="item">
                     <a class="dropdown-item" href="#">
                      <div class="dropdown-item-Img">
                        <img src="assets/images/newImg/Gautam-Adani-IRMA-Speech.png" class="img-fluid"> 
                      </div>
                      <div class="dropdown-item-Cnt">
                        <p class="mb-0">School of Computing Science & Engineering</p>
                      </div>
                    </a>
                  </li>
                  <li class="item">
                     <a class="dropdown-item" href="#">
                      <div class="dropdown-item-Img">
                        <img src="assets/images/newImg/Civil-Engineering-Projects.png" class="img-fluid"> 
                      </div>
                      <div class="dropdown-item-Cnt">
                        <p class="mb-0">School of Computing Science & Engineering</p>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="Admission" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Admission
                </a>
                <ul class="navCrousal navDrop owl-theme" aria-labelledby="Programs">
                   <li class="item">
                    <a class="dropdown-item" href="#">
                      <div class="dropdown-item-Img">
                        <img src="assets/images/newImg/computer-science.png" class="img-fluid"> 
                      </div>
                      <div class="dropdown-item-Cnt">
                        <p class="mb-0">School of Computing Science & Engineering</p>
                      </div>
                    </a>
                  </li>
                  <li class="item">
                     <a class="dropdown-item" href="#">
                      <div class="dropdown-item-Img">
                        <img src="assets/images/newImg/11.png" class="img-fluid"> 
                      </div>
                      <div class="dropdown-item-Cnt">
                        <p class="mb-0">School of Computing Science & Engineering</p>
                      </div>
                    </a>
                  </li>
                  <li class="item">
                     <a class="dropdown-item" href="#">
                      <div class="dropdown-item-Img">
                        <img src="assets/images/newImg/Gautam-Adani-IRMA-Speech.png" class="img-fluid"> 
                      </div>
                      <div class="dropdown-item-Cnt">
                        <p class="mb-0">School of Computing Science & Engineering</p>
                      </div>
                    </a>
                  </li>
                  <li class="item">
                     <a class="dropdown-item" href="#">
                      <div class="dropdown-item-Img">
                        <img src="assets/images/newImg/Civil-Engineering-Projects.png" class="img-fluid"> 
                      </div>
                      <div class="dropdown-item-Cnt">
                        <p class="mb-0">School of Computing Science & Engineering</p>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
            <form class="d-flex">
              <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
              <a href="https://cilearningschool.com/galgotia/Admissions-Apply-now.php" class="btn applyNow" type="submit">Apply Now</a>
            </form>
          </div>
        </div>
      </nav>
     </div> 
    </header>