<?php
use App\User
?>

<div class="row">
    @if (Auth::check())
            @foreach ($items as $key => $item)
                <div class="item">
                    <div class="col-lg-12">
                        <div class="panel-body">
                            <div class='container'>
                               <h1></h1>
                               <div class="panel panel-default">
                                   <div class="panel-heading">
                                       <img src="{{ $item->file_path }}" alt="" class="">
                                   </div>
                                   <div class="panel-body"><?php print $item->user_name ?></div>
                                   <?php $user = User::where('users.name', $item->user_name)->first(); ?>  
                                   <div class="panel-body"><?php print $user->style ?></div>
                                   <div class="panel-footer">パネルフッター</div>
                                </div>
                            </div>
                        </div>    
                          <!--<input type="ボタンにする" name="item" value="$item" id="item" />-->
                    </div>
                </div>
            @endforeach
    @endif    
</div>