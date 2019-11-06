@extends('layouts.app')

@section('content')
        <div class="md:w-auto md:mx-auto mx-auto p-4 m-20">

            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

                <div class="flex flex-row py-4 px-6 mb-0 font-semibold justify-between">
                    <div class="text-left text-blue-700">
                        <i class="fa fa-list" aria-hidden="true"></i> Dashboard
                    </div>
                    <div class="text-right flex flex-row">
                        <div class="text-blue-700">
                            <button class="bg-blue-700 hover:bg-blue-600 text-white py-2 px-2 rounded-sm text-sm font-semibold">
                                <i class="fa fa-plus" aria-hidden="true"></i> Tambah
                            </button>
                        </div>
                        <div class="text-blue-700 ml-2">
                            <button class="bg-blue-700 hover:bg-blue-600 text-white py-2 px-2 rounded-sm text-sm font-semibold">
                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Export
                            </button>
                        </div>
                    </div>
                </div>

                <div class="w-full p-6">
                    <p class="text-gray-700 font-body">
                        @foreach ($supplier as $supplier)
                            {{ $supplier }}
                        @endforeach
                    </p>
                </div>
            </div>
        </div>
@endsection
