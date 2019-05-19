<div id="templatemo_content_right">
        	<div class="templatemo_product_box">
            	@foreach($user as $users)
            <div class="col-md-4" style="float: left; width: 233.65px;"><br><br>    
                <img src="/uploads/books/{{$books->Image}}" style="height:100px;width: 95px; float: left;"><br>
                {{$users->}} <br>
                {{$books->Author_Name}} <br>

                <a href="/book/details/{{$books->id}}" class="btn btn-primary">Detail</a> <br> <br> 
            </div> 
            @endforeach
            </div> 

                
        </div> 