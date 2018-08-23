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
                         <a href="<?php print $coordinate->item1_path ?>" target="newtab" class="newtag"><img class="co_image" src="<?php print $coordinate->item1; ?>"><p>new!!</p></a>
                <?php }else{ ?>
                    	<img class="co_image" src="<?php print $coordinate->item1; ?>">
                <?php } ?>    	
	    	</div>
    	<?php }
    	if(!empty($coordinate->item2)) { ?>
        	<div class="sho">
        		<?php if(!empty($coordinate->item2_path)){ ?>
                         <a href="<?php print $coordinate->item2_path ?>" target="newtab" class="newtag"><img class="co_image" src="<?php print $coordinate->item2; ?>"><p>new!!</p></a>
                <?php }else{ ?>
                    	<img class="co_image" src="<?php print $coordinate->item2; ?>">
                <?php } ?>    	
	    	</div>
    	<?php }
    	if(!empty($coordinate->item3)) { ?>
        	<div class="sho">
        		<?php if(!empty($coordinate->item3_path)){ ?>
        				  <a href="<?php print $coordinate->item3_path ?>" target="newtab" class="newtag"><img class="co_image" src="<?php print $coordinate->item3; ?>"><p>new!!</p></a>
                <?php }else{ ?>
                    	<img class="co_image" src="<?php print $coordinate->item3; ?>">
                <?php } ?>    	
	    	</div>
    	<?php }
    	if(!empty($coordinate->item4)) { ?>
        	<div class="sho">
        		<?php if(!empty($coordinate->item4_path)){ ?>
                         <a href="<?php print $coordinate->item4_path ?>" target="newtab" class="newtag"><img class="co_image" src="<?php print $coordinate->item4; ?>"><p>new!!</p></a>
                <?php }else{ ?>
                    	<img class="co_image" src="<?php print $coordinate->item4; ?>">
                <?php } ?>    	
	    	</div>
    	<?php }
    	if(!empty($coordinate->item5)) { ?>
        	<div class="sho">
        		<?php if(!empty($coordinate->item5_path)){ ?>
                         <a href="<?php print $coordinate->item5_path ?>" target="newtab" class="newtag"><img class="co_image" src="<?php print $coordinate->item5; ?>"><p>new!!</p></a>
                <?php }else{ ?>
                    	<img class="co_image" src="<?php print $coordinate->item5; ?>">
                <?php } ?>    	
	    	</div>
    	<?php }
    	if(!empty($coordinate->item6)) { ?>
        	<div class="sho">
        		<?php if(!empty($coordinate->item6_path)){ ?>
                         <a href="<?php print $coordinate->item6_path ?>" target="newtab" class="newtag"><img class="co_image" src="<?php print $coordinate->item6; ?>"><p>new!!</p></a>
                <?php }else{ ?>
                    	<img class="co_image" src="<?php print $coordinate->item6; ?>">
                <?php } ?>    	
	    	</div>
    	<?php }
    	if(!empty($coordinate->item7)) { ?>
        	<div class="sho">
        		<?php if(!empty($coordinate->item7_path)){ ?>
                         <a href="<?php print $coordinate->item7_path ?>" target="newtab" class="newtag"><img class="co_image" src="<?php print $coordinate->item7; ?>"><p>new!!</p></a>
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
   /*         .newtag {*/
   /*             position:relative;*/
   /*         }*/
   /*         newtag p {*/
			/*    position: absolute;*/
			/*    color: red;*/
			/*    top: -130px;*/
			/*    right: 55px;*/
			/*    font-size: 30px;*/
			/*}*/
			p {
			        font-size: 30px;
				    position: relative;
				    left: 265px;
				    top: -240px;
				    text-decoration: none;
				    width: 80px;
			}
	</style>
</div>
    
@endsection  