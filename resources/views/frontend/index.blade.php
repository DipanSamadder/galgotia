@extends('frontend.layouts.app')

@section('content')

@include('frontend.partials.slider-banner-section')

@php 

 $schoolsection_text_0 = dsld_page_meta_value_by_meta_key('wearegalgotias_schoolsection_text_0', $page->id);
 $schoolsection_text_1 = dsld_page_meta_value_by_meta_key('wearegalgotias_schoolsection_text_1', $page->id);
 $schoolsection_editor_2 = dsld_page_meta_value_by_meta_key('wearegalgotias_schoolsection_editor_2', $page->id);
 $schoolsection_button_3 = dsld_page_meta_value_by_meta_key('wearegalgotias_schoolsection_button_3', $page->id);
 $schoolsection_text_4 = dsld_page_meta_value_by_meta_key('wearegalgotias_schoolsection_text_4', $page->id);

@endphp

@if( $schoolsection_editor_2 !='Null' && $schoolsection_editor_2 !='')
<section class="strive">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-lg-6 mb-4">
				<div class="striveForm">
					<div class="striveFormIn">
						@if(!empty($schoolsection_text_0))
							<span>{{ $schoolsection_text_0 }}</span>
						@endif
						@if(!empty($schoolsection_text_1))
							<h2 class="mb-4"><?php echo htmlspecialchars_decode($schoolsection_text_1); ?></h2>
						@endif
						@if(!empty($schoolsection_editor_2))
							<p class="mb-4">
								<?php echo htmlspecialchars_decode($schoolsection_editor_2); ?>
							</p>
						@endif
						@if(!empty($schoolsection_button_3))
							<a href="{{ $schoolsection_button_3 }}" class="explore mb-5">{{ $schoolsection_text_4 }}</a>
						@endif
						
						
						<form class="exploreForm">
							<label>Find Course</label>
							<div class="finEx">
								<input type="text" name="explore" class="exploreInput">
							    <i class="fa-solid fa-magnifying-glass"></i>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-lg-6 z9">
				<div class="striveColmn">
					<div class="row">
						<div class="col-md-6 mb-md-5 mb-4">
							<div class="strColCnt">
								<p class="mb-4">School of Computing Science & Engineering </p>
								<div class="strColImg mb-2"><img src="assets/images/computer-science.png" class="img-fluid"> </div>
							</div>
						</div>
						<div class="col-md-6 mb-md-5 mb-4">
							<div class="strColCnt">
								<p class="mb-4">School of Engineering </p>
								<div class="strColImg mb-2"><img src="assets/images/School-of-Engineering.png" class="img-fluid"> </div>
							</div>
						</div>
						<div class="col-md-6 mb-md-5 mb-4">
							<div class="strColCnt">
								<p class="mb-4">School of Agriculture </p>
								<div class="strColImg mb-2"><img src="assets/images/Gautam-Adani-IRMA-Speech.png" class="img-fluid"> </div>
							</div>
						</div>
						<div class="col-md-6 mb-md-5 mb-4">
							<div class="strColCnt">
								<p class="mb-4">School of Architecture & Design </p>
								<div class="strColImg mb-2"><img src="assets/images/Civil-Engineering-Projects.png" class="img-fluid"> </div>
							</div>
						</div>
						<div class="col-md-6 mb-md-5 mb-4">
							<div class="strColCnt">
								<p class="mb-4">School of Basic & Applied Sciences </p>
								<div class="strColImg mb-2"><img src="assets/images/basic-applied.png" class="img-fluid"> </div>
							</div>
						</div>
						<div class="col-md-6 mb-md-5 mb-4">
							<div class="strColCnt">
								<p class="mb-4">School of Business </p>
								<div class="strColImg mb-2"><img src="assets/images/school-of-busines.png" class="img-fluid"> </div>
							</div>
						</div>
						<div class="col-md-6 mb-md-5 mb-4">
							<div class="strColCnt">
								<p class="mb-4">School of Education </p>
								<div class="strColImg mb-2"><img src="assets/images/school-of-education.png" class="img-fluid"> </div>
							</div>
						</div>
						<div class="col-md-6 mb-md-5 mb-4">
							<div class="strColCnt">
								<p class="mb-4">School of Finance & Commerce </p>
								<div class="strColImg mb-2"><img src="assets/images/What-is-Financial-Management.png" class="img-fluid"> </div>
							</div>
						</div>
						<div class="col-md-6 mb-md-5 mb-4">
							<div class="strColCnt">
								<p class="mb-4">School of Hospitality & Tourism </p>
								<div class="strColImg mb-2"><img src="assets/images/computer-science.png" class="img-fluid"> </div>
							</div>
						</div>
						<div class="col-md-6 mb-md-5 mb-4">
							<div class="strColCnt">
								<p class="mb-4">School of Law  </p>
								<div class="strColImg mb-2"><img src="assets/images/computer-science.png" class="img-fluid"> </div>
							</div>
						</div>
						<div class="col-md-6 mb-md-5 mb-4">
							<div class="strColCnt">
								<p class="mb-4">School of Liberal Education  </p>
								<div class="strColImg mb-2"><img src="assets/images/computer-science.png" class="img-fluid"> </div>
							</div>
						</div>
						<div class="col-md-6 mb-md-5 mb-4">
							<div class="strColCnt">
								<p class="mb-4">School of Medical and Allied Sciences  </p>
								<div class="strColImg mb-2"><img src="assets/images/computer-science.png" class="img-fluid"> </div>
							</div>
						</div>
						<div class="col-md-6 mb-md-5 mb-4">
							<div class="strColCnt">
								<p class="mb-4">School of Nursing  </p>
								<div class="strColImg mb-2"><img src="assets/images/computer-science.png" class="img-fluid"> </div>
							</div>
						</div>
						<div class="col-md-6 mb-md-5 mb-4">
							<div class="strColCnt">
								<p class="mb-4">University Polytechnic  </p>
								<div class="strColImg mb-2"><img src="assets/images/computer-science.png" class="img-fluid"> </div>
							</div>
						</div>
					</div>
					<button class="viewAll">VIEW ALL SCHOOLS</button>
				</div>
			</div>
		</div>
	</div>
