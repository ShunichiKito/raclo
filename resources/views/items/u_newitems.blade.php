
<link rel="stylesheet" type="text/css" href="{{ secure_asset('css/u_newitems.css') }}">

@if (Auth::check())
{!! Form::open(['route' => ['newitems.selected']]) !!}
@foreach ($items as $key => $item)

<div class='row col-md-4 col-sm-4 col-xs-8'>
    <div class='panel-heading text-center'>
    <img src="{{ $item->file_path }}" alt="" class="cloths_image">
    <div class='panel panel-body text-center'>
        {{ Form::checkbox('item[]',"$item->file_path", false) }}
    </div>
    </div>
</div>
@endforeach
@endif    


