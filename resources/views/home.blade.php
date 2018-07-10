<?php
$user = \Auth::user()->id;
        
if (\Auth::user()->user_type == 1){ ?>

            @include('users.u_home')
                <!--// return view('users.u_home', [-->
                <!--//     'user' => $user,-->
                <!--// ]);-->
            <?php } elseif(\Auth::user()->user_type == 2)  { ?>
            @include('stylists.s_home')
                <!--//   return view('stylists.s_home', [-->
                <!--//     'user' => $user,-->
                <!--// ]);-->
          <?php  } else{ 
                  
                     return redirect('/');
             }
             
?>
<a href="/logout"> Logout </a>