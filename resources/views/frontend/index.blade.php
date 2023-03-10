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
								<div class="strColImg mb-2"><img src="{{ dsld_static_asset('frontend/assets/images/computer-science.png') }}" class="img-fluid"> </div>
							</div>
						</div>
						<div class="col-md-6 mb-md-5 mb-4">
							<div class="strColCnt">
								<p class="mb-4">School of Engineering </p>
								<div class="strColImg mb-2"><img src="{{ dsld_static_asset('frontend/assets/images/School-of-Engineering.png') }}" class="img-fluid"> </div>
							</div>
						</div>
						<div class="col-md-6 mb-md-5 mb-4">
							<div class="strColCnt">
								<p class="mb-4">School of Agriculture </p>
								<div class="strColImg mb-2"><img src="{{ dsld_static_asset('frontend/assets/images/Gautam-Adani-IRMA-Speech.png') }}" class="img-fluid"> </div>
							</div>
						</div>
						<div class="col-md-6 mb-md-5 mb-4">
							<div class="strColCnt">
								<p class="mb-4">School of Architecture & Design </p>
								<div class="strColImg mb-2"><img src="{{ dsld_static_asset('frontend/assets/images/Civil-Engineering-Projects.png') }}" class="img-fluid"> </div>
							</div>
						</div>
						<div class="col-md-6 mb-md-5 mb-4">
							<div class="strColCnt">
								<p class="mb-4">School of Basic & Applied Sciences </p>
								<div class="strColImg mb-2"><img src="{{ dsld_static_asset('frontend/assets/images/basic-applied.png') }}" class="img-fluid"> </div>
							</div>
						</div>
						<div class="col-md-6 mb-md-5 mb-4">
							<div class="strColCnt">
								<p class="mb-4">School of Business </p>
								<div class="strColImg mb-2"><img src="{{ dsld_static_asset('frontend/assets/images/school-of-busines.png') }}" class="img-fluid"> </div>
							</div>
						</div>
						<div class="col-md-6 mb-md-5 mb-4">
							<div class="strColCnt">
								<p class="mb-4">School of Education </p>
								<div class="strColImg mb-2"><img src="{{ dsld_static_asset('frontend/assets/images/school-of-education.png') }}" class="img-fluid"> </div>
							</div>
						</div>
						<div class="col-md-6 mb-md-5 mb-4">
							<div class="strColCnt">
								<p class="mb-4">School of Finance & Commerce </p>
								<div class="strColImg mb-2"><img src="{{ dsld_static_asset('frontend/assets/images/What-is-Financial-Management.png') }}" class="img-fluid"> </div>
							</div>
						</div>
						<div class="col-md-6 mb-md-5 mb-4">
							<div class="strColCnt">
								<p class="mb-4">School of Hospitality & Tourism </p>
								<div class="strColImg mb-2"><img src="{{ dsld_static_asset('frontend/assets/images/computer-science.png') }}" class="img-fluid"> </div>
							</div>
						</div>
						<div class="col-md-6 mb-md-5 mb-4">
							<div class="strColCnt">
								<p class="mb-4">School of Law  </p>
								<div class="strColImg mb-2"><img src="{{ dsld_static_asset('frontend/assets/images/computer-science.png') }}" class="img-fluid"> </div>
							</div>
						</div>
						<div class="col-md-6 mb-md-5 mb-4">
							<div class="strColCnt">
								<p class="mb-4">School of Liberal Education  </p>
								<div class="strColImg mb-2"><img src="{{ dsld_static_asset('frontend/assets/images/computer-science.png') }}" class="img-fluid"> </div>
							</div>
						</div>
						<div class="col-md-6 mb-md-5 mb-4">
							<div class="strColCnt">
								<p class="mb-4">School of Medical and Allied Sciences  </p>
								<div class="strColImg mb-2"><img src="{{ dsld_static_asset('frontend/assets/images/computer-science.png') }}" class="img-fluid"> </div>
							</div>
						</div>
						<div class="col-md-6 mb-md-5 mb-4">
							<div class="strColCnt">
								<p class="mb-4">School of Nursing  </p>
								<div class="strColImg mb-2"><img src="{{ dsld_static_asset('frontend/assets/images/computer-science.png') }}" class="img-fluid"> </div>
							</div>
						</div>
						<div class="col-md-6 mb-md-5 mb-4">
							<div class="strColCnt">
								<p class="mb-4">University Polytechnic  </p>
								<div class="strColImg mb-2"><img src="{{ dsld_static_asset('frontend/assets/images/computer-science.png') }}" class="img-fluid"> </div>
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
					<div class="lpaImg"><img src="{{ dsld_static_asset('frontend/assets/images/lpa1.png') }}" class="img-fluid"> </div>
				</div>
				<div class="col-lg-6 ps-lg-4 ps-md-3">
					<div class="lpaRow">
						<div class="row">
							<div class="col-6 mb-4">
								<div class="pos-rel">
									<div class="minLpaImg"><img src="{{ dsld_static_asset('frontend/assets/images/minLpa.png') }}" class="img-fluid"> </div>
									<div class="minLpaCnt">
										<h4 class="mb-0">11.50 LPA</h4>
										<p class="mb-0">NAME GOES HERE <br> <span>Placed in Wipro</span> </p>
									</div> 
								</div>
							</div>
							<div class="col-6 mb-4">
								<div class="pos-rel">
									<div class="minLpaImg"><img src="{{ dsld_static_asset('frontend/assets/images/minLpa.png') }}" class="img-fluid"> </div>
									<div class="minLpaCnt">
										<h4 class="mb-0">11.50 LPA</h4>
										<p class="mb-0">NAME GOES HERE <br> <span>Placed in Wipro</span></p>
									</div> 
								</div> 
							</div>
							<div class="col-6 mb-4">
								<div class="pos-rel">
									<div class="minLpaImg"><img src="{{ dsld_static_asset('frontend/assets/images/minLpa.png') }}" class="img-fluid"> </div>
									<div class="minLpaCnt">
										<h4 class="mb-0">11.50 LPA</h4>
										<p class="mb-0">NAME GOES HERE <br><span>Placed in Wipro</span></p>
									</div> 
								</div>
							</div>
							<div class="col-6 mb-4">
								<div class="pos-rel">
									<div class="minLpaImg"><img src="{{ dsld_static_asset('frontend/assets/images/minLpa.png') }}" class="img-fluid"> </div>
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
									<div class="minLpaImg"><img src="{{ dsld_static_asset('frontend/assets/images/minLpa.png') }}" class="img-fluid"> </div>
									<div class="minLpaCnt">
										<h4 class="mb-0">11.50 LPA</h4>
										<p class="mb-0">NAME GOES HERE <br> <span>Placed in Wipro</span> </p>
									</div> 
								</div>
							</div>
							<div class="col-6 mb-4">
								<div class="pos-rel">
									<div class="minLpaImg"><img src="{{ dsld_static_asset('frontend/assets/images/minLpa.png') }}" class="img-fluid"> </div>
									<div class="minLpaCnt">
										<h4 class="mb-0">11.50 LPA</h4>
										<p class="mb-0">NAME GOES HERE <br> <span>Placed in Wipro</span></p>
									</div> 
								</div> 
							</div>
							<div class="col-6 mb-4">
								<div class="pos-rel">
									<div class="minLpaImg"><img src="{{ dsld_static_asset('frontend/assets/images/minLpa.png') }}" class="img-fluid"> </div>
									<div class="minLpaCnt">
										<h4 class="mb-0">11.50 LPA</h4>
										<p class="mb-0">NAME GOES HERE <br><span>Placed in Wipro</span></p>
									</div> 
								</div>
							</div>
							<div class="col-6 mb-4">
								<div class="pos-rel">
									<div class="minLpaImg"><img src="{{ dsld_static_asset('frontend/assets/images/minLpa.png') }}" class="img-fluid"> </div>
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
					<div class="lpaImg"><img src="{{ dsld_static_asset('frontend/assets/images/lpa1.png') }}" class="img-fluid"> </div>
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

 $sport_file_0 = dsld_page_meta_value_by_meta_key('wearegalgotias_sport_file_0', $page->id);
 $sport_text_1 = dsld_page_meta_value_by_meta_key('wearegalgotias_sport_text_1', $page->id);
 $sport_editor_2 = dsld_page_meta_value_by_meta_key('wearegalgotias_sport_editor_2', $page->id);
 $sport_button_3 = dsld_page_meta_value_by_meta_key('wearegalgotias_sport_button_3', $page->id);
 $sport_file_4 = dsld_page_meta_value_by_meta_key('wearegalgotias_sport_file_4', $page->id);
 $sport_text_5 = dsld_page_meta_value_by_meta_key('wearegalgotias_sport_text_5', $page->id);
 $sport_editor_6 = dsld_page_meta_value_by_meta_key('wearegalgotias_sport_editor_6', $page->id);
 $sport_button_7 = dsld_page_meta_value_by_meta_key('wearegalgotias_sport_button_7', $page->id);
 $sport_file_8 = dsld_page_meta_value_by_meta_key('wearegalgotias_sport_file_8', $page->id);
 $sport_text_9 = dsld_page_meta_value_by_meta_key('wearegalgotias_sport_text_9', $page->id);
 $sport_editor_10 = dsld_page_meta_value_by_meta_key('wearegalgotias_sport_editor_10', $page->id);
 $sport_button_11 = dsld_page_meta_value_by_meta_key('wearegalgotias_sport_button_11', $page->id);
 $sport_text_12 = dsld_page_meta_value_by_meta_key('wearegalgotias_sport_text_12', $page->id);
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
		@if( $sport_text_12 !='')
		<div class="sportFac">
			@if(!empty($sport_text_12))
				<h4 class="mb-4">{{ $sport_text_12 }}</h4>
			@endif
			<div class="row">
				<div class="col-lg-7 mb-4">
					<div class="blogLeft">
						@if(!empty($sport_file_0))<div class="blgBoxImg"><img src="{{ dsld_uploaded_asset($sport_file_0) }}" class="img-fluid"> </div>
						@endif
						
						<div class="blgBoxCnt">
							@if(!empty($sport_text_1))
								<h4>{{ $sport_text_1 }}</h4>
							@endif

							@if(!empty($sport_editor_2))
								<p>{{ $sport_editor_2 }}</p>
							@endif

							@if(!empty($sport_button_3))
								<a href="{{ $sport_button_3 }}" class="knowMore">Know More <i class="fa-solid fa-chevron-right ms-2"></i></a>
							@endif							
						</div>
					</div>
				</div>
				<div class="col-lg-5 mb-4">
					<div class="blogRightRow">
						<div class="row">
							<div class="col-lg-12 col-md-6">
								<div class="blogRight mb-4">
									
									@if(!empty($sport_file_4))
										<div class="blgBoxImg"><img src="{{ dsld_uploaded_asset($sport_file_4) }}" class="img-fluid"> </div>
									@endif
										
									<div class="blgBoxCnt">
										@if(!empty($sport_text_5))
											<h4>{{ $sport_text_5 }}</h4>
										@endif

										@if(!empty($sport_editor_6))
											<p>{{ $sport_editor_6 }}</p>
										@endif						
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-6">
								<div class="blogRight mb-0">
									@if(!empty($sport_file_8))
										<div class="blgBox">
											<div class="blgBoxImg"><img src="{{ dsld_uploaded_asset($sport_file_8) }}" class="img-fluid"> </div>
										</div>
									@endif
									<div class="blgBoxCnt">
										@if(!empty($sport_text_9))
											<h4>{{ $sport_text_9 }}</h4>
										@endif

										@if(!empty($sport_editor_10))
											<p>{{ $sport_editor_10 }}</p>
										@endif
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

