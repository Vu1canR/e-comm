<template>
	<div class="top-sells">
		<div v-for="product in products" :key="product.id" class="product-div">
			<a ref="productLink" :href="'/p/'+ product.store_code + '-' + product.name.replace(/ /g,'-').toLowerCase()" style="text-decoration:none; color:black;">
				<div class="pro-image">
					<img class="item-photo" images :src="'/images/' + product.sub_category_id + '/' + product.images.split('|')[0]">
				</div>
				<div class="pro-name">{{product.name}}</div>
				<div class="price">{{product.price}}TJS</div>
				<div class="to-cart"><button><i class="fas fa-shopping-cart"></i></button></div>
			</a>
		</div>
	</div>
</template>
<script>
export default {
	props:{
		products: {}
	},
	data() {
		return {
			
		};
	},
	methods: {
		inConsole(){
			console.log(this.products)
		}
	},
};
</script>
