<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <title>Book Rent List</title>
</head>
<body>
@extends('layouts.app')
@section('content')
<br>
<br>
  <div class = "container">
    
      <div class = "card">
        <div class ="card-header">
        <strong  class="row justify-content-center"><h3> Book Rent List </h3></strong>
        </div>
        
        <div class = "card-body">
         
          <table class="table table-dark table-hover table-bordered">
            <thead>
              <tr>
                <th scope = "col">User Name</th>
                <th scope = "col">Book Name</th>
                <th scope = "col">From Date</th>
                <th scope = "col">To Date</th>
                <th scope = "col">Action</th>

              </tr>
            </thead>
            <tbody>
              @foreach($books_list as $list)
              <?php
                $todaydate =  date('Y-m-d');
                if($todaydate <= $list->To_Date){
              ?>
              <tr>
                <td>{{$list->name}}</td>
                <td>{{$list->Book_Name}}</td>
                <td>{{$list->From_Date}}</td>
                <td>{{$list->To_Date}}</td>
                @if($list->status == 1)
                <td><input class= "btn btn-danger badge-pill" style="width:100px;" type="button" value="Can't Read"></td>
                @else
                <td><a href="/uploads/pdf/{{$list->Pdf_Name}}"><input class = "btn btn-primary badge-pill" style= "width:100px;" type="button" value=" Read"> </a></td>
                @endif
              
              <?php

                }
              ?>

              @endforeach
              </tr>
  </table>



        </div>
      </div>
    </div>
  </div>

  @endsection

</body>
</html>