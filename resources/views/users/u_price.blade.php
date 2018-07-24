@extends('layouts.user_app')

@section('content')
    <!--<div class="row">-->
    <!--    <div class="col-lg-12">-->
    <!--         <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/u_price.css') }}">-->
    <!--    </div>-->
    <!--</div>-->

<!--	<h1 style="text-align:center;">自分の洋服だけでコーディネートしてもらうプラン</h1>-->
	
<!--<div class="cp_pricetable1">-->
<!--	<div class="block">-->
<!--	<ul>-->
<!--		<li class="header1"><strong>Legend</strong></li>-->
<!--		<li class="header2">¥500</li>-->
<!--		<li class="style1">-->
<!--			1セットのコーディネート<br>-->
<!--		    <br>-->
		
<!--			</div>-->
<!--		</li>-->
<!--		<li class="footer1"><a href="#" class="cp_btn">BUY</a></li>-->
<!--	</ul>-->
<!--	</div>-->
<!--</div>-->
<!--<div class="cp_pricetable2">-->
<!--	<div class="block">-->
<!--	<ul>-->
<!--		<li class="header1"><strong>Professional</strong></li>-->
<!--		<li class="header2">¥300</li>-->
<!--		<li class="style1">-->
<!--			1セットのコーディネート<br>-->
<!--		    <br>-->
<!--		</li>-->
<!--		<li class="footer1"><a href="#" class="cp_btn">BUY</a></li>-->
<!--	</ul>-->
<!--	</div>-->
<!--</div>-->

<!--<div class="cp_pricetable3">-->
<!--	<div class="block">-->
<!--	<ul>-->
<!--		<li class="header1"><strong>Amature</strong></li>-->
<!--		<li class="header2">¥150</li>-->
<!--		<li class="style1">-->
<!--			１セットのコーディネート<br>-->
<!--		    <br>-->
<!--		</li>-->
<!--		<li class="footer1"><a href="#" class="cp_btn">BUY</a></li>-->
<!--	</ul>-->
<!--	</div>-->
<!--</div>-->

<!--<div class="cp_pricetable4">-->
<!--	<div class="block">-->
<!--	<ul>-->
<!--		<li class="header1"><strong>Trial</strong></li>-->
<!--		<li class="header2">¥0</li>-->
<!--		<li class="style1">-->
<!--			１セットのコーディネート<br>-->
<!--			初めての方は無料体験が可能！<br>-->
<!--		    <br>-->
<!--		</li>-->
<!--		<li class="footer1"><a href="#" class="cp_btn">BUY</a></li>-->
<!--	</ul>-->
<!--	</div>-->
<!--</div>-->

<!--<br>-->

<!--<h1 style="text-align:center;">新しいアイテムを追加してコーディネートしてもらうプラン</h1>-->

<!--<div class="cp_pricetable1">-->
<!--	<div class="block">-->
<!--	<ul>-->
<!--		<li class="header1"><strong>Legend</strong></li>-->
<!--		<li class="header2">¥400</li>-->
<!--		<li class="style1">-->
<!--			1セットのコーディネート<br>-->
<!--		    <br>-->
		
<!--		</li>-->
<!--		<li class="footer1"><a href="#" class="cp_btn">BUY</a></li>-->
<!--	</ul>-->
<!--	</div>-->
<!--</div>-->

<!--<div class="cp_pricetable2">-->
<!--	<div class="block">-->
<!--	<ul>-->
<!--		<li class="header1"><strong>Professional</strong></li>-->
<!--		<li class="header2">¥200</li>-->
<!--		<li class="style1">-->
<!--			1セットのコーディネート<br>-->
<!--		    <br>-->
<!--		</li>-->
<!--		<li class="footer1"><a href="#" class="cp_btn">BUY</a></li>-->
<!--	</ul>-->
<!--	</div>-->
<!--</div>-->

<!--<div class="cp_pricetable3">-->
<!--	<div class="block">-->
<!--	<ul>-->
<!--		<li class="header1"><strong>Amature</strong></li>-->
<!--		<li class="header2">¥100</li>-->
<!--		<li class="style1">-->
<!--			１セットのコーディネート<br>-->
<!--		    <br>-->
<!--		</li>-->
<!--		<li class="footer1"><a href="#" class="cp_btn">BUY</a></li>-->
<!--	</ul>-->
<!--	</div>-->
<!--</div>-->

<!--<div class="cp_pricetable4">-->
<!--	<div class="block">-->
<!--	<ul>-->
<!--		<li class="header1"><strong>Trial</strong></li>-->
<!--		<li class="header2">¥0</li>-->
<!--		<li class="style1">-->
<!--			１セットのコーディネート<br>-->
<!--			初めての方は無料体験が可能！<br>-->
<!--		    <br>-->
<!--		</li>-->
<!--		<li class="footer1"><a href="#" class="cp_btn">BUY</a></li>-->
<!--	</ul>-->
<!--	</div>-->
<!--</div>-->




    <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/u_price.css') }}">
       <div class="background"> </div>


<div class="related-products">
    <!--<div class="title-call">-->
            <h1 class="title text-center" style="font-size:60px">Choose your plan</h1>
            <!--</div>-->
            		<h1 style="text-align:center;">自分の洋服だけでコーディネートしてもらうプラン</h1>
                
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
                
                <div class= "col-lg-12 col-ml-6">
            <h1 style="text-align:center" >新しいアイテムを追加してコーディネートしてもらうプラン</h1>
    </div>
                <div class="col-lg-4 col-md-8">
                    <div class="card card-product">
                        <div class="card-header card-header-image">
                                <img class="img" src="/priceimg/clothing-3221103_1280.jpg">
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
                                        <h2 class="material-icons">$3.00</h2>
                                    </button>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="card card-product">
                        <div class="card-header card-header-image">
                                <img class="img" src="/priceimg/fashion-918446_1280.jpg">
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
                                        <h2 class="material-icons">$12.00</h2>
                                    </button>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="card card-product">
                        <div class="card-header card-header-image">
                                <img class="img" src="/priceimg/interview-2211354_1280.jpg">
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
                                        <h2 class="material-icons">$21.00</h2>
                        
                                    </button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
       

@endsection