</section>
@endif

@php 

 $building_file_0 = dsld_page_meta_value_by_meta_key('wearegalgotias_building_file_0', $page->id);
 $building_text_1 = dsld_page_meta_value_by_meta_key('wearegalgotias_building_text_1', $page->id);
 $building_editor_2 = dsld_page_meta_value_by_meta_key('wearegalgotias_building_editor_2', $page->id);
 $building_text_3 = dsld_page_meta_value_by_meta_key('wearegalgotias_building_text_3', $page->id);
 $building_button_4 = dsld_page_meta_value_by_meta_key('wearegalgotias_building_button_4', $page->id);
 $building_text_5 = dsld_page_meta_value_by_meta_key('wearegalgotias_building_text_5', $page->id);
 $building_text_6 = dsld_page_meta_value_by_meta_key('wearegalgotias_building_text_6', $page->id);
 $building_text_7 = dsld_page_meta_value_by_meta_key('wearegalgotias_building_text_7', $page->id);
 $building_text_8 = dsld_page_meta_value_by_meta_key('wearegalgotias_building_text_8', $page->id);
 $building_text_9 = dsld_page_meta_value_by_meta_key('wearegalgotias_building_text_9', $page->id);

@endphp

@if( $building_editor_2 !='Null' && $building_editor_2 !='')
<section class="nation z9 pos-rel" style="background: url({{ dsld_uploaded_asset( $building_file_0) }}) 0 0 no-repeat;background-size: cover;">
	<div class="container">
		<div class="row align-items-end">
			<div class="col-lg-7 col-md-8 mb-4">
				<div class="nationCnt">
					@if(!empty($schoolsection_text_0))
						<h2 class="mb-4">{{ $schoolsection_text_0 }}</h2>
					@endif
					@if(!empty($building_editor_2))
						<p class="mb-5"><?php echo htmlspecialchars_decode($building_editor_2); ?></p>
					@endif
					@if(!empty($building_button_4))
					<a href="{{ $building_button_4 }}" class="whoWeAre">{{ $schoolsection_text_0 }}</a>
					@endif
				</div>
			</div>
			<div class="col-lg-5 col-md-4 mb-4">
				<div class="text-end">
					<div class="nationCounter">
						
						@if(!empty($building_text_5))
							<div class="counterBox">
								<div class="cnterBoxCnt"> 
									<h4> <?php echo htmlspecialchars_decode($building_text_5); ?></h4>
									<p>Brilliant Students</p>
								</div>
							</div>
						@endif

						@if(!empty($building_text_6))
							<div class="counterBox">
								<div class="cnterBoxCnt"> 
									<h4> <?php echo htmlspecialchars_decode($building_text_6); ?></h4>
									<p>Acre Campus</p>
								</div>
							</div>
						@endif
						@if(!empty($building_text_7))
							<div class="counterBox">
								<div class="cnterBoxCnt"> 
									<h4> <?php echo htmlspecialchars_decode($building_text_7); ?></h4>
									<p>Years of Legacy</p>
								</div>
							</div>
						@endif
						@if(!empty($building_text_8))
							<div class="counterBox">
								<div class="cnterBoxCnt"> 
									<h4> <?php echo htmlspecialchars_decode($building_text_8); ?></h4>
									<p>Awards</p>
								</div>
							</div>
						@endif
						@if(!empty($building_text_9))
							<div class="counterBox">
								<div class="cnterBoxCnt"> 
									<h4> <?php echo htmlspecialchars_decode($building_text_9); ?></h4>
									<p>Recruiters onboard</p>
								</div>
							</div>
						@endif
					</div>
				</div>
			</div> 
		</div>
	</div>
</section>
@endif

@php 

 $fullwidthads_editor_0 = dsld_page_meta_value_by_meta_key('wearegalgotias_fullwidthads_editor_0', $page->id);
 $fullwidthads_text_1 = dsld_page_meta_value_by_meta_key('wearegalgotias_fullwidthads_text_1', $page->id);
 $fullwidthads_button_2 = dsld_page_meta_value_by_meta_key('wearegalgotias_fullwidthads_button_2', $page->id);
 $fullwidthads_file_3 = dsld_page_meta_value_by_meta_key('wearegalgotias_fullwidthads_file_3', $page->id);


