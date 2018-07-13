@extends('layouts.user_app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
                <div class="なんか書く">
                    @if (Auth::check())
                       @include('items.s_online_icon', ['items' => $items])
                    @endif
                </div>
        </div>
    </div>
@endsection    