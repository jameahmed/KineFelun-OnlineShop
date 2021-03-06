<!DOCTYPE html>
<html>
<head>
	
	<title>@yield('pagetitle')</title>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>

	@yield('styles')
	@yield('scripts')

</head>
<body>
	
	@yield('header')
	@yield('menubar')

	@yield('content')
	

	@yield('footer')

</body>
</html>