@endphp

@if( $fullwidthads_editor_0 !='Null' && $fullwidthads_editor_0 !='')
<section class="philosophy z9 pos-rel">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3 col-md-5 mb-md-0 mb-4">
				<div class="fstImg"><img src="{{ dsld_static_asset('frontend/assets/images/she.png') }}" class="img-fluid"> </div>
			</div>
			<div class="col-lg-5 col-md-7 mb-md-0 mb-4">
				<div class="fstCnt">
					<div class="fstCntBtm">
						@if(!empty($fullwidthads_editor_0))
							<h4 class="mb-5"><?php echo htmlspecialchars_decode($fullwidthads_editor_0); ?></h4>
						@endif
						@if(!empty($fullwidthads_button_2))
							<a href="{{ $fullwidthads_button_2 }}" class="viewAll">{{ $fullwidthads_text_1 }}</a>
						@endif
					</div>
				</div>
			</div>
			<div class="col-lg-4 mb-md-0 mb-4">
				@if(!empty($fullwidthads_file_3))
					<div class="lstImg text-end"><img src="{{ dsld_uploaded_asset( $fullwidthads_file_3) }}" class="img-fluid"> </div>
				@endif
				
			</div>
		</div>
	</div>
</section>
@endif

@php 

 $research_file_0 = dsld_page_meta_value_by_meta_key('wearegalgotias_research_file_0', $page->id);
 $research_text_1 = dsld_page_meta_value_by_meta_key('wearegalgotias_research_text_1', $page->id);
 $research_editor_2 = dsld_page_meta_value_by_meta_key('wearegalgotias_research_editor_2', $page->id);
 $research_text_3 = dsld_page_meta_value_by_meta_key('wearegalgotias_research_text_3', $page->id);
 $research_button_4 = dsld_page_meta_value_by_meta_key('wearegalgotias_research_button_4', $page->id);

@endphp

@if( $research_editor_2 !='Null' && $research_editor_2 !='')
<section class="research pos-rel">
	<div class="container">
		<div class="row">
			<div class="col-md-6 mb-4"></div>
			<div class="col-md-6 mb-4">
				<div class="nationCnt">
					@if(!empty($research_text_1))
						<h2 class="mb-4">{{ $research_text_1 }}</h2>
					@endif
					
					@if(!empty($research_editor_2))
						<p class="mb-5"><?php echo htmlspecialchars_decode($research_editor_2); ?></p>
					@endif
					
					@if(!empty($research_button_4))
						<a href="{{ $research_button_4 }}" class="whoWeAre">{{ $research_text_3 }}</a>
					@endif
				</div>
			</div>
		</div>
	</div>
</section>
@endif


@php 

 $top3box_file_0 = dsld_page_meta_value_by_meta_key('wearegalgotias_top3box_file_0', $page->id);
 $top3box_text_1 = dsld_page_meta_value_by_meta_key('wearegalgotias_top3box_text_1', $page->id);
 $top3box_editor_2 = dsld_page_meta_value_by_meta_key('wearegalgotias_top3box_editor_2', $page->id);
 $top3box_button_3 = dsld_page_meta_value_by_meta_key('wearegalgotias_top3box_button_3', $page->id);
 $top3box_file_4 = dsld_page_meta_value_by_meta_key('wearegalgotias_top3box_file_4', $page->id);
 $top3box_text_5 = dsld_page_meta_value_by_meta_key('wearegalgotias_top3box_text_5', $page->id);
 $top3box_editor_6 = dsld_page_meta_value_by_meta_key('wearegalgotias_top3box_editor_6', $page->id);
 $top3box_button_7 = dsld_page_meta_value_by_meta_key('wearegalgotias_top3box_button_7', $page->id);
 $top3box_file_8 = dsld_page_meta_value_by_meta_key('wearegalgotias_top3box_file_8', $page->id);
 $top3box_text_9 = dsld_page_meta_value_by_meta_key('wearegalgotias_top3box_text_9', $page->id);
 $top3box_editor_10 = dsld_page_meta_value_by_meta_key('wearegalgotias_top3box_editor_10', $page->id);
 $top3box_button_11 = dsld_page_meta_value_by_meta_key('wearegalgotias_top3box_button_11', $page->id);

@endphp

