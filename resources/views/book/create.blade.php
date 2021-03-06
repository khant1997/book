



<!DOCTYPE html>
<html>
<head>
    
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="{{URL::asset('vendor/fontawesome-free/css/all.min.css' )}}" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="{{URL::asset('vendor/datatables/dataTables.bootstrap4.css' )}} " rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{URL::asset('css/sb-admin.css' )}}" rel="stylesheet">



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Book Item</title>@section('title')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
</head>
<body>
@stop


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Start Bootstrap</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    

       
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>



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



<div class="content mt-3"><!-- div class=row content start -->
    <div class="animated fadeIn"><!-- div class=FadeIn start -->
        <div class="card"><!-- card start -->
        
            <div class="card-header"><!-- card-header start -->
           <strong  class="row justify-content-center"><h2> Book Item  </h2></strong>
            </div><!-- card-header end -->
    
            <div class="card-body">  <!-- card-body start -->


            <form action="/book/store" method="post" enctype="multipart/form-data">

                <input type="hidden" name="_token" value="<?php echo csrf_token();?>" >
                        <div class="row"><!-- div class=row One start -->

                            <div class="col-md-4"><!-- div class=col One start -->
                                Book Name<br>
                                <input class="form-control" type='text' name='Book_Name' />
                            </div><!-- div class=col  One end -->
                            

                            <div class="col-md-4">
                                Author Name<br>
                                <input class="form-control" type='text' name='Author_Name' />
                            </div><!-- div class=col  One end -->
                            

                            <div class="col-md-4"><!-- div class=col 12 One start -->
                                Release Date<br>
                                <input class="form-control" type='date' name='Date'/>
                            </div><!-- div class=col 12 One end -->

                        


                            <div class="col-md-4">
                                Summary<br>
                                <input class="form-control" type='text' name='Summary'/>
                            </div>


                            <div class="col-md-4">
                                Book Category<br>
                                <select class="form-control" name="Category_id" id="Category_id">
                                    <option value="" selected disabled>Select Book Category</option> 
                                    @foreach($categorys as  $category)       
                                    <option value="{{$category->id}}">{{$category->Category_Name}}</option>
                                    @endforeach
                              
                                </select>
                                <br>
                            </div>

                            <div class="col-md-4"><!-- div class=col 12 One start -->
                                Price<br>
                                <input class="form-control" type='text' name='Price' />
                            </div><!-- div class=col 12 One end -->

                            <div class="col-md-4">
                                Image<br>
                                
                                <input  name="Image" type="file" >
                            
                            </div>

                            

                            <div class="col-md-4"><!-- div class=col 12 One start -->
                                Pdf Name<br>
                                <input  name='Pdf_Name'  type='file'/>
                            </div><!-- div class=col 12 One end -->

                            <div class="col-md-4">
                                Status<br>
                                <select class="form-control" name="status" id="status">
                                    <option value="" selected disabled>Select Status</option>        
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                                <br>
                            </div>



                            </div><!-- div class=row One end -->

                            <div class="row"><!-- div class=row One start -->

                            <div class="col-md-8">
                            </div>

                            <div class="col-md-2">
                                <input class="form-control btn btn-primary" type='submit' value="Save" />
                            </div>

                            <div class="col-md-2">
                                <a href="/book" class="form-control btn btn-secondary">Cancel</a>
                            </div>

                        </div><!-- div class=row One end -->
                    
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>











