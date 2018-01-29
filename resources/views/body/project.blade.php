@extends("master")

@section("title")
RonchoEnergy | Projects: Energy, ICT, Engineering Services
@endsection

@section("content")
<div class="container-fluid no-padding pagebanner"  style="background-image: url(demo/wpm/manufactory/wp-content/themes/manufactory/images/page-banner.jpg);">
	<div class="page-banner-inner">
		<div class="container">
			<h3>
				Project				</h3>
			</div>
		</div>
	</div>

	<div class="container-fluid no-padding page-breadcrumb">
		<div class="container">
			<div class="breadcrumb">
				<!-- Breadcrumb NavXT 5.7.1 -->
				<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to {{ config('app.name') }}" href="{{ route('roncho_home') }}" class="home"><span property="name">{{ config('app.name') }}</span></a><meta property="position" content="1"></span> &gt; <span property="itemListElement" typeof="ListItem"><span property="name">Project</span><meta property="position" content="2"></span>					</div>
			</div>
		</div>

		<main id="main" class="site-main no-padding no-margin">
			<div class="page-content">
				<div class="container">
					<div class="row">
						<div class="content-area full-content col-md-12 no-padding">
							<div id="post-46" class="post-46 page type-page status-publish hentry">
								<div class="entry-content">
									<div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">		<div class="container-fuild no-padding project-portfolio portfolio-section two">
										<div class="container">
											<div class="row">
												<ul id="filters" class="portfolio-categories sorting-menu">
													<li>
														<a data-filter="*" class="active" href="#">All</a>
													</li>

													<li><a href="#" data-filter=".energy">Enery</a></li>
													<li><a href="#" data-filter=".ict">ICT</a></li>
													<li><a href="#" data-filter=".oil">Engineering Services</a></li>
												</ul>
												<ul class="portfolio-list no-padding">
													<li class="col-md-4 col-sm-4 col-xs-12 energy">
														<div class="image-block">
															<img width="370" height="220" src="{{ asset('image/project1.jpg') }}" class="attachment-manufactory-370-220 size-manufactory-370-220 wp-post-image" alt="" />
															<a href="{{ asset('image/project1-full.jpg') }}" class="zoom" title="Portfolio 1"><i class="fa fa-plus"></i></a>
														</div>
													</li>
													<li class="col-md-4 col-sm-4 col-xs-12 ict">
														<div class="image-block">
															<img width="370" height="220" src="demo/wpm/manufactory/wp-content/uploads/2016/06/weare-5-1-370x220.jpg" class="attachment-manufactory-370-220 size-manufactory-370-220 wp-post-image" alt="" />
															<a href="demo/wpm/manufactory/wp-content/uploads/2016/06/weare-5-1.jpg" class="zoom" title="Portfolio 5"><i class="fa fa-plus"></i></a>
														</div>
													</li>
													<li class="col-md-4 col-sm-4 col-xs-12 energy">
														<div class="image-block">
															<img width="360" height="220" src="{{ asset('image/project2.jpg') }}" class="attachment-manufactory-370-220 size-manufactory-370-220 wp-post-image" alt="" />
															<a href="{{ asset('image/project2-full.jpg') }}" class="zoom" title="Portfolio 2"><i class="fa fa-plus"></i></a>
														</div>
													</li>
													<li class="col-md-4 col-sm-4 col-xs-12 ict">
														<div class="image-block">
															<img width="370" height="220" src="demo/wpm/manufactory/wp-content/uploads/2016/06/project-detail-1-370x220.jpg" class="attachment-manufactory-370-220 size-manufactory-370-220 wp-post-image" alt="" />
															<a href="demo/wpm/manufactory/wp-content/uploads/2016/06/project-detail-1.jpg" class="zoom" title="Portfolio 6"><i class="fa fa-plus"></i></a>
														</div>
													</li>
													<li class="col-md-4 col-sm-4 col-xs-12 energy">
														<div class="image-block">
															<img width="360" height="220" src="{{ asset('image/project3.jpg') }}" class="attachment-manufactory-370-220 size-manufactory-370-220 wp-post-image" alt="" />
															<a href="{{ asset('image/project3-full.jpg') }}" class="zoom" title="Portfolio 4"><i class="fa fa-plus"></i></a>
														</div>
													</li>
													<li class="col-md-4 col-sm-4 col-xs-12 ict">
														<div class="image-block">
															<img width="370" height="220" src="demo/wpm/manufactory/wp-content/uploads/2016/06/project-7.jpg" class="attachment-manufactory-370-220 size-manufactory-370-220 wp-post-image" alt="" srcset="demo/wpm/manufactory/wp-content/uploads/2016/06/project-7.jpg 370w, demo/wpm/manufactory/wp-content/uploads/2016/06/project-7-300x178.jpg 300w" sizes="(max-width: 370px) 100vw, 370px" />
															<a href="demo/wpm/manufactory/wp-content/uploads/2016/06/project-7.jpg" class="zoom" title="Portfolio 7"><i class="fa fa-plus"></i></a>
														</div>
													</li>
													<li class="col-md-4 col-sm-4 col-xs-12 oil">
														<div class="image-block">
															<img width="370" height="220" src="demo/wpm/manufactory/wp-content/uploads/2016/06/weare-3-370x220.jpg" class="attachment-manufactory-370-220 size-manufactory-370-220 wp-post-image" alt="" />
															<a href="demo/wpm/manufactory/wp-content/uploads/2016/06/weare-3.jpg" class="zoom" title="Portfolio 3"><i class="fa fa-plus"></i></a>
														</div>
													</li>
													<li class="col-md-4 col-sm-4 col-xs-12 energy">
														<div class="image-block">
															<img width="360" height="220" src="{{ asset('image/project5.jpg') }}" class="attachment-manufactory-370-220 size-manufactory-370-220 wp-post-image" alt="" />
															<a href="{{ asset('image/project5-full.jpg') }}" class="zoom" title="Portfolio 4"><i class="fa fa-plus"></i></a>
														</div>
													</li>
													<li class="col-md-4 col-sm-4 col-xs-12 energy">
														<div class="image-block">
															<img width="360" height="220" src="{{ asset('image/project7.jpg') }}" class="attachment-manufactory-370-220 size-manufactory-370-220 wp-post-image" alt="" />
															<a href="{{ asset('image/project7-full.jpg') }}" class="zoom" title="Portfolio 4"><i class="fa fa-plus"></i></a>
														</div>
													</li>
													<li class="col-md-4 col-sm-4 col-xs-12 oil">
														<div class="image-block">
															<img width="370" height="220" src="demo/wpm/manufactory/wp-content/uploads/revslider/home-slider-2/slider-4-370x220.jpg" class="attachment-manufactory-370-220 size-manufactory-370-220 wp-post-image" alt="" />
															<a href="demo/wpm/manufactory/wp-content/uploads/revslider/home-slider-2/slider-4.jpg" class="zoom" title="Portfolio 8"><i class="fa fa-plus"></i></a>
														</div>
													</li>
													<li class="col-md-4 col-sm-4 col-xs-12 energy">
														<div class="image-block">
															<img width="360" height="220" src="{{ asset('image/project6.jpg') }}" class="attachment-manufactory-370-220 size-manufactory-370-220 wp-post-image" alt="" />
															<a href="{{ asset('image/project6-full.jpg') }}" class="zoom" title="Portfolio 4"><i class="fa fa-plus"></i></a>
														</div>
													</li>
													<li class="col-md-4 col-sm-4 col-xs-12 oil">
														<div class="image-block">
															<img width="370" height="220" src="demo/wpm/manufactory/wp-content/uploads/2016/06/project-9.jpg" class="attachment-manufactory-370-220 size-manufactory-370-220 wp-post-image" alt="" srcset="demo/wpm/manufactory/wp-content/uploads/2016/06/project-9.jpg 370w, demo/wpm/manufactory/wp-content/uploads/2016/06/project-9-300x178.jpg 300w" sizes="(max-width: 370px) 100vw, 370px" />
															<a href="demo/wpm/manufactory/wp-content/uploads/2016/06/project-9.jpg" class="zoom" title="Portfolio 9"><i class="fa fa-plus"></i></a>
														</div>
													</li>
													<li class="col-md-4 col-sm-4 col-xs-12 energy">
														<div class="image-block">
															<img width="360" height="220" src="{{ asset('image/project4.jpg') }}" class="attachment-manufactory-370-220 size-manufactory-370-220 wp-post-image" alt="" />
															<a href="{{ asset('image/project4-full.jpg') }}" class="zoom" title="Portfolio 4"><i class="fa fa-plus"></i></a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div></div></div></div>
							</div>
						</div>				</div>
					</div>
				</div>
			</div>
		</main>

		@endsection
