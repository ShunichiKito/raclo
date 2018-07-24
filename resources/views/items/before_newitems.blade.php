<link rel="stylesheet" type="text/css" href="{{ secure_asset('workspace_edit.css') }}">
<div class="row">
    @if (Auth::check())
        <ul  class="ui-helper-reset ui-helper-clearfix">
            @foreach ($new_images as $key => $new_image)
                <li>
                <!--<div class="item col-lg-12 before_newitems panel panel-default panel-heading text-center" >-->
                    <img src="{{ '/storage/u_items/'.$new_image->file_path }}" alt="" class="cloths_image_2">
                </li>           
                <!--</div>-->
            @endforeach
        </ul>    
    @endif
</div>

