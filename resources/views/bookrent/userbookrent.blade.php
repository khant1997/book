<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <tr>
      <th>User Name</th>
      <th>Book Name</th>
      <th>From Date</th>
      <th>To Date</th>
      <th>Action</th>

    </tr>
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
      <td><input type="button" value="Can't Read"></td>
      @else
      <td><a href="/uploads/pdf/{{$list->Pdf_Name}}"><input type="button" value=" Read"> </a></td>
      @endif
     
    <?php

       }
    ?>

    @endforeach
    </tr>
</table>
</body>
</html>