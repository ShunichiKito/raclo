<?php
use App\User;
use App\Stylist_profile_image;
?>

<div class='container'>
            <div class='row text-center pad-top'>
                <div>
                    <h1><strong>Your coordinates from staylists</strong></h1>
                </div>
            </div>
            
@if (Auth::check())
        @foreach ($orders as $order)
            <?php $stylist= User::where('id',$order->stylist_id)->first(); ?>
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
                                <p><?php print $order->id."New Coordinate"; ?></p>
                                <p><?php print "from ".$stylist->name; ?></p>
                            </h2>
                        </div>
                        
                        <div class='panel panel-body'>
                            <div class="table-responsive">
                                
                               <div class="panel-body"><?php print $stylist->style ?></div>
                            </div>
                        </div>
                        <?php 
                        // print $order;
                        ?>
                        <div class='panel panel-footer'>
                            <a href="{{ route('u_coord_show', $order->id) }}" class='btn byn-danger'>
                                <button type="submit" class="btn btn-default" >See the coordinates</button>
                            </a>
                            
                        </div>
                    </div>
                <!--</div>-->
             </div>
        @endforeach
@endif    
</div>
