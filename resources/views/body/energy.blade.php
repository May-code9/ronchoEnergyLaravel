@extends("master")

@section("title")
RonchoEnergy | Energy
@endsection

@section("content")
<div class="container-fluid no-padding pagebanner"  style="background-image: url(demo/wpm/manufactory/wp-content/themes/manufactory/images/page-banner.jpg);">
	<div class="page-banner-inner">
		<div class="container">
			<h3>
				Energy
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
				<a property="item" typeof="WebPage" title="Solution" href="#" class="post post-manufactor_service-archive">
					<span property="name">Solution</span>
				</a>
				<meta property="position" content="2">
			</span> &gt;
			<span property="itemListElement" typeof="ListItem">
				<span property="name">Energy</span>
				<meta property="position" content="3">
			</span>
		</div>
	</div>
</div>
<main id="main" class="site-main">
	<div class="post-content">
		<div class="container servicedetail">
			<div class="row">
				<div id="post-83" class="post-83 manufactor_service type-manufactor_service status-publish has-post-thumbnail hentry">
					<div class="col-md-3 col-sm-4 servicedetail-tab">
						<ul>
							<li class="active">
								<a href="{{ route('roncho_energy') }}">Energy</a>
							</li>
							<li class="">
								<a href="{{ route('roncho_ict') }}">ICT</a>
							</li>
							<li class="">
								<a href="{{ route('roncho_oil') }}">Oil and Gas</a>
							</li>
						</ul>
						<hr>
						<ul>
							<li class="active">
								<a href="{{ route('roncho_projects') }}">View Projects</a>
							</li>
						</ul>
					</div>
					<div class="col-md-9 col-sm-8">
						<div class="service-content">
							<div class="row">
								<div class="col-md-7 col-sm-7">
									<div class="section-header">
										<h3>Energy</h3>
									</div>
									<!-- <p>In 2010, we laid out our goals for the sed future in our Strategy 2015, including our vision and mission for our company. Our vision emphasizes that the we want to be The Best Finance Company through the world this is goes beyond the simple fact that, as soon global company,</p>
									<p>Our vision emphasizes that the we want to be The Best Finance Company through the world this is goes beyond the simple fact that, as soon global company.Perspiciatis unde omnis iste natus error sit elites voluptatem accu santiumuo doloremque laudatium, totam rem aperiam, eaque ipsa quae ab illomas ilts inventore veritatis et quasi architecto</p>
									<p>Mister we could use a man like Herbert Hoover again. Maybe you and me were never meant to be. But baby think of me once in awhile. I&#8217;m at WKRP in Cincinnati! Just two good ol&#8217; boys Wouldn&#8217;t change if they could system like a true modern.</p> -->
									<ul>
										<li>Standalone Solar Systems (PV & Hybrid)</li>
										<li>Energy Back-Up (UPS) systems</li>
										<li>Mini-Grids</li>
										<li>Solar-Enabled Applications </li>
										<li>Grid Extension Projects including HVAC installations.</li>
									</ul>
									<div class="service-info col-md-10">
										<a href="{{ asset('pdf/RonchoEnergy_Corporate Profile_20171215.pdf') }}" target="_blank">
											<i class="fa fa-file-pdf-o" aria-hidden="true"></i>
										</a>
										<span>For more information, Please download our Energy brochure here</span>
									</div>
								</div>
								<div class="col-md-5 col-sm-5 servicedetail-images">
									<img width="352" height="371" src="{{ asset('demo/wpm/manufactory/wp-content/uploads/2016/06/service-detail-2-352x371.jpg') }}" class="attachment-manufactory-352-371 size-manufactory-352-371" alt="" srcset="{{ asset('demo/wpm/manufactory/wp-content/uploads/2016/06/service-detail-2-352x371.jpg') }} 352w, demo/wpm/manufactory/wp-content/uploads/2016/06/service-detail-2-284x300.jpg 284w, demo/wpm/manufactory/wp-content/uploads/2016/06/service-detail-2-352x371.png 360w" sizes="(max-width: 352px) 100vw, 352px"/>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</main>
