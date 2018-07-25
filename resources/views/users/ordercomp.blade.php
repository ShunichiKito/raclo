<?php
use App\User;
use App\Stylist_profile_image;
?>

@extends('layouts.user_app')

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>

@if (Auth::check())
@section('content')
    <div class="row">
        <aside class="col-xs-4">
            <div class="container col-lg-12">
                
            </div>
        </aside>
        
        <div class="col-xs-4">
            <div class="panel panel-default">
                <div class='panel-heading'>
                    image of stylist <br>
                    <img src="{{ '/no_image.png' }}" alt="" class="profile_image">
                </div>
                
                <div class="panel-body">
                    <div class="button">
                    <a href="{{ route('s_index') }}" class="btn btn-info" role="button">Choose Stylist</a>
                    </div>
                </div>
            </div>
           
       
        </div>
        
        <div class="col-xs-4">
            <div class="panel panel-default">
                <div class='panel-body'>
                    Stylist :
                    <br>
                    Rank :
                    <br>
                    My Items Coordinate: 5
                    <br>
                    New Items Coordinate: 3
                    <br>
                    Price : 
                </div>
            </div>
           <br>
           <br>
           <div class="button">
            <a href="{{ route('u_home') }}" class="btn btn-info" role="button" onclick='return confirm("Order Confirmed");'>Order Complete</a>
            </div>
        </div>
       
    </div>
            
            
@endif
@endsection

<style>
    
    .container col-lg-12 {
        overflow: scroll;
    }
    
    .button {
        position: absolute;
        margin-left: 100;
        margin-top: 30;
    }
    
    .row {
        font-family: "Abril-Fatface";
    }
    
    .navbar {
        font-family: "Abril-Fatface";
    }
    
    /*.profile-image {*/
    /*    position: absolute;*/
    /*    margin-left: 50;*/
    /*}*/
    
</style>