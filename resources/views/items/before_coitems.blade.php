<div class="row">
    @if (Auth::check())
       
            @foreach ($my_images as $key => $my_image)
                <div class="item">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center">
                                <img src="{{ $my_image->file_path }}" alt="" class="">
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
       
    @endif    
</div>
