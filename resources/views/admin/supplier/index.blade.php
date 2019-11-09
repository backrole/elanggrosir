@extends('layouts.app')

@section('content')
        <div class="md:w-auto mx-6 p-4 mt-20" style="width:100%">

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
                            <a href="{{ route('supplier.create') }}" class="modal-open bg-blue-700 hover:bg-blue-600 text-white py-2 px-2 rounded-sm text-sm font-semibold">
                                <i class="fa fa-plus" aria-hidden="true"></i> Tambah
                            </a>
                        </div>
                        <div class="text-blue-700 ml-2">
                            <a href="" class="bg-orange-700 hover:bg-orange-600 text-white py-2 px-2 rounded-sm text-sm font-semibold">
                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Export
                            </a>
                        </div>
                    </div>
                </div>

                <div class="min-w-full p-6">
                    <table class="table-auto border w-full" id="dataTable">
                        <thead>
                            <tr>
                                <th class="border px-4 py-2 w-auto">No</th>
                                <th class="border px-4 py-2 w-auto">Nama Supplier</th>
                                <th class="border px-4 py-2 w-auto">Nama Sales</th>
                                <th class="border px-4 py-2 w-auto">Alamat</th>
                                <th class="border px-4 py-2 w-auto">No. Telp</th>
                                <th class="border px-4 py-2 w-auto">Ditambahkan pada</th>
                                <th class="border px-4 py-2 w-auto">Action</th>
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
                    order:[5,'desc'],
                    serverSide:true,
                    ajax: '{!! route('table.supplier') !!}',
                    columns:[
                        {data:'DT_RowIndex', name:'id'},
                        {data:'nama_supplier', name:'nama_supplier'},
                        {data:'nama_sales', name:'nama_sales'},
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
