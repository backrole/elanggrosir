<table class="tw-table-auto">
  <thead class="tw-border">
    <tr>
      <th class="tw-px-4 tw-py-2">ID Produk</th>
      <th class="tw-px-4 tw-py-2">Nama Produk</th>
      <th class="tw-px-4 tw-py-2">Supplier</th>
      <th class="tw-px-4 tw-py-2">Jenis Produk</th>
      <th class="tw-px-4 tw-py-2">Jumlah barang di Beli</th>
      <th class="tw-px-4 tw-py-2">Total Biaya</th>
      <th class="tw-px-4 tw-py-2">Waktu Pembelian</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="tw-border tw-px-4 tw-py-2">{{ $model->produk_id }}</td>
      <td class="tw-border tw-px-4 tw-py-2">{{ $model->nama_barang }}</td>
      <td class="tw-border tw-px-4 tw-py-2">{{ $model->supplier->nama_supplier }}</td>
      <td class="tw-border tw-px-4 tw-py-2">{{ $model->jenisProduk->jenis_barang }}</td>
      <td class="tw-border tw-px-4 tw-py-2">{{ $model->stok_beli }}</td>
      <td class="tw-border tw-px-4 tw-py-2">{{ $model->harga_beli }}</td>
      <td class="tw-border tw-px-4 tw-py-2">{{ $model->created_at }}</td>
    </tr>
  </tbody>
</table>
