{!! Form::model($model, [
    'route' => $model->exists ? ['produk-masuk.update', $model->id] : 'produk-masuk.store',
    'method' => $model->exists ? 'PUT' : 'POST'
]) !!}

    <flex class="tw-flex-row tw-flex">
        <div class="tw-w-2/4 tw-p-2">
            <label class="tw-block tw-mb-2">
                <span class="tw-text-gray-700">Produk ID</span>
                {!! Form::text('produk_id', null, ['class' => 'tw-form-input focus:tw-shadow-none tw-mt-1 form tw-block tw-w-full', 'id' => 'produk_id', 'value' => "{{ old('produk_id') }}"]) !!}
            </label>
            <label class="tw-block tw-mb-2">
                <span class="tw-text-gray-700">Jenis Produk</span>
                <select class="tw-form-select tw-block tw-w-full tw-mt-1 form" name="jenis_produk_id" id="jenis_produk_id">
                    @foreach ($jenisProduk as $jenisProduk)
                        <option value="{{ $jenisProduk->id }}" {{ $jenisProduk->id == $model->jenis_produk_id ? 'selected' : '' }}>{{ $jenisProduk->jenis_barang }}</option>
                    @endforeach
                </select>
            </label>
            <label class="tw-block tw-mb-2">
                <span class="tw-text-gray-700">Supplier</span>
                <select class="tw-form-select tw-block tw-w-full tw-mt-1 form" name="supplier_id" id="supplier_id">
                    @foreach ($supplier as $supplier)
                        <option value="{{ $supplier->id }}" {{ $supplier->id == $model->supplier_id ? 'selected' : '' }}>{{ $supplier->nama_supplier }}</option>
                    @endforeach
                </select>
            </label>
            <label class="tw-block tw-mb-2">
                <span class="tw-text-gray-700">Nama Produk</span>
                {!! Form::text('nama_barang', null, ['class' => 'tw-form-input focus:tw-shadow-none tw-mt-1 form tw-block tw-w-full', 'id' => 'nama_barang', 'value' => "{{ old('nama_barang') }}"]) !!}
            </label>
            <div class="tw-flex tw-flex-row">
                <label class="tw-block tw-mb-2 tw-mr-2">
                    <span class="tw-text-gray-700">Jumlah Yang di Beli</span>
                    {!! Form::number('stok_beli', null, ['class' => 'tw-form-input focus:tw-shadow-none tw-mt-1 form tw-block tw-w-full', 'id' => 'stok_beli', 'value' => "{{ old('stok_beli') }}"]) !!}
                </label>
                <label class="tw-block tw-mb-2 tw-mr-2">
                    <span class="tw-text-gray-700">Isi per 1 Box</span>
                    {!! Form::number('isi_per_box', null, ['class' => 'tw-form-input focus:tw-shadow-none tw-mt-1 form tw-block tw-w-full', 'id' => 'isi_per_box', 'value' => "{{ old('isi_per_box') }}"]) !!}
                </label>
            </div>
            <label class="tw-block tw-mb-2">
                <span class="tw-text-gray-700">Harga Beli</span>
                {!! Form::number('harga_beli', null, ['class' => 'tw-form-textarea focus:tw-shadow-none tw-mt-1 form tw-block tw-w-full', 'id' => 'harga_beli', 'value' => "{{ old('harga_beli') }}"]) !!}
            </label>
            <label class="tw-block tw-mb-2">
                <span class="tw-text-gray-700">Status Pembayaran</span>
                <select class="tw-form-select tw-block tw-w-full tw-mt-1 form" name="status_pembayaran" id="status_pembayaran">
                    <option value="Lunas">Lunas</option>
                    <option value="Tunda">Tunda</option>
                    <option value="Cicilan">Cicilan</option>
                </select>
            </label>
        </div>
        <div class="tw-w-2/4 tw-p-2">
            <div class="tw-flex tw-flex-row">
                <label class="tw-block tw-mb-2 tw-mr-4">
                    <span class="tw-text-gray-700">Stok Retail</span>
                    {!! Form::number('stok_retail', null, ['class' => 'tw-form-input focus:tw-shadow-none tw-mt-1 form tw-block tw-w-full', 'id' => 'stok_retail', 'value' => "{{ old('stok_retail') }}"]) !!}
                </label>
                <label class="tw-block tw-mb-2">
                    <span class="tw-text-gray-700">Harga Retail</span>
                    {!! Form::number('harga_retail', null, ['class' => 'tw-form-input focus:tw-shadow-none tw-mt-1 form tw-block tw-w-full', 'id' => 'harga_retail', 'value' => "{{ old('harga_retail') }}"]) !!}
                </label>
            </div>
            <div class="tw-flex tw-flex-row">
                <label class="tw-block tw-mb-2 tw-mr-4">
                    <span class="tw-text-gray-700">Stok Grosir</span>
                    {!! Form::number('stok_grosir', null, ['class' => 'tw-form-input focus:tw-shadow-none tw-mt-1 form tw-block tw-w-full', 'id' => 'stok_grosir', 'value' => "{{ old('stok_grosir') }}"]) !!}
                </label>
                <label class="tw-block tw-mb-2">
                    <span class="tw-text-gray-700">Harga Grosir</span>
                    {!! Form::number('harga_grosir', null, ['class' => 'tw-form-input focus:tw-shadow-none tw-mt-1 form tw-block tw-w-full', 'id' => 'harga_grosir', 'value' => "{{ old('harga_grosir') }}"]) !!}
                </label>
            </div>
        </div>
    </flex>

{!! Form::close() !!}

