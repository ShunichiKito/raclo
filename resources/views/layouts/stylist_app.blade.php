<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Raclo</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
        <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
        
        <!--<link rel="stylesheet" href="{{ secure_asset('css/stylist_list.css') }}">-->
        <link rel="stylesheet" href="{{ secure_asset('css/s_icon.css') }}">
        <style>
            body{
                font-family: "Abril-Fatface";
            }
        </style>

    </head>
    <body>
        @include('commons.stylist_navbar')

        @yield('cover')
        <div class="container">
            @include('commons.error_messages')
            @yield('content')
        </div>

        @include('commons.footer')
        
       
    </body>
    
    
</html>