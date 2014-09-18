<!doctype html>
<html>
<head>
	@include('includes.head')
</head>
<body>
	@include('includes.header')

	<div class="wrapper">
		@yield('content')
    </div>
    <!--/.wrapper-->

	@include('includes.footer')
</body>
</html>
