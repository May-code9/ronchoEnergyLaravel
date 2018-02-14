@extends("master")

@section("title")
RonchoEnergy | Request Form
@endsection

@section("content")

<div class="container-fluid no-padding pagebanner"  style="background-image: url(demo/wpm/manufactory/wp-content/themes/manufactory/images/page-banner.jpg);">
	<div class="page-banner-inner">
		<div class="container">
			<h3>
				Request Form
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
				<span property="name">Request Form</span>
				<meta property="position" content="2">
			</span>
		</div>
	</div>
</div>

<main id="main" class="site-main no-padding no-margin">
	<div class="page-content">
		<div class="container-fluid no-padding">
			<div class="row">
				<div class="content-area full-content col-md-12 no-padding">
					<div id="post-22" class="post-22 page type-page status-publish hentry">
						<div class="entry-content">
							<div class="vc_row wpb_row vc_row-fluid">
								<div class="wpb_column vc_column_container vc_col-sm-12">
									<div class="vc_column-inner ">
										<div class="wpb_wrapper">
											<div class="container-fluid no-padding contactus-section">
												<div class="contactinfo-block">
													<!-- <div class="col-md-4 col-sm-6 col-xs-12">
														<div class="section-header">
															<h3> Our NewYork Office </h3>
														</div>
														<img width="420" height="330" src="demo/wpm/manufactory/wp-content/uploads/2016/07/our-office.jpg" class="attachment-manufactory-420-330 size-manufactory-420-330" alt="" srcset="demo/wpm/manufactory/wp-content/uploads/2016/07/our-office.jpg 420w, demo/wpm/manufactory/wp-content/uploads/2016/07/our-office-300x236.jpg 300w" sizes="(max-width: 420px) 100vw, 420px" />
													</div> -->
													<div class="col-md-8 col-sm-6 col-xs-12">
														@if(Session::has('success_status'))
														<div class="alert alert-success">{{ Session::get('success_status') }}</div>
														@else
														<div class="section-header">
															<h3>Send Us a Message</h3>
														</div>

															<div class="screen-reader-response"></div>

															<form action="{{ route('postRequest', ['user_id'=>$user_id, 'equipment'=>$equipment]) }}" method="post" class="wpcf7-form" novalidate="novalidate">
																{{ csrf_field() }}
																<div class="col-md-6 col-sm-6 col-xs-12">
																	<div class="form-group">
																		<span class="wpcf7-form-control-wrap your-name">
																			<input type="text" name="first_name" value="{{ $first_name }}" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" disabled />
																		</span>
																	</div>
																</div>
																<div class="col-md-6 col-sm-6 col-xs-12">
																	<div class="form-group">
																		<span class="wpcf7-form-control-wrap your-phone">
																			<input type="text" name="phone_number" value="{{ $phone }}" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" disabled />
																		</span>
																	</div>
																</div>
																<div class="col-md-6 col-sm-6 col-xs-12">
																	<div class="form-group">
																		<span class="wpcf7-form-control-wrap your-email">
																			<input type="email" name="email" value="{{ $email }}" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" disabled />
																		</span>
																	</div>
																</div>
																<div class="col-md-6 col-sm-6 col-xs-12">
																	<div class="form-group">
																		<span class="wpcf7-form-control-wrap your-subject">
																			<input type="text" name="product" value="Purchase of {{ $equipment }}" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" disabled />
																		</span>
																	</div>
																</div>
																<input type="hidden" name="user_id" value="{{ $user_id }}"/>
																<div class="col-md-12 col-sm-12 col-xs-12">
																	<div class="form-group">
																		<span class="wpcf7-form-control-wrap your-message">
																			<textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Your Message"></textarea>
																		</span>
																	</div>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12">
																	<div class="form-group">
																		<input type="submit" value="Send Request" class="wpcf7-form-control wpcf7-submit" />
																	</div>
																</div>
																<div class="wpcf7-response-output wpcf7-display-none"></div>
															</form>

														@endif
													</div>
													<div class="col-md-4 col-sm-12 col-xs-12" itemscope itemtype="http://schema.org/LocalBusiness">
														<div class="section-header" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
															<h3 itemprop="addressLocality" >Our Office Address</h3>
														</div>
														<div class="getintouch">
															<p>
																<span>Main Office:</span><a itemprop="streetAddress">Okporo road, Rumuogba,</a><a itemprop="addressLocality"> Port Harcourt</a><a itemprop="addressRegion"> Rivers State</a>
															</p>
															<p>
																<span>Lagos Office:</span><a itemprop="streetAddress">Remi Fani Kayode,</a><a itemprop="addressLocality"> GRA, Ikeja,</a><a itemprop="addressRegion"> Lagos</a>
															</p>
															<p>
																<span>Abuja Office:</span><a itemprop="streetAddress">Deogratias Plaza, Opp. Modern Market</a><a itemprop="addressLocality"> Utako,</a><a itemprop="addressRegion"> Abuja</a>
															</p>
															<p>
																<span>Phone :</span>
																<a href="tel:+234 701 309 5215" itemprop="telephone"> 09069920242</a>
															</p>
															<p>
																<span>Email :</span>
																<a href="mailto:info@ronchoenergy.com" itemprop="email">info@ronchoenergy.com</a>
															</p>
															<ul>
											          <li><a target="_blank" href="https://www.facebook.com/ronchoenergy/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											          <li><a target="_blank" href="https://twitter.com/Roncho_Energy"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											          <li><a target="_blank" href="https://www.linkedin.com/company/roncho-energy-services-ltd/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
											        </ul>
														</div>
													</div>
												</div>
											</div>
											<!-- <div class="map-section container-fluid no-padding">
												<div class="map container-fluid no-padding">
													<div class="map-canvas" id="map-canvas-contact" data-lat=" -37.813821" data-lng="144.969530" data-string="PO Box 16122 Collins Street West Victoria 8007 Australia" data-marker="demo/wpm/manufactory/wp-content/plugins/manufactory-toolkit/lib/images/marker.png" data-zoom="12"></div>
												</div>
											</div> -->
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
