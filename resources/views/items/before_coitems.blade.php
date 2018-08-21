<link rel="stylesheet" type="text/css" href="{{ secure_asset('css/workspace_edit.css') }}">
<div class="row">
    @if (Auth::check())

           <ul class="brand ui-helper-reset ui-helper-clearfix before_co">
                @foreach ($my_images as $key => $my_image)
                    <!--<div class="item col-lg-12 before_container panel panel-default panel-heading text-center" >-->
                    
                    <li class="before_co_li">       
                        <img src="{{ '/storage/u_items/'.$my_image->file_path }}" alt="" class="cloths_image_2">
                    </li>             
                    <!--</div>-->
                @endforeach
           </ul>
    @endif  
    
</div>
