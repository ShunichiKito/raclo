@extends('layouts.user_app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
                <div class="なんか書く">
                    @if (Auth::check())
                       @include('items.s_icon', ['items' => $items])
                    @endif
                </div>
<<<<<<< HEAD
                ｌｌｌｐｐｐｋｐｋｐ「
=======
              
>>>>>>> 897a2965ae15cc89b545b3195160fed2ff31e2a3
        </div>
    </div>
@endsection    