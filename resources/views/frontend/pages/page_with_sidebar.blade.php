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
				<div class="tab-content" id="v-pills-tabContent">
				    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
				    	<div class="abtPilsCnt">
				    		<h2 class="mb-5">Smt. Shakuntala Educational and Welfare Society</h2>
				    		<p class="mb-0">
				    			The Galgotias University achieved the Highest Benchmark towards Academic Excellence NAAC A+ Accreditation in First Cycle. This makes Galgotias the Only Private University in Uttar Pradesh with the Highest NAAC Score of 3.37 out of 4 Awarded by NAAC & the Highest Graded Autonomous Institute of the UGC, Ministry of Education, Govt. of India.<br><br> 

				    			The Galgotias University, Uttar Pradesh, sponsored by Smt. Shakuntala Educational and Welfare Society, has been established by state of Uttar Pradesh under section 2(f) of the UGC Act, 1956 vide The Galgotias University Uttar Pradesh Act, 14 of 2011. The University commenced its operation from the academic session 2011-12. <br><br>

				    			Galgotias University opened its door to the first batch in July of 2011 and in year 2022-2023, the university has grown to more than 15000 students. Galgotias University aspires to be and is on a fast-track to become an internationally recognized university that excels in multidisciplinary and interdisciplinary education, research and innovation, educating globally competitive graduates with potential to become leaders in their fields of endeavour. The graduates will have deep knowledge within their fields but will also excel in problem solving skills, will be aware of the societal context of their chosen profession, will function effectively in teams, will have good communications skills and above all, be life-long learners. <br><br>

				    			The 'students-first' philosophy is a big reason why Galgotias University is consistently ranked among India's top universities. The focus of Galgotias University is on low student-to-faculty ratio that promotes plenty of personal attention and mentoring opportunities. <br><br>

				    			The record-breaking placement at Galgotias this year is an apt testimony to its focus on upholding the highest academic standards right from selecting top faculty, introducing world-class pedagogical practices to personality development of the students.<br><br>

				    			 We have 13 schools, 19 Departments with 100+ programs in Polytechnic, Undergraduate, Postgraduate and PhD programs. We have approvals from various Councils [Pharmacy: Pharmacy Council of India (PCI); Law: Bar Council of India (BCI); Nursing: Indian Nursing Council (INC); Education: National Council for Teacher Education (NCTE); Hotel Management: Norms of National Council for Hotel Management (NCHM)].<br><br>

				    			  The University is recognized in band “Excellent” in ARIIA Ranking 2021, granted with UGC-12B status and DSIR SIRO. The University is also listed in 151-200 top universities of India, 147 in Engineering Category, in the band of 59 for Pharmacy and 93 for Management in NIRF INDIA RANKINGS 2021 as declared by MHRD. The accreditation of two programs (MBA & B.Pharma) has been granted by National Board of Accreditation (NBA) under Tier (I). Three programs (B.Tech. CSE, B.Tech. ME, B.Tech. EC) are under consideration by National Board of Accreditation (NBA) under Tier (II). Galgotias University is youngest in the country to get such accreditations by NBA. <br><br>

				    			  More than 10,000+ Publications, 1000+ Patents Published, 57 have been granted so far and many in pipeline.<br><br>

				    			   With around 1000 plus faculty members, the university also have in campus five-star Boys Hostel accommodating around 1400 students and off-campus girls’ hostel to accommodate 250 plus girls.
				    		</p>
				    	</div>
				    </div>
				    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
				    	<div class="abtPilsCnt">
				    		<div class="abtPilsCntBtm mb-md-5 mb-4">
				    			<h2 class="mb-md-5 mb-4">Galgotias University</h2>
                                <div class="row bannercntnt"
                                    style="background: url(./assets/images/OLO2DT0.png) 100% 0 no-repeat;">
                                    <div class="col-lg-5 mb-4">
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
                                    <div class="col-lg-7 mb-4">
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
                            <div class="abtPilsCntBtm  mb-5 pt-md-5 pt-0">
                            	<h2 class="mb-md-5 mb-4">Core Values</h2>
                            	<div class="row">
                            		<div class="col-lg-4 mb-4 px-md-4">
                            			<div class="coreBox">
                            				<div class="coreImg mb-4"><img src="{{ dsld_static_asset('frontend/assets/images/newImg/core.svg') }}"> </div>
                            				<div class="coreCnt">
                            					<h4 class="mb-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</h4>
                            					<p class="mb-0">The Galgotias University achieved the Highest Benchmark towards Academic Excellence NAAC A+ Accreditation in First Cycle.</p>
                            				</div>
                            			</div>
                            		</div>
                            		<div class="col-lg-4 mb-4 px-md-4">
                            			<div class="coreBox">
                            				<div class="coreImg mb-4"><img src="{{ dsld_static_asset('frontend/assets/images/newImg/core.svg') }}"> </div>
                            				<div class="coreCnt">
                            					<h4 class="mb-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</h4>
                            					<p class="mb-0">The Galgotias University achieved the Highest Benchmark towards Academic Excellence NAAC A+ Accreditation in First Cycle.</p>
                            				</div>
                            			</div>
                            		</div>
                            		<div class="col-lg-4 mb-4 px-md-4">
                            			<div class="coreBox">
                            				<div class="coreImg mb-4"><img src="{{ dsld_static_asset('frontend/assets/images/newImg/core.svg') }}"> </div>
                            				<div class="coreCnt">
                            					<h4 class="mb-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</h4>
                            					<p class="mb-0">The Galgotias University achieved the Highest Benchmark towards Academic Excellence NAAC A+ Accreditation in First Cycle.</p>
                            				</div>
                            			</div>
                            		</div>
                            	</div>
                            </div>
                            <div class="dharma mb-5">
                            	<h2 class="mb-md-5 mb-4">Dharma</h2>
                            	<div class="row">
                            		<div class="col-lg-4 col-md-6 mb-md-5 mb-4">
                            			<div class="dharmaCnt">
                            				<h4 class="mb-4">01</h4>
                            				<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud e</p>
                            			</div>
                            		</div>
                            		<div class="col-lg-4 col-md-6 mb-md-5 mb-4">
                            			<div class="dharmaCnt">
                            				<h4 class="mb-4">01</h4>
                            				<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud e</p>
                            			</div>
                            		</div>
                            		<div class="col-lg-4 col-md-6 mb-md-5 mb-4">
                            			<div class="dharmaCnt">
                            				<h4 class="mb-4">01</h4>
                            				<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud e</p>
                            			</div>
                            		</div>
                            		<div class="col-lg-4 col-md-6 mb-md-5 mb-4">
                            			<div class="dharmaCnt">
                            				<h4 class="mb-4">01</h4>
                            				<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud e</p>
                            			</div>
                            		</div>
                            		<div class="col-lg-4 col-md-6 mb-md-5 mb-4">
                            			<div class="dharmaCnt">
                            				<h4 class="mb-4">01</h4>
                            				<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud e</p>
                            			</div>
                            		</div>
                            		<div class="col-lg-4 col-md-6 mb-md-5 mb-4">
                            			<div class="dharmaCnt">
                            				<h4 class="mb-4">01</h4>
                            				<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud e</p>
                            			</div>
                            		</div>
                            	</div>
                            </div>
                            <div class="abtPilsCntBtm  mb-5 pt-md-5 pt-0">
                            	<h2 class="mb-md-5 mb-4">Organisational Chart</h2>
                            	<div class="chart">
                            		<div class="chartCnt">
                            			<div class="chartLeft">
                            				<span>VERSION</span>
                            				<strong>6.1.2</strong>
                            			</div>
                            			<div class="chartRight">
                            				<p class="mb-0">Effective Leadership is reflected in various Institutional Practices such as Decentralization and Participative Management</p>
                            			</div>
                            		</div>
                            		<div class="chartImg pos-rel">
                            			<img src="{{ dsld_static_asset('frontend/assets/images/newImg/ORGANIZATIONAL-CHART-GU.png') }}" class="img-fluid">
                            			<span class="d-flex align-items-center viewL">
                            				<i class="fa-solid fa-eye me-2"></i>
                            				<p class="mb-0">View Larger</p>
                            			</span> 
                            		</div>
                            	</div>
                            </div>
				    	</div>
				    </div>
				    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
				    	<div class="abtPilsCnt">
				    		<h2 class="mb-5">Our Legacy</h2>
				    		<div class="lagacy">
				    			<div class="lagacyImg mb-5"><img src="{{ dsld_static_asset('frontend/assets/images/newImg/lagacy.png') }}" class="img-fluid"> </div>
				    			<div class="lagacyCnt">
				    				<blockquote>
				    					"The mission of School of Computing Science and Engineering (SCSE) is to try obstinately for accomplishing distinction in computing disciplines. It is being pursued through its gamut of academic programmes in computing of contemporary standards. The main objective is to make computing graduates with capability to design and develop systems involving the integration of software and hardware devices through innovative approaches to programming and solving problems of an organization." 
				    				</blockquote>
				    				<hr>
				    				<p class="mb-5">The mission of School of Computing Science and Engineering (SCSE) is to try obstinately for accomplishing distinction in computing disciplines. It is being pursued through its gamut of academic programmes in computing of contemporary standards. The main objective is to make computing graduates with capability to design and develop systems involving the integration of software and hardware devices through innovative approaches to programming and solving problems of an organization." SCSE is committed to academic excellence, with special focus on teaching-learning process, research and holistic development through our Fully Flexible Credit Based System (FFCBS). We inculcate multi-disciplinary and inter-disciplinary competence and leadership skills in our students. SCSE aims to equip the students with the ability and skills to analyze, design and develop computer systems and their applications, with a curriculum that has a balanced emphasis on theory, practical’s and projects. The focus will be on development and strengthening systems thinking, problem solving, analysis, design, research, team work, communication skills, and readiness for lifelong learning in areas of Artificial Intelligence, Machine Learning, Deep Learning, Cloud Computing, Cyber Security, Internet of Things. The courses run by the Department will use mixed techniques of interactive lectures, tutorials, laboratory work, guided case studies, literature surveys and project work that require team work, critical and creative thinking. Creativity flourishes in an atmosphere that is free, friendly and above all, democratic and participatory in nature.</p>
				    				<div class="d-flex glgLag">
				    					<div class="glgLagImg"><img src="{{ dsld_static_asset('frontend/assets/images/newImg/glgMin.png') }}" class="img-fluid"> </div>
				    					<div class="glgLagCnt">
				    						<p>"The mission of School of Computing Science and Engineering (SCSE) is to try obstinately for accomplishing distinction in computing disciplines. It is being pursued through its gamut of academic programmes in computing of contemporary standards. The main objective is to make computing graduates with capability to design and develop systems involving "</p>
				    					</div>
				    				</div>
				    			</div> 
				    		</div>
				    	</div>
				    </div>
				    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
				    	<div class="abtPilsCnt">
				    		<h2 class="mb-5">Leadership</h2>
				    		<div class="leaderDiv row">
				    			<div class="col-lg-6 mb-5 pe-lg-5">
				    				<div class="ldrBox">
				    					<div class="ldrBoxImg mb-4"><img src="{{ dsld_static_asset('frontend/assets/images/newImg/pic-suneel-galgotia.png') }}" class="img-fluid w-100"> </div>
				    					<div class="ldrBoxCnt">
				    						<h4 class="mb-mb-3 mb-2">MR. SUNEEL GALGOTIA</h4>
				    						<p class="mb-4">Chancellor, Galgotias University</p>
				    						<a href="https://cilearningschool.com/galgotia/About-Us–4.php" class="explore mb-0">READ MORE</a>
				    					</div>
				    				</div>
				    			</div>
				    			<div class="col-lg-6 mb-5 ps-lg-5">
				    				<div class="ldrBox">
				    					<div class="ldrBoxImg mb-4"><img src="{{ dsld_static_asset('frontend/assets/images/newImg/dhruv-galgotiya-th.png') }}" class="img-fluid w-100"> </div>
				    					<div class="ldrBoxCnt">
				    						<h4 class="mb-mb-3 mb-2">MR. DHRUV GALGOTIA</h4>
				    						<p class="mb-4">CEO, Galgotias University</p>
				    						<a href="https://cilearningschool.com/galgotia/About-Us–4.php" class="explore mb-0">READ MORE</a>
				    					</div>
				    				</div>
				    			</div>
				    			<div class="col-lg-6 mb-5 pe-lg-5">
				    				<div class="ldrBox">
				    					<div class="ldrBoxImg mb-4"><img src="{{ dsld_static_asset('frontend/assets/images/newImg/malihar.png') }}" class="img-fluid w-100"> </div>
				    					<div class="ldrBoxCnt">
				    						<h4 class="mb-mb-3 mb-2">DR. K. MALLIKHARJUNA BABU</h4>
				    						<p class="mb-4">Vice Chancellor, Galgotias University</p>
				    						<a href="https://cilearningschool.com/galgotia/About-Us–4.php" class="explore mb-0">READ MORE</a>
				    					</div>
				    				</div>
				    			</div>
				    			<div class="col-lg-6 mb-5 ps-lg-5">
				    				<div class="ldrBox">
				    					<div class="ldrBoxImg mb-4"><img src="{{ dsld_static_asset('frontend/assets/images/newImg/Dr-Avadhesh-thumb.png') }}" class="img-fluid w-100"> </div>
				    					<div class="ldrBoxCnt">
				    						<h4 class="mb-mb-3 mb-2">PROF. (DR) AVADHESH KUMAR</h4>
				    						<p class="mb-4">Pro Vice Chancellor (Planning)</p>
				    						<a href="https://cilearningschool.com/galgotia/About-Us–4.php" class="explore mb-0">READ MORE</a>
				    					</div>
				    				</div>
				    			</div>
				    		</div>
				    	</div>
				    </div>
				    <div class="tab-pane fade" id="v-pills-Governance" role="tabpanel" aria-labelledby="v-pills-Governance-tab">.Governance..</div>
				    <div class="tab-pane fade" id="v-pills-Accreditations" role="tabpanel" aria-labelledby="v-pills-Accreditations-tab">.Accreditations..</div>
				    <div class="tab-pane fade" id="v-pills-Awards" role="tabpanel" aria-labelledby="v-pills-Awards-tab">.Awards..</div>
				    <div class="tab-pane fade" id="v-pills-Mandatory" role="tabpanel" aria-labelledby="v-pills-Mandatory-tab">.Mandatory..</div>
				    <div class="tab-pane fade" id="v-pills-Policies" role="tabpanel" aria-labelledby="v-pills-Policies-tab">.Policies..</div>
				    <div class="tab-pane fade" id="v-pills-Partnerships" role="tabpanel" aria-labelledby="v-pills-Partnerships-tab">.Partnerships..</div>
				    <div class="tab-pane fade" id="v-pills-Virutal" role="tabpanel" aria-labelledby="v-pills-Virutal-tab">.Virutal..</div>
				    <div class="tab-pane fade" id="v-pills-Learning" role="tabpanel" aria-labelledby="v-pills-Learning-tab">.Learning..</div>
				    <div class="tab-pane fade" id="v-pills-Work" role="tabpanel" aria-labelledby="v-pills-Work-tab">.Work..</div>
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