<!DOCTYPE html>
<html>
<head>
	<title>About page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12" style="background-color: grey">This is first</div>
		<div class="col-md-2" style="background-color: green"></div>
		<div class="col-md-2"></div>
	</div>
	<ul>
		@foreach($tasks as $task)
		<li>{{$task->body}}</li>
		@endforeach
	</ul>
</div>
</body>
</html>

