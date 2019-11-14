@extends('layouts.app')

@section('content')
    <div class="tw-container tw-mx-auto">
        <div class="tw-flex tw-flex-wrap tw-justify-center">
            <div class="w-full tw-max-w-sm">
                <div class="tw-flex tw-flex-col tw-break-words tw-bg-white tw-border tw-border-2 tw-rounded tw-shadow-md">

                    <div class="tw-font-semibold tw-bg-gray-200 tw-text-gray-700 tw-py-3 tw-px-6 tw-mb-0">
                        {{ __('Login') }}
                    </div>

                    <form class="tw-w-full tw-p-6" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="tw-flex tw-flex-wrap tw-mb-6">
                            <label for="email" class="tw-block tw-text-gray-700 tw-text-sm tw-font-bold tw-mb-2">
                                {{ __('E-Mail Address') }}:
                            </label>

                            <input id="email" type="email" class="tw-shadow tw-appearance-none tw-border tw-rounded tw-w-full tw-py-2 tw-px-3 tw-text-gray-700 tw-leading-tight focus:tw-outline-none focus:tw-shadow-outline @error('email') tw-border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <p class="tw-text-red-500 tw-text-xs tw-italic tw-mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="tw-flex tw-flex-wrap tw-mb-6">
                            <label for="password" class="tw-block tw-text-gray-700 tw-text-sm tw-font-bold tw-mb-2">
                                {{ __('Password') }}:
                            </label>

                            <input id="password" type="password" class="tw-shadow tw-appearance-none tw-border tw-rounded tw-w-full tw-py-2 tw-px-3 tw-text-gray-700 tw-leading-tight focus:tw-outline-none focus:tw-shadow-outline @error('password') tw-border-red-500 @enderror" name="password" required>

                            @error('password')
                                <p class="tw-text-red-500 tw-text-xs tw-italic tw-mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="tw-flex mb-6">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="tw-text-sm tw-text-gray-700 tw-ml-3" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>

                        <div class="tw-flex tw-flex-wrap tw-items-center">
                            <button type="submit" class="tw-bg-blue-500 hover:tw-bg-blue-700 tw-text-gray-100 tw-font-bold tw-py-2 tw-px-4 tw-rounded focus:tw-outline-none focus:tw-shadow-outline">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="tw-text-sm tw-text-blue-500 hover:tw-text-blue-700 tw-whitespace-no-wrap tw-no-underline tw-ml-auto" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif

                            @if (Route::has('register'))
                                <p class="w-full tw-text-xs tw-text-center tw-text-gray-700 tw-mt-8 tw--mb-4">
                                    {{ __("Don't have an account?") }}
                                    <a class="tw-text-blue-500 hover:tw-text-blue-700 tw-no-underline" href="{{ route('register') }}">
                                        {{ __('Register') }}
                                    </a>
                                </p>
                            @endif
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
