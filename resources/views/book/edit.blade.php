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
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
    
</head>

<body>

<div class="content mt-3"><!-- div class=row content start -->
    <div class="animated fadeIn"><!-- div class=FadeIn start -->
        <div class="card"><!-- card start -->

            <div class="card-header"><!-- card-header start -->
                <strong class="card-title">Book Edit</strong>
            </div><!-- card-header end -->
    
            <div class="card-body">  <!-- card-body start -->

			<form action="/book/update/<?php echo $books[0]->id; ?>" method="post">
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
                            <input class="form-control" type='text' name='Image' value = '<?php echo
	$books[0]->Image; ?>' />
                        </div>

                        <div class="col-md-4"><!-- div class=col 12 One start -->
                                Pdf Name<br>
                            <input class="form-control" type='text' name='Pdf_Name' value = '<?php echo
	$books[0]->Pdf_Name; ?>' />
                        </div><!-- div class=col 12 One end -->



                    <div class="col-md-4">
                        Status<br>
                        <select class="form-control" name="status" id="status">
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
