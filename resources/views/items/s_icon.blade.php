<?php
use App\User
?>


<div class='container'>
            <div class='row text-center pad-top'>
                <div>
                    <h1><strong>Choose your stylist</strong></h1>
                </div>
            </div>
            
@if (Auth::check())
        @foreach ($items as $key => $item)
            <div class='row text-center pad-top col-md-4 col-sm-4 col xs-8'>
                <!--<div class='col-md-4 col-sm-4 col xs-8'>-->
                    <div class='panel panel-danger'>
                        <div class='panel-heading'>
                            <img src="{{ $item->file_path }}" alt="" class="profile_image">
                            <h2 class="panel-body"><?php print $item->user_name ?></h2>
                        </div>
                        
                        <div class='panel panel-body'>
                            <div class="table-responsive">
                               <?php $user = User::where('users.name', $item->user_name)->first(); ?>  
                               <div class="panel-body"><?php print $user->style ?></div>
                            </div>
                        </div>
                        
                        <div class='panel panel-footer'>
                            <a href="{{ route('u_ordercomp', $item->user_name) }}" class='btn byn-danger'>
                                <button type="submit" class="btn btn-default" onclick='return confirm("Are you sure you want to request this stylist?");'>Send the Request</button>
                            </a>
                            
                        </div>
                    </div>
                <!--</div>-->
             </div>
        @endforeach
@endif    
</div>
    