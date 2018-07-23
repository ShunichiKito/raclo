@extends('layouts.user_app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
             <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/u_price.css') }}">
        </div>
    </div>

	<h1 style="text-align:center;">自分の洋服だけでコーディネートしてもらうプラン</h1>
	
<div class="cp_pricetable1">
	<div class="block">
	<ul>
		<li class="header1"><strong>Legend</strong></li>
		<li class="header2">¥500</li>
		<li class="style1">
			1セットのコーディネート<br>
		    <br>
		
			<!--</div>-->
<!--		</li>-->
<!--		<li class="footer1"><a href="#" class="cp_btn">BUY</a></li>-->
<!--	</ul>-->
<!--	</div>-->
<!--</div>-->

<div class="cp_pricetable2">
	<div class="block">
	<ul>
		<li class="header1"><strong>Professional</strong></li>
		<li class="header2">¥300</li>
		<li class="style1">
			1セットのコーディネート<br>
		    <br>
		</li>
		<li class="footer1"><a href="#" class="cp_btn">BUY</a></li>
	</ul>
	</div>
</div>

<div class="cp_pricetable3">
	<div class="block">
	<ul>
		<li class="header1"><strong>Amature</strong></li>
		<li class="header2">¥150</li>
		<li class="style1">
			１セットのコーディネート<br>
		    <br>
		</li>
		<li class="footer1"><a href="#" class="cp_btn">BUY</a></li>
	</ul>
	</div>
</div>

<div class="cp_pricetable4">
	<div class="block">
	<ul>
		<li class="header1"><strong>Trial</strong></li>
		<li class="header2">¥0</li>
		<li class="style1">
			１セットのコーディネート<br>
			初めての方は無料体験が可能！<br>
		    <br>
		</li>
		<li class="footer1"><a href="#" class="cp_btn">BUY</a></li>
	</ul>
	</div>
</div>

<br>

<h1 style="text-align:center;">新しいアイテムを追加してコーディネートしてもらうプラン</h1>

<div class="cp_pricetable1">
	<div class="block">
	<ul>
		<li class="header1"><strong>Legend</strong></li>
		<li class="header2">¥400</li>
		<li class="style1">
			1セットのコーディネート<br>
		    <br>
		
		</li>
		<li class="footer1"><a href="#" class="cp_btn">BUY</a></li>
	</ul>
	</div>
</div>

<div class="cp_pricetable2">
	<div class="block">
	<ul>
		<li class="header1"><strong>Professional</strong></li>
		<li class="header2">¥200</li>
		<li class="style1">
			1セットのコーディネート<br>
		    <br>
		</li>
		<li class="footer1"><a href="#" class="cp_btn">BUY</a></li>
	</ul>
	</div>
</div>

<div class="cp_pricetable3">
	<div class="block">
	<ul>
		<li class="header1"><strong>Amature</strong></li>
		<li class="header2">¥100</li>
		<li class="style1">
			１セットのコーディネート<br>
		    <br>
		</li>
		<li class="footer1"><a href="#" class="cp_btn">BUY</a></li>
	</ul>
	</div>
</div>

<div class="cp_pricetable4">
	<div class="block">
	<ul>
		<li class="header1"><strong>Trial</strong></li>
		<li class="header2">¥0</li>
		<li class="style1">
			１セットのコーディネート<br>
			初めての方は無料体験が可能！<br>
		    <br>
		</li>
		<li class="footer1"><a href="#" class="cp_btn">BUY</a></li>
	</ul>
	</div>
</div>


@endsection