<link rel="stylesheet" type="text/css" href="{{ secure_asset('workspace_edit.css') }}">
<div class="row">
    @if (Auth::check())
        
            @foreach ($new_images as $key => $new_image)
                <div class="item">
                    <div class="col-lg-12 before_newitems">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center">
                                <img src="{{ '/storage/u_items/'.$new_image->file_path }}" alt="" class="cloths_image_2">
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
    @endif
    

</div>

