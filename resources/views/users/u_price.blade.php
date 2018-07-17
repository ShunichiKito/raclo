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
		<li class="header1"><strong>Monthly payment</strong></li>
		<li class="header2">¥3,000</li>
		<li class="style1">
			ここにはStandard会員の<br>
			priceと説明書きが入る。<br>
		    example
		
		</li>
		<li class="footer1"><a href="#" class="cp_btn">ボタン</a></li>
	</ul>
	</div>
</div>

<div class="cp_pricetable2">
	<div class="block">
	<ul>
		<li class="header1"><strong>one-time codinate</strong></li>
		<li class="header2">￥324</li>
		<li class="style1">
			ここにはStandard会員の<br>
			priceと説明書きが入る。<br>
		    example
		</li>
		<li class="footer1"><a href="#" class="cp_btn">ボタン</a></li>
	</ul>
	</div>
</div>

<div class="cp_pricetable3">
	<div class="block">
	<ul>
		<li class="header1"><strong>Trial</strong></li>
		<li class="header2">¥0</li>
		<li class="style1">
			ここにはTrial会員の<br>
			priceと説明書きが入る。<br>
		    example
		</li>
		<li class="footer1"><a href="#" class="cp_btn">ボタン</a></li>
	</ul>
	</div>
</div>

@endsection