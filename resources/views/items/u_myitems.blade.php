

<link rel="stylesheet" type="text/css" href="{{ secure_asset('css/u_myitems.css') }}">

<div class="row">
    @if (Auth::check())
        {!! Form::open(['route' => ['myitems.selected']]) !!}
            @foreach ($items as $key => $item)
                <div class="item">
                    <div class="col-lg-12">
                        <!--<div class="w3-left">-->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <img src="{{ $item->file_path }}" alt="" class="" height="150px" width="150px">
                            </div>
                            <div class="panel-body">
                                {{ Form::checkbox('item[]',"$item->file_path", false) }}
                                    <!--<input type="checkbox" name="$key" value="$item" id="item" />-->
                            </div>
                        </div>
                    <!--</div>-->
                    </div>
                </div>
            @endforeach
        @endif    
</div>


