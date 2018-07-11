<?php
$user = \Auth::user()->id;
     
if (\Auth::user()->user_type == 1){ ?>

    @include('users.u_home')
        
<?php } elseif(\Auth::user()->user_type == 2)  { ?>
    @include('stylists.s_home')
       
<?php  } else{ 
    return redirect('/');
}
             
?>
<a href="/logout"> Logout </a>