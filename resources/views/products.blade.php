<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/products.css" type="text/css"> 
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
		      <input type="text" class="search-input" placeholder="Search...">
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
				<div class="dropdown-content">
					<a class="auth-button" href="#">Войти</a>
					<a class="auth-button" href="#">Регистрация</a> 
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
	<br>
	<div class="cat-nav">x-kom>Компьютерные комплектующие></div>
	<br>
	<div class="main-body">
		<div class="main-filters"></div>
		<div class="products-list">
			<div class="filter-view">
			</div>
			<div class="items-list">
				<div><img class="history-photo" src="{{asset('images\13-119-140-V07.jpg')}}"></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
			</div>

		</div>
	</div>
</div>
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
</body>
</html>