@php 

 $outstanding_file_0 = dsld_page_meta_value_by_meta_key('wearegalgotias_outstanding_file_0', $page->id);
 $outstanding_text_1 = dsld_page_meta_value_by_meta_key('wearegalgotias_outstanding_text_1', $page->id);
 $outstanding_text_2 = dsld_page_meta_value_by_meta_key('wearegalgotias_outstanding_text_2', $page->id);
 $outstanding_button_3 = dsld_page_meta_value_by_meta_key('wearegalgotias_outstanding_button_3', $page->id);
 $outstanding_file_4 = dsld_page_meta_value_by_meta_key('wearegalgotias_outstanding_file_4', $page->id);
 $outstanding_text_5 = dsld_page_meta_value_by_meta_key('wearegalgotias_outstanding_text_5', $page->id);
 $outstanding_text_6 = dsld_page_meta_value_by_meta_key('wearegalgotias_outstanding_text_6', $page->id);
 $outstanding_button_7 = dsld_page_meta_value_by_meta_key('wearegalgotias_outstanding_button_7', $page->id);
 $outstanding_file_8 = dsld_page_meta_value_by_meta_key('wearegalgotias_outstanding_file_8', $page->id);
 $outstanding_text_9 = dsld_page_meta_value_by_meta_key('wearegalgotias_outstanding_text_9', $page->id);
 $outstanding_text_10 = dsld_page_meta_value_by_meta_key('wearegalgotias_outstanding_text_10', $page->id);
 $outstanding_button_11 = dsld_page_meta_value_by_meta_key('wearegalgotias_outstanding_button_11', $page->id);
 $outstanding_file_12 = dsld_page_meta_value_by_meta_key('wearegalgotias_outstanding_file_12', $page->id);
 $outstanding_text_13 = dsld_page_meta_value_by_meta_key('wearegalgotias_outstanding_text_13', $page->id);
 $outstanding_text_14 = dsld_page_meta_value_by_meta_key('wearegalgotias_outstanding_text_14', $page->id);
 $outstanding_button_15 = dsld_page_meta_value_by_meta_key('wearegalgotias_outstanding_button_15', $page->id);
 $outstanding_text_16 = dsld_page_meta_value_by_meta_key('wearegalgotias_outstanding_text_16', $page->id);
 $outstanding_editor_17 = dsld_page_meta_value_by_meta_key('wearegalgotias_outstanding_editor_17', $page->id);

