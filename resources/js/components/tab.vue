<template>
  <div class="tab-div" v-show="isSelected"> <slot></slot> </div>
</template>
<script>
export default {

  	props:{
  	  	name:{ required: true},
		selected: {	default: false}
  	},
  	data() {
    	return {
      		isSelected: false
		}
	},

	mounted(){
		this.isSelected = this.selected
	}
};
</script>
