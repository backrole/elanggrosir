{!! Form::model($model, [
    'route' => $model->exists ? ['supplier.update', $model->id] : 'supplier.store',
    'method' => $model->exists ? 'PUT' : 'POST'
]) !!}

    <label class="tw-block mb-2">
        <span class="tw-text-gray-700">Nama Supplier</span>
        {!! Form::text('nama_supplier', null, ['class' => 'tw-form-input focus:tw-shadow-none tw-mt-1 tw-block tw-w-full', 'id' => 'nama_supplier', 'value' => "{{ old('nama_supplier') }}"]) !!}
    </label>
    <label class="tw-block tw-mb-2">
        <span class="tw-text-gray-700">Nama Sales</span>
        {!! Form::text('nama_sales', null, ['class' => 'tw-form-input focus:tw-shadow-none tw-mt-1 tw-block tw-w-full', 'id' => 'nama_sales', 'value' => "{{ old('nama_sales') }}"]) !!}
    </label>
    <label class="tw-block mb-2">
        <span class="tw-text-gray-700">Email</span>
        {!! Form::text('email', null, ['class' => 'tw-form-input focus:tw-shadow-none tw-mt-1 tw-block tw-w-full', 'id' => 'email', 'value' => "{{ old('email') }}"]) !!}
    </label>
    <label class="tw-block tw- mb-2">
        <span class="tw-text-gray-700">Alamat Lengkap</span>
        {!! Form::textarea('alamat', null, ['class' => 'tw-form-textarea focus:tw-shadow-none tw-mt-1 tw-block tw-w-full', 'id' => 'alamat', 'value' => "{{ old('alamat') }}"]) !!}
    </label>
    <label class="tw-block tw-mb-2">
        <span class="tw-text-gray-700">No. Telepon</span>
        {!! Form::text('telp', null, ['class' => 'tw-form-input focus:tw-shadow-none tw-mt-1 tw-block tw-w-full', 'id' => 'telp', 'value' => "{{ old('telp') }}"]) !!}
    </label>

{!! Form::close() !!}

