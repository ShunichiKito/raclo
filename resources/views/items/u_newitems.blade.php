
<link rel="stylesheet" type="text/css" href="{{ secure_asset('css/u_newitems.css') }}">

@if (Auth::check())
    
    @foreach ($items as $key => $item)
    
        <div class='row col-md-4 col-sm-4 col-xs-8'>
            <div class='panel-heading text-center'>
                <img src="{{ $item->file_path }}" alt="" class="cloths_image">
                <div class='panel panel-body text-center'>
                    {{ Form::checkbox('newitem[]',"$item->file_path", false) }}
                </div>
            </div>
        </div>    
    @endforeach
        <div class="form-group">
            {!! Form::label('How Many Coordinates with New Items?') !!} <br>
            {{Form::select('newitems_conumber', ['1'=>'1','5'=>'5','10'=>'10','15'=>'15','20'=>'20','25'=>'25','30'=>'30','35'=>'35','40'=>'40','45'=>'45','50'=>'50'], 'how many coordinates?' )}}
        </div>
        
@endif


