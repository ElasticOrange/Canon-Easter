<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Admin Area</title>

		<link href="/css/app.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			@include('admin.layout.header')
			@yield('content')
		</div>
		@yield('js')
	</body>
</html>