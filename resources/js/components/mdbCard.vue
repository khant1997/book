<template>
	<mdb-card>
		<mdb-view hover>
			<mdb-card-image :src="imagePath" alt="Card image cap"></mdb-card-image>
			<!-- <mdb-mask flex-center waves overlay="white-slight"></mdb-mask> -->
		</mdb-view>
		<div class="text-right position-absolute" style="top: 8.5em; right: 0">
			<a :href="'/book/details/' + books.id">
				<el-button type="info" icon="el-icon-arrow-right" circle class="mr-3" style="padding: 7px; box-shadow: 0 5px 11px 0 rgba(0,0,0,.18), 0 4px 15px 0 rgba(0,0,0,.15);"></el-button>
			</a>
		</div>
		<mdb-card-body class="mt-2">
			<mdb-card-title>{{ books.Book_Name }}</mdb-card-title>
			<hr />
			<p class="font-small mb-0" style="color: #697581">{{ books.Author_Name }}</p>
			<!-- <a class="text-dark d-flex justify-content-start">
				<a :href="'/book/details/' + books.id" style="font-size: 13px">Read more <mdb-icon icon="angle-double-right" class="pl-1" /></a>
			</a> -->
		</mdb-card-body>
		<!-- <mdb-card-footer color="mdb-color" class="lighten-3 p-0 text-center">
			<ul class="list-unstyled list-inline font-small mt-3">
				<li class="list-inline-item pr-2 white-text">
					<mdb-icon far icon="clock" class="pr-1" />05/10/2015</li>
				<li class="list-inline-item pr-2"><a href="#" class="white-text">
					<mdb-icon far icon="comments" class="pr-1" />12</a></li>
				<li class="list-inline-item pr-2"><a href="#" class="white-text">
					<mdb-icon fab icon="facebook" class="pr-1" />21</a></li>
				<li class="list-inline-item"><a href="#" class="white-text">
					<mdb-icon fab icon="twitter" class="pr-1" />5</a></li>
			</ul>
		</mdb-card-footer> -->
	</mdb-card>
	
</template>

<script>
	import { mdbContainer, mdbRow, mdbCol, mdbCard, mdbCardImage, mdbCardHeader, mdbCardBody, mdbCardTitle, mdbCardText, mdbCardFooter, mdbCardUp, mdbCardAvatar, mdbCardGroup, mdbBtn, mdbView, mdbMask, mdbIcon } from 'mdbvue';

	export default {
		props: ['books'],
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
		},
		data() {
			return {
				imagePath: '/uploads/books/' + this.books.Image
			}
		},
		mounted() {
			// console.log(this.books)
		}
	}
</script>