@endphp

@if( $outstanding_file_0 !='')
<section class="z9 pos-rel standing">
	<div class="container">
		<div class="tpHead mb-5">
			@if(!empty($outstanding_text_16))
				<h2 class="mb-3">{{ $outstanding_text_16 }}</h2>
			@endif
			@if(!empty($outstanding_editor_17))
				<p class="mb-0"><?php echo htmlspecialchars_decode($outstanding_editor_17); ?></p>
			@endif
		</div>
		<div class="standingRow d-flex">
			<div class="standingBox w-50">
				<div class="blogRight">
					@if(!empty($outstanding_file_0))
						<div class="blgBoxImg"><img src="{{ dsld_uploaded_asset($outstanding_file_0) }}" class="img-fluid"> </div>
					@endif
						
					<div class="blgBoxCnt">
						@if(!empty($outstanding_text_1))
							<h4>{{ $outstanding_text_1 }}</h4>
						@endif

						@if(!empty($outstanding_text_2))
							<p>{{ $outstanding_text_2 }}</p>
						@endif						
					</div>
				</div>
			</div>
			<div class="standingBox w-50">
				<div class="blogRight">
					@if(!empty($outstanding_file_4))
						<div class="blgBoxImg"><img src="{{ dsld_uploaded_asset($outstanding_file_4) }}" class="img-fluid"> </div>
					@endif
						
					<div class="blgBoxCnt">
						@if(!empty($outstanding_text_5))
							<h4>{{ $outstanding_text_5 }}</h4>
						@endif

						@if(!empty($outstanding_text_6))
							<p>{{ $outstanding_text_6 }}</p>
						@endif						
					</div>
				</div>
			</div>
			<div class="standingBox w-100 d-flex">
				<div class="stdRowBtm d-flex red w-50">
					<div class="stdBtmRght pos-rel">

						@if(!empty($outstanding_text_9))
							<h6 class="mb-0">{{ $outstanding_text_9 }}</h6>
						@endif

						@if(!empty($outstanding_button_11))
							<a href="{{ $outstanding_button_11 }}" class="knowMore">know More <i class="fa-solid fa-chevron-right ms-2"></i></a>
						@endif
						
					</div>
					@if(!empty($outstanding_file_8))
						<div class="stdBtmleft"><img src="{{ dsld_uploaded_asset($outstanding_file_8) }}" class="img-fluid"> </div>
					@endif
					
				</div>
				<div class="stdRowBtm d-flex gray w-50">
					<div class="stdBtmRght pos-rel">

						@if(!empty($outstanding_text_13))
							<h6 class="mb-0">{{ $outstanding_text_13 }}</h6>
						@endif

						@if(!empty($outstanding_button_15))
							<a href="{{ $outstanding_button_15 }}" class="knowMore">know More <i class="fa-solid fa-chevron-right ms-2"></i></a>
						@endif
						
					</div>
					@if(!empty($outstanding_file_12))
						<div class="stdBtmleft"><img src="{{ dsld_uploaded_asset($outstanding_file_12) }}" class="img-fluid"> </div>
					@endif
				</div>
			</div>
		</div>
	</div>
