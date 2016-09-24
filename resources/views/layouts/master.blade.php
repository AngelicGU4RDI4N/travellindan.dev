<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="/assets/img/vu-logo.png" type="favicon/ico" />
	<title>Travellin' Dan</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/custom.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

	@yield('bottom-head')

</head>
<body>

	@include('partials.navbar')

	<div class="container">
		@if (session()->has('ERROR_MESSAGE'))
		    <div class="alert alert-danger">{{ session('ERROR_MESSAGE') }}</div>
	   	@endif
		@if (session()->has('SUCCESS_MESSAGE'))
		    <div class="alert alert-success">{{ session('SUCCESS_MESSAGE') }}</div>
		@endif
	</div>

	@yield('content')

	@include('partials.footer')


	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	
	@yield('bottom-scripts')
	
</body>
</html>