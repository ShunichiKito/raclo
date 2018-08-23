<?php
use App\User;
use App\Stylist_profile_image;
?>

<link rel="stylesheet" type="text/css" href="{{ secure_asset('css/s_icon.css') }}">

<div class='container container-icon'>
            <div class='row text-center pad-top'>
                <div>
                    <h1><strong>Choose your stylist</strong></h1>
                </div>
            </div>
            
@if (Auth::check())
        @foreach ($stylists as $stylist)
            <?php $item= Stylist_profile_image::where('user_name',$stylist->name)->first(); ?> 
            
            <div class='row text-center pad-top col-md-3 col-sm-3 col xs-8'>
                <!--<div class='col-md-4 col-sm-4 col xs-8'>-->
                    <div class='panel panel-icon'>
                        <div class='panel-heading panel-heading-icon'>
                            @if($item)
                            <img src="{{ '/storage/s_profile_image/'.$item->file_path }}" alt="" class="profile_image">
                            @else
                             <img src="{{ '/no_image.png' }}" alt="" class="profile_image">
                            @endif
                            
                        </div>
                        
                        <div class='panel-body panel-body-icon'>
                            <!--<div class="table-responsive">-->
                                
                               <h2> <?php print $stylist->name; ?></h2>
                               <h4><?php print $stylist->style ?></h4>
                                <h3 class='index_rank'><?php print $stylist->rank; ?></h3>
                                

                               <a href="{{ route('u_choosestylist', $stylist->name) }}" class='btn byn-danger btn-icon'>
                                <button type="submit" class="btn btn-default btn-icon"><strong>Choose this stylist</strong></strong></button>
                            </a>
                            <!--</div>-->
                        </div>
                        
                       
                    </div>
                <!--</div>-->
             </div>
        @endforeach
@endif    
</div>