@if( $top3box_file_0 !='')
<section class="z9 pos-rel innovationSec">
	<div class="innovation">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-7 mb-4">
					<div class="blogLeft">
						@if(!empty($top3box_file_0))
							<div class="blgBoxImg"><img src="{{ dsld_uploaded_asset( $top3box_file_0) }}" class="img-fluid"> </div>
						@endif
						
						<div class="blgBoxCnt">

							@if(!empty($top3box_text_1))
								<h4>{{ $top3box_text_1 }}</h4>
							@endif
							
							@if(!empty($top3box_editor_2))
								<p class="mb-5"><?php echo htmlspecialchars_decode($top3box_editor_2); ?></p>
							@endif
							
							@if(!empty($top3box_button_3))
								<a href="{{ $top3box_button_3 }}" class="knowMore">know More <i class="fa-solid fa-chevron-right ms-2"></i></a>
							@endif
						
						</div>
					</div>
				</div>
				<div class="col-lg-5 mb-4">
					<div class="blogRightRow">
						<div class="row">
							<div class="col-lg-12 col-md-6">


								<div class="blogRight mb-4">
									@if(!empty($top3box_file_4))
										<div class="blgBoxImg"><img src="{{ dsld_uploaded_asset( $top3box_file_4) }}" class="img-fluid"> </div>
									@endif
									
									
									<div class="blgBoxCnt">
										@if(!empty($top3box_text_5))
											<h4>{{ $top3box_text_5 }}</h4>
										@endif
										
										@if(!empty($top3box_editor_6))
											<p class="mb-5"><?php echo htmlspecialchars_decode($top3box_editor_6); ?></p>
										@endif
									</div>

								</div>


							</div>
							<div class="col-lg-12 col-md-6">


								<div class="blogRight mb-0">
									@if(!empty($top3box_file_8))
										<div class="blgBoxImg"><img src="{{ dsld_uploaded_asset( $top3box_file_8) }}" class="img-fluid"> </div>
									@endif
									
									
									<div class="blgBoxCnt">
										@if(!empty($top3box_text_9))
											<h4>{{ $top3box_text_9 }}</h4>
										@endif
										
										@if(!empty($top3box_editor_10))
											<p class="mb-5"><?php echo htmlspecialchars_decode($top3box_editor_10); ?></p>
										@endif
									</div>
								</div>


							</div>
						</div>
					</div>
				</div>
			</div> 
		</div>
	</div>
</section>
@endif


@php 

 $placements_text_0 = dsld_page_meta_value_by_meta_key('wearegalgotias_placements_text_0', $page->id);
 $placements_editor_1 = dsld_page_meta_value_by_meta_key('wearegalgotias_placements_editor_1', $page->id);
 $companies_file_repeter_0 = dsld_page_meta_value_by_meta_key('wearegalgotias_companies_file_repeter_0', $page->id);

@endphp

@if( $placements_text_0 !='')

