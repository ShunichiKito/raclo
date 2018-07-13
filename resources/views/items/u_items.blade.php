
<div class="row">
    @if (Auth::check())
        <!--{!! Form::model($u_items, ['route' => ['items.hold', $u_items->myitems_check::all()-->
            @foreach ($items as $key => $item)
                <div class="item">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center">
                                <img src="{{ $item->file_path }}" alt="" class="">
                            </div>
                            <div class="panel-body">
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
                                    
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        <input type="submit" name="itemSubmit" value="Next" />
        </form>
    @endif    
</div>

