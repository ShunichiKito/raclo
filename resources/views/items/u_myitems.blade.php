

<link rel="stylesheet" type="text/css" href="{{ secure_asset('css/u_myitems.css') }}">


@if (Auth::check())

<div class="form-group">
        {!! Form::label('How Many Coordinates from My Items?') !!} 
        {{Form::select('myitems_conumber', ['0'=>'0','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11','12'=>'12','13'=>'13','14'=>'14','15'=>'15'], 'how many coordinates?' )}}
</div>    
@foreach ($items as $key => $item)

<div class='row col-md-4 col-sm-4 col-xs-4 panel-info'>
    <div class='panel-heading text-center panel-myitem-heading'>
        <!--<img src="{{ 'storage/u_items/'.$item->file_path }}" alt="" class="cloths_image">-->
        <!--<div class='panel panel-body panel-info panel-myitem-body'>-->
        <!--{{ Form::checkbox('myitem[]',"$item->file_path", false)}}-->
        <!--</div>-->
        <label class="btn">
            <img src="{{ 'storage/u_items/'.$item->file_path }}" alt="..." class="cloths_image img-check">
            {{ Form::checkbox('myitem[]',"$item->file_path", false, ['class' => 'hidden']) }}
            <!--<input type="checkbox" name="myitem[]" value="$item->file_path" class="hidden" autocomplete="off">-->
        </label>
        <style>
            .check{
                opacity:0.25;
            	color: red;
            }
        </style>
    </div>
</div>    

@endforeach
    
   
@endif    
