@extends('layouts.app')
@section('content')
<div class="demo">
        <div class="content">
            <div id="large-header" class="large-header">
                <canvas id="demo-canvas"></canvas>
                    <form action="/user/update" method="post" class="auth-form">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label">User Name</label>

                                    <div class="col-md-4">
                                        <input type ="hidden" name="user_id" value="<?php echo $users[0]->id; ?>">
                                        <input class="form-control" type='text' name='name'value='<?php echo $users[0]->name; ?>' />

                                        
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label">User Email</label>

                                <div class="col-md-4">
                                    <input class="form-control" type='text' name='email'    value='<?php echo $users[0]->email; ?>' />

                                    
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label">User Address</label>

                                <div class="col-md-4">
                                    <input class="form-control" type='text' name='Address'value='<?php echo $users[0]->Address; ?>' />

                                    
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label">Phone</label>

                                <div class="col-md-4">
                                    <input class="form-control" type='text' name='Phone'value='<?php echo $users[0]->phone; ?>' />

                                   
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label">Old Password</label>

                                <div class="col-md-4">
                                    <input class="form-control" type='text' name='old_password'value=''>

                                    
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label">New Password</label>

                                <div class="col-md-4">
                                    <input class="form-control" type='text' name='new_password'value=''>

                                    
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2">
                                            <input class="form-control btn btn-primary" type='submit' value="Update" />

                                </div>

                                 <div class="col-md-2">
                                            <a href="/user" class="form-control btn btn-secondary">Cancel</a>
                                </div>
                            </div>
                            

                            
                           

                            
                    </form>
               
            </div>
        </div>
</div>

@endsection






