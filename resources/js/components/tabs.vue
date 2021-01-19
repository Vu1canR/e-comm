<template>
	<div>
		<ul class="asrc">
			<li v-for="(tab, index) in tabs" :key="index" :class="{'is-selected': tab.isSelected}" :id="tab.name.toLowerCase()">
				<a :href="'#'+tab.name.toLowerCase()" @click="selectTab(tab)">{{tab.name}}</a>
			</li>
		</ul>
		<slot></slot>
	</div>
</template>
<script>
export default {
	props:{
		// uri: ''
	},
	data() {
    	return {
			tabs: [],
		};
  	},
  	created(){
    	this.tabs = this.$children
    // console.log(this.$children)
  	},
  	methods: {
    	selectTab(selected){
      	this.tabs.forEach(tab => {
        	tab.isSelected = (tab.name == selected.name) 
      		})  
      	}
    },
};
</script>
