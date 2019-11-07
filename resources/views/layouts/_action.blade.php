<div class="flex flex-row">
    <a href="{{ $url_show }}" class="px-1 py-1 mx-1 rounded-sm bg-green-500" title="Detail: {{ $model->name }}"><i class="fa fa-list text-white" aria-hidden="true"></i></a>
    <a href="{{ $url_edit }}" class="px-1 py-1 mx-1 rounded-sm bg-orange-500" title="Edit {{ $model->name }}"><i class="fa fa-pencil text-white" aria-hidden="true"></i></a>
    <a href="{{ $url_destroy }}" class="px-1 py-1 mx-1 rounded-sm bg-red-500" title="{{ $model->name }}"><i class="fa fa-trash text-white" aria-hidden="true"></i></a>
</div>
