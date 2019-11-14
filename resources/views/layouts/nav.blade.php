<nav class="tw-bg-white tw-fixed tw-w-screen tw-shadow tw-mb-8 tw-py-3 tw-z-50">
    <div class="tw-mx-4 tw-px-6 md:tw-px-0">
        <div class="tw-flex tw-items-center tw-justify-center">
            <div class="tw-mr-6">
                <a href="{{ url('/') }}" class="tw-text-3xl tw-font-bold tw-text-blue-700 hover:tw-no-underline tw-font-sans">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>
            <div class="tw-flex-1 tw-text-right">
                @guest
                    <a class="tw-no-underline hover:tw-no-underline tw-text-blue-700 tw-text-sm tw-p-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                        <a class="tw-no-underline hover:tw-no-underline tw-text-blue-700 tw-text-sm tw-p-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                @else
                    <span class="tw-text-blue-700 tw-text-sm tw-pr-4">{{ Auth::user()->name }}</span>

                    <a href="{{ route('logout') }}"
                        class="tw-no-underline hover:tw-no-underline tw-text-blue-700 tw-text-sm tw-p-3"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                @endguest
            </div>
        </div>
    </div>
</nav>
