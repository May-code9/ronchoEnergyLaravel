@extends("master")

@section("title")
RonchoEnergy | is an energy and technology company registered in Nigeria
@endsection

@section("content")
<div class="container-fluid no-padding pagebanner"  style="background-image: url(demo/wpm/manufactory/wp-content/themes/manufactory/images/page-banner.jpg);">
	<div class="page-banner-inner">
		<div class="container">
			<h3>
				About Us
			</h3>
		</div>
	</div>
</div>

<div class="container-fluid no-padding page-breadcrumb">
	<div class="container">
		<div class="breadcrumb">
			<!-- Breadcrumb NavXT 5.7.1 -->
			<span property="itemListElement" typeof="ListItem">
				<a property="item" typeof="WebPage" title="Go to {{ config('app.name') }}" href="{{ route('roncho_home') }}" class="home">
					<span property="name">{{ config('app.name') }}</span>
				</a>
				<meta property="position" content="1">
			</span> &gt;
			<span property="itemListElement" typeof="ListItem">
				<span property="name">About Us</span>
				<meta property="position" content="2">
			</span>
		</div>
	</div>
</div>

<main id="main" class="site-main no-padding no-margin">
	<div class="page-content">
		<div class="container">
			<div class="row">
				<div class="content-area full-content col-md-12 no-padding">
					<div id="post-8" class="post-8 page type-page status-publish hentry">
						<div class="entry-content">
							<div class="vc_row wpb_row vc_row-fluid">
								<div class="wpb_column vc_column_container vc_col-sm-12">
									<div class="vc_column-inner ">
										<div class="wpb_wrapper">
											<div class='container aboutus-section '>
												<div class='col-md-6 aboutus-image'>
													<div class='row'>
														<div class='col-md-6 col-sm-6 col-xs-6'>
															<img width="285" height="373" src="image/2016/07/aboutus-1-285x373.jpg" class="attachment-manufactory-285-373 size-manufactory-285-373" alt="" srcset="image/2016/07/aboutus-1-285x373.jpg 285w, image/2016/07/aboutus-1-229x300.jpg 229w, image/2016/07/aboutus-1.jpg 290w" sizes="(max-width: 285px) 100vw, 285px" />
														</div>
														<div class='col-md-6 col-sm-6 col-xs-6'>
															<img width="290" height="380" src="image/2016/07/aboutus-2.jpg" class="attachment- manufactory-285-373 size- manufactory-285-373" alt="" srcset="image/2016/07/aboutus-2.jpg 290w, image/2016/07/aboutus-2-229x300.jpg 229w, image/2016/07/aboutus-2-285x373.jpg 285w" sizes="(max-width: 290px) 100vw, 290px" />
														</div>
													</div>
												</div>
												<div class='col-md-6 aboutus-content'>
													<h3>{{ config('app.name') }} is an energy and technology company registered in Nigeria since 2007.</h3>
													<h3>We provide affordable and clean energy solutions, ICT solutions, and engineering services.</h3>
													<p>At Roncho Energy Services Ltd, we develop, integrate and operate & maintain energy and technology projects / solutions.</p>
													<div class='about-points'>
														<a class='about-link' href=#>24/7 availibility</a>
														<a class='about-link' href=#>Genius workers</a>
														<a class='about-link' href=#>Low pricing </a>
														<a class='about-link' href=#>Project consulting services</a>
													</div>
												</div>
											</div>

											<div class="vc_row wpb_row vc_row-fluid">
												<div class="container no-padding fixedlayout">
													<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-12">
														<div class="vc_column-inner ">
															<div class="wpb_wrapper">
																<h3 style="font-size: 30px;line-height: 30px;text-align: left" class="vc_custom_heading" >Our Core Value</h3>
																<div class="vc_tta-container" data-vc-action="collapse">
																	<div class="vc_general vc_tta vc_tta-accordion vc_tta-color-grey vc_tta-style-classic vc_tta-shape-rounded vc_tta-o-shape-group vc_tta-controls-align-left">
																		<div class="vc_tta-panels-container">
																			<div class="vc_tta-panels">
																				<div class="vc_tta-panel vc_active" id="vision" data-vc-content=".vc_tta-panel-body">
																					<div class="vc_tta-panel-heading">
																						<h4 class="vc_tta-panel-title vc_tta-controls-icon-position-left">
																							<a href="#vision" data-vc-accordion data-vc-container=".vc_tta-container">
																								<span class="vc_tta-title-text">Our Vision</span><i class="vc_tta-controls-icon vc_tta-controls-icon-plus"></i>
																							</a>
																						</h4>
																					</div>
																					<div class="vc_tta-panel-body">
																						<div class="wpb_text_column wpb_content_element " >
																							<div class="wpb_wrapper">
																								<p>{{ config('app.name') }} will become the leading provider of technology solutions for clean energy and ICT systems in Nigeria by creating innovative solutions that are available, affordable and scalable.</p>
																							</div>
																						</div>
																					</div>
																				</div>
																				<div class="vc_tta-panel" id="mision" data-vc-content=".vc_tta-panel-body">
																					<div class="vc_tta-panel-heading">
																						<h4 class="vc_tta-panel-title vc_tta-controls-icon-position-left">
																							<a href="#mision" data-vc-accordion data-vc-container=".vc_tta-container">
																								<span class="vc_tta-title-text">Our Mision</span><i class="vc_tta-controls-icon vc_tta-controls-icon-plus"></i>
																							</a>
																						</h4>
																					</div>
																					<div class="vc_tta-panel-body">
																						<div class="wpb_text_column wpb_content_element " >
																							<div class="wpb_wrapper">
																								<p>To provide technology solutions by applying creative and innovative concepts to improve access to clean energy and information in Nigeria.</p>
																							</div>
																						</div>
																					</div>
																				</div>
																				<div class="vc_tta-panel" id="certification" data-vc-content=".vc_tta-panel-body">
																					<div class="vc_tta-panel-heading">
																						<h4 class="vc_tta-panel-title vc_tta-controls-icon-position-left">
																							<a href="#certification" data-vc-accordion data-vc-container=".vc_tta-container">
																								<span class="vc_tta-title-text">Our Certification</span><i class="vc_tta-controls-icon vc_tta-controls-icon-plus"></i>
																							</a>
																						</h4>
																					</div>
																					<div class="vc_tta-panel-body">
																						<div class="wpb_text_column wpb_content_element " >
																							<div class="wpb_wrapper">
																								<p>The company’s integrated management system is based on the principles of ISO 9001: 2008, ISO 14001:2004 and OHSAS 18001 and incorporates the requirements of the IMO: ISM code for the safe management and operation of our facilities and projects.</p>
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
													</div>
													<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-12">
														<div class="vc_column-inner ">
															<div class="wpb_wrapper">
																<h3 style="font-size: 30px;line-height: 30px;text-align: left" class="vc_custom_heading" >Quality, Health, Safety & Environment</h3>
																<div class="vc_tta-container" data-vc-action="collapse">
																	<div class="vc_general vc_tta vc_tta-accordion vc_tta-color-grey vc_tta-style-classic vc_tta-shape-rounded vc_tta-o-shape-group vc_tta-controls-align-left">
																		<div class="vc_tta-panels-container">
																			<div class="vc_tta-panels">
																				<div class="vc_tta-panel vc_active" id="1464775585539-965828e6-a8ee" data-vc-content=".vc_tta-panel-body">
																					<div class="vc_tta-panel-heading">
																						<h4 class="vc_tta-panel-title vc_tta-controls-icon-position-left">
																							<a href="#1464775585539-965828e6-a8ee" data-vc-accordion data-vc-container=".vc_tta-container">
																								<span class="vc_tta-title-text">Our Commitment</span><i class="vc_tta-controls-icon vc_tta-controls-icon-plus"></i>
																							</a>
																						</h4>
																					</div>
																					<div class="vc_tta-panel-body">
																						<div class="wpb_text_column wpb_content_element " >
																							<div class="service-content">
																								<ul>
																									<li>Eliminate HSE incidents across our operations</li>
																									<li>Prevent pollution</li>
																									<li>Investigate and prevent recurrence of quality and HSE-related non-conformances.</li>
																									<li>Set tough but achievable QHSE objectives, monitor progress and ensure continuous improvement</li>
																									<li>Minimise our impact on the environment.</li>
																									<li>Train and develop all our employees</li>
																									<li>Ensure compliance with applicable local and international legislation.</li>
																								</ul>
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
													</div>
												</div>
											</div>
											<hr>
											<div class='container team-section  '>
												<div class='section-header'>
													<h3>Meet Our Team</h3>
												</div>
												<div class='row'>
													<div class='col-md-3 col-sm-4 col-xs-4 col-md-offset-3'>
														<div class='team-box'>
															<img width="270" height="400" src="{{asset('image/2016/07/Ikenna-Efika.png')}}" class="attachment-manufactory-270-400 size-manufactory-270-400" alt="" srcset="{{asset('image/2016/07/Ikenna-Efika.png')}} 270w, {{asset('image/2016/07/Ikenna-Efika.png')}} 203w" sizes="(max-width: 270px) 100vw, 270px" />
															<div class='team-content'>
																<h4>Dr. Ikenna Efika</h4>
																<div class='team-content-box'>
																	<span>MD, CEO</span>
																	<a href='mailto:ikenna.efika@ronchoenergy.com'><span class='icon icon-Mail'></span>ikenna.efika@ronchoenergy.com</a>
																	<a href='tel:+234 701 309 5215'><span class='icon icon-Phone2'></span>+234 701 309 5215</a>
																	<ul>
																		<li><a target='_blank' href='#'><i class='fa fa-facebook' aria-hidden='true'></i></a></li>
																		<li><a target='_blank' href='#'><i class='fa fa-twitter' aria-hidden='true'></i></a></li>
																		<li><a target='_blank' href='#'><i class='fa fa-google-plus' aria-hidden='true'></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
													<div class='col-md-3 col-sm-4 col-xs-4 '>
														<div class='team-box'>
															<img width="270" height="400" src="{{asset('image/2016/07/Chidi-Efika.png')}}" class="attachment-manufactory-270-400 size-manufactory-270-400" alt="" srcset="{{asset('image/2016/07/Chidi-Efika.png')}} 270w, {{asset('image/2016/07/Chidi-Efika.png')}} 203w" sizes="(max-width: 270px) 100vw, 270px" />
															<div class='team-content'>
																<h4>Dr. Chidi Efika</h4>
																<div class='team-content-box'>
																	<span>Chairman</span>
																	<a href='mailto:example@example.com'><span class='icon icon-Mail'></span>----</a>
																	<a href='tel:+80023145451'><span class='icon icon-Phone2'></span>---</a>
																	<ul>
																		<li><a target='_blank' href='#'><i class='fa fa-facebook' aria-hidden='true'></i></a></li>
																		<li><a target='_blank' href='#'><i class='fa fa-twitter' aria-hidden='true'></i></a></li>
																		<li><a target='_blank' href='#'><i class='fa fa-google-plus' aria-hidden='true'></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>

												</div>
											</div>
											<hr>
											<div class='container-fuild no-padding client-section ' style="background-color: #fff;">
												<div class='container'>
													<div class='section-header' id="clients">
														<h3 style="color:#000000; font-size:32px">Meet Our Clients</h3>
													</div>
													<br>
													<div class='row'>
														<div class='col-md-12 col-sm-12 col-xs-12'>
															<div class='client-logo-block'>
																<div class='logg-box '>
																	<a href='#'><img width="450" height="99" src="image/2016/07/client-1.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="79" src="image/2016/07/client-2.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="79" src="image/2016/07/client-3.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="79" src="image/2016/07/client-4.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="100" src="image/2016/07/client-5.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="79" src="image/2016/07/client-6.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="79" src="image/2016/07/client-7.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="100" src="image/2016/07/client-8.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="100" src="image/2016/07/client-9.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>
															</div>
														</div>
													</div>
													<hr>
													<div class='section-header' id="clients">
														<h3 style="color:#000000; font-size:32px">Technologies We Support</h3>
													</div>
													<br>
													<div class='row'>
														<div class='col-md-12 col-sm-12 col-xs-12'>
															<div class='client-logo-block'>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="79" src="image/2016/07/client-10.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="99" src="image/2016/07/client-11.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="79" src="image/2016/07/client-12.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="79" src="image/2016/07/client-13.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="100" src="image/2016/07/client-14.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="79" src="image/2016/07/client-15.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="79" src="image/2016/07/client-16.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="100" src="image/2016/07/client-17.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="100" src="image/2016/07/client-18.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="100" src="image/2016/07/client-19.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="100" src="image/2016/07/client-20.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="100" src="image/2016/07/client-21.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>
															</div>
														</div>
													</div>
													<hr>
													<div class='row'>
														<div class='col-md-12 col-sm-12 col-xs-12'>
															<div class='client-logo-block'>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="79" src="image/2016/07/client-22.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="99" src="image/2016/07/client-23.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="79" src="image/2016/07/client-24.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="79" src="image/2016/07/client-25.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="100" src="image/2016/07/client-26.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="79" src="image/2016/07/client-27.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="79" src="image/2016/07/client-28.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="100" src="image/2016/07/client-29.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="100" src="image/2016/07/client-30.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="100" src="image/2016/07/client-31.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="100" src="image/2016/07/client-32.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="100" src="image/2016/07/client-33.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>
															</div>
														</div>
													</div>
													<hr>
													<div class='row'>
														<div class='col-md-12 col-sm-12 col-xs-12'>
															<div class='client-logo-block'>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="79" src="image/2016/07/client-34.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="99" src="image/2016/07/client-35.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="79" src="image/2016/07/client-36.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="79" src="image/2016/07/client-37.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="100" src="image/2016/07/client-38.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="79" src="image/2016/07/client-39.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="79" src="image/2016/07/client-40.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="100" src="image/2016/07/client-41.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="100" src="image/2016/07/client-42.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="100" src="image/2016/07/client-43.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="100" src="image/2016/07/client-44.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="100" src="image/2016/07/client-45.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>
															</div>
														</div>
													</div>
													<hr>
													<div class='section-header' id="clients">
														<h3 style="color:#000000; font-size:32px">Licenses &amp; Registrations</h3>
													</div>
													<br>
													<div class='row'>
														<div class='col-md-12 col-sm-12 col-xs-12'>
															<div class='client-logo-block'>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="79" src="image/2016/07/license-1.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="99" src="image/2016/07/license-2.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="79" src="image/2016/07/license-3.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="79" src="image/2016/07/license-4.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="100" src="image/2016/07/license-5.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="79" src="image/2016/07/license-6.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="79" src="image/2016/07/license-7.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="100" src="image/2016/07/license-8.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="100" src="image/2016/07/license-9.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="100" src="image/2016/07/license-10.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="100" src="image/2016/07/license-11.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="100" src="image/2016/07/license-12.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="100" src="image/2016/07/license-13.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
																</div>

																<div class='logg-box '>
																	<a href='#'><img width="450" height="100" src="image/2016/07/license-14.png" class="attachment-manufactory-134-36 size-manufactory-134-36" alt="" /></a>
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
@endsection
