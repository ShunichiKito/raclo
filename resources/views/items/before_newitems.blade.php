<link rel="stylesheet" type="text/css" href="{{ secure_asset('workspace_edit.css') }}">
<div class="row">
    @if (Auth::check())
        <ul class="brand ui-helper-reset ui-helper-clearfix before_new">
            @foreach ($new_images as $key => $new_image)
                <!--<div class="item">-->
                <!--    <div class="col-lg-12 before_newitems">-->
                <!--        <div class="panel panel-default">-->
                <!--            <div class="panel-heading text-center">-->
                             <li class="before_co_li">   
                                <img src="{{ '/storage/u_items/'.$new_image->file_path }}" alt="" class="cloths_image_2">
                            </li> 
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->

            @endforeach
        </ul>
    @endif
    

</div>

