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
					<h6 class=" mt-5 mb-4">PRODUCT DESIGN: EAMES CHAIRS</h6>
                    <p>
                    	Eames designs are certainly konic. Everyone of us know at least
                    	two to three of their famous chairs. I would even risk saying that most of us dream about having a nice Eames. 
                    </p>
                    <p>
                    	Lorem ipsum dolor sit amet, consectetur,<span class="text-dark"> adipisicing elit</span>, sed do eiusmod
                    	tempor incididunt ut labore et dolore magna aliqua.
                    </p>
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
						<p class="mb-0 text-white"> &copy; Copyright 2014 by PSD Booster. All Rights Reserved.</p>
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