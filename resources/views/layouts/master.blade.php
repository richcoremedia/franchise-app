<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Richcoremedia" />

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/dark.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/font-icons.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css" />

	<!-- Radio Checkbox Plugin -->
	<link rel="stylesheet" href="css/components/radio-checkbox.css" type="text/css" />


	<link rel="stylesheet" href="{{ asset('css/responsive.css') }}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>{{ $pageTitle }} &middot; {{ config('app.name') }}</title>

<style>
.device-lg #slider .emphasis-title h1 { font-size: 52px; }
.device-md #slider .emphasis-title h1 { font-size: 44px; }
</style>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="{{ url('/') }}" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="{{ asset('images/logo.png') }}" alt="Canvas Logo"></a>
						<a href="{{ url('/') }}" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="{{ asset('images/logo@2x.png') }}" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul>
							@include('partial.menu')
						</ul>

					</nav>
					<!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		@include('partial.submenu')

		<!-- Content
		============================================= -->
		@yield('contents')
		<!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

				<div class="col_half">

					<div class="col_half">

						<div class="widget clearfix">

							<img src="images/footer-widget-logo.png" alt="" class="footer-logo">

							<address>
								<strong>Headquarters:</strong><br>
								795 Folsom Ave, Suite 600<br>
								San Francisco, CA 94107<br>
							</address>
							<abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
							<abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
							<abbr title="Email Address"><strong>Email:</strong></abbr> info@richcoremedia.com

						</div>

					</div>

					<div class="col_half col_last">

						<div class="widget widget_links clearfix">

							<h4>Sitemap</h4>

							@include('partial.menu')

						</div>

					</div>
				</div>

				<div class="col_half col_last">

					<div class="col_half">

						<div class="widget clearfix">
							<h4>Office</h4>

							<a href="#">Office A</a><br>
							<abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
							<abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br><br>

							<a href="#">Office B</a><br>
							<abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
							<abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br><br>

							<a href="#">Office C</a><br>
							<abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
							<abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br><br>

						</div>

					</div>

					<div class="col_half col_last">

						<div class="widget clearfix">
							<h4 style="color:transparent;">.</h4>

							<a href="#">Office D</a><br>
							<abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
							<abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br><br>

							<a href="#">Office E</a><br>
							<abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
							<abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br><br>

							<a href="#">Office F</a><br>
							<abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
							<abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br><br>
						</div>

					</div>
				</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; 2017 All Rights Reserved by Richcoremedia<br>
						<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="#" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> info@richcoremedia.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +91-11-6541-6369 <span class="middot">&middot;</span> <i class="icon-skype2"></i> RichcoremediaOnSkype
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer>
		<!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="{{ asset('js/functions.js') }}"></script>

</body>
</html>