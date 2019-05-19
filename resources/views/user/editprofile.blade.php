<html>
<head>
    

</head>

<body>

<form action="/user/update" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                <div class="row"><!-- div class=row One start -->
                   <input type ="hidden" name="user_id" value="<?php echo $users[0]->id; ?>">
                    <div class="col-md-4"><!-- div class=col One start -->
                     User Name<br>
                        <input class="form-control" type='text' name='name'value='<?php echo
	$users[0]->name; ?>' />
                     </div><!-- div class=col  One end -->
                            

                    <div class="col-md-4">
                        User Email<br>
                        <input class="form-control" type='text' name='email'value='<?php echo
	$users[0]->email; ?>' />
                    </div><!-- div class=col  One end -->

                    <div class="col-md-4"><!-- div class=col One start -->
                     User Address<br>
                        <input class="form-control" type='text' name='Address'value='<?php echo
	$users[0]->Address; ?>' />
                     </div><!-- div class=col  One end -->
                            
                    
                     <div class="col-md-4"><!-- div class=col One start -->
                     Phone<br>
                        <input class="form-control" type='text' name='Phone'value='<?php echo
	$users[0]->phone; ?>' />
                     </div><!-- div class=col  One end -->
                            
                    
                     <div class="col-md-4"><!-- div class=col One start -->
                    Old Password<br>
                        <input class="form-control" type='text' name='old_password'value=''>
                     </div><!-- div class=col  One end -->
                               
                    
                     <div class="col-md-4"><!-- div class=col One start -->
                    New Password<br>
                        <input class="form-control" type='text' name='new_password'value=''>
                     </div><!-- div class=col  One end -->
                            

                    
                            


                

                    <div class="col-md-2">
                        <input class="form-control btn btn-primary" type='submit' value="Update" />
                    </div>

                    <div class="col-md-2">
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