</section>
@endif

@php 

 $testimonials_text_0 = dsld_page_meta_value_by_meta_key('wearegalgotias_testimonials_text_0', $page->id);
 $video_file_0 = dsld_page_meta_value_by_meta_key('wearegalgotias_video_file_0', $page->id);
 $video_text_1 = dsld_page_meta_value_by_meta_key('wearegalgotias_video_text_1', $page->id);
 $video_text_2 = dsld_page_meta_value_by_meta_key('wearegalgotias_video_text_2', $page->id);
 $video_file_3 = dsld_page_meta_value_by_meta_key('wearegalgotias_video_file_3', $page->id);
 $video_text_4 = dsld_page_meta_value_by_meta_key('wearegalgotias_video_text_4', $page->id);
 $video_text_5 = dsld_page_meta_value_by_meta_key('wearegalgotias_video_text_5', $page->id);
 $video_file_6 = dsld_page_meta_value_by_meta_key('wearegalgotias_video_file_6', $page->id);
 $video_text_7 = dsld_page_meta_value_by_meta_key('wearegalgotias_video_text_7', $page->id);
 $video_text_8 = dsld_page_meta_value_by_meta_key('wearegalgotias_video_text_8', $page->id);

@endphp

@php 
	$testimonials = App\Models\Page::where('type','testimonials')->where('status', 1)->orderby('order', 'asc')->get();
