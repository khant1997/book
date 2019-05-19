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
      <a href="/book/create"  class="nav-link"><i class="fas fa-file "></i><span> Book Registration </span></a>
  </li> 



  <li class="nav-item">
    <a href="/book" class="nav-link"> <i class="fas fa-book"></i><span> Book </span></a>
  </li> 

  <li class="nav-item active">
     <a href="/category/create" class="nav-link"> <i class="fas fa-book"></i><span>category Registration</span></a>
  </li> 

  <li class="nav-item">
    <a href="/category" class="nav-link"> <i class="fas fa-file"></i> <span>Category</span></a>
  </li>

  <li class="nav-item">
    <a href="/bookregister" class="nav-link"> <i class="fas fa-file"></i> <span>Book Register List</span></a>
  </li>

  <li class="nav-item">
    <a href="/user" class="nav-link"> <i class="fas fa-file"></i> <span>User Register List</span></a>
  </li>

  
</ul>

<div class="content mt-3"><!-- div class=row content start -->
    <div class="animated fadeIn"><!-- div class=FadeIn start -->
        <div class="card"><!-- card start -->

            <div class="card-header"><!-- card-header start -->
                <strong class="card-title">Book Edit</strong>
            </div><!-- card-header end -->
    
            <div class="card-body">  <!-- card-body start -->

			<form action="/book/update/ <?php echo $books[0]->id; ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                <div class="row"><!-- div class=row One start -->

                    <div class="col-md-4"><!-- div class=col One start -->
                     Book Name<br>
                        <input class="form-control" type='text' name='Book_Name'value='<?php echo
	$books[0]->Book_Name; ?>' />
                     </div><!-- div class=col  One end -->
                            

                    <div class="col-md-4">
                        Author Name<br>
                        <input class="form-control" type='text' name='Author_Name'value='<?php echo
	$books[0]->Author_Name; ?>' />
                    </div><!-- div class=col  One end -->
                            

                    <div class="col-md-4"><!-- div class=col 12 One start -->
                        Release Date<br>
                        <input class="form-control" type='date' name='Date' value = '<?php echo
	$books[0]->Date; ?>' />
                    </div><!-- div class=col 12 One end -->

                        


                    <div class="col-md-4">
                        Summary<br>
                         <input class="form-control" type='text' name='Summary'value = '<?php echo
	$books[0]->Summary; ?>' />
                     </div>

                    
                     <div class="col-md-4">
                        Book Category<br>
                        <select class="form-control" name="Category_id" id="Category_id">
							<option value="" disabled>Select Category</option>        
							<option value="1" @if($books[0]->Category_id == 1) selected @endif>Comic</option>
							<option value="0" @if($books[0]->Category_id == 0) selected @endif>Horror</option>        
						</select>
                        <br>
                    </div>

                        <div class="col-md-4"><!-- div class=col 12 One start -->
                            Price<br>
                            <input class="form-control" type='text' name='Price' value = '<?php echo
	$books[0]->Price; ?>' />
                         </div><!-- div class=col 12 One end -->

                        <div class="col-md-4">
                            Image<br>
                            <input class="form-control" type='file' name='Image' value = '<?php echo
	$books[0]->Image; ?>' />
                        </div>

                        <div class="col-md-4"><!-- div class=col 12 One start -->
                                Pdf Name<br>
                            <input class="form-control" type='file' name='Pdf_Name' value = '<?php echo
	$books[0]->Pdf_Name; ?>' />
                        </div><!-- div class=col 12 One end -->



                    <div class="col-md-4">
                        Status<br>
                        <select class="form-control" name="b_status" id="b_status">
							<option value="" disabled>Select Status</option>        
							<option value="1" @if($books[0]->status == 1) selected @endif>Active</option>
							<option value="0" @if($books[0]->status == 0) selected @endif>Inactive</option>        
						</select>
                        <br>
                    </div>
                </div><!-- div class=row One end -->

                <div class="row"><!-- div class=row One start -->

                    <div class="col-md-8">
                    </div>

                    <div class="col-md-2">
                        <input class="form-control btn btn-primary" type='submit' value="Update" />
                    </div>


                    <div class="col-md-2">
                        <a href="/book" class="form-control btn btn-secondary">Cancel</a>
                    </div>

                </div><!-- div class=row One end -->

                </form>
            </div> <!-- card-body end -->

        </div><!-- card end -->
    </div><!-- div class=FadeIn start -->
</div><!-- div class=row content end -->









</body>
</html>
