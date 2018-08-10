
<link rel="stylesheet" type="text/css" href="{{ secure_asset('css/u_newitems.css') }}">

@if (Auth::check())
    
       <!--<div class="form-group">-->
       <!--     {!! Form::label('How Many Coordinates with New Items?') !!} -->
       <!--     {{Form::select('newitems_conumber', ['1'=>'1','5'=>'5','10'=>'10','15'=>'15','20'=>'20','25'=>'25','30'=>'30','35'=>'35','40'=>'40','45'=>'45','50'=>'50'], 'how many coordinates?' )}}-->
       <!-- </div>-->
    
    
    @foreach ($items as $key => $item)
    
    
        <div class='row col-md-3 col-sm-3 col-xs-4 panel-danger'>
            <div class='panel-heading text-center'>
                <img src="{{ 'storage/u_items/'.$item->file_path }}" alt="" class="cloths_image">
                <div class='panel panel-body text-center panel-danger'>
                    {{ Form::checkbox('newitem[]',"$item->file_path", false) }}
                </div>
            </div>
        </div>    
    @endforeach
     
        
@endif


