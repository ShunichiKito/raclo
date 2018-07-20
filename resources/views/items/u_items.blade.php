@if (Auth::check())
        {!! Form::open(['route' => ['myitems.selected']]) !!}
@foreach ($items as $key => $item)



<link rel="stylesheet" type="text/css" href="{{ secure_asset('css/u_items.css') }}">

<div class="row">
    <div class="col-lg-12">
        <div class=users-items>
            <div class="item">
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                        <img src="{{ $item->file_path }}" alt="" class="" >
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="u-items-body">
                            <input type="checkbox" name="item" value="$item" id="item" />
                            <p id="p1"></p>
                            <script src="//code.jquery.com/jquery-1.12.1.min.js"></script>
                            <script>
                            $(function() {
                                $('input[name="item"]').change(function() {
                                    // 選択したValue値を変数にうつす
                                    var val = $('#val:checked').val();
                                    
                                    if (val) {
                                        $('#p1').text('valkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkでチェック');
                                    }else {
                                        $('#p1').text('');
                                    }
                                }
                            )});
                            </script>
                            <div class="w3-container w3-left">
                        {{ Form::checkbox('item[]',"$item->file_path", false) }}
                            <!--<input type="checkbox" name="$key" value="$item" id="item" />-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endforeach
        
@endif
