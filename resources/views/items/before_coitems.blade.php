<link rel="stylesheet" type="text/css" href="{{ secure_asset('css/workspace_edit.css') }}">
<div class="row">
    @if (Auth::check())
       
            @foreach ($my_images as $key => $my_image)
                <div class="item">
                    <div class="col-lg-12 before_container" >
                       
                        <div class="panel panel-default">
                            <div class="panel-heading text-center">
                                <img src="{{ '/storage/u_items/'.$my_image->file_path }}" alt="" class="cloths_image_2">
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
       
    @endif  
    
    
</div>
