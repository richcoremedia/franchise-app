<!DOCTYPE html>
<html>
<head>
     <title>{{ $pageTitle }} &middot; {{ config('app.name') }}</title>

     @yield('page_css')

</head>
<body>

 	<ul>
 		<li><a href="{{ url('/office') }}">Office</a></li>
 		<li><a href="{{ url('/property') }}">Property</a></li>
 		<li><a href="{{ url('/agent') }}">Agent</a></li>
 		<li><a href="{{ url('/contact') }}">Contact</a></li>
      	<li><a href="{{ url('/language/en') }}" title="EN">EN</a></li>
      	<li><a href="{{ url('/language/fi') }}" title="FI">FI</a></li>
 	</ul>

 	@yield('contents')

 	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

 	@yield('page_scripts')
</body>
</html>