<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <!-- hamburger button which shows narrow width -->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- link back to the home -->
      <a class="navbar-brand" href="#">My page</a>
    </div>
    <!-- menu items -->
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="#">Requests</a></li>
        <li><a href="#">Workspace</a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span></a>
          <ul class="dropdown-menu">
            <!--<li><a href="#">Change Profile</a></li>-->
            <li>{!! link_to_route('users.edit', 'Change Profile', ['id' => Auth::user()->id]) !!}</li>
            <li>{!! link_to_route('s_price', 'Price') !!}</li>
            <li>{!! link_to_route('privacy', 'Privacy and Security') !!}</li>
            <li><a href="#">Notification</a></li>
            <li><a href="/logout">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
