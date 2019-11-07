{!! Form::model($model, [
    'route' => $model->exists ? ['supplier.update', $model->id] : 'supplier.store',
    'method' => $model->exists ? 'PUT' : 'POST'
]) !!}

    <label class="block mb-2">
        <span class="text-gray-700">Nama Supplier</span>
        {!! Form::text('nama_supplier', null, ['class' => 'form-input focus:shadow-none mt-1 block w-full', 'id' => 'nama_supplier']) !!}
    </label>
    <label class="block mb-2">
        <span class="text-gray-700">Nama Sales</span>
        {!! Form::text('nama_sales', null, ['class' => 'form-input focus:shadow-none mt-1 block w-full', 'id' => 'nama_sales']) !!}
    </label>
    <label class="block mb-2">
        <span class="text-gray-700">Alamat Lengkap</span>
        {!! Form::textarea('alamat', null, ['class' => 'form-textarea focus:shadow-none mt-1 block w-full', 'id' => 'alamat']) !!}
    </label>
    <label class="block mb-2">
        <span class="text-gray-700">No. Telepon</span>
        {!! Form::text('telp', null, ['class' => 'form-input focus:shadow-none mt-1 block w-full', 'id' => 'telp']) !!}
    </label>

{!! Form::close() !!}

