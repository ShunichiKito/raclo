@extends('layouts.stylist_app')

@section('content')

<table class="table table-striped table-bordered">
 <thead>
    <tr>
      <th>date</th>
      <th>name</th>
      <th>content</th>
      <th>price</th>
      <th>deadline</th>
    </tr>
 </thead>
 <tbody>
     <?php foreach($orders as $order) { ?>
        
        <tr class='clickable-row' data-href="{{ route('s_workspace', $order->id) }}">
           <th><?php echo $order->created_at;?></th>
           <th><?php echo $order->name;?></th>
           <th><?php echo $order->state;?></th>
           <th>300yen</th>
           <th></th>
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