<section class="placement z9 pos-rel">
	<div class="container">
		<div class="tpHead mb-5">
			@if(!empty($placements_text_0))
				<h2 class="mb-3">{{ $placements_text_0 }}</h2>
			@endif
			@if(!empty($placements_editor_1))
				<p class="mb-0"><?php echo htmlspecialchars_decode($placements_editor_1); ?></p>
			@endif
		</div>
		<div class="tpCounter d-flex align-items-center mb-2">

			@if(!empty($building_text_5))
				<div class="tpCntrBox"> 
					<h4 class="mb-0"> <?php echo htmlspecialchars_decode($building_text_5); ?></h4>
					<p class="mb-0">Brilliant Students</p>
				</div>
			@endif

			@if(!empty($building_text_6))
				<div class="tpCntrBox"> 
					<h4 class="mb-0"> <?php echo htmlspecialchars_decode($building_text_6); ?></h4>
					<p class="mb-0">Acre Campus</p>
				</div>
			@endif
			@if(!empty($building_text_7))
				<div class="tpCntrBox"> 
					<h4 class="mb-0"> <?php echo htmlspecialchars_decode($building_text_7); ?></h4>
					<p class="mb-0">Years of Legacy</p>
				</div>
			@endif
			@if(!empty($building_text_8))
				<div class="tpCntrBox"> 
					<h4 class="mb-0"> <?php echo htmlspecialchars_decode($building_text_8); ?></h4>
					<p class="mb-0">Awards</p>
				</div>
			@endif
			@if(!empty($building_text_9))
				<div class="tpCntrBox"> 
					<h4 class="mb-0"> <?php echo htmlspecialchars_decode($building_text_9); ?></h4>
					<p class="mb-0">Recruiters onboard</p>
				</div>
			@endif
		</div>
		<div class="lpaCrousal owl-theme">
			<div class="lpaRow row mb-4 item">
				<div class="col-lg-6 pe-lg-4 pe-md-3 mb-4">
					<div class="lpaImg"><img src="assets/images/lpa1.png" class="img-fluid"> </div>
				</div>
				<div class="col-lg-6 ps-lg-4 ps-md-3">
					<div class="lpaRow">
						<div class="row">
							<div class="col-6 mb-4">
								<div class="pos-rel">
									<div class="minLpaImg"><img src="assets/images/minLpa.png" class="img-fluid"> </div>
									<div class="minLpaCnt">
										<h4 class="mb-0">11.50 LPA</h4>
										<p class="mb-0">NAME GOES HERE <br> <span>Placed in Wipro</span> </p>
									</div> 
								</div>
							</div>
							<div class="col-6 mb-4">
								<div class="pos-rel">
									<div class="minLpaImg"><img src="assets/images/minLpa.png" class="img-fluid"> </div>
									<div class="minLpaCnt">
										<h4 class="mb-0">11.50 LPA</h4>
										<p class="mb-0">NAME GOES HERE <br> <span>Placed in Wipro</span></p>
									</div> 
								</div> 
							</div>
							<div class="col-6 mb-4">
								<div class="pos-rel">
									<div class="minLpaImg"><img src="assets/images/minLpa.png" class="img-fluid"> </div>
									<div class="minLpaCnt">
										<h4 class="mb-0">11.50 LPA</h4>
										<p class="mb-0">NAME GOES HERE <br><span>Placed in Wipro</span></p>
									</div> 
								</div>
							</div>
							<div class="col-6 mb-4">
								<div class="pos-rel">
									<div class="minLpaImg"><img src="assets/images/minLpa.png" class="img-fluid"> </div>
									<div class="minLpaCnt">
										<h4 class="mb-0">11.50 LPA</h4>
										<p class="mb-0">NAME GOES HERE <br> <span>Placed in Wipro</span></p>
									</div> 
								</div> 
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="lpaRow row mb-4 item">
				<div class="col-lg-6 ps-lg-4 ps-md-3">
					<div class="lpaRow">
						<div class="row">
							<div class="col-6 mb-4">
								<div class="pos-rel">
									<div class="minLpaImg"><img src="assets/images/minLpa.png" class="img-fluid"> </div>
									<div class="minLpaCnt">
										<h4 class="mb-0">11.50 LPA</h4>
										<p class="mb-0">NAME GOES HERE <br> <span>Placed in Wipro</span> </p>
									</div> 
								</div>
							</div>
							<div class="col-6 mb-4">
								<div class="pos-rel">
									<div class="minLpaImg"><img src="assets/images/minLpa.png" class="img-fluid"> </div>
									<div class="minLpaCnt">
										<h4 class="mb-0">11.50 LPA</h4>
										<p class="mb-0">NAME GOES HERE <br> <span>Placed in Wipro</span></p>
									</div> 
								</div> 
							</div>
							<div class="col-6 mb-4">
								<div class="pos-rel">
									<div class="minLpaImg"><img src="assets/images/minLpa.png" class="img-fluid"> </div>
									<div class="minLpaCnt">
										<h4 class="mb-0">11.50 LPA</h4>
										<p class="mb-0">NAME GOES HERE <br><span>Placed in Wipro</span></p>
									</div> 
								</div>
							</div>
							<div class="col-6 mb-4">
								<div class="pos-rel">
									<div class="minLpaImg"><img src="assets/images/minLpa.png" class="img-fluid"> </div>
									<div class="minLpaCnt">
										<h4 class="mb-0">11.50 LPA</h4>
										<p class="mb-0">NAME GOES HERE <br> <span>Placed in Wipro</span></p>
									</div> 
								</div> 
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 pe-lg-4 pe-md-3 mb-4">
					<div class="lpaImg"><img src="assets/images/lpa1.png" class="img-fluid"> </div>
				</div>
			</div>
		</div>
		<div class="tpCompanie">
			<h4 class="mb-4">Top companies</h4>
			<div class="tpCompanieRow d-flex">
				@if(is_array(json_decode($companies_file_repeter_0, true)) && count(json_decode($companies_file_repeter_0, true)) > 0)
					@foreach(json_decode($companies_file_repeter_0, true) as $key => $value)
						<div class="tpCompanieBox">
							<img src="{{ dsld_uploaded_asset(json_decode($companies_file_repeter_0, true)[$key]) }}" class="img-fluid">
						</div>
					@endforeach
				@endif
			</div>
		</div>
	</div>
</section>
@endif

@php 

 $playbutton_file_0 = dsld_page_meta_value_by_meta_key('wearegalgotias_playbutton_file_0', $page->id);
 $playbutton_text_1 = dsld_page_meta_value_by_meta_key('wearegalgotias_playbutton_text_1', $page->id);
 $playbutton_editor_2 = dsld_page_meta_value_by_meta_key('wearegalgotias_playbutton_editor_2', $page->id);

@endphp

@if( $playbutton_text_1 !='')
<section class="z9 pos-rel vibrant" style="background: url({{ dsld_uploaded_asset($playbutton_file_0) }}) 0 0 no-repeat;
    background-size: cover;">
	<div class="container">
		<div class="nationCnt">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-5 mb-4">
					
					<div class="play text-center">
						<button class="playBtn"><img src="{{ dsld_static_asset('frontend/assets/images/play.png') }}" class="img-fluid"> </button>
					</div>
				</div>
				<div class="col-lg-6 col-md-7 mb-4 py-5">
					@if(!empty($playbutton_text_1))
						<h2 class="mb-4">{{ $playbutton_text_1 }}</h2>
					@endif
					
					@if(!empty($playbutton_editor_2))
						<p class="mb-0"><?php echo htmlspecialchars_decode($playbutton_editor_2); ?></p>
					@endif
					
				</div>
			</div>
		</div>
	</div>
</section>
@endif

