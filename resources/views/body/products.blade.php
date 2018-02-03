@extends("master")

@section("title")
RonchoEnergy | Products
@endsection

@section("content")
<div class="container-fluid no-padding pagebanner"  style="background-image: url(demo/wpm/manufactory/wp-content/themes/manufactory/images/page-banner.jpg);">
	<div class="page-banner-inner">
		<div class="container">
			<h3>
				Archives: Products
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
				<span property="name">Products</span>
				<meta property="position" content="2">
			</span>
		</div>
	</div>
</div>
<main id="main" class="site-main page_spacing">
	<div class="page-content">
		<div class="container no-padding">
			<!-- Content Area -->
			<div class="content-area container-shopping content-left col-md-9 col-sm-8">

				<!-- <p class="woocommerce-result-count">Showing all 9 results</p>
				<form class="woocommerce-ordering" method="get">
					<select name="orderby" class="orderby">
						<option value="menu_order"  selected='selected'>Default sorting</option>
						<option value="popularity" >Sort by popularity</option>
						<option value="rating" >Sort by average rating</option>
						<option value="date" >Sort by newness</option>
						<option value="price" >Sort by price: low to high</option>
						<option value="price-desc" >Sort by price: high to low</option>
					</select>
				</form> -->
				<ul class="products">
					@forelse($getProducts as $getProduct)
					<li class="post-160 product type-product status-publish has-post-thumbnail product_cat-entreperneurs product_cat-industries product_cat-parmacology last instock shipping-taxable purchasable product-type-simple zoom">
						<a href="/SingleProducts/{{ $getProduct->id }}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
							<img width="370" height="370" src="{{ asset('image/product/' . $getProduct->image) }}" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="{{ asset('image/product/' . $getProduct->image) }} 270w, {{ asset('image/product/' . $getProduct->image) }} 236w, {{ asset('image/product/' . $getProduct->image) }} 275w" sizes="(max-width: 270px) 100vw, 270px" />
							<h2 class="woocommerce-loop-product__title">{{ $getProduct->product }}</h2>
							<span class="price">
								<span class="woocommerce-Price-amount amount">
									Click To Purchase
								</span>
							</span>
						</a>
						<!-- <a rel="nofollow" href="/demo/wpm/manufactory/shop/?add-to-cart=160" data-quantity="1" data-product_id="160" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a> -->
					</li>
					@empty
					<h1 style="text-align:center">No Images Yet</h1>
					@endforelse
				</ul>
				<div style="font-size:20px">
					{{ $getProducts->links() }}
				</div>
			</div>
			<!-- Sidebar -->
			<div class="widget-area col-md-3 col-sm-4 sidebar-shop sidebar-right">
				<div class="sidebar-inner">
					<aside id="" class="widget widget_search">
						<form method="get" class="searchform" action="{{ route('product.search') }}" >
							<div class="input-group">
								<input type="text" name="search" id="search" placeholder="Search Here" class="form-control" required>
								<span class="input-group-btn">
									<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
								</span>
							</div><!-- /input-group -->
						</form>
					</aside>
					<aside id="recent-posts-2" class="widget widget_recent_entries">
						<h3 class="widget-title">Recent Products</h3>
						<ul>
							@forelse($getProductsFours as $getProductsFour)
							<li class="zoom">
								<a href="/SingleProducts/{{ $getProductsFour->id }}">
									<img width="150" height="150" src="{{ asset('image/product/' . $getProductsFour->image) }}" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="{{ asset('image/product/' . $getProduct->image) }} 270w, {{ asset('image/product/' . $getProductsFour->image) }} 236w, {{ asset('image/product/' . $getProductsFour->image) }} 275w" sizes="(max-width: 150px) 100vw, 150px" />
								</a>
							</li>
							@empty
							<h3 style="text-align:center">No Images Yet</h3>
							@endforelse
						</ul>
					</aside>
					<!-- <aside id="categories-2" class="widget widget_categories">
						<h3 class="widget-title">Categories</h3>
						<ul>
							<li class="cat-item cat-item-1">
								<a href="demo/wpm/manufactory/category/uncategorized/" >Uncategorized</a>
							</li>
						</ul>
					</aside> -->
				</div><!-- .sidebar-inner -->
			</div><!-- .widget-area -->
		</div>
	</div><!-- Page Content /- -->
</main><!-- .site-main -->
@if (session('alert'))
		{!! session('alert') !!}
@endif
@endsection
