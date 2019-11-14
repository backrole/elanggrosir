@extends('layouts.app')

@section('content')
    <div class="tw-container tw-mx-auto">
        <div class="tw-flex tw-flex-wrap tw-justify-center">
            <div class="tw-w-full tw-max-w-sm">

                @if (session('status'))
                    <div class="tw-text-sm tw-border tw-border-t-8 tw-rounded tw-text-green-700 tw-border-green-600 tw-bg-green-100 tw-px-3 tw-py-4 tw-mb-4" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="tw-flex tw-flex-col tw-break-words tw-bg-white tw-border tw-border-2 tw-rounded tw-shadow-md">

                    <div class="tw-font-semibold tw-bg-gray-200 tw-text-gray-700 tw-py-3 tw-px-6 tw-mb-0">
                        {{ __('Reset Password') }}
                    </div>

                    <form class="tw-w-full tw-p-6" method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="tw-flex tw-flex-wrap tw-mb-6">
                            <label for="email" class="tw-block tw-text-gray-700 tw-text-sm tw-font-bold tw-mb-2">
                                {{ __('E-Mail Address') }}:
                            </label>

                            <input id="email" type="email" class="tw-shadow tw-appearance-none tw-border tw-rounded tw-w-full tw-py-2 tw-px-3 tw-text-grey-darker tw-leading-tight focus:outline-none focus:shadow-outline @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <p class="tw-text-red-500 tw-text-xs tw-italic tw-mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="tw-flex tw-flex-wrap">
                            <button type="submit" class="tw-bg-blue-500 hover:tw-bg-blue-700 tw-text-gray-100 tw-font-bold tw-py-2 tw-px-4 tw-rounded focus:tw-outline-none focus:tw-shadow-outline">
                                {{ __('Send Password Reset Link') }}
                            </button>

                            <p class="tw-w-full tw-text-xs tw-text-center tw-text-grey-dark tw-mt-8 tw-m tw--mb-4">
                                <a class="tw-text-blue-500 hover:tw-text-blue-700 tw-no-underline" href="{{ route('login') }}">
                                    {{ __('Back to login') }}
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