@endphp

@if( $testimonials_text_0 !='' && $testimonials != '')

<section class="z9 pos-rel testimonial">
	<div class="container">
		<div class="tstDiv mb-5">
			<h2 class="mb-4">{{ $testimonials_text_0 }}</h2>
			<div class="tstDivCrow owl-theme d-flex">
				
				@foreach($testimonials as $key => $value)
				<div class="tstDivCrowBx row item">
					<div class="col-lg-3 col-md-4 mb-4">
						<div class="tstImgBox">
							<div class="tstImg">
								@if(!empty($value->banner))
									<img src="{{ dsld_uploaded_asset($value->banner) }}" class="img-fluid">
								@else
									<img src="{{ dsld_static_asset('frontend/assets/images/Shivam Saini_TCS.png') }}" class="img-fluid">
								@endif
							</div>
							<div class="tstCnt"> 
								<p class="mb-0">{{ $value->title }}</p>
								<strong>{{ json_decode($value->meta_fields)->package }} | {{ json_decode($value->meta_fields)->company }}</strong>
							</div>
						</div>
					</div>
					<div class="col-md-1">
						<div class="text-center h-100"><span class="quoteBdr"></span></div>
					</div>
					<div class="col-lg-8 col-md-7 mb-4">
						<blockquote>{{ $value->content }}</blockquote>
					</div>
				</div>
				@endforeach

			</div>
		</div>
		<div class="ytRow row pt-md-5 pt-4">
			<div class="col-lg-4 col-md-6 mb-4">
				@if(!empty($video_file_0))
				<div class="ytBox">
					<div class="ytVideo pos-rel mb-4">
						<img src="{{ dsld_uploaded_asset($video_file_0) }}" class="img-fluid"> 
						<span class="ytPlay"><img src="{{ dsld_static_asset('frontend/assets/images/yt.png') }}" class="img-fluid"> </span>
					</div>
					<div class="ytCnt">
						<h4 class="mb-0">{{ $video_text_1 }}</h4>
					</div>
				</div>
				@endif
			</div>
			<div class="col-lg-4 col-md-6 mb-4">
				@if(!empty($video_file_3))
				<div class="ytBox">
					<div class="ytVideo pos-rel mb-4">
						<img src="{{ dsld_uploaded_asset($video_file_3) }}" class="img-fluid"> 
						<span class="ytPlay"><img src="{{ dsld_static_asset('frontend/assets/images/yt.png') }}" class="img-fluid"> </span>
					</div>
					<div class="ytCnt">
						<h4 class="mb-0">{{ $video_text_4 }}</h4>
					</div>
				</div>
				@endif
			</div>
			<div class="col-lg-4 col-md-6 mb-4">
				@if(!empty($video_file_6))
				<div class="ytBox">
					<div class="ytVideo pos-rel mb-4">
						<img src="{{ dsld_uploaded_asset($video_file_6) }}" class="img-fluid"> 
						<span class="ytPlay"><img src="{{ dsld_static_asset('frontend/assets/images/yt.png') }}" class="img-fluid"> </span>
					</div>
					<div class="ytCnt">
						<h4 class="mb-0">{{ $video_text_7 }}</h4>
					</div>
				</div>
				@endif
			</div>
		</div>
	</div>
