@extends("master")

@section("title")
RonchoEnergy | Engineering Services
@endsection

@section("content")
<div class="container-fluid no-padding pagebanner"  style="background-image: url(demo/wpm/manufactory/wp-content/themes/manufactory/images/page-banner.jpg);">
	<div class="page-banner-inner">
		<div class="container">
			<h3>
				Engineering Services
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
				<span property="name">Engineering Services</span>
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
							<li class="">
								<a href="{{ route('roncho_energy') }}">Energy</a>
							</li>
							<li class="">
								<a href="{{ route('roncho_ict') }}">ICT</a>
							</li>
							<li class="active">
								<a href="{{ route('roncho_engineering') }}">Engineering Services</a>
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
										<h3>Engineering Services</h3>
									</div>
									<br>
									<ul>
										<li>Procurement, Installation, Operation & Maintenance</li>
										<li>Consultancy Services</li>
										<li>Information & Communication Systems & Technologies</li>
									</ul>
									<div class="service-info col-md-10">
										<a target="_blank" href="{{ asset('pdf/RonchoEngineering.pdf') }}">
											<i class="fa fa-file-pdf-o" aria-hidden="true"></i>
										</a>
										<span>For more information, Please download our Engineering Services brochure here</span>
									</div>
								</div>
								<div class="col-md-5 col-sm-5 servicedetail-images">
									<img width="352" height="371" src="{{asset('demo/wpm/manufactory/wp-content/uploads/2016/06/engineering.png')}}" class="attachment-manufactory-352-371 size-manufactory-352-371" alt="" srcset="{{asset('demo/wpm/manufactory/wp-content/uploads/2016/06/engineering.png')}} 352w, {{asset('demo/wpm/manufactory/wp-content/uploads/2016/06/engineering.png')}} 284w, {{asset('demo/wpm/manufactory/wp-content/uploads/2016/06/engineering.png')}} 360w" sizes="(max-width: 352px) 100vw, 352px" />
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
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#accordion1" aria-expanded="true" aria-controls="accordion1">Consultancy Services</a>
										</h4>
									</div>
									<div id="accordion1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion1">
										<div class="panel-body">
											<div class="service-content">
												<ul>
													<li>Manpower Supply (Technical & Admin)</li>
													<li>Human Resources & Development Consultancy</li>
													<li>Material Management</li>
													<li>Cost and Planning</li>
													<li>Technical Documentation / Document Control</li>
													<li>Industrial Design</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="accordion_5">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#accordion5" aria-expanded="true" aria-controls="accordion5">Operation & Maintenance</a>
										</h4>
									</div>
									<div id="accordion5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion5">
										<div class="panel-body">
											<div class="service-content">
												<ul>
													<li>Electrical, Mechanical & Civil Maintenance Services</li>
													<li>Preservation Services (Corrosion Control)</li>
												</ul>
											</div>
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
											<a role="button" data-toggle="collapse" data-parent="#accordionion" href="#accordion2" aria-expanded="true" aria-controls="accordion2">Information Systems & Technology / Communication Systems</a>
										</h4>
									</div>
									<div id="accordion2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion2">
										<div class="panel-body">
											<div class="service-content">
												<ul>
													<li>Web Design
													</li>
													<li>Data Management Services</li>
													<li>Hardware Installation Support</li>
													<li>User Support / Help Desk Services</li>
													<li>Network Support Services</li>
													<li>Software Development & Support Services</li>
													<li>IT Management</li>
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
