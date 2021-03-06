<!DOCTYPE html>
<html>

<head>
	<title></title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<style>
		div {
			padding: 20px;
			width: 390px;
			box-sizing: border-box;
			margin: 0 auto;
			border: 1px solid slategrey;
			border-radius: 5px;
			margin-top: 20px;
		}

		input[type=text] {
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
	</style>
</head>

<body>

	<div id="app">
		
		<form method="POST" action="/register" @submit.prevent="onSubmit()" @keydown="form.errors.clear($event.target.name)">
			{{csrf_field()}}

			<label for="name"><strong> Name</strong></label>
			<input type="text" name="name" id="name" autocomplete="on" v-model="form.name">
			<span v-text="form.errors.get('name')" v-if="form.errors.has('name')"></span>

			<label for="email"><strong> Email</strong></label>
			<input type="text" name="email" id="email" autocomplete="on" v-model="form.email">
			<span v-text="form.errors.get('email')" v-if="form.errors.has('email')"></span>
			<label for="password"><strong> Password</strong></label>
			<input type="text" name="password" id="password" placeholder="At least 6 characters" autocomplete="off" v-model="form.password">
			<span v-text="form.errors.get('password')" v-if="form.errors.has('password')"></span>
			<!-- <label for="password"><strong>Re-enter Password</strong></label>
			<input type="text" name="c_password" id="c_password" placeholder="At least 6 characters" autocomplete="off" v-model="form.c_password"> -->
			<button type="sumbit">Register</button>
			<p>By creating an account, you agree to X-com's Conditions of Use and Privacy Notice.</p>
			<hr width=80%>
			Already have an account? Sign-In

		</from>

		<!-- @if (count($errors))
			@foreach ($errors->all() as $error)
			<h1>{{ $error }}</h1>
			@endforeach
		@endif -->
	</div>
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<script type="text/javascript" src="{{ asset('js/register.js') }}"></script>
</body>

</html>