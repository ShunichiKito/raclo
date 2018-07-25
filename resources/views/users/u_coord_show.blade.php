@extends('layouts.user_app')
<?php
use App\Coordinated_set;
?>
@section('content')
   
   
  
    
    <div class="col-lg-3 panel panel-default">
	<div class="panel-heading">
		コーディネートの写真
	</div>
	<div class="panel-body">
	    coordinates or suggestion
	    <?php 
	    if(empty($order->item1)) {
	    	 print $order->item1;
	    }
	   ?>
	  
	    $coordinates=Coordinated_set::where('user_id', \Auth::user()->id)->where('stylist_id',$order->stylist_id)->where('order_id',$order->id)->get();
	   
	    foreach($coordinates as $key => $coordinate) { ?>
	    	<p>coordinate<?php print $key+1;?></p>
	        <?php if(!empty($coordinate->item1)) { ?>
		    	<div>
		    		<img class="co_image" src="<?php print $coordinate->item1; ?>">
		    	</div>
	    	<?php }
	    	if(!empty($coordinate->item2)) { ?>
		    	<div>
		    		<img class="co_image" src="<?php print $coordinate->item2; ?>">
		    	</div>
	    	<?php }
	    	if(!empty($coordinate->item3)) { ?>
		    	<div>
		    		<img class="co_image" src="<?php print $coordinate->item3; ?>">
		    	</div>
	    	<?php }
	    	if(!empty($coordinate->item4)) { ?>
		    	<div>
		    		<img class="co_image" src="<?php print $coordinate->item4; ?>">
		    	</div>
	    	<?php }
	    	if(!empty($coordinate->item5)) { ?>
		    	<div>
		    		<img class="co_image" src="<?php print $coordinate->item5; ?>">
		    	</div>
	    	<?php }
	    	if(!empty($coordinate->item6)) { ?>
		    	<div>
		    		<img class="co_image" src="<?php print $coordinate->item6; ?>">
		    	</div>
	    	<?php }
	    	if(!empty($coordinate->item7)) { ?>
		    	<div>
		    		<img class="co_image" src="<?php print $coordinate->item7; ?>">
		    	</div>
	    	<?php }
	    
	   ?>
	   <style>
		   	img.co_image {
		    width: 100px;
		    height: 100px;
			}
	   </style>
	</div>

	
    </div>
    
    
	
    
   
   
   
   
@endsection    
