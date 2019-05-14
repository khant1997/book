<html>
<head>



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
</head>
<body>

<div class="content mt-3">
            <div class="animated fadeIn">

				<div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
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