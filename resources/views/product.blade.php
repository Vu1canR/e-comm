<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/css/product.css" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Cuprum|Fira+Sans+Extra+Condensed&display=swap" rel="stylesheet">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>x-kom.tj - Магазин компьютеров</title>

<head>
<body>
<div id="app">
    @include('nav')
    <br>
        <product :product_array="{{$product_object}}" :comments="{{$comments}}"></product>
    <br><br>
    @include('footer')
</div>




@include('scripts')
    

</body>



</html>
