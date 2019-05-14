<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <script type="text/javascript">
        function GetDays(){
                var dropdt = new Date(document.getElementById("drop_date").value);
                var pickdt = new Date(document.getElementById("pick_date").value);
                return parseInt(((dropdt - pickdt) / (24 * 3600 * 1000)))*{{ $book-> Price}};
        }

        function cal(){
        if(document.getElementById("drop_date")){
            document.getElementById("numdays2").value=GetDays();
        }  
    }

    </script>
</head>
<body>

<style>

table {
  border: 1px solid grey;
  border-top:10px solid #ddd;
}

</style>

<div class="content mt-3"><!-- div class=row content start -->
    <div class="animated fadeIn"><!-- div class=FadeIn start -->
        <div class="card"><!-- card start -->

            <div class="card-header"><!-- card-header start -->
            <strong  class="row justify-content-center"><h3> Book Rental Registration </h3></strong>
            </div><!-- card-header end -->
    
            <div class="col-5 mx-auto text-center"> <!-- card-body start -->
           
	        <form action="/bookregister/store" method="post">
           
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
             
            <table class= "table"> 
                

                <tr>
                    <td><label> Book Name: </label> </td>
                    <td> {{ $book->id}}{{$book->Book_Name}}</td>                    
                </tr>

                <tr>
                    <td><label>Pdf_Name: </label> </td>
                    <td> {{ $book-> Pdf_Name}} </td>
                
                </tr>

                <tr>
                    <td><label>Price per Day: </label> </td>
                    <td> {{ $book-> Price}} </td>
                </tr>

                <tr>
                    <td><label> User Address: </label></td>
                    <td>
                    <input type='hidden'  class="form-control" name='Pdf_Name' value={{$book->Pdf_Name}} />

                    <input type='hidden'  class="form-control" name='id' value={{$book->id}} />
                    <input type='hidden'  class="form-control" name='Price' value={{$book->Price}} />

                    <input type='text'  class="form-control" name='Address' /></td>
                </tr>

                <tr>               

                <td><label class="form">Pickup Date:</label></td>
                <td><input type="date" class="textbox" id="pick_date" name="pickup_date" onchange="cal()"></td>
                </tr>

                <tr>
                <td><label class="form">Dropoff Date:</label></td>
                <td><input type="date" class="textbox" id="drop_date" name="dropoff_date" onchange="cal()"/></td>
                </tr>

                <tr>
                <td><label class="form">Total Price:</label></td>
                <td><input readonly type="text" class="textbox" id="numdays2" name="numdays"/></td>
                </tr>


                

                

                <tr>
                    <td></td>
                    <td>
                    <input type="submit" class="span3 btn btn-info" value="Rent">  
                    <a href="book/details/{id}" class="span3 btn btn-secondary">Cancel</a>
                    </td>    
                </tr>
                
            </table>
        
    </form>
    
</div>

</div>
</div>
</div>



</body>
</html>




               

                        

				

                