@extends('layouts.app')

@section('content')
        <div class="md:tw-w-auto tw-mx-6 tw-p-4 tw-mt-20" style="width:100%">

            @if (session('status'))
                <div class="tw-text-sm tw-border tw-border-t-8 tw-rounded tw-text-green-700 tw-border-green-600 tw-bg-green-100 tw-px-3 tw-py-4 tw-mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="tw-flex tw-flex-col tw-break-words tw-bg-white tw-border tw-border-2 tw-rounded tw-shadow-md">

                <div class="tw-flex tw-flex-row tw-py-4 tw-px-6 tw-mb-0 tw-font-semibold tw-justify-between">
                    <div class="tw-text-left tw-text-blue-700">
                        <i class="fa fa-list" aria-hidden="true"></i> Data Supplier
                    </div>
                    <div class="tw-text-right tw-flex tw-flex-row">
                        <div class="tw-text-blue-700">
                            <a href="{{ route('supplier.create') }}" class="tw-modal-open tw-bg-blue-700 hover:tw-bg-blue-600 tw-text-white hover:tw-text-white hover:tw-no-underline tw-py-2 tw-px-2 tw-rounded-sm tw-text-sm tw-font-semibold">
                                <i class="fa fa-plus" aria-hidden="true"></i> Tambah
                            </a>
                        </div>
                        <div class="tw-text-blue-700 tw-ml-2">
                            <a href="" class="tw-bg-orange-700 hover:tw-bg-orange-600 tw-text-white hover:tw-text-white hover:tw-no-underline tw-py-2 tw-px-2 tw-rounded-sm tw-text-sm tw-font-semibold">
                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Export
                            </a>
                        </div>
                    </div>
                </div>

                <div class="tw-min-w-full tw-p-6">
                    <table class="table table-hover table-striped table-bordered" id="dataTable">
                        <thead>
                            <tr>
                                <th class="">No</th>
                                <th class="">Nama Supplier</th>
                                <th class="">Nama Sales</th>
                                <th class="">Email</th>
                                <th class="">Alamat</th>
                                <th class="">No. Telp</th>
                                <th class="">Ditambahkan pada</th>
                                <th class="">Action</th>

                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

        {{-- {!! $dataTable->table() !!} --}}
        @push('script')
            <script>
                $('#dataTable').DataTable({
                    responsive:true,
                    processing:true,
                    order:[6,'desc'],
                    serverSide:true,
                    ajax: '{!! route('table.supplier') !!}',
                    columns:[
                        {data:'DT_RowIndex', name:'id'},
                        {data:'nama_supplier', name:'nama_supplier'},
                        {data:'nama_sales', name:'nama_sales'},
                        {data:'email', name:'email'},
                        {data:'alamat', name:'alamat'},
                        {data:'telp', name:'telp'},
                        {data:'created_at', name:'created_at'},
                        {data:'action', name:'action'},
                    ],
                });
            </script>
            {{-- {!! $dataTable->scripts() !!} --}}
        @endpush
@endsection
