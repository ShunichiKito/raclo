
<div class="row">
    <div class=users-items>
    @if (Auth::check())
        {!! Form::open(['route' => ['myitems.selected']]) !!}
            @foreach ($items as $key => $item)
                <div class="item">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="u-items-head">
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
                                    
                                {{ Form::checkbox('item[]',"$item->file_path", false) }}
                                    <!--<input type="checkbox" name="$key" value="$item" id="item" />-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        
    @endif 
    </div>
</div>


