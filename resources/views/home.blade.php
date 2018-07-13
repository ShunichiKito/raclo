<?php
$user = \Auth::user()->id;
     
if (\Auth::user()->user_type == 1){ ?>


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    @if (Auth::check())
                        login siteru
                        <a href="/logout">logout</a>
                    @endif    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

    @include('users.u_home')
        
<?php } elseif(\Auth::user()->user_type == 2)  { ?>
    @include('stylists.s_home')
       
<?php  } else{ 
    return redirect('/');
}
             
?>
<a href="/logout"> Logout </a>
