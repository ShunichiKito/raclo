<link rel="stylesheet" type="text/css" href="{{ secure_asset('css/u_navbar.css') }}">
<nav class="navbar navbar-inverse" >
<img src="{{secure_asset("logo_Raclo.PNG")}}" class="logo navbar-left">


  <div class="container-fluid">
    <div class="user-navstyle">
      <div class="navbar-header">
        <!-- hamburger button which shows narrow width -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- link back to the home -->
        <a class="navbar-brand" href="/home">My page</a>
      </div>
      <!-- menu items -->
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="u_stylist_lists">Stylists</a></li>
          <!--<li><a href="u_onlinestylist_lists">Online Stylists</a></li>-->
        </ul>
      <!--</div>-->
      <!--<div class="geer navbar-right">-->
      <div id="navbar" class="collapse navbar-collapse navbar-right">
        <ul class="nav navbar-nav">
          <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span></a>
            <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span></a>-->
            <ul class="dropdown-menu">
              <li>{!! link_to_route('users.edit', 'Change Profile', ['id' => Auth::user()->id]) !!}</li>
              <li>{!! link_to_route('u_price', 'Price') !!}</li>
              <li>{!! link_to_route('u_privacy', 'Privacy and Security') !!}</li>
              <li><a href="/logout">Logout</a></li>
            </ul>
          </li>
          </ul>
        </div>
      </div><!-- /.navbar-collapse -->
    </div>  
  <!-- /.container-fluid -->
</nav>