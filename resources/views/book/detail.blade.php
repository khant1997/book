
<html>
<head>
<link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="main.js"></script>


    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Online Book Rental</title>
    <meta name="keywords" content="Book Store Template, Free CSS Template, CSS Website Layout, CSS, HTML" />
    <meta name="description" content="Book Store Template, Free CSS Template, Download CSS Website" />
    <link href="css/i.css" rel="stylesheet" type="text/css" />


<style>
.card-horizontal {
    display: flex;
    flex: 1 1 auto;
    border-top:10px;
 }


 
   
 
 
</style>
</head>

<body>
@extends('layouts.app')
@section('content')
<br>
<br>
<div id="templatemo_container">
<div class="container-fluid">
    <div class="row">
        <div class="col-12 mt-4">
            <div class="card">


            <div class="card-header"><!-- card-header start -->
           <strong  class="row justify-content-center"><h2> Book Details </h2></strong>
            </div><!-- card-header end -->


                <div class="card-horizontal">
                    <div class="col-6 mx-auto text-center">
                        <img class="" src= "/uploads/books/{{ $book->Image }}" alt="Card image cap">
                    </div>

                    <div class="card-body">
                        
                    
                    <table class="table table-borderless">
                    <tr>
                        <td> Book Name </td>
                        <td>{{ $book->Book_Name }}</td>
                    </tr>

                    <tr>
                        <td> Author Name </td>
                        <td>{{ $book-> Author_Name}}</td>
                    </tr>
                        
                       
                    <tr>
                        <td> Release Date </td>                                
                        <td>{{ $book->Date }}</td>
                    </tr>

                    <tr>
                        <td> Book Summary </td>
                        <td>{{ $book-> Summary}}</td>
                    </tr>

                    <tr>
                        <td> Price </td>            
                       <td>{{ $book-> Price}}</td>
                    </tr>

                    <tr>
                        <td> </td> 
                        <td>
                        <a class="span3 btn btn-secondary" href='/' value="Cancel" > Cancel </a>
                        
                        
                        <a class="span3 btn btn-info"  href='/bookregister/create/{{$book->id}}'>Rent </a>                       </td>
                    </tr>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>     


                         
  @endsection                              


</body>
</html>
