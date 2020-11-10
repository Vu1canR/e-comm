<template>
<div class="cat-nav">
	<div class="navbar" id="navigation">
		<ul id="nav-ul">

			<li class="nav-list" v-for="(category,index) in my_array" :key="index" @mouseover="darkenBody()" @mouseleave="lightenBody()">
				<a class="cat-link" :href="'/c/' + category.name.replace(/ /g,'-').toLowerCase()">
				<i :class="icons[index]" aria-hidden="false"></i>
				<span v-if="index != 6"><span>{{category.name.split(" ")[0]}}</span>{{category.name.split(" ")[1]}} {{category.name.split(" ")[2]}}</span>
				<span v-else><span>{{category.name.split(" ")[0]}} {{category.name.split(" ")[1]}}</span> {{category.name.split(" ")[2]}} {{category.name.split(" ")[3]}}</span>
				<i class="fas fa-caret-down" aria-hidden="true"></i>
				</a>
				<div class="cat-drdown-div">
					<div>
						<div class="cat-inside">Categories:</div>
						<ul class="dd-ul">
							<li class="dd-list" v-for="subcategory in category.subcategories">
								<a :href="'/c-4/'+ subcategory.id + '-' +subcategory.name.replace(/ /g,'-').toLowerCase()">{{subcategory.name}}<i class="fas fa-angle-right" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>	
				</div>
			</li>
			<!-- <i class="fal fa-angle-right"></i> -->
			<!-- <li class="nav-list fx" @mouseover="darkenBody()" @mouseleave="lightenBody()">
				<a href="/c/laptops-and-tablets" class="cat-link">
					<i class="fa fa-laptop fa-2x" aria-hidden="false"></i>
					<span><span>Ноутбуки</span>и планшеты</span>
					<i class="fas fa-caret-down" aria-hidden="true"></i>
				</a>
				<div class="cat-drdown-div">
					<div>
						<div class="cat-inside">Категории в разделе:</div>
						<ul>
							<li><a href="#">Laptops/Notebooks/Ultrabooks<i class="fa fa-caret-right fa-xs" aria-hidden="true"></i></a></li>
							<li><a href="#">Tablets<i class="fa fa-caret-right fa-xs" aria-hidden="true"></i></a></li>
							<li><a href="#">2-in-1 laptops<i class="fa fa-caret-right fa-xs" aria-hidden="true"></i></a></li>
							<li><a href="#">Bags and cases<i class="fa fa-caret-right fa-xs" aria-hidden="true"></i></a></li>
							<li><a href="#">Laptop accessories<i class="fa fa-caret-right fa-xs" aria-hidden="true"></i></a></li>
						</ul>
					</div>	
				</div>
			</li> -->
						
			
		</ul>	
		
		<p v-bind="inConsole()"></p>
	</div>
</div>
</template>
<script>
export default {
	props:{

	},
	data() {
		return {
			hovered: false,
			icons: [
				"fa fa-laptop fa-2x",
				"fas fa-mobile-alt fa-2x",
				"fa fa-desktop fa-2x",
				"far fa-hdd fa-2x",
				"fas fa-desktop fa-2x",
				"fas fa-gamepad fa-2x",
				"fa fa-tv fa-2x",
				"fas fa-compact-disc fa-2x",
				"fas fa-headphones-alt fa-2x"
			],
			// categories: [
			// 	"Laptops and tablets",
			// 	"Smartphones and accessories",
			// 	"Desktops",
			// 	"Computer parts",
			// 	"Peripherals",
			// 	"Gaming",
			// 	"Photo TV and audio",
			// 	"Software",
			// 	"Accessories",
			// 	],
			my_array: [{"id":1,"name":"Laptops and tablets","subcategories":[{"id":4,"name":"Laptops\/Notebooks\/Ultrabooks","category_id":1},{"id":5,"name":"Tablets","category_id":1},{"id":6,"name":"2-in-1 laptops","category_id":1},{"id":9,"name":"Bags and cases","category_id":1},{"id":10,"name":"Laptop accessories","category_id":1}]},{"id":2,"name":"Smartphones and accessories","subcategories":[{"id":11,"name":"Smartphones and telephones","category_id":2},{"id":12,"name":"Smartwatches","category_id":2},{"id":13,"name":"Flash memory","category_id":2},{"id":14,"name":"Accessories","category_id":2}]},{"id":3,"name":"Desktops","subcategories":[{"id":15,"name":"Gaming PC","category_id":3},{"id":16,"name":"Office PC","category_id":3},{"id":17,"name":"Servers","category_id":3}]},{"id":4,"name":"Computer parts","subcategories":[{"id":1,"name":"Graphics card","category_id":4},{"id":2,"name":"Processor","category_id":4},{"id":3,"name":"Motherboard","category_id":4},{"id":18,"name":"RAM","category_id":4},{"id":19,"name":"CPU Cooler","category_id":4},{"id":20,"name":"Fans","category_id":4},{"id":21,"name":"HDD and SSD","category_id":4}]},{"id":5,"name":"Monitors","subcategories":[{"id":22,"name":"Full HD","category_id":5},{"id":23,"name":"Quad HD","category_id":5},{"id":24,"name":"Ultra HD","category_id":5}]},{"id":6,"name":"Gaming","subcategories":[{"id":7,"name":"Consoles","category_id":6},{"id":8,"name":"Console Games","category_id":6}]},{"id":7,"name":"Photo TV and audio","subcategories":[{"id":25,"name":"TVs","category_id":7},{"id":26,"name":"Projectors","category_id":7},{"id":27,"name":"Home theater","category_id":7}]},{"id":8,"name":"Software","subcategories":[]},{"id":9,"name":"Accessories","subcategories":[]}]
		};
	},
	methods: {
		inConsole(){
			
		},
		darkenBody(){
			setTimeout(() => {
				document.getElementById('app').className = 'darken', document.getElementsByClassName('auth')[0].className = 'auth-m' }, 600)
			// document.getElementById('app').className = 'darken';
			// document.getElementsByClassName('auth')[0].className = 'auth-m';
        },
		lightenBody(){
			// setTimeout(() => {
			// 	document.getElementById('app').className = '', document.getElementsByClassName('auth')[0].className = 'auth-m' }, 350)
			document.getElementById('app').className = '';
			document.getElementsByClassName('auth-m')[0].className = 'auth';
        },
	},
};
</script>
