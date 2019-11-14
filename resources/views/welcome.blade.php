<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="tw-bg-gray-100 tw-h-screen tw-antialiased tw-leading-none">
<div class="tw-flex tw-flex-col">
    @if(Route::has('login'))
        <div class="tw-absolute tw-top-0 tw-right-0 tw-mt-4 tw-mr-4">
            @auth
                <a href="{{ url('/home') }}" class="tw-no-underline hover:tw-underline tw-text-sm tw-font-normal tw-text-teal-800 tw-uppercase">{{ __('Home') }}</a>
            @else
                <a href="{{ route('login') }}" class="tw-no-underline hover:tw-underline tw-text-sm tw-font-normal tw-text-teal-800 tw-uppercase tw-pr-6">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="tw-no-underline hover:tw-underline tw-text-sm tw-font-normal tw-text-teal-800 tw-uppercase">{{ __('Register') }}</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="tw-min-h-screen tw-flex tw-items-center tw-justify-center">
        <div class="tw-flex tw-flex-col tw-justify-around tw-h-full">
            <div>
                <h1 class="tw-text-gray-600 tw-text-center tw-font-light tw-tracking-wider tw-text-5xl tw-mb-6">
                    {{ config('app.name', 'Laravel') }}
                </h1>
                <ul class="tw-list-reset">
                    <li class="tw-inline tw-pr-8">
                        <a href="https://laravel.com/docs" class="tw-no-underline hover:tw-underline tw-text-sm tw-font-normal tw-text-teal-800 tw-uppercase" title="Documentation">Documentation</a>
                    </li>
                    <li class="tw-inline tw-pr-8">
                        <a href="https://laracasts.com" class="tw-no-underline hover:tw-underline tw-text-sm tw-font-normal tw-text-teal-800 tw-uppercase" title="Laracasts">Laracasts</a>
                    </li>
                    <li class="tw-inline tw-pr-8">
                        <a href="https://laravel-news.com" class="tw-no-underline hover:tw-underline tw-text-sm tw-font-normal tw-text-teal-800 tw-uppercase" title="News">News</a>
                    </li>
                    <li class="tw-inline tw-pr-8">
                        <a href="https://nova.laravel.com" class="tw-no-underline hover:tw-underline tw-text-sm tw-font-normal tw-text-teal-800 tw-uppercase" title="Nova">Nova</a>
                    </li>
                    <li class="tw-inline tw-pr-8">
                        <a href="https://forge.laravel.com" class="tw-no-underline hover:tw-underline tw-text-sm tw-font-normal tw-text-teal-800 tw-uppercase" title="Forge">Forge</a>
                    </li>
                    <li class="tw-inline tw-pr-8">
                        <a href="https://github.com/laravel/laravel" class="tw-no-underline hover:tw-underline tw-text-sm tw-font-normal tw-text-teal-800 tw-uppercase" title="GitHub">GitHub</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</body>
</html>
