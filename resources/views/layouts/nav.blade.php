<nav class="row justify-content-between navbar navbar-expand-lg navbar-light bg-light">
    <div class="tw-mr-2 col-10">
                    <a href="{{ url('/') }}" class="tw-text-3xl tw-font-bold tw-text-blue-700 hover:tw-no-underline tw-font-sans">
                        {{ config('app.name', 'Laravel') }}
                    </a>
    </div>
        <button class="navbar-toggler tw-items-center" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon  tw-items-center"></span>
        </button>
            <div class="collapse navbar-collapse col-2" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            @guest
                                <a class="nav-item nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                @if (Route::has('register'))
                                    <a class="nav-item nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            @else
                                <span class="nav-item nav-link">{{ Auth::user()->name }}</span>

                                <a href="{{ route('logout') }}"
                                    class="nav-item nav-link"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                    {{ csrf_field() }}
                                </form>
                            @endguest
                            </div>
            </div>
</nav>
