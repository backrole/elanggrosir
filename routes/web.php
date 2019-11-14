<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\DataTables\SupplierDataTable;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');

Route::resource('/admin/supplier', 'SupplierController')->middleware('auth');
Route::get('/admin/table/supplier/', 'SupplierController@dataTable')->name('table.supplier');
// Route::get('/admin/supplier', function (SupplierDataTable $dataTable) {
//     return $dataTable->render('admin.supplier.index');
// });

Route::resource('/admin/produk-masuk', 'ProdukMasukController')->middleware('auth');
Route::get('/admin/table/produk-masuk/', 'produkMasukController@dataTable')->name('table.produkMasuk');
