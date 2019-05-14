

  
  <div id="wrapper">

<!-- Sidebar -->
<ul class="sidebar navbar-nav">
  <li class="nav-item active">
    <a class="nav-link" href="index.html">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-fw fa-folder"></i>
      <span>Pages</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
      <h6 class="dropdown-header">Login Screens:</h6>
      <a class="dropdown-item" href="{{url('admin/login')}}">Login</a>
      <a class="dropdown-item" href="{{url('admin/register')}}">Register</a>
      <a class="dropdown-item" href="{{url('admin/forgot-password')}}">Forgot Password</a>
      <div class="dropdown-divider"></div>
      <h6 class="dropdown-header">Other Pages:</h6>
      <a class="dropdown-item" href="404.html">404 Page</a>
      <a class="dropdown-item" href="blank.html">Blank Page</a>
    </div>
  </li>

  <li class="nav-item">
      <a href="/book/create"  class="nav-link"><i class="fas fa-file "></i><span> Book Registration </span></a>
  </li> 



  <li class="nav-item">
    <a href="/book" class="nav-link"> <i class="fas fa-file"></i><span> Book </span></a>
  </li> 

  <li class="nav-item">
     <a href="/category/create" class="nav-link"> <i class="fas fa-file"></i><span>category Registration</span></a>
  </li> 

  <li class="nav-item">
    <a href="/category" class="nav-link"> <i class="fas fa-file"></i> <span>Category</span></a>
  </li>

  <li class="nav-item">
    <a href="/bookregister" class="nav-link"> <i class="fas fa-file"></i> <span>book Register List</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="charts.html">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Charts</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="tables.html">
      <i class="fas fa-fw fa-table"></i>
      <span>Tables</span></a>
  </li>
</ul>