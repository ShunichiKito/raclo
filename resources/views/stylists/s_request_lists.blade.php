@extends('layouts.stylist_app')

<link rel="stylesheet" type="text/css" href="{{ secure_asset('workspace_edit.css') }}">
@section('content')

<table class="table table-striped table-bordered" style="background-color: #f2dede;">
 <thead>
    <tr class="tablistcolor">
      <th>date</th>
      <th>name</th>
      <th>content</th>
      <th>price</th>
      <th>my items / with new items</th>
    </tr>
 </thead>
 <tbody>
     <?php foreach($orders as $order) { ?>
        
        <tr class='clickable-row' data-href="{{ route('s_workspace', $order->id) }}">
           <th><?php echo $order->created_at;?></th>
           <th><?php echo $order->name;?></th>
           <th><?php echo $order->state;?></th>
           <th>300yen</th>
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
    table tbody tr:first-child:hover {
        background-color: skyblue;
    }

</style>

@endsection