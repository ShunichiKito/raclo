


@extends('layouts.stylist_app')
@section('content')
    

    <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/s_price.css') }}">
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
                                    Amature    
                                </h1>
                                <div class="course-description">
                                    <h4>アマチュアクラスによるコーディネート<br>
                                    １セット分の料金プラン</h4>
                                </div>
                            </div>
                                <div class="price">
                                    <button type="button"  title="" class="button">
                                        <h2 class="material-icons">$1.50</h2>
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
                                    Professional  
                                </h1>
                                <div class="course-description">
                                    <h4>プロクラスによるコーディネート<br>
                                    １セット分の料金プラン</h4>
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
                                <img class="img" src="/priceimg/paint-2985569_1280.jpg">
                            <div class="card-body">
                                <h1 class="course-title">
                                   Legend   
                                </h1>
                                <div class="course-description">
                                   <h4>レジェンドクラスによるコーディネート<br>
                                    １セット分の料金プラン</h4>
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
                
                <div class= "col-lg-12 col-ml-6">
            <h1 style="text-align:center" >新しいアイテムを追加してコーディネートしてもらうプラン</h1>
    </div>
                <div class="col-lg-4 col-md-8">
                    <div class="card card-product">
                        <div class="card-header card-header-image">
                                <img class="img" src="/priceimg/clothing-3221103_1280.jpg">
                            <div class="card-body">
                                <h1 class="course-title">
                                    Amature    
                                </h1>
                                <div class="course-description">
                                    <h4>アマチュアランクによるコーディネート<br>
                                    １セット分の料金プラン</h4>
                                </div>
                            </div>
                                <div class="price">
                                    <button type="button"  title="" class="button">
                                        <h2 class="material-icons">$1.00</h2>
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
                                <h6 class="course-title">
                                    <br>
                                    <h1 class=fix-space>
                                    Professional    
                                    </h1>
                                </h6>
                                <div class="course-description">
                                    <h4>プロクラスによるコーディネート<br>
                                    １セット分の料金プラン</h4>
                                </div>
                            </div>
                                <div class="price">
                                    <button type="button"  title="" class="button">
                                        <h2 class="material-icons">$2.00</h2>
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
                                <h6 class="course-title">
                                    <br>
                                    <h1 class=fix-space>
                                    Legend    
                                    </h1>
                                </h6>
                                <div class="course-description">
                                    <h4>レジェンドクラスによるコーディネート<br>
                                   １セット分の料金プラン</h4>
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
            </div>
        </div>
    </div>
       


@endsection