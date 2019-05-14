

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Book Rental</title>
<meta name="keywords" content="Book Store Template, Free CSS Template, CSS Website Layout, CSS, HTML" />
<meta name="description" content="Book Store Template, Free CSS Template, Download CSS Website" />
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="css/register.css" rel="stylesheet" type="text/css" />
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


<style>

html,body{
background-image: url('http://pngimg.com/uploads/book/book_PNG51082.png');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}
.card{
height: 650px;
margin-top: auto;
margin-bottom: auto;
width: 300px;
background-color: rgba(72, 97, 153, 0.575) !important;
}
</style>


</head>


<body>






<div class="container">
    <div class="d-flex justify-content-center h-100">
  


        <div class="card"><!-- card start -->

            <div class="card-header"><!-- card-header start -->
                <strong class="card-title">User Create</strong>
            </div><!-- card-header end -->
    
            <div class="card-body">  <!-- card-body start -->

                <form action="user/store" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                <div class="input-group form-group"><!-- div class=row One start -->

                    <div class="col-md-20"><!-- div class=col 12 One start -->
                        User Name<br>
                        <input class="form-control" type='text' name='name' required/>
                    </div><!-- div class=col 12 One end -->
                </div>  


                <div class="input-group form-group"><!-- div class=row One start -->
                    <div class="col-md-20">
                        User Email<br>
                        <input class="form-control" type='text' name='email' required/>
                    </div>
                </div>

                <div class="input-group form-group"><!-- div class=row One start -->

                    <div class="col-md-20">
                        User Address<br>
                        <input class="form-control" type='text' name='Address' required/>
                    </div>
                </div>

                <div class="input-group form-group"><!-- div class=row One start -->
                    <div class="col-md-20">
                        Phone<br>
                        <input class="form-control" type='text' name='Phone' required/>
                    </div>
                </div>



                <div class="input-group form-group"><!-- div class=row One start -->

                    <div class="col-md-20"><!-- div class=col 12 One start -->
                        User Password<br>
                        <input class="form-control" type='password' name='password' required/>
                    </div><!-- div class=col 12 One end -->
                </div><!-- div class=row One end -->

                   

                

                

                <div class="input-group form-group"><!-- div class=row One start -->

                    

                    <div class="col-md-8">
                        <input class="form-control btn btn-primary" type='submit' value="Save" />
                    </div>

                    <div class="col-md-8">
                        <a href="/user" class="form-control btn btn-secondary">Cancel</a>
                    </div>

                </div><!-- div class=row One end -->

                </form>
            </div> <!-- card-body end -->

        </div><!-- card end -->
    </div><!-- div class=FadeIn start -->
</div><!-- div class=row content end -->
</body>
</html>