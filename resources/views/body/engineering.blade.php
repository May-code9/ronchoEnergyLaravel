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
						<div class="callout">
							<a href="">
								<i class="fa fa-file-pdf-o" aria-hidden="true"></i>
							</a>
							<h3>Brochures</h3>
							<p>For more information on any of ourservices, please visit our range of brochures</p>
						</div>
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
										<a target="_blank" href="{{ asset('pdf/RonchoEnergy_Corporate Profile_20171215.pdf') }}">
											<i class="fa fa-file-pdf-o" aria-hidden="true"></i>
										</a>
										<span>For more information, Please download our Oil &amp; Gas brochure here</span>
									</div>
								</div>
								<div class="col-md-5 col-sm-5 servicedetail-images">
									<img width="352" height="371" src="demo/wpm/manufactory/wp-content/uploads/2016/06/service-detail-2-352x371.jpg" class="attachment-manufactory-352-371 size-manufactory-352-371" alt="" srcset="demo/wpm/manufactory/wp-content/uploads/2016/06/service-detail-2-352x371.jpg 352w, demo/wpm/manufactory/wp-content/uploads/2016/06/service-detail-2-284x300.jpg 284w, demo/wpm/manufactory/wp-content/uploads/2016/06/service-detail-2.jpg 360w" sizes="(max-width: 352px) 100vw, 352px" />
								</div>
							</div>
						</div>
						<div class="accordion-section">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="accordion_1">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#accordion1" aria-expanded="true" aria-controls="accordion1">Careers</a>
										</h4>
									</div>
									<div id="accordion1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion1">
										<div class="panel-body">
											<p>Perspiciatis unde omnis iste natus error sit voluptatem accu santiumuo doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illomas inventore veritatis et quasi architecto beatae vitae dicta sunt explicaon Nemo enim ipsam voluptatem quia voluptas</p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="accordion_2">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#accordion2" aria-expanded="true" aria-controls="accordion2">Clients Approch</a>
										</h4>
									</div>
									<div id="accordion2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion2">
										<div class="panel-body">
											<p>Perspiciatis unde omnis iste natus error sit voluptatem accu santiumuo doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illomas inventore veritatis et quasi architecto beatae vitae dicta sunt explicaon Nemo enim ipsam voluptatem quia voluptas</p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="accordion_3">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#accordion3" aria-expanded="true" aria-controls="accordion3">24/7 Professional Support</a>
										</h4>
									</div>
									<div id="accordion3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion3">
										<div class="panel-body">
											<p>Perspiciatis unde omnis iste natus error sit voluptatem accu santiumuo doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illomas inventore veritatis et quasi architecto beatae vitae dicta sunt explicaon Nemo enim ipsam voluptatem quia voluptas</p>
										</div>
									</div>
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

@endsection
