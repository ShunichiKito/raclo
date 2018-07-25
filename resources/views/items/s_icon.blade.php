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
                    <div class='panel'>
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
                                        color: #742253;
                                        margin-top:45px;
                                    }
                                </style>
                            </h2>
                        </div>
                        
                        <div class='panel-body'>
                            <div class="table-responsive">
                                
                               <div class="panel-body2"><?php print $stylist->style ?></div>
                               <a href="{{ route('u_choosestylist', $stylist->name) }}" class='btn byn-danger'>
                                <button type="submit" class="btn btn-default"><strong>Choose this stylist</strong></strong></button>
                            </a>
                            </div>
                        </div>
                        
                       
                    </div>
                <!--</div>-->
             </div>
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

.panel-body {
    margin:40px;
    height:130px;
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
    height :165px;
}

.panel-body2{
    font-size: 20px;
    margin-bottom:25px;
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
.table-responsive {
    margin-top:30px;
}
</style>

