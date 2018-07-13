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


<div class='container'>
    <div class='row text-center pad-top'>
        <div>
            <h1><strong>Choose your stylist</strong></h1>
        </div>
    </div>
    
    <div class='row text-center pad-top'>
        <div class='col-md-4 col-sm-4 col xs-8'>
            <div class='panel panel-danger'>
                <div class='panel-heading'>
                    <img src="img/shape_img.jpg" class="img-circle">
                    <h1><strong>MISATO</strong></h1>
                </div>
                
                <div class='panel panel-body'>
                    <div class="table-responsive">
                       <p>text<p>
                    </div>
                </div>
                
                <div class='panel panel-footer'>
                    <a herf='#' class='btn btn-danger'>Send the Request</a>
                </div>
            </div>
        </div>
        
        <div class='col-md-4 col-sm-4 col xs-8'>
            <div class='panel panel-info'>
                <div class='panel-heading'>
                    <img src="img/shape_img.jpg" class="img-circle">
                    <h1><strong>SHO</strong></h1>
                </div>
                
                <div class='panel panel-body'>
                    <div class="table-responsive">
                       <p>text<p>
                    </div>
                </div>
                
                <div class='panel panel-footer'>
                    <a herf='#' class='btn btn-danger'>Send the Request</a>
                </div>
            </div>
        </div>
        
        <div class='col-md-4 col-sm-4 col xs-8'>
            <div class='panel panel-warning'>
                <div class='panel-heading'>
                    <img src="img/shape_img.jpg" class="img-circle">
                    <h1><strong>ICHIRO</strong></h1>
                </div>
                
                <div class='panel panel-body'>
                    <div class="table-responsive">
                       <p>text<p>
                    </div>
                </div>
                
                <div class='panel panel-footer'>
                    <a herf='#' class='btn btn-danger'>Send the Request</a>
                </div>
            </div>
        </div>
     </div>
</div>