</section>
@endif

@php 
 $alliances_text_0 = dsld_page_meta_value_by_meta_key('wearegalgotias_alliances_text_0', $page->id);
 $alliances_editor_1 = dsld_page_meta_value_by_meta_key('wearegalgotias_alliances_editor_1', $page->id);
@endphp

@if( $alliances_editor_1 !='')
<section class="z9 pos-rel alliance">
	<div class="innovation">
		<div class="container-fluid">
			<div class="tpHead mb-5">
				@if(!empty($alliances_text_0))
					<h2 class="mb-3">{{ $alliances_text_0 }}</h2>
				@endif
				@if(!empty($alliances_editor_1))
					<p class="mb-0"><?php echo htmlspecialchars_decode($alliances_editor_1); ?></p>
				@endif
			</div>
			<div class="allCrosal owl-theme">

				@php 
					$alliances = App\Models\Page::where('type','news_events')->where('cat_type','alliances')->where('status', 1)->orderBy('order', 'desc')->get();
				@endphp
				@if(!empty($alliances))
					@foreach($alliances as $key => $value)
					<div class="allCrosalBox item">
						<div class="allCrosalBoxImg mb-3"><img src="{{ dsld_uploaded_asset($value->banner) }}" class="img-fluid"> </div>
						<div class="allCrosalBoxCnt">
							<p class="mb-0">{{  $value-> title }}</p>
						</div>
					</div>
					@endforeach
				@endif
				
				
			</div>
		</div>
	</div>
</section>
@endif

@php 
 $media_text_0 = dsld_page_meta_value_by_meta_key('wearegalgotias_media_text_0', $page->id);
 $media_file_repeter_1 = dsld_page_meta_value_by_meta_key('wearegalgotias_media_file_repeter_1', $page->id);
@endphp

@if( $media_text_0 !='')
<section class="media z9 pos-rel">
	<div class="container">
		<div class="tpHead mb-5">
			@if(!empty($media_text_0))
				<h2 class="mb-0">{{ $media_text_0 }}</h2>
			@endif
		</div>
		<div class="mediaRow d-flex w-100">
			@if(is_array(json_decode($media_file_repeter_1, true)) && count(json_decode($media_file_repeter_1, true)) > 0)
				@foreach(json_decode($media_file_repeter_1, true) as $key => $value)
					<div class="mediaBox"><img src="{{ dsld_uploaded_asset(json_decode($media_file_repeter_1, true)[$key]) }}" class="img-fluid"> </div>
				@endforeach
			@endif
		</div>
	</div>
