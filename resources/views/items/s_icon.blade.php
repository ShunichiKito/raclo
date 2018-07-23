<?php
use App\User;
use App\Stylist_profile_image;
?>


<div class='container'>
            <div class='row text-center pad-top'>
                <div>
                    <h1><strong>Choose your stylist</strong></h1>
                </div>
            </div>
            
@if (Auth::check())
        @foreach ($stylists as $stylist)
            <?php $item= Stylist_profile_image::where('user_name',$stylist->name)->first(); ?> 
            
            <div class='row text-center pad-top col-md-4 col-sm-4 col xs-8'>
                <!--<div class='col-md-4 col-sm-4 col xs-8'>-->
                    <div class='panel panel-danger'>
                        <div class='panel-heading'>
                            @if($item)
                            <img src="{{ '/storage/s_profile_image/'.$item->file_path }}" alt="" class="profile_image">
                            @else
                             <img src="{{ '/no_image.png' }}" alt="" class="profile_image">
                            @endif
                            <h2 class="panel-body">
                                <p><?php print $stylist->name; ?></p>
                                <p class='index_rank'><?php print $stylist->rank; ?></p>
                                <style>
                                   .index_rank {
                                        font-size: 25px;
                                        color: orange;
                                    }
                                </style>
                            </h2>
                        </div>
                        
                        <div class='panel panel-body'>
                            <div class="table-responsive">
                                
                               <div class="panel-body"><?php print $stylist->style ?></div>
                            </div>
                        </div>
                        
                        <div class='panel panel-footer'>
                            <a href="{{ route('u_ordercomp', $stylist->name) }}" class='btn byn-danger'>
                                <button type="submit" class="btn btn-default" onclick='return confirm("Are you sure you want to request this stylist?");'>Send the Request</button>
                            </a>
                            
                        </div>
                    </div>
                <!--</div>-->
             </div>
        @endforeach
@endif    
</div>
