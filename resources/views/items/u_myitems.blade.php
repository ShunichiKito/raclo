
<div class="row">
    @if (Auth::check())
         {!! Form::open(['route' => ['newitems.selected']]) !!}
            @foreach ($items as $key => $item)
                <div class="item">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center">
                                <img src="{{ $item->file_path }}" alt="" class="">
                            </div>
                            <div class="panel-body">
                                {{ Form::checkbox('item[]',"$item->file_path", false) }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        <div class="form-group">
            {!! Form::label('How Many Coordinates?') !!} <br>
            {{Form::select('myitems_conumber', ['1'=>'1','5'=>'5','10'=>'10','15'=>'15','20'=>'20','25'=>'25','30'=>'30','35'=>'35','40'=>'40','45'=>'45','50'=>'50'], 'how many coordinates?' )}}
        </div>
        <input type="submit" name="itemSubmit" value="保存" />
        {!! Form::close() !!}
    @endif    
</div>

