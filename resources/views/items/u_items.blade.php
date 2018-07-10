<div class="row">
    @if (Auth::check())
        @foreach ($items as $key => $item)
            <div class="item">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <img src="{{ $item->file_path }}" alt="" class="">
                        </div>
                        <div class="panel-body">
                            @if ($item->id)
                                <p class="item-title"><a href="{{ route('items.show', $item->id) }}">{{ $item->name }}</a></p>
                            @else
                                <p class="item-title">{{ $item->name }}</p>
                            @endif
                            <div class="buttons text-center">
                                @if (Auth::check())
                                    @include('items.select_button', ['item' => $item])
                                @endif
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif