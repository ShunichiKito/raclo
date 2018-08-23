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
	if(empty($order->item1)) {
		 print $order->item1;
	}
	  
    $coordinates=Coordinated_set::where('user_id', \Auth::user()->id)->where('stylist_id',$order->stylist_id)->where('order_id',$order->id)->get();
   
    foreach($coordinates as $key => $coordinate) { ?>
    	<h3 class="misato">Coordinate<?php print $key+1;?></h3>
        <?php if(!empty($coordinate->item1)) { ?>
        	<div class="sho">
        		<?php if(!empty($coordinate->item1_path)){ ?>
                         <a href="<?php print $coordinate->item1_path ?>" target="newtab" class="newtag"><img class="co_image" src="<?php print $coordinate->item1; ?>"><span>new!!</span></a>
                <?php }else{ ?>
                    	<img class="co_image" src="<?php print $coordinate->item1; ?>">
                <?php } ?>    	
	    	</div>
    	<?php }
    	if(!empty($coordinate->item2)) { ?>
        	<div class="sho">
        		<?php if(!empty($coordinate->item2_path)){ ?>
                         <a href="<?php print $coordinate->item2_path ?>" target="newtab" class="newtag"><img class="co_image" src="<?php print $coordinate->item2; ?>"><span>new!!</span></a>
                <?php }else{ ?>
                    	<img class="co_image" src="<?php print $coordinate->item2; ?>">
                <?php } ?>    	
	    	</div>
    	<?php }
    	if(!empty($coordinate->item3)) { ?>
        	<div class="sho">
        		<?php if(!empty($coordinate->item3_path)){ ?>
        				  <a href="<?php print $coordinate->item3_path ?>" target="newtab" class="newtag"><img class="co_image" src="<?php print $coordinate->item3; ?>"><span>new!!</span></a>
                <?php }else{ ?>
                    	<img class="co_image" src="<?php print $coordinate->item3; ?>">
                <?php } ?>    	
	    	</div>
    	<?php }
    	if(!empty($coordinate->item4)) { ?>
        	<div class="sho">
        		<?php if(!empty($coordinate->item4_path)){ ?>
                         <a href="<?php print $coordinate->item4_path ?>" target="newtab" class="newtag"><img class="co_image" src="<?php print $coordinate->item4; ?>"><span>new!!</span></a>
                <?php }else{ ?>
                    	<img class="co_image" src="<?php print $coordinate->item4; ?>">
                <?php } ?>    	
	    	</div>
    	<?php }
    	if(!empty($coordinate->item5)) { ?>
        	<div class="sho">
        		<?php if(!empty($coordinate->item5_path)){ ?>
                         <a href="<?php print $coordinate->item5_path ?>" target="newtab" class="newtag"><img class="co_image" src="<?php print $coordinate->item5; ?>"><span>new!!</span></a>
                <?php }else{ ?>
                    	<img class="co_image" src="<?php print $coordinate->item5; ?>">
                <?php } ?>    	
	    	</div>
    	<?php }
    	if(!empty($coordinate->item6)) { ?>
        	<div class="sho">
        		<?php if(!empty($coordinate->item6_path)){ ?>
                         <a href="<?php print $coordinate->item6_path ?>" target="newtab" class="newtag"><img class="co_image" src="<?php print $coordinate->item6; ?>"><span>new!!</span></a>
                <?php }else{ ?>
                    	<img class="co_image" src="<?php print $coordinate->item6; ?>">
                <?php } ?>    	
	    	</div>
    	<?php }
    	if(!empty($coordinate->item7)) { ?>
        	<div class="sho">
        		<?php if(!empty($coordinate->item7_path)){ ?>
                         <a href="<?php print $coordinate->item7_path ?>" target="newtab" class="newtag"><img class="co_image" src="<?php print $coordinate->item7; ?>"><span>new!!</span></a>
                <?php }else{ ?>
                    	<img class="co_image" src="<?php print $coordinate->item7; ?>">
                <?php } ?>    	
	    	</div>
    	<?php }
    } ?>
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
		
		/*タグ用デザイン*/
			a.newtag {
			    position: relative;
			}
			span {
			    font-size: 30px;
			    position: absolute;
			    right: 60px;
			    top: -130px;
			    text-decoration: none;
			}
	</style>
</div>
    
@endsection  