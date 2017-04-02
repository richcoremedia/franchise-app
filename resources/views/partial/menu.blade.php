<li class="{{ (url()->current() == env('APP_URL')) ? 'current' : '' }}"><a href="{{ url('/') }}"><div>Home</div></a></li>
<li class="{{ (url()->current() == env('APP_URL') . '/property') ? 'current' : '' }}"><a href="{{ url('/property') }}"><div>Property</div></a></li>
<li class="{{ (url()->current() == env('APP_URL') . '/office') ? 'current' : '' }}"><a href="{{ url('/office') }}"><div>Office</div></a></li>
<li class="{{ (url()->current() == env('APP_URL') . '/agent') ? 'current' : '' }}"><a href="{{ url('/agent') }}"><div>Agent</div></a></li>
<li class="{{ (url()->current() == env('APP_URL') . '/contact') ? 'current' : '' }}"><a href="{{ url('/contact') }}"><div>Contact</div></a></li>