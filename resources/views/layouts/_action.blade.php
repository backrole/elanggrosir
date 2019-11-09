<div class="flex flex-row justify-center">
    <a href="{{ $url_show }}" id="detail" class="modal-open px-1 py-1 mx-1 rounded-sm bg-green-500 detail" title="Detail"><i class="fa fa-list text-white" aria-hidden="true"></i></a>
    <a href="{{ $url_edit }}" class="modal-open edit px-1 py-1 mx-1 rounded-sm bg-orange-500" title="Edit : {{ $model->nama_supplier }}"><i class="fa fa-pencil text-white" aria-hidden="true"></i></a>
    <a href="{{ $url_destroy }}" class="modal-delete px-1 py-1 mx-1 rounded-sm bg-red-500" title="{{ $model->nama_supplier }}"><i class="fa fa-trash text-white" aria-hidden="true"></i></a>
</div>
