<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{route('admin.home')}}">MOH Name</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="{{route('admin.home')}}">list of Moh</a></li>
      <li ><a href="{{route('admin.createmoh')}}" class="nav navbar-nav navbar-right">Create Moh</a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Log Out</a></li>
    </ul>
  </div>
</nav>