@php 
 $imagebox_file_0 = dsld_page_meta_value_by_meta_key('wearegalgotias_3imagebox_file_0', $page->id);
 $imagebox_text_1 = dsld_page_meta_value_by_meta_key('wearegalgotias_3imagebox_text_1', $page->id);
 $imagebox_editor_2 = dsld_page_meta_value_by_meta_key('wearegalgotias_3imagebox_editor_2', $page->id);
 $imagebox_button_3 = dsld_page_meta_value_by_meta_key('wearegalgotias_3imagebox_button_3', $page->id);
 $imagebox_file_4 = dsld_page_meta_value_by_meta_key('wearegalgotias_3imagebox_file_4', $page->id);
 $imagebox_text_5 = dsld_page_meta_value_by_meta_key('wearegalgotias_3imagebox_text_5', $page->id);
 $imagebox_editor_6 = dsld_page_meta_value_by_meta_key('wearegalgotias_3imagebox_editor_6', $page->id);
 $imagebox_button_7 = dsld_page_meta_value_by_meta_key('wearegalgotias_3imagebox_button_7', $page->id);
 $imagebox_file_8 = dsld_page_meta_value_by_meta_key('wearegalgotias_3imagebox_file_8', $page->id);
 $imagebox_text_9 = dsld_page_meta_value_by_meta_key('wearegalgotias_3imagebox_text_9', $page->id);
 $imagebox_editor_10 = dsld_page_meta_value_by_meta_key('wearegalgotias_3imagebox_editor_10', $page->id);
 $imagebox_button_11 = dsld_page_meta_value_by_meta_key('wearegalgotias_3imagebox_button_11', $page->id);
@endphp
<section class="z9 pos-rel facility">
	<div class="container">
		@if( $imagebox_file_0 !='')
		<div class="row mb-5">
			<div class="col-lg-4 col-md-6 mb-4">
				<div class="facilityRow">
					@if( $imagebox_file_0 !='')
					<div class="facilityImg mb-4"><img src="{{ dsld_uploaded_asset($imagebox_file_0) }}" class="img-fluid"> </div>
					@endif
					<div class="facilityCnt">
						@if( $imagebox_text_1 !='')
						<h4 class="mb-2">{{ $imagebox_text_1 }}</h4>
						@endif
						@if( $imagebox_editor_2 !='')
						<p class="mb-0"><?php echo htmlspecialchars_decode($imagebox_editor_2); ?></p>
						@endif
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-4">
				<div class="facilityRow">
					@if( $imagebox_file_4 !='')
					<div class="facilityImg mb-4"><img src="{{ dsld_uploaded_asset($imagebox_file_4) }}" class="img-fluid"> </div>
					@endif
					<div class="facilityCnt">
						@if( $imagebox_text_5 !='')
						<h4 class="mb-2">{{ $imagebox_text_5 }}</h4>
						@endif
						@if( $imagebox_editor_6 !='')
						<p class="mb-0"><?php echo htmlspecialchars_decode($imagebox_editor_6); ?></p>
						@endif
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-4">
				<div class="facilityRow">
					@if( $imagebox_file_8 !='')
					<div class="facilityImg mb-4"><img src="{{ dsld_uploaded_asset($imagebox_file_8) }}" class="img-fluid"> </div>
					@endif
					<div class="facilityCnt">
						@if( $imagebox_text_9 !='')
						<h4 class="mb-2">{{ $imagebox_text_9 }}</h4>
						@endif
						@if( $imagebox_editor_10 !='')
						<p class="mb-0"><?php echo htmlspecialchars_decode($imagebox_editor_10); ?></p>
						@endif
					</div>
				</div>
			</div>
		</div>
		@endif
		@if( $playbutton_text_1 !='')
		<div class="sportFac">
			<h4 class="mb-4">Sport Facilities</h4>
			<div class="row">
				<div class="col-lg-7 mb-4">
					<div class="blogLeft">
						
							<div class="blgBoxImg"><img src="assets/images/pexels-pixabay-1.png" class="img-fluid"> </div>
						
						<div class="blgBoxCnt">
							<h4>Sport facilities</h4>
							<p>At the School of Galgotias, excellence is what we strive to achieve. Our infrastructure, faculty, vision, ideals, and teaching methods make us a premier university.</p>
							<a href="#" class="knowMore">know More <i class="fa-solid fa-chevron-right ms-2"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-5 mb-4">
					<div class="blogRightRow">
						<div class="row">
							<div class="col-lg-12 col-md-6">
								<div class="blogRight mb-4">
									
										<div class="blgBoxImg"><img src="assets/images/pexels-pixabay-3.png" class="img-fluid"> </div>
									
									<div class="blgBoxCnt">
										<h4>Sport Councils</h4>
										<p>Here is a glimpse of the innovation and creativity done by the students of Galgotias</p>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-6">
								<div class="blogRight mb-0">
									<div class="blgBox">
										<div class="blgBoxImg"><img src="assets/images/pexels-pixabay-4.png" class="img-fluid"> </div>
									</div>
									<div class="blgBoxCnt">
										<h4>Sport Infrastructure</h4>
										<p>Here is a glimpse of the innovation and creativity done by the students of Galgotias</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> 
		</div>
		@endif
	</div>