<div class="col-md-10 col-md-push-1">
	<hr>
</div>
<main id="maining" class="site-main">
	<div class="post-content">
		<div class="container servicedetail">
			<div class="row">
				<div id="post-83" class="post-83 manufactor_service type-manufactor_service status-publish has-post-thumbnail hentry">
					<div class="col-md-6 col-sm-12">
						<div class="accordion-section">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="accordion_1">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#accordion1" aria-expanded="true" aria-controls="accordion1">Standalone Solar Solutions</a>
										</h4>
									</div>
									<div id="accordion1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion1">
										<div class="panel-body">
											<div class="service-content">
												<ul>
													<li>Solar Plug & Play Products
														<ul>
															<li>Solectric 10 (Flagship products - Orb Energy)</li>
															<li>Solectric 15 (Flagship products - Orb Energy)</li>
															<li>Solectric 30 (Flagship products - Orb Energy)</li>
															<li>Solectric 120 (Flagship products - Orb Energy)</li>
														</ul>
													</li>
													<li>Component-Based Solar Solutions for your home or office <br><br>
														<p><strong>5-stage Installation Process</strong></p>
														<ul>
															<li>Capture Client Requirements</li>
															<li>Preliminary System Design (Establish main system components)</li>
															<li>Site Assessment</li>
															<li>Final Bill of Material (Logistics, Civil Works and Finalised BOS)</li>
															<li>Mobilisation, Installation & Commissioning</li>
														</ul>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="accordion_5">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#accordion5" aria-expanded="true" aria-controls="accordion5">Mini-Grids</a>
										</h4>
									</div>
									<div id="accordion5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion5">
										<div class="panel-body">
											<div class="service-content">
												<ul>
													<li>Isolated Mini-Grids</li>
													<li>Grid-Connected Mini-Grids</li>
													<li>Grid-Interleave Solutions</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="accordion_3">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#accordion3" aria-expanded="true" aria-controls="accordion3">Grid-Extension Projects</a>
										</h4>
									</div>
									<div id="accordion3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion3">
										<div class="panel-body">

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12">
						<div class="accordion-section">
							<div class="panel-group" id="accordionion" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="accordion_2">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordionion" href="#accordion2" aria-expanded="true" aria-controls="accordion2">Energy Back-Up Solutions</a>
										</h4>
									</div>
									<div id="accordion2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion2">
										<div class="panel-body">
											<div class="service-content">
												<ul>
													<li>Back-Up Solutions for your home, office and facilities
														<p><strong>5-stage Installation Process</strong></p>
														<ul>
															<li>Capture Client Requirements</li>
															<li>Preliminary System Design (Establish main system components)</li>
															<li>Site Assessment</li>
															<li>Final Bill of Material (Logistics, Civil Works and Finalised BOS)</li>
															<li>Mobilisation, Installation & Commissioning</li>
														</ul>
													</li>
													<li>Flagship Product – Flow Batteries</li>
													<li>Flagship Solution – Tesla</li>
													<li>Flexenclosure for Telecomms and Outdoor Installations</li>
													<li>Easy to install</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="accordion_4">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordionion" href="#accordion4" aria-expanded="true" aria-controls="accordion4">Solar Enabled Applications</a>
										</h4>
									</div>
									<div id="accordion4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion4">
										<div class="panel-body">
											<div class="service-content">
												<ul>
													<li>Street Lights</li>
													<li>Solar Water pumps</li>
													<li>Solar irrigation systems</li>
													<li>Solar water-heating</li>
													<li>Solar water purification</li>
													<li>Solar Air-conditioning</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="accordion_6">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordionion" href="#accordion6" aria-expanded="true" aria-controls="accordion6">How to order</a>
										</h4>
									</div>
									<div id="accordion6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion6">
										<div class="panel-body">
											<p>You can contact us at</p>
											<div class="service-content">
												<ul>
													<li>sales@ronchoenergy.com</li>
													<li>090 6992 0242</li>
												</ul>
											</div>
											<p>We have distributors that make these plug and play products available anywhere in Nigeria. Contact us to connect you to the right channel.</p>
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
