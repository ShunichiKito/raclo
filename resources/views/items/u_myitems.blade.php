

<link rel="stylesheet" type="text/css" href="{{ secure_asset('css/u_myitems.css') }}">

<div class="container col-lg-12">
    @if (Auth::check())
        {!! Form::open(['route' => ['myitems.selected']]) !!}
            @foreach ($items as $key => $item)
                <div class="item">
                    <div class=row "col-lg-4">
                        
                        <!--<div class="closetin">-->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <img src="{{ $item->file_path }}" alt="" class="" height="100px" width="100px">
                            </div>
                            <div class="panel-body">
                                {{ Form::checkbox('item[]',"$item->file_path", false) }}
                                <!--<input type="checkbox" name="$key" value="$item" id="item" />-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--</div>-->
            @endforeach
        @endif    
</div>


