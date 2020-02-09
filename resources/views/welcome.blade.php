<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/home-page.css" type="text/css"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Cuprum|Fira+Sans+Extra+Condensed&display=swap" rel="stylesheet">
	<title>x-kom.tj - Магазин компьютеров</title>
	<style>
		.searchResized{
	border-radius: 10px 70px 0 0;
	height: 42px;
	background-color: white;
	width: 457px; 
	margin-top: 5px;
	border: 1px solid rgba(0, 0, 0, 0.2);
}

	</style>
</head>
<body style="background-color: white">
<div class="header">
	<div class="menu-bar">
		<div class="logo">
			<a href="https://www.google.com/"><img src="{{asset('images/logo-color-tagline.svg')}}" id="logo" width="262" height="42"></a>
		</div>
		<div class="wrap">
		   <div class="search" id="search">
		      <input type="text" class="search-input" onfocus="searchResize()" placeholder="Search...">
		     <!--  <div class="cat-div">
		      	<button class="cat-drdown"></button>
		      	<i class="fa fa-caret-down" aria-hidden="true"></i>
		      </div> -->
		      
		      <button type="submit"  class="searchButton">
		        <i class="fa fa-search"></i>
		     </button>
		   </div>

		</div>

			<div class="contacts">
			   <ul>
			   	<li>
			   		<i class="fa fa-phone-alt" aria-hidden="true"></i>
			   		<a href="#">919 29 30 73</a></li>
			   	<li>
			   		<i class="fas fa-at" aria-hidden="true"></i>
			   		<a href="#"> Email us</a></li>
			   	<li>
			   		<i class="fa fa-map-marker" aria-hidden="true"></i>
			   		<a href="#">Location</a></li>
			   </ul>
			</div>

		<div class="header-right">
			
			<div class="auth">
				<div class="icon user-icon">
					<i class="fa fa-user-plus" aria-hidden="true"></i>
				</div>
					<div class="auth-text text">Войти</div>
					@if (Auth::check())
						<div class="auth-text text">{{Auth::user()->name}}</div>
					@endif	
				<div class="dropdown-content">
					<a class="auth-button" href="/login">Войти</a>
					<a class="auth-button" href="/register">Регистрация</a> 
					@if (Auth::check())
						<a class="auth-button" href="">Выйти</a>
					@endif	
				</div>
			</div>
			<div class="header-wrapper"><a href="">
				<div class="icon shopping-cart">
					<i class="fa fa-shopping-cart"></i>
				</div>
				<div class="shopping-cart text">Корзина</div>
			</div></a>		
			
		</div>
	</div>

	
