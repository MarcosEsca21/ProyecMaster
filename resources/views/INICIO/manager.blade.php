<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>Bootstrap Example</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta name="_token" content="{{ csrf_token() }}">
	  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	  <link rel="stylesheet" href="assets/css/menu.css">
	  <script src="assets/jquery-3.2.1.js"></script>
	  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
	  
	</head>
	<body>
		{!! $view !!}
		{!! @view('MENU.modal'); !!}
	</body>
</html>