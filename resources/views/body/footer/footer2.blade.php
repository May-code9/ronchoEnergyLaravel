<footer class="footer-main container-fluid no-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-6 ftr-widget about-widget">
        <aside id="text-2" class="widget widget_text"><h3>About Us</h3>
          <div class="textwidget">
            <p style="text-align:justify">Roncho Energy Services Limited is an energy and technology company registered in Nigeria since 2007. We provide affordable and clean energy solutions, ICT solutions, and engineering services.</p>
            <a href="{{ route('roncho_about') }}">Learn More</a>
          </div>
        </aside>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 ftr-widget link-widget">
        <aside id="nav_menu-2" class="widget widget_nav_menu"><h3>Solution</h3>
          <div class="menu-solution-footer-menu-container">
            <ul id="menu-solution-footer-menu" class="menu">
              <li id="menu-item-265" class="menu-item menu-item-type-post_type menu-item-object-manufactor_service menu-item-265"><a href="{{ route('roncho_energy') }}">Energy</a></li>
              <li id="menu-item-266" class="menu-item menu-item-type-post_type menu-item-object-manufactor_service menu-item-266"><a href="{{ route('roncho_ict') }}">ICT</a></li>
              <li id="menu-item-267" class="menu-item menu-item-type-post_type menu-item-object-manufactor_service menu-item-267"><a href="{{ route('roncho_engineering') }}">Oil &#038; Gas</a></li>
            </ul>
          </div>
        </aside>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 ftr-widget contact-widget">
        <aside id="widget_contactus-2" class="widget widget-contact"><h3>Keep in touch</h3>
          <div class="about-text" itemscope itemtype="http://schema.org/LocalBusiness">
            <p itemprop="name">
              {{ config('app.name') }}
            </p>
            <p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
              <span class="icon icon-Pointer"></span>
              <a itemprop="streetAddress">Main Office :						<br/>Okporo road, Rumuodara</a>, <br/>
              <a itemprop="addressLocality"> Port Harcourt</a>,
              <a itemprop="addressRegion"> Rivers State</a>
            </p>
            <p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
              <span class="icon icon-Pointer"></span>
              <a itemprop="streetAddress">Lagos Office :						<br/>Remi Fani Kayode</a>, <br/>
              <a itemprop="addressLocality"> GRA, Ikeja</a>,
              <a itemprop="addressRegion"> Lagos State</a>
            </p>

          </div>
        </aside>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 ftr-widget contact-widget">
        <aside id="widget_contactus-2" class="widget widget-contact"><h3>Keep in touch</h3>
          <div class="about-text" itemscope itemtype="http://schema.org/LocalBusiness">
            <p itemprop="name">
              {{ config('app.name') }}
            </p>
            <p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
              <span class="icon icon-Pointer"></span>
              <a itemprop="streetAddress">Abuja Office :						<br/>Deogratias Plaza, Opp. Modern Market</a>,
              <a itemprop="addressLocality">Utako</a>,
              <a itemprop="addressRegion"> Abuja</a>
            </p>
            <p>
              <span class="icon icon-Phone2"></span>
              Phone :
              <a href="tel:09069920242" itemprop="telephone"> 09069920242</a>
            </p>
            <p>
              <span class="icon icon-Mail"></span>
              Email :						<a href="mailto:info@ronchoenergy.com" itemprop="email">info@ronchoenergy.com</a>
            </p>
          </div>
        </aside>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="col-md-6 col-sm-12 col-xs-12  no-padding copyright-section">
        <p>Copyrights © 2017 All Rights Reserved</p>
      </div>
      <div class="col-md-6 col-sm-12 col-xs-12 no-padding footer-menu-link">
        <ul id="menu-footer-menu" class="footer-menu">
          <li id="menu-item-207" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-207"><a title="Terms Of Use" href="#">Terms Of Use</a></li>
          <li id="menu-item-206" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-206"><a title="Privacy &amp; Security Statement" href="#">Privacy &#038; Security Statement</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"http:\/\/lolthemes.com\/demo\/wpm\/manufactory\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}}};
/* ]]> */
</script>
<script type='text/javascript' src="{{ asset('demo/wpm/manufactory/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=4.9') }}"></script>
<script type='text/javascript' src="{{ asset('demo/wpm/manufactory/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70') }}"></script>
<script type='text/javascript' src="{{ asset('demo/wpm/manufactory/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4') }}"></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/demo\/wpm\/manufactory\/wp-admin\/admin-ajax.php","wc_ajax_url":"http:\/\/lolthemes.com\/demo\/wpm\/manufactory\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src="{{ asset('demo/wpm/manufactory/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.2.1') }}"></script>

<script type='text/javascript' src="{{ asset('demo/wpm/manufactory/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=3.2.1') }}"></script>
<script type='text/javascript' src="{{ asset('demo/wpm/manufactory/wp-includes/js/wp-embed.min.js?ver=4.8.4') }}"></script>

@if(Route::currentRouteName() == "roncho_iproducts")
<script type='text/javascript' src="{{ asset('demo/wpm/manufactory/wp-content/plugins/woocommerce/assets/js/zoom/jquery.zoom.min.js?ver=1.7.15') }}"></script>
<script type='text/javascript' src="{{ asset('demo/wpm/manufactory/wp-content/plugins/js_composer/assets/lib/bower/flexslider/jquery.flexslider-min.js?ver=5.3') }}"></script>
<script type='text/javascript' src="{{ asset('demo/wpm/manufactory/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe.min.js?ver=4.1.1') }}"></script>
<script type='text/javascript' src="{{ asset('demo/wpm/manufactory/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe-ui-default.min.js?ver=4.1.1') }}"></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_single_product_params = {"i18n_required_rating_text":"Please select a rating","review_rating_required":"yes","flexslider":{"rtl":false,"animation":"slide","smoothHeight":true,"directionNav":false,"controlNav":"thumbnails","slideshow":false,"animationSpeed":500,"animationLoop":false,"allowOneSlide":false},"zoom_enabled":"1","photoswipe_enabled":"1","photoswipe_options":{"shareEl":false,"closeOnScroll":false,"history":false,"hideAnimationDuration":0,"showAnimationDuration":0},"flexslider_enabled":"1"};
/* ]]> */
</script>
<script type='text/javascript' src="{{ asset('demo/wpm/manufactory/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70') }}"></script>

<script type='text/javascript' src="{{ asset('demo/wpm/manufactory/wp-includes/js/comment-reply.min.js?ver=4.8.5') }}"></script>
@endif
