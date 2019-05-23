<template>
	<mdb-container class="mb-5">
		<h2 class="text-center my-5">
			<strong style="border-bottom: 4px solid #FF7052 "><span style="color: rgb(66, 184, 131);">About Us</span></strong>
		</h2>
		<mdb-row class="justify-content-center">
			<mdb-col sm="3">
				<mdb-card wide>
					<mdb-view hover cascade>
						<a href="#!">
							<mdb-card-image src="../../images/bg1.jpg" alt="Card image cap"></mdb-card-image>
							<mdb-mask flex-center waves overlay="white-slight"></mdb-mask>
						</a>
					</mdb-view>
					<mdb-card-body class="text-center" cascade>
						<mdb-card-title><strong>Hpone Moe Khant</strong></mdb-card-title>
						<h5>Web developer</h5>
						<mdb-card-text>I want to work as web developer.I am interested in web developing.</mdb-card-text>
						<mdb-btn tag="a" floating small class="btn-fb"><mdb-icon fab icon="facebook" /></mdb-btn>
						<mdb-btn tag="a" floating small class="btn-tw"><mdb-icon fab icon="twitter" /></mdb-btn>
						<mdb-btn tag="a" floating small class="btn-dribbble"><mdb-icon fab icon="dribbble" /></mdb-btn>
					</mdb-card-body>
				</mdb-card>
			</mdb-col>
			<mdb-col sm="3">
				<mdb-card wide>
					<mdb-view hover cascade>
						<a href="#!">
							<mdb-card-image src="https://mdbootstrap.com/img/Photos/Horizontal/People/6-col/img%20%283%29.jpg" alt="Card image cap"></mdb-card-image>
							<mdb-mask flex-center waves overlay="white-slight"></mdb-mask>
						</a>
					</mdb-view>
					<mdb-card-body class="text-center" cascade>
						<mdb-card-title><strong>Alice Mayer</strong></mdb-card-title>
						<h5>Web developer</h5>
						<mdb-card-text>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, ex, recusandae. mdbIconcere modi sunt, quod quibusdam.</mdb-card-text>
						<mdb-btn tag="a" floating small class="btn-fb"><mdb-icon fab icon="facebook" /></mdb-btn>
						<mdb-btn tag="a" floating small class="btn-tw"><mdb-icon fab icon="twitter" /></mdb-btn>
						<mdb-btn tag="a" floating small class="btn-dribbble"><mdb-icon fab icon="dribbble" /></mdb-btn>
					</mdb-card-body>
				</mdb-card>
			</mdb-col>
			<mdb-col sm="3">
				<mdb-card wide>
					<mdb-view hover cascade>
						<a href="#!">
							<mdb-card-image src="https://mdbootstrap.com/img/Photos/Others/photo6.jpg" alt="Card image cap"></mdb-card-image>
							<mdb-mask flex-center waves overlay="white-slight"></mdb-mask>
						</a>
					</mdb-view>
					<mdb-card-body class="text-center" cascade>
						<mdb-card-title><strong>Alison Belmont</strong></mdb-card-title>
						<h5>Web developer</h5>
						<mdb-card-text>Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</mdb-card-text>
						<mdb-btn tag="a" floating small class="btn-fb btn-floating"><mdb-icon fab icon="facebook" /></mdb-btn>
						<mdb-btn tag="a" floating small class="btn-tw"><mdb-icon fab icon="twitter" /></mdb-btn>
						<mdb-btn tag="a" floating small class="btn-dribbble"><mdb-icon fab icon="dribbble" /></mdb-btn>
					</mdb-card-body>
				</mdb-card>			
			</mdb-col>
		</mdb-row>
	</mdb-container>
</template>

<style lang="sass">
	.card.card-cascade
		height: 430px
	.btn-floating
		box-shadow: 0 5px 11px 0 rgba(0,0,0,.18), 0 4px 15px 0 rgba(0,0,0,.15)
		position: relative
		width: 18px
		z-index: 1
		vertical-align: middle
		transition: all .2s ease-in-out
		margin: 10px
		border-radius: 50%
		padding: 11px
		cursor: pointer
		i 
			width: inherit
			text-align: center
			color: #fff
		
	.btn-fb
		background-color: #3b5998!important
		color: #fff
	.btn-fb
		background-color: #55acee!important
		color: #fff
	.btn-dribbble
		background-color: #ec4a89!important
		color: #fff
</style>

<script>
	import { mdbContainer, mdbRow, mdbCol, mdbCard, mdbCardImage, mdbCardHeader, mdbCardBody, mdbCardTitle, mdbCardText, mdbCardFooter, mdbCardUp, mdbCardAvatar, mdbCardGroup, mdbBtn, mdbView, mdbMask, mdbIcon } from 'mdbvue';
	export default {
		name: 'CardProPage',
		components: {
			mdbContainer,
			mdbRow,
			mdbCol,
			mdbCard,
			mdbCardImage,
			mdbCardHeader,
			mdbCardBody,
			mdbCardTitle,
			mdbCardText,
			mdbCardFooter,
			mdbCardUp,
			mdbCardAvatar,
			mdbCardGroup,
			mdbBtn,
			mdbView,
			mdbMask,
			mdbIcon
		}
	}
</script>

