<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Spin Club Tenis de Mesa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- styles -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="assets/css/docs.css" rel="stylesheet">
  <link href="assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="assets/css/nivo-slider.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300|Open+Sans:400,300,300italic,400italic" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/color/success.css" rel="stylesheet">

  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="assets/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

  <!-- =======================================================
    Theme Name: Scaffold
    Theme URL: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

  <header>
    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <!-- logo -->
          <a class="brand logo" href="index.html">
						<img src="assets/img/logo.png" alt="" />
				  </a>
          <!-- end logo -->

          <!-- top menu -->
          <div>
            <nav>
              <ul class="nav topnav">
                <li class="dropdown success active">
                  <a href="index.html"><i class="icon-home icon-white"></i> Inicio</a>
                </li>
                <li class="dropdown primary">
                  <a href="#"><i class="icon-star icon-white"></i> Features</a>
                  <ul class="dropdown-menu">
                    <li><a href="overview.html">Overview</a></li>
                    <li><a href="scaffolding.html">Scaffolding</a></li>
                    <li><a href="base-css.html">Base CSS</a></li>
                    <li><a href="components.html">Components</a></li>
                    <li><a href="javascript.html">Javascripts</a></li>
                    <li class="dropdown"><a href="#">3rd level</a>
                      <ul class="dropdown-menu sub-menu">
                        <li><a href="#">Example menu</a></li>
                        <li><a href="#">Example menu</a></li>
                        <li><a href="#">Example menu</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="dropdown danger">
                  <a href="#"><i class="icon-leaf icon-white"></i> Pages</a>
                  <ul class="dropdown-menu">
                    <li><a href="about.html">About us</a></li>
                    <li><a href="services.html">Our services</a></li>
                    <li><a href="pricingtable.html">Pricing table</a></li>
                    <li><a href="faq.html">F.A.Q</a></li>
                    <li><a href="fullwidth.html">Fullwidth</a></li>
                    <li><a href="404.html">404</a></li>
                  </ul>
                </li>
                <li class="dropdown warning">
                  <a href="#"><i class="icon-camera icon-white"></i> Portfolio</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown"><a href="#">Portfolio type 1</a>
                      <ul class="dropdown-menu sub-menu">
                        <li><a href="portfolio-alt1-2cols.html">2 columns</a></li>
                        <li><a href="portfolio-alt1-3cols.html">3 columns</a></li>
                        <li><a href="portfolio-alt1-4cols.html">4 columns</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a href="#">Portfolio type 2</a>
                      <ul class="dropdown-menu sub-menu">
                        <li><a href="portfolio-alt2-2cols.html">2 columns</a></li>
                        <li><a href="portfolio-alt2-3cols.html">3 columns</a></li>
                        <li><a href="portfolio-alt2-4cols.html">4 columns</a></li>
                      </ul>
                    </li>
                    <li><a href="portfolio-alt3.html">Portfolio type 3</a></li>
                    <li><a href="portfolio-detail.html">Portfolio detail</a></li>
                  </ul>
                </li>
                <li class="dropdown info">
                  <a href="#"><i class="icon-bullhorn icon-white"></i> Blog</a>
                  <ul class="dropdown-menu">
                    <li><a href="blog_left_sidebar.html">Blog left sidebar</a></li>
                    <li><a href="blog_right_sidebar.html">Blog right sidebar</a></li>
                    <li><a href="post_left_sidebar.html">Post left sidebar</a></li>
                    <li><a href="post_right_sidebar.html">Post right sidebar</a></li>
                  </ul>
                </li>
                <li class="inverse">
                  <a href="contact.html"><i class="icon-envelope icon-white"></i> Contacto</a>
                </li>
              </ul>
            </nav>
          </div>
          <!-- end menu -->
        </div>
      </div>
    </div>
  </header>

  @yield('content')

  <!-- Footer
 ================================================== -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="span4">
          <div class="widget">
            <h4>About us</h4>
            <address>
					<strong>Scaffold company, Inc.</strong><br>
					445 Mypark Ave, Suite 800<br>
					Jakarta, Indonesia 14210<br>
					<abbr title="Phone">P:</abbr> (123) 456-7890
					</address>

            <address>
					<strong>Contact us</strong><br>
					<a href="mailto:#">hello@websitename.com</a>
					</address>
          </div>
        </div>
        <div class="span4">
          <div class="widget">
            <h4>Browse pages</h4>
            <ul class="nav nav-list regular">
              <li class="nav-header">More from us</li>
              <li><a href="#">Work for us</a></li>
              <li><a href="#">Creative process</a></li>
              <li><a href="#">Case study</a></li>
              <li class="nav-header">Quick links</li>
              <li><a href="#">Scaffold awwards</a></li>
              <li><a href="#">Meet the team</a></li>
            </ul>
          </div>
        </div>
        <div class="span4">
          <div class="widget">
            <h4>Get email updates</h4>
            <form class="form-horizontal" action="#" method="post">
              <fieldset>
                <p>
                  Sign up for email updates and we'll plant a tree for you through Trees for the Future.
                </p>

                <div class="input-prepend input-append">
                  <input class="span2" id="appendedPrependedInput" type="text" placeholder="Email">
                  <button class="btn btn-inverse" type="submit">Subscribe!</button>
                </div>
              </fieldset>
            </form>
            <ul class="social_small">
              <li class="facebook first"><a href="#" title="Facebook">Facebook</a></li>
              <li class="twitt"><a href="#" title="Twitter">Twitter</a></li>
              <li class="googleplus"><a href="#" title="google plus">Google plus</a></li>
              <li class="flickr"><a href="#" title="flickr">Flickr</a></li>
              <li class="dribbble"><a href="#" title="Dribbble">Dribbble</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="verybottom">
      <div class="container">
        <div class="row">
          <div class="span6">
            <p>&copy; Scaffold - All right reserved</p>
          </div>
          <div class="span6">
            <div class="pull-right">
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Scaffold
                -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </footer>

  <script src="assets/js/jquery-1.8.2.min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/google-code-prettify/prettify.js"></script>
  <script src="assets/js/modernizr.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/jquery.elastislide.js"></script>
  <script src="assets/js/jquery.flexslider.js"></script>
  <script src="assets/js/jquery.prettyPhoto.js"></script>
  <script src="assets/js/application.js"></script>
  <script src="assets/js/nivo/jquery.nivo.slider.js"></script>
  <script src="assets/js/nivo/setting.js"></script>
  <script src="assets/js/hover/jquery-hover-effect.js"></script>
  <script src="assets/js/hover/setting.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="assets/js/custom.js"></script>

</body>

</html>
