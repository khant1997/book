<template>
	<div>
		<div class="container contact-section">
			<h2 class="text-center my-5">
				<strong style="border-bottom: 4px solid #FF7052">Contact Us</strong>
			</h2>
		</div>

		<!-- Google Map -->
		<google-map />

		<div class="container">
			<div class="row contact">
				<div class="col-md-6" style="margin-bottom: 100px;">
					<div class="demo">
    
            
            	
            	
				<div id="templatemo_content" class="container">
		        <el-card class="box-card my-2">
		            <div class="row">
		                <div class="col-3 border-right">
		                    <div class="category-card mt-3">
		                        <h3 style="color: rgb(226, 63, 13);"><i class="fas fa-phone"></i>   Call Us</h3>
		                        
		                        <div class="text item mb-1">
		                           09 444 864 401 <br>
		                           Monday -Friday: 8AM -5 PM
		                           Saturday -Sunday: Closed
		                        </div>
		                        
		                    </div>
		                </div>
		                <div class="col-9">
		                    
		                    <div class="d-flex flex-row" style="flex-wrap: wrap">
		                       
		                        <div>
		                            
		                            <div class="p-3" style="height: 200px">
		                                <h3><i class="fas fa-envelope-open"></i> Email Us</h3>
		                                <div class="text item mb-1">
				                           hmk@gmail.com <br>
				                           Monday -Friday: 8AM -5 PM <br>
				                           Saturday -Sunday: Closed
				                        </div>
		                            </div> 
		                        </div>
		                       
		                        <div>
		                            
		                            <div class="p-3" style="height: 200px">
		                                <h3><i class="far fa-address-card"></i> Address</h3>
		                                <div class="text item mb-1">
				                           -Tarmwae Township <br>
				                           -MyintTarNyunt 
				                           
				                        </div>
		                            </div> 
		                        </div>
		                        
		                        
		                    </div>

		                    
		                </div>
		            </div>
		        </el-card>
		    </div>
            
</div>
				</div>
				<div class="col-md-6">
					<form role="form" class="contact-form">
		    			<div class="row">
		    				<div class="col-xs-6 col-sm-6 col-md-6">
		    					<div class="form-group">
		    						<label>YOUR NAME</label>
		                			<input type="text" class="custom-input form-control">
		    					</div>
		    				</div>
		    				<div class="col-xs-6 col-sm-6 col-md-6">
		    					<div class="form-group">
		    						<label>YOUR EMAIL</label>
		    						<input type="text" class="custom-input form-control">
		    					</div>
		    				</div>
		    			</div>
		    			<div class="row">
		    				<div class="col-md-12">
		    					<label>YOUR MESSAGE</label>
		    					<div>
		    						<textarea class="custom-textarea"></textarea>
		    					</div>
		    				</div>
		    			</div>
		    			
		    			<button class="btn contact-btn">SEND MESSAGE</button>
		    		</form>
				</div>
			</div>
		</div>

		<div class="footer">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-6 col-sm-6 col-xs-6 col-12">
						<p class="mb-0 text-white"> &copy; Copyright 2019 . All Rights Reserved.</p>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6 col-12">
						<ul class="list-inline social-icon">
							<li class="list-inline-item"><i class="fab fa-twitter"></i></li>
							<li class="list-inline-item"><i class="fab fa-facebook-f"></i></li>
							<li class="list-inline-item"><i class="fab fa-skype"></i></li>
							<li class="list-inline-item"><i class="fab fa-behance"></i></li>
							<li class="list-inline-item"><i class="fab fa-linkedin-in"></i></li>
						</ul>
					</div>
				</div>
			</div>
		</div>	
	</div>
</template>

<script>
	// import about from "./components/about.vue"
	import GoogleMap from "./GoogleMap.vue";
	export default {
	  components: {
	    GoogleMap
	  }
	};
</script>