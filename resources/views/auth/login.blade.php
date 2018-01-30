@extends("master")

@section("title")
RonchoEnergy | Login
@endsection

@section("content")
<div class="container-fluid no-padding pagebanner"  style="background-image: url(demo/wpm/manufactory/wp-content/themes/manufactory/images/page-banner.jpg);">
  <div class="page-banner-inner">
    <div class="container">
      <h3>
        Login
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
        <span property="name">Login</span>
        <meta property="position" content="2">
      </span>
    </div>
  </div>
</div>

<main id="main" class="site-main no-padding no-margin">
  <div class="page-content">
    <div class="container-fluid no-padding">
      <div class="row">
        <div class="content-area full-content col-md-12 no-padding">
          <div id="post-22" class="post-22 page type-page status-publish hentry">
            <div class="entry-content">
              <div class="vc_row wpb_row vc_row-fluid">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                  <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                      <div class="container-fluid no-padding contactus-section">
                        <div class="contactinfo-block">
                          <div class="col-md-6 col-sm-6 col-xs-8 col-md-push-3 col-xs-push-3">
                            <div class="section-header">
                              <h3>Login Here</h3>
                            </div>
                            <div class="screen-reader-response"></div>
                            <form class="wpcf7-form" method="POST" action="{{ route('login') }}">
                              {{ csrf_field() }}

                              <div class="col-md-12 col-sm-6 col-xs-12">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                  <span class="wpcf7-form-control-wrap your-name">
                                    <input id="email" type="email" class="wpcf7-form-control wpcf7-text" placeholder="Email" name="email" value="{{ old('email') }}" required>
                                  </span>
                                  @if ($errors->has('email'))
                                  <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                                  @endif
                                </div>
                              </div>

                              <div class="col-md-12 col-sm-6 col-xs-12">
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                  <span class="wpcf7-form-control-wrap your-name">
                                    <input id="password" type="password" class="wpcf7-form-control wpcf7-text" placeholder="Password" name="password" required>
                                  </span>
                                  @if ($errors->has('password'))
                                  <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                                  @endif
                                </div>
                              </div>

                              <div class="col-md-12 col-sm-6 col-xs-12">
                                <div class="form-group">
                                  <input type="submit" value="Login" class="wpcf7-form-control wpcf7-submit" />
                                  <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                  </a>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
