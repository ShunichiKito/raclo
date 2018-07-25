@extends('layouts.user_app')


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
	   
	</div>

	
    </div>
    
    
	
    
   
   
   
   
@endsection    
