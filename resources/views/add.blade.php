<!DOCTYPE html>
<html>

<head>
	<title></title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<style>
		body{
			background-color: grey;
		}
		div {
			padding: 20px;
			width: 390px;
			box-sizing: border-box;
			margin: 0 auto;
			border: 1px solid slategrey;
			border-radius: 5px;
			margin-top: 20px;
		}

		input[type=text], select {
			width: 100%;
			margin: 10px 0;
			box-sizing: border-box;
			border-radius: 5px;
			border: none;
			box-shadow: 2px 2px rgba(120, 120, 120, 1);
			outline: none;
			padding: 10px 10px;
			border: 1px solid slategrey;
		}

		textarea{
			width: 100%;
		}

		button {
			background-color: #009800a3;
			outline: none;
			border: none;
			padding: 8px;
			width: 100%;
			cursor: pointer;
			border-radius: 5px;
			box-shadow: 2px 2px rgba(120, 120, 120, 1);
		}

		button:hover {
			color: white;
			background-color: #009800;
		}

		span {
			color: red;
			background-color: #009800;
		}
        textarea{
			outline: none;
			box-shadow: 2px 2px rgba(120, 120, 120, 1);
			border-radius: 5px;
		}
	</style>
</head>

<body>

<div id="app">
	<add-product :categories="{{ $categories }}"></add-product>
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
		<div>
		
		<!-- @if($errors->any())
			{!! implode('', $errors->all('<div>:message</div>')) !!}
		@endif -->
		</div>

	
	<!-- <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script type="text/javascript" src="{{ asset('js/add.js') }}"></script>	 -->
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</body>


</html>