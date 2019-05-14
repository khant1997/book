<template>
	<div>
	  <el-carousel height="90vh" direction="vertical" :autoplay="true">
	    <el-carousel-item class="banner-bg-1">
	      <div class="text-center arrow">
		      <a href="#templatemo_content">
		         <i class="fas fa-chevron-down fa-4x text-dark" aria-hidden="true" id="arrow"></i>
		      </a>
			  </div>
	    </el-carousel-item>
	    <el-carousel-item class="banner-bg-2">
			  <div class="text-center arrow">
		      <a href="#templatemo_content">
		         <i class="fas fa-chevron-down fa-4x text-dark" aria-hidden="true" id="arrow"></i>
		      </a>
			  </div>
	    </el-carousel-item>
	  </el-carousel>
	</div>
</template>

<style>
	.arrow {
		position: absolute;
		bottom: 0;
		left: 50%;
	}
	.arrow a {
		transition: all .2s ease-in-out;
	}
	#arrow {
		-webkit-animation: upAndDown 1.5s linear infinite;	
	}
	@-webkit-keyframes upAndDown {
	  0%, 50%, to {
	    -webkit-transform: translateZ(0);
	    transform: translateZ(0);
	  }

	  25% {
	    -webkit-transform: translate3d(0, -5px, 0);
	    transform: translate3d(0, -5px, 0);
	  }

	  75% {
	    -webkit-transform: translate3d(0, 5px, 0);
	    transform: translate3d(0, 5px, 0);
	  }
	}
	.banner-bg-1 {
		background: url("../../images/bg1.jpg");
		background-position: top;
    background-size: cover;
    background-repeat: no-repeat;
    /*background-attachment: fixed;*/
	}
	.banner-bg-2 {
		background: url("../../images/bg2.jpg");
		background-position: top;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
	}
  .el-carousel__item h3 {
    color: #475669;
    font-size: 14px;
    opacity: 0.75;
    line-height: 200px;
    margin: 0;
  }
  
  .el-carousel__item:nth-child(2n) {
    background-color: #99a9bf;
  }
  
  .el-carousel__item:nth-child(2n+1) {
    background-color: #d3dce6;
  }
</style>

<script>
	import bgImage from "../../images/bg1.jpg"

	export default {
		data() {
			return {
				image: bgImage,
			}
		},
		methods: {
			// getCategoryLists(page) {

			// 	axios.get('category')
			// 	.then(response => {
			// 		this.jobLists = response.data;
			// 		if (response.data.data.length == 0) {
			// 			this.noResult =  true
			// 		}
			// 		this.noResult = false;
			// 	})
			// 	.finally(() => this.loading = false)
			// },
		}
	}
</script>