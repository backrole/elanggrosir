<?php

namespace App\Http\Controllers;

use App\JenisProduk;
use App\ProdukMasuk;
use App\Supplier;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ProdukMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.produkMasuk.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new ProdukMasuk();
        $supplier = Supplier::all();
        $jenisProduk = JenisProduk::all();
        return view('admin.produkMasuk.form', compact('model', 'jenisProduk', 'supplier'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = ProdukMasuk::create($this->validateRequest());
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
        $model = ProdukMasuk::findOrFail($id);

        return view('admin.produkMasuk.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = ProdukMasuk::findOrFail($id);
        $supplier = Supplier::all();
        $jenisProduk = JenisProduk::all();
        return view('admin.produkMasuk.form', compact('model', 'jenisProduk', 'supplier'));
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
        $model = ProdukMasuk::findOrFail($id);
        $model->update($this->validateRequest());
        return $model;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = ProdukMasuk::findOrFail($id);
        $model->delete();
    }

    public function dataTable()
    {
        $model = ProdukMasuk::query();
        return DataTables::of($model)
            ->addColumn('action', function ($model) {
                return view('layouts._action', [
                    'model' => $model,
                    'url_show' => route('produk-masuk.show', $model->id),
                    'url_edit' => route('produk-masuk.edit', $model->id),
                    'url_destroy' => route('produk-masuk.destroy', $model->id),
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->editColumn('created_at', function (ProdukMasuk $produkMasuk) {
                return $produkMasuk->created_at->diffForHumans();
            })
            ->editColumn('supplier_id', function (ProdukMasuk $produkMasuk) {
                $produkMasuk::with('supplier')->get();
                return $produkMasuk->supplier->nama_supplier;
            })
            ->editColumn('jenis_produk_id', function (ProdukMasuk $produkMasuk) {
                $produkMasuk::with('jenisProduk')->get();
                return $produkMasuk->jenisProduk->jenis_barang;
            })
            ->make(true);
    }

    private function validateRequest()
    {
        return request()->validate([
            'supplier_id' => 'required',
            'jenis_produk_id' => 'required',
            'produk_id' => 'required',
            'nama_barang' => 'required',
            'stok_beli' => 'required',
            'stok_grosir' => 'required',
            'stok_retail' => 'required',
            'harga_beli' => 'required',
            'harga_grosir' => 'required',
            'harga_retail' => 'required',
            'isi_per_box' => 'required',
            'status_pembayaran' => 'required',
        ]);
    }
}
