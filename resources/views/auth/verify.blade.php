@extends('layouts.app')

@section('content')
    <div class="tw-container tw-mx-auto">
        <div class="tw-flex tw-flex-wrap tw-justify-center">
            <div class="tw-w-full tw-max-w-sm">

                @if (session('resent'))
                    <div class="tw-text-sm tw-border tw-border-t-8 tw-rounded tw-text-green-700 tw-border-green-600 tw-bg-green-100  tw-px-3 tw-py-4 tw-mb-4" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif

                <div class="tw-flex tw-flex-col tw-break-words tw-bg-white tw-border tw-border-2 tw-rounded tw-shadow-md">
                    <div class="tw-font-semibold tw-bg-gray-200 tw-text-gray-700 tw-py-3 tw-px-6 tw-mb-0">
                        {{ __('Verify Your Email Address') }}
                    </div>

                    <div class="tw-w-full tw-flex tw-flex-wrap tw-p-6">
                        <p class="tw-leading-normal">
                            {{ __('Before proceeding, please check your email for a verification link.') }}
                        </p>

                        <p class="tw-leading-normal tw-mt-6">
                            {{ __('If you did not receive the email') }}, <a class="tw-text-blue-500 hover:tw-text-blue-700 tw-no-underline" onclick="event.preventDefault(); document.getElementById('resend-verification-form').submit();">{{ __('click here to request another') }}</a>.
                        </p>

                        <form id="resend-verification-form" method="POST" action="{{ route('verification.resend') }}" class="hidden">
                            @csrf
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
