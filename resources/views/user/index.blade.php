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
       
        <div class="card"><!-- card start -->
           

        <div class="row"><!-- div class=row Two start -->
            <div class="col-md-12"><!-- div class=col 12 One start -->
                <div class="card"><!-- card start -->

                    <div class="card-header"><!-- card-header start -->
                        <strong class="card-title">User List</strong>
                    </div><!-- card-header end -->
            
                    <div class="card-body">  <!-- card-body start -->
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                               
                                    <th>Address</th>
                                    <th>Phone</th>
                                                                   
                                    <th>Created at</th>
                                    <th>Action </th>
                                   
                                    
                                </tr>
                            </thead>
                            <tbody>

                            @foreach ($objs as $obj)
                                <tr>
                                <td>{{ $obj->name }}</td>
                                <td>{{ $obj->email }}</td>
                                
                                <td>{{ $obj->Address }}</td>
                                <td>{{ $obj->phone }}</td>
                               

                                <td>{{ $obj->created_at }}</td>
                                <td> <a href="/user/dectivate/{{$obj->id}}"><input type="button" class="span3 btn btn-info" value="Deactivate"></a> </td>
                               
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div> <!-- card-body end -->
                </div><!-- card end -->
            </div><!-- div class=col 12 Two end -->
        </div><!-- div class=row Two end -->

    </div><!-- .animated -->
</div><!-- .content -->


</div><!-- /#right-panel -->




