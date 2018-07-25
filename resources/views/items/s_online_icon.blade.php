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
                    <div class='panel'>
                        <div class='panel-heading'>
                            <img src="{{ $item->file_path }}" alt="" class="profile_image">
                            <h2 class="panel-body"><?php print $item->user_name ?></h2>
                        </div>
                        
                        <div class='panel panel-body'>
                            <div class="table-responsive">
                               <?php $user = User::where('users.name', $item->user_name)->first(); ?>  
                               <div class="panel-body"><?php print $user->style ?></div>
                               <a herf='#' class='btn btn-danger'>Send the Request</a>
                            </div>
                        </div>
                        
                        <!--<div class='panel panel-footer'>-->
                        <!--    <a herf='#' class='btn btn-danger'>Send the Request</a>-->
                        <!--</div>-->
                    </div>
                <!--</div>-->
             </div>
            @if($item->user_name=='Shunichi Nitch Kito')
                 <?php break; ?>
            @endif
        @endforeach
@endif    
</div>

<style>

body {
    background-image:url('/white-wood.jpg');
}

h1 {
    font-size:70px;
}

.panel-body strong {
    font-size:20px;
}

.navbar {
    font-family: "Abril-Fatface";
    margin-bottom: 0;
}
.container {
    font-family: "Abril-Fatface";
    /*background-image: url('/white-wood.jpg');*/
    /*background-size: auto auto;*/
    /*background-size: 50% 25% 25%;*/
    /*background-size: 550px, auto, contain;*/
    /*width: 100%;*/
}


.panel {
    /*border:15px;*/
    border-color: #C0C0C0;
    
}

.panel-heading{
    background-color:#DEB887  ;
    color: black;
    border-color:#C0C0C0;
}

.panel-body2{
    font-size: 20px;
}

.btn{
    background-color: #DEB887  ;
    position:absolute; 
    margin-left:-100px;
    left:50%;
    width:200px;
    bottom: 5px;
    border: none;
}
 .btn:hover {
     background-color:#CD853F ;
     
 }


</style>

