<!--header-->
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Book Store Admin - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="{{URL::asset('vendor/fontawesome-free/css/all.min.css' )}}" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="{{URL::asset('vendor/datatables/dataTables.bootstrap4.css' )}} " rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{URL::asset('css/sb-admin.css' )}}" rel="stylesheet">

</head>

<body id="page-top">
<!--header end-->


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

    <a class="navbar-brand mr-1" href="index.html">Book Store</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    

       
      
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="/logout" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Logout
          
        </a>
      </li>
    </ul>

  </nav>
<!--nav end-->



<div id="wrapper">

<!-- Sidebar -->
<ul class="sidebar navbar-nav">
  <li class="nav-item">
    <a class="nav-link" href="index.html">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>
  

  <li class="nav-item">
      <a href="/book/create"  class="nav-link"><i class="fas fa-book "></i><span> Book Registration </span></a>
  </li> 



  <li class="nav-item">
    <a href="/book" class="nav-link"> <i class="fas fa-book"></i><span> Book </span></a>
  </li> 

  <li class="nav-item">
     <a href="/category/create" class="nav-link"> <i class="fas fa-file "></i><span>Category Registration</span></a>
  </li> 

  <li class="nav-item">
    <a href="/category" class="nav-link"> <i class="fas fa-file"></i> <span>Category</span></a>
  </li>

  <li class="nav-item active">
    <a href="/bookregister" class="nav-link"> <i class="fas fa-file"></i> <span>Book Register List</span></a>
  </li>

  <li class="nav-item">
    <a href="/user" class="nav-link"> <i class="fas fa-file"></i> <span>User Register List</span></a>
  </li>


  
</ul>

<div class="content mt-3">
    <div class="animated fadeIn">
			<div class="animated fadeIn">
        <div class="row">
          <div class="col-md-12">
          <div>
             <a class="btn btn-info"   href='orderreport '>Book Order Report</a>
          </div>

                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">book List</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">

                  

                    

                    <thead>
                      <tr>
                        <th>User Name</th>
                        <th>Book Name</th>
                        <th>Address</th>
						            <th>From Date</th>
						            <th>To Date</th>
					
						            <th>Approve</th>
						
                      </tr>
                    </thead>
                    <tbody>
					
					@foreach ($book as $books)
                      <tr>
                        <td>{{$books->name}}</td>
                          
                        <td>{{ $books->Book_Name }}</td>
						            <td>{{ $books->Address }}</td>
						            <td>{{ $books->From_Date}}</td>
						            <td>{{ $books->To_Date }}</td>
                                                    
                        
                        <td>                            
                            @if($books->status == 1)
                            <a class="span3 btn btn-info"  href='/bookregister/approve/{{$books->book_id}}/{{$books->user_id}}'>Approve</a></td>
                            
                            @endif
                            
                        </td>
						
					  </tr>
					  @endforeach

                    </tbody>

                   

                  </table>
                        </div>
                    </div>
				</div>
				
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->




</body>
</html>