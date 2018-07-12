<nav class="navbar navbar-default">
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
        <li>{!! link_to_route('u_stylist_lists', 'Stylists') !!}</li>
        <li><a href="#">Online Stylists</a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class='glyphicon glyphicon-cog'></span></a>
          <ul class="dropdown-menu">
            <li>{!! link_to_route('users.edit', 'プロフィール編集', ['id' => Auth::user()->id]) !!}</li>
            <li>{!! link_to_route('u_price', 'Price', ['id' => Auth::user()->id]) !!}</li>
            <li><a href="#">Notification</a></li>
            <li>{!! link_to_route('u_privacy', 'Privacy and Security')!!}</li>
            <li><a href="/logout">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
