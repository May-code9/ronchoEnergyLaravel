<!DOCTYPE html>
<html lang="en-US" class="no-js no-svg">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">

  <title>@yield("title")</title>
  <meta name='robots' content='noindex,follow' />
  @if(Route::currentRouteName() == "roncho_products")
  @include("body.link.link2")
  @else
  @include("body.link.link")
  @endif
  <link rel="stylesheet" href="{{ asset('css/may.css') }}">
  <meta property="og:description" content="Energy, ICT, Oil and Gas">
  <meta property="og:url" content="http://www.ronchoenergy.com">
  @if(Route::currentRouteName() == 'login' || Route::currentRouteName() == 'register')
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Styles -->
  
  @endif
</head>

  @if(Route::currentRouteName() == "roncho_engineering" || Route::currentRouteName() == "roncho_energy" || Route::currentRouteName() == "roncho_ict" || Route::currentRouteName() == "roncho_about")
  <body class="manufactor_service-template-default single single-manufactor_service postid-83 singular wpb-js-composer js-comp-ver-5.3 vc_responsive" data-offset="200" data-spy="scroll" data-target=".ow-navigation">
  @elseif(Route::currentRouteName() == "roncho_products")
  <body class="archive post-type-archive post-type-archive-product woocommerce woocommerce-page wpb-js-composer js-comp-ver-5.3 vc_responsive" data-offset="200" data-spy="scroll" data-target=".ow-navigation">
  @else
  <body class="home page-template-default page page-id-5 front-page wpb-js-composer js-comp-ver-5.3 vc_responsive" data-offset="200" data-spy="scroll" data-target=".ow-navigation">
  @endif
    <div id="site-loader" class="load-complete">
      <div class="loader">
        <div class="loader-inner ball-clip-rotate">
          <div></div>
        </div>
      </div>
    </div>

    @include("body.header.header")

    @yield("content")

    @if(Route::currentRouteName() == "roncho_products")
    @include("body.footer.footer2")
    @else
    @include("body.footer.footer")
    @endif

</body>
</html>
