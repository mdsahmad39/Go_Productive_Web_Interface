
<!-- Header -->
<header id="header" class="alt">
    <div class="logo"><a href="/">Go Productive <span>Simplifying Lives</span></a></div>
    <a href="#menu" class="toggle"><span>Menu</span></a>
</header>

<!-- Nav -->
<nav id="menu">
    <ul class="links">
        <!-- Authentication Links -->
{{--        @guest--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="/">{{ __('Home') }}</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--            </li>--}}
{{--            @if (Route::has('register'))--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                </li>--}}
{{--            @endif--}}
{{--        @else--}}
{{--            <li class="nav-item">--}}
{{--                <p>Hey {{ __('Auth::user()->name') }}</p>--}}
{{--            </li>--}}
            <li class="nav-item">
                <a class="nav-link" href="/">{{ __('Home') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/dashboard">{{__('Dashboard') }}</a>
            </li>
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();--}}
{{--                   document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>--}}
{{--            </li>--}}
{{--            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                @csrf--}}
{{--            </form>--}}
{{--        @endguest--}}
    </ul>
</nav>
{{--</html>--}}
