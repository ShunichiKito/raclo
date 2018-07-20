@extends('layouts.user_app')

@section('content')
<!--    <div class="row">-->
<!--        <div class="col-lg-12">-->
             <!--<link rel="stylesheet" type="text/css" href="{{ secure_asset('css/u_price.css') }}">-->
<!--        </div>-->
<!--    </div>-->



<!--<div class="cp_pricetable1">-->
<!--	<div class="block">-->
<!--	<ul>-->
<!--		<li class="header1"><strong>1 coordinate</strong></li>-->
<!--		<li class="header2">¥500</li>-->
<!--		<li class="style1">-->
			<!--<div class="cheap">-->
			
<!--			一回きりのコーディネート<br>-->
<!--			スタンダードの料金プラン<br>-->
<!--		    <br>-->
		
			<!--</div>-->
<!--		</li>-->
<!--		<li class="footer1"><a href="#" class="cp_btn">BUY</a></li>-->
<!--	</ul>-->
<!--	</div>-->
<!--</div>-->

<!--<div class="cp_pricetable2">-->
<!--	<div class="block">-->
<!--	<ul>-->
<!--		<li class="header1"><strong>5 coordinates</strong></li>-->
<!--		<li class="header2">¥2000</li>-->
<!--		<li class="style1">-->
<!--			５回分のコーディネート<br>-->
<!--			１回分お得な料金プラン<br>-->
<!--		    <br>-->
<!--		</li>-->
<!--		<li class="footer1"><a href="#" class="cp_btn">BUY</a></li>-->
<!--	</ul>-->
<!--	</div>-->
<!--</div>-->

<!--<div class="cp_pricetable3">-->
<!--	<div class="block">-->
<!--	<ul>-->
<!--		<li class="header1"><strong>10 coordinates</strong></li>-->
<!--		<li class="header2">¥3500</li>-->
<!--		<li class="style1">-->
<!--			１０回分のコーディネート<br>-->
<!--			３回分お得な料金プラン<br>-->
<!--		    <br>-->
<!--		</li>-->
<!--		<li class="footer1"><a href="#" class="cp_btn">BUY</a></li>-->
<!--	</ul>-->
<!--	</div>-->
<!--</div>-->



<div class="related-products">
	<link rel="stylesheet" type="text/css" href="{{ secure_asset('css/u_price.css') }}">
			<h1 class="title text-center">Choose your plan</h1>
			<div class="row">
				<div class="col-lg-4 col-md-8">
					<div class="card card-product">
						<div class="card-header card-header-image">
								<img class="img" src="/priceimg/balancing-1868051_1280.jpg">
							<div class="card-body">
								<h1 class="course-title">
									1 Coordinate	
								</h1>
								<div class="course-description">
									<h3>一度きりのコーディネート<br>
									スタンダードの料金プラン</h3>
								</div>
							</div>
								<div class="price">
									<button type="button"  title="" class="button">
										<h2 class="material-icons">$5.00</h2>
									</button>
								</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-8">
					<div class="card card-product">
						<div class="card-header card-header-image">
								<img class="img" src="/priceimg/people-2563491_1280.jpg">
							<div class="card-body">
								<h1 class="course-title">
									5 Coordinates	
								</h1>
								<div class="course-description">
									<h3>５回分のコーディネート<br>
									１回分お得なの料金プラン</h3>
								</div>
							</div>
								<div class="price">
									<button type="button"  title="" class="button">
										<h2 class="material-icons">$20.00</h2>
									</button>
								</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-8">
					<div class="card card-product">
						<div class="card-header card-header-image">
								<img class="img" src="/priceimg/paint-2985569_1280.jpg">
							<div class="card-body">
								<h1 class="course-title">
									10 Coordinates	
								</h1>
								<div class="course-description">
									<h3>１０回分のコーディネート<br>
									３回分お得な料金プラン</h3>
								</div>
							</div>
								<div class="price">
									<button type="button"  title="" class="button">
										<h2 class="material-icons">$35.00</h2>
									</button>
								</div>
						</div>
					</div>
				</div>
			</div>

</div>


@endsection