<?php

namespace App\Http\Controllers;

use App\Supplier;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.supplier.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Supplier();
        return view('admin.supplier.form', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_supplier' => 'required|string|max:255',
            'nama_sales' => 'required|string',
            'alamat' => 'required|string|max:255',
            'telp' => 'required|string|max:15',
        ]);

        $model = Supplier::create($request->all());
        return $model;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return "edit";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function dataTable()
    {
        $model = Supplier::query();
        return DataTables::of($model)
            ->addColumn('action', function ($model) {
                return view('layouts._action', [
                    'model' => $model,
                    'url_show' => route('supplier.show', $model->id),
                    'url_edit' => route('supplier.edit', $model->id),
                    'url_destroy' => route('supplier.destroy', $model->id),
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->editColumn('created_at', function (Supplier $supplier) {
                return $supplier->created_at->diffForHumans();
            })
            ->make(true);

        // return DataTables::of($model)
        //     ->setRowClass('{{ $id % 2 == 0 ? "text-green-500" : "text-blue-500" }}')
        //     ->setRowId('{{$id}}')
        //     ->setRowData([
        //         'data-id' => 'row-{{$id}}',
        //         'data-nama_supplier' => 'row-{{$nama_supplier}}',
        //         'data-nama_sales' => 'row-{{$nama_sales}}',
        //         'data-alamat' => 'row-{{$alamat}}',
        //         'data-telp' => 'row-{{$telp}}',
        //     ])
        //     ->addColumn('action', function (Supplier $supplier) {
        //         return "";
        //     })
        //     ->editColumn('created_at', function (Supplier $supplier) {
        //         return $supplier->created_at->diffForHumans();
        //     })
        //     ->editColumn('action', 'admin.supplier._action')
        //     ->rawColumns(['action'])
        //     ->make(true);
    }
}
