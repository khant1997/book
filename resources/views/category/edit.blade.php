<!DOCTYPE html>
<html>
<head>
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
                <strong class="card-title">Category Edit</strong>
            </div><!-- card-header end -->
    
            <div class="card-body">  <!-- card-body start -->

			<form action="/category/update/<?php echo $category[0]->id; ?>" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                <div class="row"><!-- div class=row One start -->

                    <div class="col-md-4"><!-- div class=col One start -->
                     Category Name<br>
                        <input class="form-control" type='text' name='Category_Name'value='<?php echo
	$category[0]->Category_Name; ?>' />
                     </div><!-- div class=col  One end -->
                            

                    <div class="col-md-4">
                        Description<br>
                        <input class="form-control" type='text' name='Description'value='<?php echo
	$category[0]->Description; ?>' />
                    </div><!-- div class=col  One end -->
                            


                

                    <div class="col-md-2">
                        <input class="form-control btn btn-primary" type='submit' value="Update" />
                    </div>

                    <div class="col-md-2">
                        <a href="/category" class="form-control btn btn-secondary">Cancel</a>
                    </div>

                </div><!-- div class=row One end -->

                </form>
            </div> <!-- card-body end -->

        </div><!-- card end -->
    </div><!-- div class=FadeIn start -->
</div><!-- div class=row content end -->









</body>
</html>
