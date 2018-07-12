<div class="row">
    @if (Auth::check())
        <form>
            @foreach ($items as $key => $item)
                <div class="item">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center">
                                <img src="{{ $item->file_path }}" alt="" class="">
                            </div>
                            <div class="panel-body">
                                    <!--<input type="ボタンにする" name="item" value="$item" id="item" />-->
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </form>
    @endif    
</div>

