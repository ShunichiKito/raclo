@extends('layouts.stylist_app')
<?php
use App\User;
?>
<link rel="stylesheet" type="text/css" href="{{ secure_asset('workspace_edit.css') }}">

@section('content')

<table class="table table-striped table-bordered" >
 <thead>
    <tr style="background-color: #f2dede;">
      <th>Date</th>
      <th>Name</th>
      <th>Status</th>
      <th>Price</th>
      <th>My Items / With New Items</th>
    </tr>
 </thead>
 <tbody>
     <?php foreach($orders as $order) { ?>
        
        <tr class='clickable-row' data-href="{{ route('s_workspace', $order->id) }}">
           <th><?php echo $order->created_at;?></th>
           <th><?php $user=User::where('id',$order->user_id)->first();
                     echo $user->name ?></th>
           <th><?php echo $order->state;?></th>
           <th><?php echo "$".$order->price;?></th>
           <th><?php echo $order->myitems_conumber." "."/"." ".$order->newitems_conumber;?></th>
    </tr>
    <?php } ?>
 </tbody>
</table>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
});
</script>

<style>

    table tbody tr:hover{
        background-color: skyblue;
    }
    table tbody tr:last-child:hover {
        background-color: skyblue;
    }
    table tbody tr:first-child:hover {
        background-color: skyblue;
    }
    
   

</style>

@endsection