<table class="table-auto">
  <thead class="border">
    <tr>
      <th class="px-4 py-2">ID</th>
      <th class="px-4 py-2">Nama Supplier</th>
      <th class="px-4 py-2">Nama Sales</th>
      <th class="px-4 py-2">Email</th>
      <th class="px-4 py-2">Alamat</th>
      <th class="px-4 py-2">Telp</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="border px-4 py-2">{{ $model->id }}</td>
      <td class="border px-4 py-2">{{ $model->nama_supplier }}</td>
      <td class="border px-4 py-2">{{ $model->nama_sales }}</td>
      <td class="border px-4 py-2">{{ $model->email }}</td>
      <td class="border px-4 py-2">{{ $model->alamat }}</td>
      <td class="border px-4 py-2">{{ $model->telp }}</td>
    </tr>
  </tbody>
</table>
