<div class="row">
    @if (Auth::check())
        
            @foreach ($new_images as $key => $new_image)
                <div class="item">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center">
                                <img src="{{ '/storage/u_items/'.$new_image->file_path }}" alt="" class="">
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
    @endif    
</div>

