@extends('layouts.user_app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
             <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/u_price.css') }}">
        </div>
    </div>

<div class="cp_pricetable1">
	<div class="block">
	<ul>
		<li class="header1"><strong>1 coordinate</strong></li>
		<li class="header2">¥500</li>
		<li class="style1">
			一回きりのコーディネート<br>
			スタンダードの料金プラン<br>
		    <br>
		
		</li>
		<li class="footer1"><a href="#" class="cp_btn">BUY</a></li>
	</ul>
	</div>
</div>

<div class="cp_pricetable2">
	<div class="block">
	<ul>
		<li class="header1"><strong>5 coordinates</strong></li>
		<li class="header2">¥2000</li>
		<li class="style1">
			５回分のコーディネート<br>
			１回分お得な料金プラン<br>
		    <br>
		</li>
		<li class="footer1"><a href="#" class="cp_btn">BUY</a></li>
	</ul>
	</div>
</div>

<div class="cp_pricetable3">
	<div class="block">
	<ul>
		<li class="header1"><strong>10 coordinates</strong></li>
		<li class="header2">¥3500</li>
		<li class="style1">
			１０回分のコーディネート<br>
			３回分お得な料金プラン<br>
		    <br>
		</li>
		<li class="footer1"><a href="#" class="cp_btn">BUY</a></li>
	</ul>
	</div>
</div>

@endsection