<li class="{{ Request::path() == '/' ? 'current' : '' }}"><a href="{{ url('/') }}"><div>Home</div></a>
    <ul>
        <li class="{{ Request::path() == 'office' ? 'current' : '' }}"><a href="{{ url('/office') }}"><div>Offices</div></a></li>
        <li class="{{ Request::path() == 'company' ? 'current' : '' }}"><a href="{{ url('/company') }}"><div>Company</div></a></li>
    </ul>
</li>
<li class="{{ Request::path() == 'property' ? 'current' : '' }}"><a href="{{ url('/property') }}"><div>Properties</div></a></li>
<li><a href="#"><div>Services</div></a>
    <ul>
        <li class="{{ Request::path() == 'assessment' ? 'current' : '' }}"><a href="{{ url('/assessment') }}"><div>Assessment Visit</div></a></li>
        <li class="{{ Request::path() == 'buy' ? 'current' : '' }}"><a href="{{ url('/buy') }}"><div>Buy</div></a></li>
        <li class="{{ Request::path() == 'sell' ? 'current' : '' }}"><a href="{{ url('/sell') }}"><div>Sell</div></a></li>
        <li class="{{ Request::path() == 'rent' ? 'current' : '' }}"><a href="{{ url('/rent') }}"><div>Rent</div></a></li>
    </ul>
</li>
<li class="{{ Request::path() == 'news' ? 'current' : '' }}"><a href="{{ url('/news') }}"><div>News & Tips</div></a></li>