@extends('layouts.app')


@section('cover')
   <div class="cover">
       <div class="cover-inner">
           <div class="cover-contents">
               <h1>Name</h1>
               @if (!Auth::check())
                   <a href="{{ route('signup.get') }}" class="btn btn-success btn-lg">モノリストを始める</a>
               @endif
           </div>
       </div>
   </div>
@endsection

@if ($items)
    <div class="row">
        @foreach ($items as $key => $item)
            <div class="item">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <img src="{{ $item->image_url }}" alt="" class="">
                        </div>
                        <div class="panel-body">
                            @if ($item->id)
                                <p class="item-title"><a href="{{ route('items.show', $item->id) }}">{{ $item->name }}</a></p>
                            @else
                                <p class="item-title">{{ $item->name }}</p>
                            @endif
                            <div class="buttons text-center">
                                @if (Auth::check())
                                    @include('items.want_button', ['item' => $item] )
                                    @include('items.have_button', ['item' => $item] )
                                @endif
                            </div>
                        </div>
                        @if (isset($item->count))
                            <div class="panel-footer">
                                @if(isset($want))
                                <p class="text-center">{{ $key+1 }}位: {{ $item->count}} Wants</p>
                                @endif
                                @if(isset($have))
                                <p class="text-center">{{ $key+1 }}位: {{ $item->count}} Haves</p>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif