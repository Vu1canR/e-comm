<!DOCTYPE html>
<html>

<head>
	<title>Product dashboard</title>
	<link rel="stylesheet" type="text/css" href="/css/add.css">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
	<style>

				
	</style>
</head>

<body>

<div id="app">
	<add-product :categories="{{$categories}}" :products_object="{{$products}}"></add-product>

	@if ($errors->any())
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif
	@if(session()->has('message'))
    <div class="alert alert-success">
		<ul>
			<li>{{ session()->get('message') }}</li>
		</ul>
    </div>
	@endif
</div>


	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</body>


</html>