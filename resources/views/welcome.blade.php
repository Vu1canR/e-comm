<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/home-page.css" type="text/css"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Cuprum|Fira+Sans+Extra+Condensed&display=swap" rel="stylesheet">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>x-kom.tj - Магазин компьютеров</title>

</head>
<body>
<!-- <div id="app" @click="hideSearchBar($event)"> -->
<div id="app">

@include('nav')
	<div class="main-body">
		<hr width="80%">
		<div class="slideshow-container">

		<div class="mySlides fade">
		<div class="numbertext">1 / 3</div>
		<img src="{{asset('images/1.jpg')}}" height="550" style="width:100%">
		
		</div>

		<div class="mySlides fade">
		<div class="numbertext">2 / 3</div>
		<img src="{{asset('images/2.jpg')}}" height="550" style="width:100%">
		
		</div>

		<div class="mySlides fade">
		<div class="numbertext">3 / 3</div>
		<img src="{{asset('images/3.jpg')}}" height="550" style="width:100%">
		</div>

		<a class="prev" onclick="plusSlides(-1)"><i class="fas fa-chevron-left"></i></a>
		<a class="next" onclick="plusSlides(1)"><i class="fas fa-chevron-right"></i></a>

		</div>
		<br>

		<div style="text-align:center">
		<span class="dot" onclick="currentSlide(1)"></span> 
		<span class="dot" onclick="currentSlide(2)"></span> 
		<span class="dot" onclick="currentSlide(3)"></span> 
		</div>
		<br>
		
		<!-- <div class="interesting">
			<p>Maybe interesting for you</p>
		</div>
		<div class="top-month">
			<p>Top selling this month</p>
		</div> -->
		<p>Bestsellers</p>
		<bestsellers :products="{{$products}}"></bestsellers>
		<hr style="background-color: lightgray;">
		<br>
		<div class="row">
			<div class="product">
				<div class="product-photo-div">
					<img class="product-photo" src="{{asset('images\New folder\GoPro Hero7 Black Special kit\pr_2019_11_13_10_31_10_821_00.jpg')}}">
				</div>
				<div class="product-name">Samsung Galaxy S12</div>
				<div class="product-price">1111 TJS</div>
			</div>
			<div class="product">
				<div class="product-photo-div">
					<img class="product-photo" src="{{asset('images\New folder\GoPro Hero7 Black Special kit\pr_2019_11_13_10_31_10_821_00.jpg')}}">
				</div>
				<div class="product-name">Samsung Galaxy S12</div>
				<div class="product-price">1111 TJS</div>
			</div>
			<div class="product">
				<div class="product-photo-div">
					<img class="product-photo" src="{{asset('images\New folder\GoPro Hero7 Black Special kit\pr_2019_11_13_10_31_10_821_00.jpg')}}">
				</div>
				<div class="product-name">Samsung Galaxy S12</div>
				<div class="product-price">1111 TJS</div>
			</div>
			<div class="product">
				<div class="product-photo-div">
					<img class="product-photo" src="{{asset('images\New folder\GoPro Hero7 Black Special kit\pr_2019_11_13_10_31_10_821_00.jpg')}}">
				</div>
				<div class="product-name">Samsung Galaxy S12</div>
				<div class="product-price">1111 TJS</div>
			</div>
			<div class="product">
				<div class="product-photo-div">
					<img class="product-photo" src="{{asset('images\New folder\GoPro Hero7 Black Special kit\pr_2019_11_13_10_31_10_821_00.jpg')}}">
				</div>
				<div class="product-name">Samsung Galaxy S12</div>
				<div class="product-price">1111 TJS</div>
			</div>
			
		</div>
		<div class="row">
			<div class="product">one</div>
			<div class="product">two</div>
			<div class="product">three</div>
			<div class="product">four</div>
			<div class="product">five</div>
		</div>	
		<div class="history">
			<div>
				<img class="history-photo" src="{{asset('images\New folder\GoPro Hero7 Black Special kit\pr_2019_11_13_10_31_10_821_00.jpg')}}">
			</div>
			<div>
				<img class="history-photo" src="{{asset('images\New folder\GoPro Hero7 Black Special kit\pr_2019_11_13_10_31_18_444_03.jpg')}}">
			</div>
			<div>
				<img class="history-photo" src="{{asset('images\New folder\GoPro Hero7 Black Special kit\pr_2019_11_13_10_31_10_821_00.jpg')}}">
			</div>
			<div>
				<img class="history-photo" src="{{asset('images\New folder\GoPro Hero7 Black Special kit\pr_2019_11_13_10_31_18_444_03.jpg')}}">
			</div>
			
			
			<button class="h-prev"><i class="fas fa-angle-right"></i></button>
		
			<button class="h-next" id="next"><i class="fas fa-angle-left"></i></button>
		</div>
		
	</div>

	@include('footer')
</div>
@include('scripts')


<!-- -------------------------------Script---------------------------------------------->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

var class_array = ['search','search-extended', 'search-result', 'searchButton', 'search-input']

function extend(className){
$(document).ready(function(){
  $("body").click(function(event){
	  	console.log(className.parent())
		// if(class_array.includes(event.target.className)){
		// 	console.log(event.target.className + ' Yes')
		// }
		// else{
		// 	console.log(event.target.className + ' No');
		// }
    
  });
});
}

function extend(){
$(document).ready(function(){
  $("body").click(function(event){
		// if(class_array.includes(event.target.className)){
		// 	console.log(event.target.className + ' Yes')
		// }
		// else{
		// 	console.log(event.target.className + ' No');
		// }
    
  });
});
}


</script>

</body>
</html>
