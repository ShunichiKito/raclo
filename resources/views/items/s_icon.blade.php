<div class="row">
    @if (Auth::check())
            @foreach ($items as $key => $item)
                <div class="item">
                    <div class="col-lg-12">
                        <div class="panel-body">
                            <div class='container'>
                               <h1></h1>
                               <div class="panel panel-default">
                                   <div class="panel-heading">
                                       <img src="{{ $item->file_path }}" alt="" class="">
                                   </div>
                                   <div class="panel-body">パネル内容</div>
                                   <div class="panel-footer">パネルフッター</div>
                                </div>
                            </div>
                        </div>    
                          <!--<input type="ボタンにする" name="item" value="$item" id="item" />-->
                    </div>
                </div>
            @endforeach
    @endif    
</div>

