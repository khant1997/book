

<div class="content mt-3"><!-- div class=row content start -->
    <div class="animated fadeIn"><!-- div class=FadeIn start -->
        <div class="card"><!-- card start -->

            <div class="card-header"><!-- card-header start -->
                <strong class="card-title">Category Edit</strong>
            </div><!-- card-header end -->
    
            <div class="card-body">  <!-- card-body start -->

			<form action="/user/update/<?php echo $obj[0]->id; ?>" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                <div class="row"><!-- div class=row One start -->

                    <div class="col-md-4"><!-- div class=col One start -->
                     User Name<br>
                        <input class="form-control" type='text' name='name'value='<?php echo
	$objs[0]->name; ?>' />
                     </div><!-- div class=col  One end -->
                            

                    <div class="col-md-4">
                        User Email<br>
                        <input class="form-control" type='text' name='email'value='<?php echo
	$objs[0]->email; ?>' />
                    </div><!-- div class=col  One end -->

                    <div class="col-md-4"><!-- div class=col One start -->
                     User Address<br>
                        <input class="form-control" type='text' name='Address'value='<?php echo
	$objs[0]->Address; ?>' />
                     </div><!-- div class=col  One end -->
                            
                    
                     <div class="col-md-4"><!-- div class=col One start -->
                     Phone<br>
                        <input class="form-control" type='text' name='Phone'value='<?php echo
	$objs[0]->Phone; ?>' />
                     </div><!-- div class=col  One end -->
                            
                    
                     <div class="col-md-4"><!-- div class=col One start -->
                     Phone<br>
                        <input class="form-control" type='text' name='password'value='<?php echo
	$objs[0]->password; ?>' />
                     </div><!-- div class=col  One end -->
                            

                    
                            


                

                    <div class="col-md-2">
                        <input class="form-control btn btn-primary" type='submit' value="Update" />
                    </div>

                    <div class="col-md-2">
                        <a href="/userP" class="form-control btn btn-secondary">Cancel</a>
                    </div>

                </div><!-- div class=row One end -->

                </form>
            </div> <!-- card-body end -->

        </div><!-- card end -->
    </div><!-- div class=FadeIn start -->
</div><!-- div class=row content end -->









</body>
</html>