</section>
@endif

@php 

 $newsandevents_text_0 = dsld_page_meta_value_by_meta_key('wearegalgotias_newsandevents_text_0', $page->id);
 $newsandevents_editor_1 = dsld_page_meta_value_by_meta_key('wearegalgotias_newsandevents_editor_1', $page->id);

@endphp

@if( $newsandevents_text_0 !='')

<section class="news z9 pos-rel">
	<div class="container">
		<div class="tpHead mb-5">
			
			@if(!empty($newsandevents_text_0))
				<h2 class="mb-3">{{ $newsandevents_text_0 }}</h2>
			@endif
			@if(!empty($newsandevents_editor_1))
				<p class="mb-0"><?php echo htmlspecialchars_decode($newsandevents_editor_1); ?></p>
			@endif

		</div>
		@php 
			$news_events = App\Models\Page::where('type', 'news_events')->whereIn('cat_type',  ['news','events'])->where('status', 1)->orderBy('order', 'desc')->get();
		@endphp
		@if(!empty($news_events))
		
		<div class="row">
			<div class="col-lg-4 col-md-6 mb-4">
				<div class="newsBoxGrp">
					@if(count($news_events) > 0)
					<div class="newsBox mb-4">
						<div class="newsImgs"> <img src="{{ dsld_uploaded_asset($news_events[0]->banner) }}" class="img-fluid"> </div>
						<div class="newsCntent">
							<span>{{  ucwords($news_events[0]->cat_type) }}</span>
							<p>{{  $news_events[0]->title }}</p>
						</div>
					</div>
					@endif
					@if(count($news_events) > 1)
					<div class="newsBox mb-4 pos-rel">
						<div class="newsImg"> <img src="{{ dsld_uploaded_asset($news_events[1]->banner) }}" class="img-fluid"> </div>
						<div class="newsCnt">
							<span>{{  ucwords($news_events[1]->cat_type) }}</span>
							<p>{{  $news_events[1]->title }}</p>
						</div>
					</div>
					@endif
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-4">
				<div class="newsBoxGrp">
					
					@if(count($news_events) > 2)
					<div class="newsBox mb-4 pos-rel">
						<div class="newsImg"> <img src="{{ dsld_uploaded_asset($news_events[2]->banner) }}" class="img-fluid"> </div>
						<div class="newsCnt">
							<span>{{  ucwords($news_events[2]->cat_type) }}</span>
							<p>{{  $news_events[2]->title }}</p>
						</div>
					</div>
					
					@endif
					@if(count($news_events) > 3)
					<div class="newsBox mb-4 pos-rel">
						<div class="newsImg"> <img src="{{ dsld_uploaded_asset($news_events[3]->banner) }}" class="img-fluid"> </div>
						<div class="newsCnt">
							<span>{{  ucwords($news_events[3]->cat_type) }}</span>
							<p>{{  $news_events[3]->title }}</p>
						</div>
					</div>
					@endif
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-4 d-none d-lg-block">
				<div class="newsBoxGrp">
					@if(count($news_events) > 4)
					<div class="newsBox mb-4 pos-rel">
						<div class="newsImg"> <img src="{{ dsld_uploaded_asset($news_events[4]->banner) }}" class="img-fluid"> </div>
						<div class="newsCnt">
							<span>{{  ucwords($news_events[4]->cat_type) }}</span>
							<p>{{  $news_events[4]->title }}</p>
						</div>
					</div>
					@endif
					<div class="newsBox mb-4 pos-rel">
						<div class="newsImg"> <img src="{{ dsld_static_asset('frontend/assets/images/news6.png') }}" class="img-fluid"> </div>
					</div>
				</div>
			</div>
		</div>
		@endif
	</div>
</section>
@endif
 @endsection