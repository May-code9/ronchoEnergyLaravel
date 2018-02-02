@extends("master")

@section("title")
RonchoEnergy | Products
@endsection

@section("content")

<div class="container-fluid no-padding pagebanner"  style="background-image: url({{asset('demo/wpm/manufactory/wp-content/themes/manufactory/images/page-banner.jpg')}});">
	<div class="page-banner-inner">
		<div class="container">
			<h3>
				{{ $getProducts->product }}
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
				<a property="item" typeof="WebPage" title="Go to Products." href="{{ route('roncho_products') }}" class="post post-product-archive">
					<span property="name">Products</span>
				</a>
				<meta property="position" content="2">
			</span> &gt;
			<span property="itemListElement" typeof="ListItem">
				<span property="name">{{ $getProducts->product }}</span>
				<meta property="position" content="4">
			</span>
		</div>
	</div>
</div>
<main id="main" class="site-main page_spacing">
	<div class="page-content">
		<div class="container no-padding">
			<!-- Content Area -->
			<div class="content-area content-left col-md-9 col-sm-8">
				<div id="product-164" class="post-164 product type-product status-publish has-post-thumbnail product_cat-entreperneurs product_cat-industries product_cat-parmacology first instock shipping-taxable purchasable product-type-simple">
					<div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4" style="opacity: 1; transition: opacity .25s ease-in-out;">
						<figure class="woocommerce-product-gallery__wrapper">
							<div data-thumb="{{asset('image/product/' . $getProducts->image)}}" class="woocommerce-product-gallery__image">
								<a href="{{asset('image/product/' . $getProducts->image)}}">
									<img width="275" height="350" src="{{asset('image/product/' . $getProducts->image)}}" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="shop5" data-caption="" data-src="{{asset('image/product/' . $getProducts->image)}}" data-large_image="{{asset('image/product/' . $getProducts->image)}}" data-large_image_width="275" data-large_image_height="350" srcset="{{asset('image/product/' . $getProducts->image)}} 275w, {{asset('image/product/' . $getProducts->image)}} 236w, {{asset('image/product/' . $getProducts->image)}} 270w" sizes="(max-width: 275px) 100vw, 275px" />
								</a>
							</div>
						</figure>
					</div>

					<div class="summary entry-summary">
						<h1 class="product_title entry-title">{{ $getProducts->product }}</h1>
						<!-- <p class="price">
							<span class="woocommerce-Price-amount amount">
								<span class="woocommerce-Price-currencySymbol">&pound;</span>122.99
							</span>
						</p> -->
						<div class="woocommerce-product-details__short-description">
							<p>{!! $getProducts->details !!}</p>
						</div>

							<form class="wpcf7-form" method="post" action="{{ route('submitProduct', ['id'=>$getProducts->id]) }}" enctype='multipart/form-data'>
								{{ csrf_field() }}
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="form-group">
										<span class="wpcf7-form-control-wrap your-message">
											<label class="" for="quantity_5a746d1baf814" >Quantity</label>
											<input type="number" id="quantity" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric" />
										</span>
									</div>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="form-group">
										<span class="wpcf7-form-control-wrap your-message">
											<textarea name="message" cols="40" rows="6" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message"></textarea>
										</span>
									</div>
								</div>
								<input type="hidden" name="product_id" value="{{$getProducts->id}}">
								<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="form-group">
										<button type="submit" name="" class="single_add_to_cart_button button">Submit</button>
									</div>
								</div>
							</form>

						<!-- <div class="product_meta">
							<span class="posted_in">Categories: <a href="demo/wpm/manufactory/product-category/entreperneurs/" rel="tag">Entreperneurs</a>, <a href="demo/wpm/manufactory/product-category/industries/" rel="tag">Industries</a>, <a href="demo/wpm/manufactory/product-category/parmacology/" rel="tag">Parmacology</a></span>
						</div> -->
					</div><!-- .summary -->

				</div><!-- #product-164 -->
			</div>
			<!-- Sidebar -->
			<div class="widget-area sidebar sidebar-shop col-md-3 col-sm-4">
				<div class="sidebar-inner">
					<aside id="woocommerce_widget_cart-2" class="widget woocommerce-widget woocommerce widget_shopping_cart">
						<h3 class="widget-title">Cart</h3>
						<div class="widget_shopping_cart_content"></div>
					</aside>
					<aside id="woocommerce_product_search-2" class="widget woocommerce-widget woocommerce widget_product_search">
						<form role="search" method="get" class="woocommerce-product-search" action="demo/wpm/manufactory/">
							<label class="screen-reader-text" for="woocommerce-product-search-field-0">Search for:</label>
							<input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="Search products&hellip;" value="" name="s" />
							<input type="submit" value="Search" />
							<input type="hidden" name="post_type" value="product" />
						</form>
					</aside>
					<aside id="woocommerce_product_categories-2" class="widget woocommerce-widget woocommerce widget_product_categories">
						<h3 class="widget-title">Product Categories</h3>
						<ul class="product-categories">
							<li class="cat-item cat-item-12">
								<a href="demo/wpm/manufactory/product-category/entreperneurs/">Entreperneurs</a>
							</li>
							<li class="cat-item cat-item-13">
								<a href="demo/wpm/manufactory/product-category/industries/">Industries</a>
							</li>
							<li class="cat-item cat-item-14 current-cat">
								<a href="demo/wpm/manufactory/product-category/parmacology/">Parmacology</a>
							</li>
						</ul>
					</aside>

				</div><!-- .sidebar-inner -->
			</div><!-- .widget-area -->
		</div>
	</div><!-- Page Content /- -->
</main><!-- .site-main -->

@if (session('alert'))
		{!! session('alert') !!}
@endif
@endsection
