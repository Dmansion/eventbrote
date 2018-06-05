<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Eventbrote</title>	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Eventbrote</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">

</head>
<body>
	@include('layouts.partials._nav')
	<div class="container">
		@if(session()->has('message.text'))
		<div class="alert alert-{{ session('message.type') }}">{{ session('message.text') }}</div>
		@endif
		@yield('content')
	</div>
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="{{ asset('/js/larails.js') }}"></script>
	@include('flashy::message')
</body>
</html>