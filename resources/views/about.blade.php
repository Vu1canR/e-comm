<!DOCTYPE html>
<html>
<head>
	<title>About page</title>
	<style>
		button{
    width: 45px;
    padding: 5px 0;
}


.is-active{
    color: lightgreen;
    border-bottom: 1px solid lightgreen;
}

#myi{
    height:30px;
    width: 50px;
    background-color:gold;
}

.header-wrapper{
    border: 1px solid black;
    width: fit-content;
}
ul{
    display: flex;
    margin: 150px;
    width: 60%;
}

ul>a{
    width: 100%;
    padding: 15px;
    border: 1px solid black;
    position: relative;
}
.dropdown{
	display: none;
	border: 1px solid black;
	background-color: aquamarine;
	color: gold;
}
ul>a:hover .dropdown{
	border: 1px solid black;
	display: block;
}
a div{
	position: absolute;
	
}

   
	</style>

</head>
<body>
<div id="app">
		<button disabled="true">Button is disabled</button>
		<!-- <products></products> -->
		<form action="/about" method="post">
		{{csrf_field()}}
			<input type="text" name="body">	
			<button type="submit">Submit</button>
		</form>
		
	
		
		
	<!-- <coupon @applied="isCouponApplied()"></coupon> -->
		
	<p title="My text"></p>

		<!-- <input type="text" v-model="mytext">
		<p>Your result @{{mytext}}</p> -->
		
		<!-- <input type="text" placeholder="search me"> -->
    <!-- <ul>
        <a href="#"><li>one</li></a>
        <div class="dropdown">
            <p>Some info</p>
        </div>
        <a href="#"><li>two</li></a>
        <div class="dropdown">
            <p><p>Some info</p></p>
        </div>
        <a href="#"><li>three</li></a>
        <a href="#"><li>four</li></a>
        <a href="#"><li>five</li></a>
    </ul> -->
		<!-- <label class="switch">
            <input type="checkbox" @change="status($event)" v-model="isChecked">
            
        </label>    -->
		
<!-- 		
	<tabs>
		<tab name="Time will come" :selected="true">
			<h1>Why its always difficult</h1>
		</tab>
	
	
		<tab name="Nevermind">
			<h1>They could've just</h1>
		</tab>
	
	
		<tab name="Something should be here">
			<h1>Things gonna be better</h1>
		</tab>
		<tab name="New staff here">
			<h1>Be be be be</h1>
		</tab>
	</tabs> -->
		
	<p v-for="x in 2" v-text="total += 2"></p>
</div>

<!-- // let darkness = 1;
// list_item.setAttribute('style', 'width:100px; height: 100px;')
// for(let i = 0; i < list_length; i++){
//   list_item[i].style.background = 'rgba(0,0,0,' + darkness + ')'
//   darkness -= (1 / list_length)
// } -->

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="{{asset('js/test.js')}}"></script>
<script>



</script>

</body>
</html>