</section>

<section class="z9 pos-rel standing">
	<div class="container">
		<div class="tpHead mb-5">
			<h2 class="mb-3">Students Outstanding Achievements</h2>
			<p class="mb-0">At the School of Galgotias, excellence is what we strive to achieve. Our infrastructure, faculty, vision, ideals, and teaching methods make us a premier university.</p>
		</div>
		<div class="standingRow d-flex">
			<div class="standingBox w-50">
				<div class="blogRight">
					<div class="blgBoxImg"><img src="assets/images/actor.png" class="img-fluid"> </div>
					<div class="blgBoxCnt">
						<h4>Umesh Kaushik (Music Producer / Actor)</h4>
						<p>Umesh Kaushik is a B.C.A final year student. Umesh is popularly known as an actor</p>
					</div>
				</div>
			</div>
			<div class="standingBox w-50">
				<div class="blogRight">
					<div class="blgBoxImg"><img src="assets/images/dreamstime_s.png" class="img-fluid"> </div>
					<div class="blgBoxCnt">
						<h4>The Rise of Poet - Adesh Srivastava</h4>
						<p>Umesh Kaushik is a B.C.A final year student. Umesh is popularly known as an actor</p>
					</div>
				</div>
			</div>
			<div class="standingBox w-100 d-flex">
				<div class="stdRowBtm d-flex red w-50">
					<div class="stdBtmRght pos-rel">
						<h6 class="mb-0">Arpit Jain is a 4th yr student of GCET. He has received much recognition for his projects.</h6>
						<a href="#" class="knowMore">know More <i class="fa-solid fa-chevron-right ms-2"></i></a>
					</div>
					<div class="stdBtmleft"><img src="assets/images/0x0.png" class="img-fluid"> </div>
				</div>
				<div class="stdRowBtm d-flex gray w-50">
					<div class="stdBtmRght pos-rel">
						<h6 class="mb-0">Arpit Jain is a 4th yr student of GCET. He has received much recognition for his projects.</h6>
						<a href="#" class="knowMore">know More <i class="fa-solid fa-chevron-right ms-2"></i></a>
					</div>
					<div class="stdBtmleft"><img src="assets/images/grayImg.png" class="img-fluid"> </div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="z9 pos-rel testimonial">
	<div class="container">
		<div class="tstDiv mb-5">
			<h2 class="mb-4">Testimonials</h2>
			<div class="tstDivCrow owl-theme d-flex">
				<div class="tstDivCrowBx row item">
					<div class="col-lg-3 col-md-4 mb-4">
						<div class="tstImgBox">
							<div class="tstImg"><img src="assets/images/Shivam Saini_TCS.png" class="img-fluid"> </div>
							<div class="tstCnt"> 
								<p class="mb-0">Manish Sharma</p>
								<strong>16 LPA | GENPECT</strong>
							</div>
						</div>
					</div>
					<div class="col-md-1">
						<div class="text-center h-100"><span class="quoteBdr"></span></div>
						
					</div>
					<div class="col-lg-8 col-md-7 mb-4">
						
						<blockquote>
							"Mr. Deepak Goyal I got placed in one of the best MNC because of the support I've had from placement cell. They helped me to improve my communication and technical skills. I hope this process continuous to help placement aspirants in future to achieve their goal of getting placed in dream companies"
						</blockquote>
					</div>
				</div>
				<div class="tstDivCrowBx row item">
					<div class="col-lg-3 col-md-4 mb-4">
						<div class="tstImgBox">
							<div class="tstImg"><img src="assets/images/Shivam Saini_TCS.png" class="img-fluid"> </div>
							<div class="tstCnt"> 
								<p class="mb-0">Manish Sharma</p>
								<strong>16 LPA | GENPECT</strong>
							</div>
						</div>
					</div>
					<div class="col-md-1">
						<div class="text-center h-100"><span class="quoteBdr"></span></div>
						
					</div>
					<div class="col-lg-8 col-md-7 mb-4">
						
						<blockquote>
							"Mr. Deepak Goyal I got placed in one of the best MNC because of the support I've had from placement cell. They helped me to improve my communication and technical skills. I hope this process continuous to help placement aspirants in future to achieve their goal of getting placed in dream companies"
						</blockquote>
					</div>
				</div>
			</div>
		</div>
		<div class="ytRow row pt-md-5 pt-4">
			<div class="col-lg-4 col-md-6 mb-4">
				<div class="ytBox">
					<div class="ytVideo pos-rel mb-4">
						<img src="assets/images/picture_02.png" class="img-fluid"> 
						<span class="ytPlay"><img src="assets/images/yt.png" class="img-fluid"> </span>
					</div>
					<div class="ytCnt">
						<h4 class="mb-0">Arpit Jain is a 4th yr student of GCET.</h4>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-4">
				<div class="ytBox">
					<div class="ytVideo pos-rel mb-4">
						<img src="assets/images/picture_02.png" class="img-fluid"> 
						<span class="ytPlay"><img src="assets/images/yt.png" class="img-fluid"> </span>
					</div>
					<div class="ytCnt">
						<h4 class="mb-0">He has received much recognition for his projects.</h4>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-4">
				<div class="ytBox">
					<div class="ytVideo pos-rel mb-4">
						<img src="assets/images/picture_02.png" class="img-fluid"> 
						<span class="ytPlay"><img src="assets/images/yt.png" class="img-fluid"> </span>
					</div>
					<div class="ytCnt">
						<h4 class="mb-0">He has received much recognition for his projects.</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="z9 pos-rel alliance">
	<div class="innovation">
		<div class="container-fluid">
			<div class="tpHead mb-5">
				<h2 class="mb-3">Alliances and Collaborations</h2>
				<p class="mb-0">At the School of Galgotias, excellence is what we strive to achieve. Our infrastructure, faculty, vision, ideals, and teaching methods make us a premier university.</p>
			</div>
			<div class="allCrosal owl-theme">
				<div class="allCrosalBox item">
					<div class="allCrosalBoxImg mb-3"><img src="assets/images/aff-logo-1.png" class="img-fluid"> </div>
					<div class="allCrosalBoxCnt">
						<p class="mb-0">Recognised by the University Grants Commission, Govt. of India, under Section 2(f) of the UGC Act 1956</p>
					</div>
				</div>
				<div class="allCrosalBox item">
					<div class="allCrosalBoxImg mb-3"><img src="assets/images/aff-logo-5.png" class="img-fluid"> </div>
					<div class="allCrosalBoxCnt">
						<p class="mb-0">Recognised by the University Grants Commission, Govt. of India, under Section 2(f) of the UGC Act 1956</p>
					</div>
				</div>
				<div class="allCrosalBox item">
					<div class="allCrosalBoxImg mb-3"><img src="assets/images/aff-logo-3.png" class="img-fluid"> </div>
					<div class="allCrosalBoxCnt">
						<p class="mb-0">Recognised by the Bar Council of India, Govt. of India</p>
					</div>
				</div>
				<div class="allCrosalBox item">
					<div class="allCrosalBoxImg mb-3"><img src="assets/images/aff-logo-4.png" class="img-fluid"> </div>
					<div class="allCrosalBoxCnt">
						<p class="mb-0">University is accredited by the National Assessment and Accreditation Council (NAAC), Govt of India</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="media z9 pos-rel">
	<div class="container">
		<div class="tpHead mb-5">
			<h2 class="mb-0">In The Media</h2>
		</div>
		<div class="mediaRow d-flex w-100">
			<div class="mediaBox"><img src="assets/images/denik.png" class="img-fluid"> </div>
			<div class="mediaBox"><img src="assets/images/hindustan.png" class="img-fluid"> </div>
			<div class="mediaBox"><img src="assets/images/sahara.png" class="img-fluid"> </div>
			<div class="mediaBox"><img src="assets/images/Amar_Ujala_Logo.png" class="img-fluid"> </div>
			<div class="mediaBox"><img src="assets/images/hindu.png" class="img-fluid"> </div>
		</div>
	</div>
