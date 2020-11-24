<template>
<span ref="dd">{{text}}</span>
</template>
<script>
export default {
	props:{
		name: {required: true}
	},
	data() {
		return {
			text: this.name
		};
	},

	created(){
		// this.clicked = this.editing
		
	}

};
</script>
