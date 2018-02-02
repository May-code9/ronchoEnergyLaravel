@extends("master")

@section("title")
RonchoEnergy | News
@endsection

@section("content")

<div class="container-fluid no-padding pagebanner"  style="background-image: url(demo/wpm/manufactory/wp-content/themes/manufactory/images/page-banner.jpg);">
	<div class="page-banner-inner">
		<div class="container">
			<h3>
				Our News
			</h3>
		</div>
	</div>
</div>

<div class="container-fluid no-padding page-breadcrumb">
	<div class="container">
		<div class="breadcrumb">
			<!-- Breadcrumb NavXT 5.7.1 -->
			<span property="itemListElement" typeof="ListItem">
				<a property="item" typeof="WebPage" title="{{ config('app.name') }}" href="{{ route('roncho_home') }}" class="home">
					<span property="name">{{ config('app.name') }}</span>
				</a>
				<meta property="position" content="1">
			</span> &gt;
			<span property="itemListElement" typeof="ListItem">
				<span property="name">Our News</span>
				<meta property="position" content="2">
			</span>
		</div>
	</div>
</div>
<main id="main" class="site-main page_spacing">
	<div class="page-content">
		<div class="container">
			<div class="row">
				<div class="content-area blog-list content-left col-md-8 col-sm-8">
					<article id="post-117" class="post-117 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized tag-materials-chemicals">
						@forelse($searchNews as $searchNew)
						<div class="blog-post-inner">
							<div class="entry-cover">
								<a href="#">
									<img width="791" height="421" src="{{ asset('/image/news/' . $searchNew->image) }}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="{{ asset('/image/news/' . $searchNew->image) }} 791w, {{ asset('/image/news/' . $searchNew->image) }} 300w, {{ asset('/image/news/' . $searchNew->image) }} 768w" sizes="(max-width: 791px) 100vw, 791px" /></a>
								<a href="#"><span class="icon_plus" aria-hidden="true"></span></a>
							</div>
							<div class="entry-meta">
								<div class="entrymeta-left">
									<div class="post-tag">
										<span class="icon icon-Tag"></span>Tags: <a href="#" rel="tag">{{ $searchNew->category }}</a>
									</div>
										<div class="post-share social-icon-share">
											<span class="icon icon-Share"></span>
											<span>Share It</span>
											<ul>
												<li><a href="javascript: void(0)" data-action="twitter" data-title="Expands food quality and safety services in Italy with acquisition of Food International Industries" data-url="demo/wpm/manufactory/2016/06/01/expands-food-quality-and-safety-services-in-italy-with-acquisition-of-food-international-industries-5/"><i class="fa fa-twitter"></i></a></li>
												<li><a href="javascript: void(0)" data-action="facebook" data-title="Expands food quality and safety services in Italy with acquisition of Food International Industries" data-url="demo/wpm/manufactory/2016/06/01/expands-food-quality-and-safety-services-in-italy-with-acquisition-of-food-international-industries-5/"><i class="fa fa-facebook"></i></a></li>
												<li class="linkedin"><a href="javascript: void(0)" data-action="linkedin" data-title="Expands food quality and safety services in Italy with acquisition of Food International Industries" data-url="demo/wpm/manufactory/2016/06/01/expands-food-quality-and-safety-services-in-italy-with-acquisition-of-food-international-industries-5/"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="entrymeta-right">
										<div class="post-date">
											<span>{{ $searchNew->Day }}</span>
											<span>{{ $searchNew->Month }}</span>
										</div>
									</div>
								</div>
								<div class="entry-block">
									<div class="post-by">
										<span>By - </span>
										<a href="#">{{ $searchNew->author }}</a>
									</div>
									<div class="entry-title">
										<a href="#">
											<h3>{{ $searchNew->title }}</h3>
										</a>
									</div>
									<!-- <div id="less" class="entry-content">
										<p>{!! $searchNew->shortContent !!}</p>
									</div> -->
									<div id="readmore" class="entry-content">
										<p>{!! $searchNew->content !!}</p>
									</div>
									<!-- <div id="more" class="single-post-link">
										<a href="#123">Read More<span class="arrow_right" aria-hidden="true"></span></a>
									</div> -->
								</div>
							</div>
							<hr>
							@empty
							<h1 style="text-align:center">No Result for {{ $search }}</h1>
							@endforelse
						</article>

						<div class="clearfix"></div>
					</div>

					<div class="widget-area col-md-4 col-sm-4 col-xs-12 sidebar-right sidebar-1">
						<aside id="search-2" class="widget widget_search">
							<form method="get" id="" class="searchform" action="{{ route('news.search') }}" >
								<div class="input-group">
									<input type="text" name="search" id="search" placeholder="Search Here" class="form-control" required>
									<span class="input-group-btn">
										<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
									</span>
								</div><!-- /input-group -->
							</form>
						</aside>
						<aside id="categories-2" class="widget widget_categories">
							<h3 class="widget-title">Older News</h3>
							<ul>
								@forelse($getOlderNews as $getOlderNew)
								<li class="cat-item cat-item-1">
									<a href="#" >{{ $getOlderNew->title }}</a>
								</li>
								@empty
								<h1 style="text-align:center">No News Yet</h1>
								@endforelse
							</ul>
						</aside>
						<aside id="recent-posts-2" class="widget widget_recent_entries">
							<h3 class="widget-title">Latest News</h3>
							<ul>
								@forelse($getSideNews as $getSideNew)
								<li>
									<a href="#">{{ $getSideNew->title }}</a>
								</li>
								@empty
								<h1 style="text-align:center">No News Yet</h1>
								@endforelse
							</ul>
						</aside>
					</div><!-- End Sidebar -->
				</div>
			</div>
		</div>

	</main>

	@endsection
