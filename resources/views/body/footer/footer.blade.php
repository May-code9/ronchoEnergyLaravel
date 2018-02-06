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
              <li id="menu-item-267" class="menu-item menu-item-type-post_type menu-item-object-manufactor_service menu-item-267"><a href="{{ route('roncho_engineering') }}">Engineering Services</a></li>
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

<script type="text/javascript">(function() {function addEventListener(element,event,handler) {
  if(element.addEventListener) {
    element.addEventListener(event,handler, false);
  } else if(element.attachEvent){
    element.attachEvent('on'+event,handler);
  }
}function maybePrefixUrlField() {
  if(this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
    this.value = "http://" + this.value;
  }
}

var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
if( urlFields && urlFields.length > 0 ) {
  for( var j=0; j < urlFields.length; j++ ) {
    addEventListener(urlFields[j],'blur',maybePrefixUrlField);
  }
}/* test if browser supports date fields */
var testInput = document.createElement('input');
testInput.setAttribute('type', 'date');
if( testInput.type !== 'date') {

  /* add placeholder & pattern to all date fields */
  var dateFields = document.querySelectorAll('.mc4wp-form input[type="date"]');
  for(var i=0; i<dateFields.length; i++) {
    if(!dateFields[i].placeholder) {
      dateFields[i].placeholder = 'YYYY-MM-DD';
    }
    if(!dateFields[i].pattern) {
      dateFields[i].pattern = '[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])';
    }
  }
}

})();</script>			<script type="text/javascript">
function revslider_showDoubleJqueryError(sliderID) {
var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
jQuery(sliderID).show().html(errorMessage);
}
</script>
<link rel='stylesheet' id='vc_tta_style-css'  href='demo/wpm/manufactory/wp-content/plugins/js_composer/assets/css/js_composer_tta.min.css?ver=5.3' type='text/css' media='all' />
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
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/demo\/wpm\/manufactory\/wp-admin\/admin-ajax.php","wc_ajax_url":"http:\/\/lolthemes.com\/demo\/wpm\/manufactory\/?wc-ajax=%%endpoint%%","fragment_name":"wc_fragments_d196cdeac57164375adf6ea02dadf083"};
/* ]]> */
</script>
<script type='text/javascript' src="{{ asset('demo/wpm/manufactory/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=3.2.1') }}"></script>
<script type='text/javascript' src="{{ asset('demo/wpm/manufactory/wp-includes/js/wp-embed.min.js?ver=4.8.4') }}"></script>
<script type='text/javascript' src="{{ asset('demo/wpm/manufactory/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=5.3') }}"></script>
<script type='text/javascript' src="{{ asset('demo/wpm/manufactory/wp-content/plugins/js_composer/assets/lib/vc_accordion/vc-accordion.min.js?ver=5.3') }}"></script>
<script type='text/javascript' src="{{ asset('demo/wpm/manufactory/wp-content/plugins/js_composer/assets/lib/vc-tta-autoplay/vc-tta-autoplay.min.js?ver=5.3') }}"></script>

<script type='text/javascript'>
/* <![CDATA[ */
var mc4wp_forms_config = [];
/* ]]> */
</script>
<script type='text/javascript' src="{{ asset('demo/wpm/manufactory/wp-content/plugins/mailchimp-for-wp/assets/js/forms-api.min.js?ver=4.1.9') }}"></script>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
@if(Route::currentRouteName() == 'roncho_news')
<script>
  $("document").ready(function() {
    $("#readmore").hide(100);
    $("#more").on('click', function() {
      $("#less").hide(100);
      $("#readmore").show(1000);
    });
  });
</script>
@endif
<!--[if lte IE 9]>
<script type='text/javascript' src='demo/wpm/manufactory/wp-content/plugins/mailchimp-for-wp/assets/js/third-party/placeholders.min.js?ver=4.1.9'></script>
<![endif]-->
