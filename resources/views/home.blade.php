@extends('layouts.app')

@section('content')
        <div class="md:tw-w-auto md:tw-mx-auto tw-mx-auto tw-p-4 tw-m-20">

            @if (session('status'))
                <div class="tw-text-sm tw-border tw-border-t-8 tw-rounded tw-text-green-700 tw-border-green-600 tw-bg-green-100 tw-px-3 tw-py-4 tw-mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="tw-flex tw-flex-col tw-break-words tw-bg-white tw-border tw-border-2 tw-rounded tw-shadow-md">

                <div class="tw-flex tw-flex-row tw-py-4 tw-px-6 tw-mb-0 tw-font-semibold tw-justify-between">
                    <div class="tw-text-left tw-text-blue-700">
                        <i class="fa fa-list" aria-hidden="true"></i> Supplier
                    </div>
                    <div class="tw-text-right tw-flex tw-flex-row">
                        <div class="tw-text-blue-700">
                            <button class="tw-bg-blue-700 hover:tw-bg-blue-600 tw-text-white tw-py-2 tw-px-2 tw-rounded-sm tw-text-sm tw-font-semibold">
                                <i class="fa fa-plus" aria-hidden="true"></i> Tambah
                            </button>
                        </div>
                        <div class="tw-text-blue-700 tw-ml-2">
                            <button class="tw-bg-blue-700 hover:tw-bg-blue-600 tw-text-white tw-py-2 tw-px-2 tw-rounded-sm tw-text-sm tw-font-semibold">
                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Export
                            </button>
                        </div>
                    </div>
                </div>

                <div class="tw-w-full tw-p-6">
                    <p class="tw-text-gray-700 tw-font-body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores vero laborum nisi, saepe aliquam molestiae eum numquam voluptate dicta! Facilis impedit iste ipsam magni illum vero deleniti doloremque aperiam error?
                    </p>
                </div>
            </div>
        </div>
@endsection
