<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Book Store Template, Free CSS Template, CSS Website Layout</title>
<meta name="keywords" content="Book Store Template, Free CSS Template, CSS Website Layout, CSS, HTML" />
<meta name="description" content="Book Store Template, Free CSS Template, Download CSS Website" />
<link href="/css/i.css" rel="stylesheet" type="text/css" />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<!--  Free CSS Templates from www.templatemo.com -->
<div id="templatemo_container">
    
     <div style="height: 40px; line-height: 30px;color: #969547;">
        <b style="font-size: 25px;">Book Store</b>
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        <b><a href="">
            <style type="">
            a{
                color: #969547;
            }
            b a:hover{
                color: #fcf88e;
                text-decoration: none;
            }
            </style>Login</a></b>&nbsp &nbsp <b>Register</b>
         
     </div>  
    
	<div id="templatemo_menu">
    	<ul>
            <li><a href="index.php" class="current">Home</a></li>
            <li><a href="#">Search</a></li>            
            <li><a href="#">About Us</a></li> 
            <li><a href="#">Contact Us</a></li>
    	</ul>
        
    </div> 
    <div class="profile">
        <!-- <img src="/images/p.png" style="height: 40px; border-radius: 20px;"> -->
       <div class="dropdown" >
            <button class="dropbtn"><img src="/images/p.png" style="height: 40px; "></button>
            <div class="dropdown-content" >
                <a href="#">Edit Profile</a>
                <a href="#">Logout</a>
            
            </div>
</div>
       
    </div>
    <!-- end of menu -->
    
    <div class="row">

        <div class="col-md-12 slider">

            <div class="w3-content w3-section" style="max-width:1000px;">
               <img class="mySlides" src="/images/s3.png" style="width:100%">
               <img class="mySlides" src="/images/s4.png" style="width:100%">
               <img class="mySlides" src="/images/s5.png" style="width:100%">
            </div>
            

            <script>
                var myIndex = 0;
                carousel();

                function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";  
                }
                  myIndex++;
                  if (myIndex > x.length) {myIndex = 1}    
                  x[myIndex-1].style.display = "block";  
                  setTimeout(carousel, 2000); // Change image every 2 seconds
                }
            </script>
        </div> 
    </div>
    <!-- end of header -->
    <div style="height: 10px;"></div>
    

    <div id="templatemo_content">
    	
        <div id="templatemo_content_left">
        	<div class="templatemo_content_left_section">
            	<h1>Categories</h1>
                @foreach($categories as $category)
                <br>     
               <a href="/category/books/{{$category->id}}"> {{$category->Category_Name}}</a>
                @endforeach
            </div>
			  <div class="templatemo_content_left_section">
            	<!-- <h1>Bestsellers</h1>
                <ul>
                    <li><a href="#">Vestibulum ullamcorper</a></li>
                    <li><a href="#">Maece nas metus</a></li>
                    <li><a href="#">In sed risus ac feli</a></li>
                    <li><a href="#">Praesent mattis varius</a></li>
                    <li><a href="#">Maece nas metus</a></li>
                    <li><a href="#">In sed risus ac feli</a></li>
                    <li><a href="http://www.flashmo.com" target="_parent">Flash Templates</a></li>
                    <li><a href="http://www.templatemo.com" target="_parent">CSS Templates</a></li>
                    <li><a href="http://www.webdesignmo.com" target="_parent">Web Design</a></li>
                    <li><a href="http://www.photovaco.com" target="_parent">Free Photos</a></li>
            	</ul> -->
            </div> 
            
            
			</div>
        </div> <!-- end of content left -->
        
        <div id="templatemo_content_right">
        	<div class="templatemo_product_box">
            	@foreach($book as $books)
            <div class="col-md-4" style="float: left; width: 233.65px;"><br><br>    
                <img src="/uploads/books/{{$books->Image}}" style="height:100px;width: 95px; float: left;"><br>
                {{$books->Book_Name}} <br>
                {{$books->Author_Name}} <br>

                <a href="/book/details/{{$books->id}}">Detail</a> <br> <br> 
            </div> 
            @endforeach
            </div> 

                
        </div> <!-- end of content -->
        
        
    </div> 
<!-- end of container -->
</body>
</html>