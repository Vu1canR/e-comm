
	@extends ('nav')
	@section ('body')
	<br>
	<div class="cat-nav">x-kom>Компьютерные комплектующие></div>
	<br>
	<div class="main-body">
		<div class="main-filters">
			<div>
				Материнские платы
			 	<span>
				Материнские платы сокер ам4
				</span>
			</div>
			<div>
				<button>Show all filters</button>
				<input type="text" class="filter-search" placeholder="Search...">
			</div>	
			<section>
				<h1>Фильтры</h1>
				<span><button>reset</button></span>
				
			</section>	
			
			<section>
				<h2>Price</h2>
				<input type="text" name="from" class="price-range"> - <input type="text" name="to" class="price-range">

			</section>	
			<section>
				<h2>Vendor</h2>
				<span><button>reset</button></span>
				<label><input type="checkbox" name="checkbox">Asus</label>
				<label><input type="checkbox" name="checkbox">MSI</label>
				<label><input type="checkbox" name="checkbox">Gigabyte</label>
				<label><input type="checkbox" name="checkbox">Asrock</label>
			</section>
			<section>
				<h2>Format</h2>
				<span><button>reset</button></span>
				<label><input type="checkbox" name="checkbox">ATX</label>
				<label><input type="checkbox" name="checkbox">mATX</label>
				<label><input type="checkbox" name="checkbox">mITX</label>
				<label><input type="checkbox" name="checkbox">uATX</label>
				<label><input type="checkbox" name="checkbox">E-ATX</label>
			</section>	
				

			<section></section>	
			
		</div>
		<div class="products-list">
			<div class="filter-view">
				<div>
					<ul id="view-options">
						<li><i class="fas fa-th-large"></i></li>	
						<li><i class="fas fa fa-th-list"></i></li>
						<li><i class="fas fa-list"></i></li>
					</ul>
				</div>
				<div>
					<select id="sort-by" name="sort-by">
				      <option value="ascending">по возрастания</option>
				      <option value="descending">по убыванию</option>
				      <option value="popularity">по популярности</option>
				      <option value="a-z">название а-я</option>
				      <option value="z-a">название я-а</option>
				    </select>
				</div>
				<div>
					<button class="h-next" id="next"><</button>
					<input type="text" name="page" id="page" autocomplete="off">
					<button class="h-prev">></button>
				</div>
			</div>
			<div class="items-list">
				<div><img class="history-photo" src="{{asset('images\13-119-140-V07.jpg')}}">Asus X570 ROG</div>
				<div><img class="history-photo" src="{{asset('images\13-144-267-V01.jpg')}}"></div>
				<div><img class="history-photo" src="{{asset('images\13-157-843-V07.jpg')}}"></div>
				
			</div>

		</div>
	</div>
</div>
@endsection