</section>
<section class="news z9 pos-rel">
	<div class="container">
		<div class="tpHead mb-5">
			<h2 class="mb-3">News and Events</h2>
			<p class="mb-0">At the School of Galgotias, excellence is what we strive to achieve. Our infrastructure, faculty, vision, ideals, and teaching methods make us a premier university.</p>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 mb-4">
				<div class="newsBoxGrp">
					<div class="newsBox mb-4">
						<div class="newsImgs"> <img src="assets/images/news1.png" class="img-fluid"> </div>
						<div class="newsCntent">
							<span>News and Events</span>
							<p>Department of Electrical Engineering, University Polytechnic...</p>
						</div>
					</div>
					<div class="newsBox mb-4 pos-rel">
						<div class="newsImg"> <img src="assets/images/news2.png" class="img-fluid"> </div>
						<div class="newsCnt">
							<span>Events</span>
							<p>Department of Electrical Engineering, University Polytechnic...</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-4">
				<div class="newsBoxGrp">
					<div class="newsBox mb-4 pos-rel">
						<div class="newsImg"> <img src="assets/images/news3.png" class="img-fluid"> </div>
						<div class="newsCnt">
							<span>Events</span>
							<p>Department of Electrical Engineering, University Polytechnic...</p>
						</div>
					</div>
					<div class="newsBox mb-4 pos-rel">
						<div class="newsImg"> <img src="assets/images/news4.png" class="img-fluid"> </div>
						<div class="newsCnt">
							<span>Events</span>
							<p>Department of Electrical Engineering, University Polytechnic...</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-4 d-none d-lg-block">
				<div class="newsBoxGrp">
					<div class="newsBox mb-4 pos-rel">
						<div class="newsImg"> <img src="assets/images/news4.png" class="img-fluid"> </div>
						<div class="newsCnt">
							<span>Events</span>
							<p>Department of Electrical Engineering, University Polytechnic...</p>
						</div>
					</div>
					<div class="newsBox mb-4 pos-rel">
						<div class="newsImg"> <img src="assets/images/news6.png" class="img-fluid"> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

 @endsection