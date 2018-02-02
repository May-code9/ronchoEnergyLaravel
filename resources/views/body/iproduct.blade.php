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
				<a property="item" typeof="WebPage" title="Go to Products." href="demo/wpm/manufactory/shop/" class="post post-product-archive">
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
					<div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4" style="opacity: 0; transition: opacity .25s ease-in-out;">
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
						<p class="price">
							<span class="woocommerce-Price-amount amount">
								<span class="woocommerce-Price-currencySymbol">&pound;</span>122.99
							</span>
						</p>
						<div class="woocommerce-product-details__short-description">
							<p>They call him Flipper Flipper faster than lightning no one you see is smarter than he So join us here each week my friends you are sure to get a smile from seven stranded castaways here on Gilligans Isle well we are moving east.</p>
						</div>
						<form class="cart" method="post" enctype='multipart/form-data'>
							<div class="quantity">
								<label class="screen-reader-text" for="quantity_5a746d1baf814">Quantity</label>
								<input type="number" id="quantity_5a746d1baf814" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric" />
							</div>
							<button type="submit" name="add-to-cart" value="164" class="single_add_to_cart_button button alt">Add to cart</button>
						</form>
						<div class="product_meta">
							<span class="posted_in">Categories: <a href="demo/wpm/manufactory/product-category/entreperneurs/" rel="tag">Entreperneurs</a>, <a href="demo/wpm/manufactory/product-category/industries/" rel="tag">Industries</a>, <a href="demo/wpm/manufactory/product-category/parmacology/" rel="tag">Parmacology</a></span>
						</div>
					</div><!-- .summary -->
					<div class="woocommerce-tabs wc-tabs-wrapper">
						<ul class="tabs wc-tabs" role="tablist">
							<li class="description_tab" id="tab-title-description" role="tab" aria-controls="tab-description">
								<a href="#tab-description">Description</a>
							</li>
							<li class="reviews_tab" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
								<a href="#tab-reviews">Reviews (0)</a>
							</li>
						</ul>
						<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
							<h2>Description</h2>
							<ul>
								<li>Power:</li>
								<li>Hikekla 58 Socket Key Set</li>
								<li>Type:</li>
								<li>Socket Key Set</li>
								<li>Energy:</li>
								<li>1 L Dust Capacity</li>
								<li>Keys:</li>
								<li>Dust Bag Indicator</li>
							</ul>
							<p>They call him Flipper Flipper faster than lightning no one you see is smarter than he So join us here each week my friends you are sure to get a smile from seven stranded castaways here on Gilligans Isle well we are moving on up to the east side to a deluxe apartment in the sky sometimes you want to go.</p>
						</div>
						<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content wc-tab" id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews">
							<div id="reviews" class="woocommerce-Reviews">
								<div id="comments">
									<h2 class="woocommerce-Reviews-title">Reviews</h2>
									<p class="woocommerce-noreviews">There are no reviews yet.</p>
								</div>
								<div id="review_form_wrapper">
									<div id="review_form">
										<div id="respond" class="comment-respond">
											<span id="reply-title" class="comment-reply-title">Be the first to review &ldquo;Bench Grinder Laser – 1600W&rdquo;
												<small><a rel="nofollow" id="cancel-comment-reply-link" href="/demo/wpm/manufactory/product/bench-grinder-laser-1600w/#respond" style="display:none;">Cancel reply</a></small>
											</span>
											<form action="demo/wpm/manufactory/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate>
												<p class="comment-notes">
													<span id="email-notes">Your email address will not be published.</span> Required fields are marked
													<span class="required">*</span>
												</p>
												<div class="comment-form-rating">
													<label for="rating">Your rating</label>
													<select name="rating" id="rating" aria-required="true" required>
														<option value="">Rate&hellip;</option>
														<option value="5">Perfect</option>
														<option value="4">Good</option>
														<option value="3">Average</option>
														<option value="2">Not that bad</option>
														<option value="1">Very poor</option>
													</select>
												</div>
												<p class="comment-form-comment">
													<label for="comment">Your review <span class="required">*</span></label>
													<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" required></textarea>
												</p>
												<p class="comment-form-author">
													<label for="author">Name <span class="required">*</span></label>
													<input id="author" name="author" type="text" value="" size="30" aria-required="true" required />
												</p>
												<p class="comment-form-email">
													<label for="email">Email <span class="required">*</span></label>
													<input id="email" name="email" type="email" value="" size="30" aria-required="true" required />
												</p>
												<p class="form-submit">
													<input name="submit" type="submit" id="submit" class="submit" value="Submit" />
													<input type='hidden' name='comment_post_ID' value='164' id='comment_post_ID' />
													<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
												</p>
											</form>
										</div><!-- #respond -->
									</div>
								</div>
								<div class="clear"></div>
							</div>
						</div>
					</div>
					<section class="related products">
						<h2>Related products</h2>
						<ul class="products">
							<li class="post-162 product type-product status-publish has-post-thumbnail product_cat-entreperneurs product_cat-industries product_cat-parmacology first instock shipping-taxable purchasable product-type-simple">
								<a href="demo/wpm/manufactory/product/dual-mode-precision-router-1400w/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
									<img width="270" height="343" src="//lolthemes.com/demo/wpm/manufactory/wp-content/uploads/2016/06/shop6-270x343.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="//lolthemes.com/demo/wpm/manufactory/wp-content/uploads/2016/06/shop6-270x343.jpg 270w, //lolthemes.com/demo/wpm/manufactory/wp-content/uploads/2016/06/shop6-236x300.jpg 236w, //lolthemes.com/demo/wpm/manufactory/wp-content/uploads/2016/06/shop6.jpg 275w" sizes="(max-width: 270px) 100vw, 270px" />
									<h2 class="woocommerce-loop-product__title">Dual Mode Precision Router 1400w</h2>
									<span class="price">
										<span class="woocommerce-Price-amount amount">
											<span class="woocommerce-Price-currencySymbol">&pound;</span>52.99
										</span>
									</span>
								</a>
								<a rel="nofollow" href="/demo/wpm/manufactory/product/bench-grinder-laser-1600w/?add-to-cart=162" data-quantity="1" data-product_id="162" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
							</li>
							<li class="post-170 product type-product status-publish has-post-thumbnail product_cat-entreperneurs product_cat-industries product_cat-parmacology  instock shipping-taxable purchasable product-type-simple">
								<a href="demo/wpm/manufactory/product/circular-saw-with-laser-1600w-2/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
									<img width="270" height="343" src="//lolthemes.com/demo/wpm/manufactory/wp-content/uploads/2016/06/shop2-270x343.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="//lolthemes.com/demo/wpm/manufactory/wp-content/uploads/2016/06/shop2-270x343.jpg 270w, //lolthemes.com/demo/wpm/manufactory/wp-content/uploads/2016/06/shop2-236x300.jpg 236w, //lolthemes.com/demo/wpm/manufactory/wp-content/uploads/2016/06/shop2.jpg 275w" sizes="(max-width: 270px) 100vw, 270px" />
									<h2 class="woocommerce-loop-product__title">Circular Saw with Laser – 1600W</h2>
									<span class="price">
										<span class="woocommerce-Price-amount amount">
											<span class="woocommerce-Price-currencySymbol">&pound;</span>22.99
										</span>
									</span>
								</a>
								<a rel="nofollow" href="/demo/wpm/manufactory/product/bench-grinder-laser-1600w/?add-to-cart=170" data-quantity="1" data-product_id="170" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
							</li>
							<li class="post-166 product type-product status-publish has-post-thumbnail product_cat-entreperneurs product_cat-industries product_cat-parmacology last instock shipping-taxable purchasable product-type-simple">
								<a href="demo/wpm/manufactory/product/circular-saw-with-laser-1600w/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
									<img width="270" height="343" src="//lolthemes.com/demo/wpm/manufactory/wp-content/uploads/2016/06/shop4-270x343.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="//lolthemes.com/demo/wpm/manufactory/wp-content/uploads/2016/06/shop4-270x343.jpg 270w, //lolthemes.com/demo/wpm/manufactory/wp-content/uploads/2016/06/shop4-236x300.jpg 236w, //lolthemes.com/demo/wpm/manufactory/wp-content/uploads/2016/06/shop4.jpg 275w" sizes="(max-width: 270px) 100vw, 270px" />
									<h2 class="woocommerce-loop-product__title">Circular Saw with Laser – 1600W</h2>
									<span class="price">
										<span class="woocommerce-Price-amount amount">
											<span class="woocommerce-Price-currencySymbol">&pound;</span>632.99
										</span>
									</span>
								</a>
								<a rel="nofollow" href="/demo/wpm/manufactory/product/bench-grinder-laser-1600w/?add-to-cart=166" data-quantity="1" data-product_id="166" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
							</li>
						</ul>
					</section>
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
					<aside id="woocommerce_products-2" class="widget woocommerce-widget woocommerce widget_products">
						<h3 class="widget-title">Products</h3>
						<ul class="product_list_widget">
							<li>
								<a href="demo/wpm/manufactory/product/eihnell-heat-gun-2000w/">
									<img width="270" height="345" src="//lolthemes.com/demo/wpm/manufactory/wp-content/uploads/2016/06/shop1-270x345.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" srcset="//lolthemes.com/demo/wpm/manufactory/wp-content/uploads/2016/06/shop1-270x345.jpg 270w, //lolthemes.com/demo/wpm/manufactory/wp-content/uploads/2016/06/shop1.jpg 275w" sizes="(max-width: 270px) 100vw, 270px" />		<span class="product-title">Eihnell Heat Gun – 2000W</span>
								</a>
								<span class="woocommerce-Price-amount amount">
									<span class="woocommerce-Price-currencySymbol">&pound;</span>22.99
								</span>
							</li>
							<li>
								<a href="demo/wpm/manufactory/product/circular-saw-with-laser-1600w-2/">
									<img width="270" height="345" src="//lolthemes.com/demo/wpm/manufactory/wp-content/uploads/2016/06/shop2-270x345.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" srcset="//lolthemes.com/demo/wpm/manufactory/wp-content/uploads/2016/06/shop2-270x345.jpg 270w, //lolthemes.com/demo/wpm/manufactory/wp-content/uploads/2016/06/shop2.jpg 275w" sizes="(max-width: 270px) 100vw, 270px" />		<span class="product-title">Circular Saw with Laser – 1600W</span>
								</a>
								<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&pound;</span>22.99</span>
							</li>
							<li>
								<a href="demo/wpm/manufactory/product/hikekla-58-pieces-socket-key-set/">
									<img width="270" height="345" src="//lolthemes.com/demo/wpm/manufactory/wp-content/uploads/2016/06/shop3-270x345.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" srcset="//lolthemes.com/demo/wpm/manufactory/wp-content/uploads/2016/06/shop3-270x345.jpg 270w, //lolthemes.com/demo/wpm/manufactory/wp-content/uploads/2016/06/shop3.jpg 275w" sizes="(max-width: 270px) 100vw, 270px" />		<span class="product-title">Hikekla 58 Pieces Socket Key Set</span>
								</a>
								<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&pound;</span>50.99</span>
							</li>
							<li>
								<a href="demo/wpm/manufactory/product/circular-saw-with-laser-1600w/">
									<img width="270" height="345" src="//lolthemes.com/demo/wpm/manufactory/wp-content/uploads/2016/06/shop4-270x345.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" srcset="//lolthemes.com/demo/wpm/manufactory/wp-content/uploads/2016/06/shop4-270x345.jpg 270w, //lolthemes.com/demo/wpm/manufactory/wp-content/uploads/2016/06/shop4.jpg 275w" sizes="(max-width: 270px) 100vw, 270px" />		<span class="product-title">Circular Saw with Laser – 1600W</span>
								</a>
								<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&pound;</span>632.99</span>
							</li>
							<li>
								<a href="demo/wpm/manufactory/product/bench-grinder-laser-1600w/">
									<img width="270" height="345" src="//lolthemes.com/demo/wpm/manufactory/wp-content/uploads/2016/06/shop5-270x345.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" srcset="//lolthemes.com/demo/wpm/manufactory/wp-content/uploads/2016/06/shop5-270x345.jpg 270w, //lolthemes.com/demo/wpm/manufactory/wp-content/uploads/2016/06/shop5.jpg 275w" sizes="(max-width: 270px) 100vw, 270px" />		<span class="product-title">Bench Grinder Laser – 1600W</span>
								</a>
								<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&pound;</span>122.99</span>
							</li>
						</ul>
					</aside>
				</div><!-- .sidebar-inner -->
			</div><!-- .widget-area -->
		</div>
	</div><!-- Page Content /- -->
</main><!-- .site-main -->
@endsection
