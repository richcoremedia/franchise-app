<li class="{{ (url()->current() == env('APP_URL')) ? 'current' : '' }}"><a href="{{ url('/') }}"><div>Home</div></a></li>
<li class="{{ (url()->current() == env('APP_URL') . '/property') ? 'current' : '' }}"><a href="{{ url('/property') }}"><div>Property</div></a></li>
<li class="{{ (url()->current() == env('APP_URL') . '/office') ? 'current' : '' }}"><a href="{{ url('/office') }}"><div>Office</div></a></li>
<li class="{{ (url()->current() == env('APP_URL') . '/agent') ? 'current' : '' }}"><a href="{{ url('/agent') }}"><div>Agent</div></a></li>
<li class="{{ (url()->current() == env('APP_URL') . '/contact') ? 'current' : '' }}"><a href="{{ url('/contact') }}"><div>Contact</div></a></li>
<!-- Authentication Links -->
@if (Auth::guest())
    <li><a href="{{ route('login') }}">Login</a></li>
@else
    <li>
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </li>
@endif