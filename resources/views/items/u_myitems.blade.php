
<<<<<<< HEAD

<link rel="stylesheet" type="text/css" href="{{ secure_asset('css/u_myitems.css') }}">


@if (Auth::check())
{!! Form::open(['route' => ['myitems.selected']]) !!}
@foreach ($items as $key => $item)


<!--<div class="container">-->
<!--    <div class="row col-lg-12">-->
<!--        <div class="item">-->
            <!--<div class="panel panel-defaul">-->
<!--                <div class="panel panel-default">-->
<!--                    <div class="panel-heading">-->
<!--                        <img src="{{ $item->file_path }}" alt="" class="" height="100px" width="100px">-->
                    
<!--                    <div class="panel-body">-->
<!--                        {{ Form::checkbox('item[]',"$item->file_path", false) }}-->
                        <!--<input type="checkbox" name="$key" value="$item" id="item" />-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        <!--</div>-->
<!--    </div>-->
<!--</div>-->
<div class='row col-md-4 col-sm-4 col-xs-8'>
    <!--<div class='col-md-4 col-sm-4 col xs-8'>-->
        <!--<div class='panel'>-->
            <!--<div class='stylist-frame'>-->
            <!--<div class='stylist-images'>-->
                <div class='panel-heading text-center'>
                <img src="{{ $item->file_path }}" alt="" class="cloth_image">
                <div class='panel panel-body text-center'>
                    {{ Form::checkbox('item[]',"$item->file_path", false) }}
                </div>
                    <!--</div>-->

        <!--</div>-->
            
            <!--<div class='panel panel-body'>-->
                <!--<div class="table-responsive">-->
                   <!--<div class="panel-body">-->
                    <!--{{ Form::checkbox('item[]',"$item->file_path", false) }}-->
                <!--<input type="checkbox" name="$key" value="$item" id="item" /-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
    <!--</div>-->
</div>
             
@endforeach
@endif    

