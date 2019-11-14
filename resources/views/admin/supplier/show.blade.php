<table class="tw-table-auto">
  <thead class="tw-border">
    <tr>
      <th class="tw-px-4 tw-py-2">ID</th>
      <th class="tw-px-4 tw-py-2">Nama Supplier</th>
      <th class="tw-px-4 tw-py-2">Nama Sales</th>
      <th class="tw-px-4 tw-py-2">Email</th>
      <th class="tw-px-4 tw-py-2">Alamat</th>
      <th class="tw-px-4 tw-py-2">Telp</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="tw-border tw-px-4 tw-py-2">{{ $model->id }}</td>
      <td class="tw-border tw-px-4 tw-py-2">{{ $model->nama_supplier }}</td>
      <td class="tw-border tw-px-4 tw-py-2">{{ $model->nama_sales }}</td>
      <td class="tw-border tw-px-4 tw-py-2">{{ $model->email }}</td>
      <td class="tw-border tw-px-4 tw-py-2">{{ $model->alamat }}</td>
      <td class="tw-border tw-px-4 tw-py-2">{{ $model->telp }}</td>
    </tr>
  </tbody>
</table>
