@extends('layouts.user_app')
<?php
use App\Coordinated_set;
?>
@section('content')
   
  
    
<div class="col-lg-12">
		<style>
		.div {
    width: 5px;
    display: inline;
}
	</style>
    
	    <?php 
	  
	    $coordinates=Coordinated_set::where('user_id', \Auth::user()->id)->where('stylist_id',$order->stylist_id)->where('order_id',$order->id)->get();
	   
	    foreach($coordinates as $key => $coordinate) { ?>
	    	<h3 class="misato">Coordinate<?php print $key+1;?></h3>
	        <?php if(!empty($coordinate->item1)) { ?>
		    	<div class="sho">
		    		<img class="co_image" src="<?php print $coordinate->item1; ?>">
		    	</div>
	    	<?php }
	    	if(!empty($coordinate->item2)) { ?>
		    	<div class="sho">
		    		<img class="co_image" src="<?php print $coordinate->item2; ?>">
		    	</div>
	    	<?php }
	    	if(!empty($coordinate->item3)) { ?>
		    	<div class="sho">
		    		<img class="co_image" src="<?php print $coordinate->item3; ?>">
		    	</div>
	    	<?php }
	    	if(!empty($coordinate->item4)) { ?>
		    	<div class="sho">
		    		<img class="co_image" src="<?php print $coordinate->item4; ?>">
		    	</div>
	    	<?php }
	    	if(!empty($coordinate->item5)) { ?>
		    	<div class="sho">
		    		<img class="co_image" src="<?php print $coordinate->item5; ?>">
		    	</div>
	    	<?php }
	    	if(!empty($coordinate->item6)) { ?>
		    	<div class="sho">
		    		<img class="co_image" src="<?php print $coordinate->item6; ?>">
		    	</div>
	    	<?php }
	    	if(!empty($coordinate->item7)) { ?>
		    	<div class=sho>
		    		<img class="co_image" src="<?php print $coordinate->item7; ?>">
		    	</div>
	    	<?php }
	    }
	    
	   ?>
	   <style>
		   	img.co_image {
		    width: 200px;
		    height: 200px;
			}
	   </style>
	
		
		<style>
		.sho {display: inline;}
		.misato {
    padding: 0.5em 1em;
    margin: 2em 0;
    font-weight: bold;
    color: #6091d3;/*文字色*/
    background: #FFF;
    border: solid 3px #6091d3;/*線*/
    border-radius: 10px;/*角の丸み*/
    padding-top: 5px;
    padding-bottom: 5px;
}
		</style>
	
</div>
    
	
    
   
   
   
   
@endsection    