</div>
<br>
<hr>
<div class="wbody">
	<div class="navbar" id="navigation">
		<ul id="nav-ul">
			<li class="nav-list">
				<a href="">
					<i class="fa fa-laptop fa-2x" aria-hidden="false"></i>
					<span><span>Ноутбуки</span>и планшеты</span>
					<i class="fas fa-caret-down" aria-hidden="true"></i>
				</a>
				<div class="cat-drdown-div">
					<div>
						<div class="cat-inside">Категории в разделе:</div>
						<ul>
							<li><a href="#">фыва <i class="fa fa-caret-right fa-xs" aria-hidden="true"></i></a></li>
							<li><a href="#">фыва <i class="fa fa-caret-right fa-xs" aria-hidden="true"></i></a></li>
							<li><a href="#">фыва <i class="fa fa-caret-right fa-xs" aria-hidden="true"></i></a></li>
							<li><a href="#">фыва <i class="fa fa-caret-right fa-xs" aria-hidden="true"></i></a></li>
							<li><a href="#">фыва <i class="fa fa-caret-right fa-xs" aria-hidden="true"></i></a></li>
							<li><a href="#">фыва <i class="fa fa-caret-right fa-xs" aria-hidden="true"></i></a></li>
							
							
						</ul>
					</div>	
				</div>
			</li>
			<li class="nav-list">
				<a href="">
					<i class="fas fa-mobile-alt fa-2x" aria-hidden="true"></i>
					<span><span>Телефоны</span>и аксессуары</span>
					<i class="fas fa-caret-down" aria-hidden="true"></i>
				</a>
			</li>
			<li class="nav-list">
				<a href="">
					<i class="fa fa-desktop fa-2x" aria-hidden="true"></i>
					<span><span>Стационарные</span>компьютеры</span>
					<i class="fas fa-caret-down" aria-hidden="true"></i>
				</a>
			</li>
			<li class="nav-list">
				<a href="">
					<i class="far fa-hdd fa-2x" aria-hidden="true"></i>
					<span><span>Компьютерные</span>комплектующие</span>
					<i class="fas fa-caret-down" aria-hidden="true"></i>
				</a>
			</li>
			<li class="nav-list">
				<a href="">
					<i class="fas fa-print fa-2x" aria-hidden="true"></i>
					<span><span>Периферийные</span>устройства</span>
					<i class="fas fa-caret-down" aria-hidden="true"></i>
				</a>
			</li>
			<li class="nav-list">
				<a href="">
					<i class="fas fa-gamepad fa-2x" aria-hidden="true"></i>
					<span><span>Игры</span></span>
					<i class="fas fa-caret-down" aria-hidden="true"></i>
				</a>
			</li>
			<li class="nav-list">
				<a href="">
					<i class="fa fa-tv fa-2x" aria-hidden="true"></i>
					<span><span>Фото, ТВ</span>и аудио</span>
					<i class="fas fa-caret-down" aria-hidden="true"></i>
				</a>
			</li>
			<li class="nav-list">
				<a href="">
					<i class="fas fa-compact-disc fa-2x" aria-hidden="true"></i>
					<span><span>Программы</span></span>
					<i class="fas fa-caret-down" aria-hidden="true"></i>
				</a>
			</li>
			<li class="nav-list"><a href="">
					<i class="fas fa-headphones-alt fa-2x" aria-hidden="true"></i>
					<span><span>Аксессуары</span></span>
					<i class="fas fa-caret-down" aria-hidden="true"></i>
				</a>
			</li>
			
		</ul>	
	</div>

	

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
	  <div class="caption-text">Caption Three</div>
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
		
		
		<button class="h-prev">></button>
	
		<button class="h-next" id="next"><</button>
	</div>
	
</div>
<div class="footer">
		<ul>Покупка
			<li><a href="">Доставка</a></li>
			<li><a href="">Страхование оборудования</a></li>
			<li><a href="">Покупок в кредит</a></li>
			<li><a href="">Возвращения и жалобы</a></li>
			<li><a href="">Подарочные карты</a></li>
		</ul>
		<ul>Ваш аккаунт
			<li><a href="">Ваша корзина</a></li>
			<li><a href="">регистрация</a></li>
			<li><a href="">войти</a></li>
			<li><a href="">Редактирование данных</a></li>
			<li><a href="">Ваши заказы</a></li>
		</ul>
		<ul>x-kom
			<li><a href="">О нас</a></li>
			<li><a href="">Контакты и салоны</a></li>
			<li><a href="">Вакансии</a></li>
		</ul>
		<ul>У вас есть вопросы?
			<li><a href="">919293073</a></li>
			<li>пон. - пт.: 8:00 - 21:00</li>
			<li>субб. - воск.: 8:00 - 19:00</li>
		</ul>
	</div>
	
</div>
<br>



<!-- -------------------------------Script---------------------------------------------->

<script>
var colors = ['#1a1a1a', '#303030', '#464646', '#555555', '#666666', '#777777', '#808080', '#888888', '#999999'];
const container = document.getElementById('nav-ul');
const list_item = document.getElementsByClassName('nav-list');
const list_length = list_item.length;

	for(let i = 0; i < list_length; i++){
			
			list_item[i].style.background = colors[i];
				
		}


// let darkness = 1;
// list_item.setAttribute('style', 'width:100px; height: 100px;')
// for(let i = 0; i < list_length; i++){
//   list_item[i].style.background = 'rgba(0,0,0,' + darkness + ')'
//   darkness -= (1 / list_length)
// }
</script>
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
</script>
</body>
</html>

<!-- 768
1200 -->
<!-- <div class="navbar white elavation-1">
	<div class="container justify-content-space-between flex">
		<img src="{{asset('images/logo-color-tagline.svg')}}" id="logo" height="42" class="pa-4 pl-0" >	
		<input class="input" type="text" name="search" />
		<div class="buttons">Buttons</div>	
	</div>
</div>
<div class="container">
	content comes here
</div> -->