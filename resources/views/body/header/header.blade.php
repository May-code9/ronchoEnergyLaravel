<header class="header-main container-fluid no-padding">
  <div id="slidepanel">
    <div class="middle-header container-fluid">
      <div class="container">
        <div class="logo-block" style="margin-top: 7px;">
          <a class="image-logo" href="{{ route('roncho_home') }}" title="{{ config('app.name') }}">
            <img src="demo/wpm/manufactory/wp-content/uploads/2016/07/logo.png" alt="{{ config('app.name') }}">
          </a>
        </div>
        <div class="header-info" style="margin-top: 10px;">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal">
            Request A Quote
          </button>
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Request A Quote</h4>
                </div>
                <div class="modal-body">
                  <div role="form" class="wpcf7" id="wpcf7-f67-o1" lang="en-US" dir="ltr">
                    <div class="screen-reader-response"></div>
                    <form action="/demo/wpm/manufactory/#wpcf7-f67-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                      <div style="display: none;">
                        <input type="hidden" name="_wpcf7" value="67" />
                        <input type="hidden" name="_wpcf7_version" value="4.9" />
                        <input type="hidden" name="_wpcf7_locale" value="en_US" />
                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f67-o1" />
                        <input type="hidden" name="_wpcf7_container_post" value="0" />
                      </div>
                      <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Name" /></span>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Your Email" /></span>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Subject" /></span>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <span class="wpcf7-form-control-wrap your-phone"><input type="text" name="your-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Phone" /></span>
                        </div>
                      </div>
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message"></textarea></span>
                        </div>
                      </div>
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-submit-btn">
                          <input type="submit" value="Request A Quote" class="wpcf7-form-control wpcf7-submit" />
                        </div>
                      </div>
                      <div class="wpcf7-response-output wpcf7-display-none"></div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <ul>
            <li>
              <h3>Certificate</h3><span>ISO 9001: 2008 | ISO 14001:2004 | OHSAS 18001</span>
            </li>
            <li>
              <h3>Award Winning</h3><span>Solution Of The Year</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="header-social">
        <ul>
          <li><a target="_blank" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a target="_blank" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a target="_blank" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Menu Block -->
  <div class="menu-block menu-block-section container-fluid no-padding">
    <div class="container">
      <nav class="navbar ow-navigation col-md-9 col-sm-12 col-xs-12 no-padding">
        <div id="loginpanel" class="desktop-hide">
          <div class="right" id="toggle">
            <a id="slideit" href="#slidepanel"><i class="fo-icons fa fa-inbox"></i></a>
            <a id="closeit" href="#slidepanel"><i class="fo-icons fa fa-close"></i></a>
          </div>
        </div>
        <div class="navbar-header">
          <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="menu-default-logo">
            <a class="image-logo" href="{{ route('roncho_home') }}" title="{{ config('app.name') }}">
              <img src="demo/wpm/manufactory/wp-content/uploads/2016/07/logo.png" alt="{{ config('app.name') }}">
            </a>
          </div>
        </div>
        <div class="navbar-collapse collapse" id="navbar">
          <ul id="menu-main-menu" class="nav navbar-nav menubar">
            <li id="menu-item-37" class="hide-text menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children menu-item-37 dropdown active"><a title="Home" href="{{ route('roncho_home') }}" class="dropdown-toggle" aria-haspopup="true">
              <span class="fa fa-home"></span>&nbsp;Home</a><i class='ddl-switch fa fa-angle-down'></i>
              <ul role="menu" class=" dropdown-menu">
                <li id="menu-item-38" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38"><a title="About Us" href="{{ route('roncho_about') }}">About Us</a></li>
              </ul>
            </li>
            <li id="menu-item-204" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-204 dropdown"><a title="Solution" href="#" class="dropdown-toggle" aria-haspopup="true">Solution</a><i class='ddl-switch fa fa-angle-down'></i>
              <ul role="menu" class=" dropdown-menu">
                <li id="menu-item-198" class="menu-item menu-item-type-post_type menu-item-object-manufactor_service menu-item-198"><a title="Energy" href="{{ route('roncho_energy') }}">Energy</a></li>
                <li id="menu-item-199" class="menu-item menu-item-type-post_type menu-item-object-manufactor_service menu-item-199"><a title="ICT" href="{{ route('roncho_ict') }}">ICT</a></li>
                <li id="menu-item-200" class="menu-item menu-item-type-post_type menu-item-object-manufactor_service menu-item-200"><a title="Engineering Services" href="{{ route('roncho_engineering') }}">Engineering Services</a></li>
              </ul>
            </li>
            <li id="menu-item-226" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-226"><a title="Project" href="{{ route('roncho_projects') }}">Project</a></li>
            <li id="menu-item-227" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-227"><a title="News" href="{{ route('roncho_news') }}">News</a></li>
            <!-- <li id="menu-item-228" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-228"><a title="Services" href="services.php">Services</a></li> -->
            <li id="menu-item-229" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-229"><a title="Products" href="{{ route('roncho_products') }}">Products</a></li>
            <li id="menu-item-278" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-229"><a title="Contact" href="{{ route('roncho_contact') }}">Contact</a></li>
            @guest
            <li id="menu-item-278" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-229"><a title="Contact" href="{{ route('login') }}">Login</a></li>
            <li id="menu-item-278" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-229"><a title="Contact" href="{{ route('register') }}">Register</a></li>
            @else
            <li id="menu-item-278" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-229"><a title="Contact" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ Auth::user()->first_name }} | Logout</a>
              <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </li>
            @if(Auth::user()->role == 4)
            <li id="menu-item-278" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-229"><a title="Contact" href="{{ route('ronchoDashboard') }}">Dashboard</a></li>
            @endif
            @endguest
          </ul>
        </div>
      </nav><!-- Navigation /- -->
      <div class="menu-search">
        <div id="sb-search" class="sb-search">
          <form method="get" id="searchform" class="searchform" action="demo/wpm/manufactory/" >
            <input type="text" name="s" id="s" placeholder="Enter your search term..." class="form-control sb-search-input" required>
            <button class="sb-search-submit" type="submit"><i class="fa fa-search"></i></button>
            <span class="sb-icon-search"></span>
          </form>
        </div>
      </div>
    </div>
  </div>
</header>
