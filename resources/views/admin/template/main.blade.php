<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Default') | Panel de Administración</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/sweet/sweetalert.css') }}">
</head>
<body>
	@include('admin.template.partials.nav') 

	<section>
		
		@yield('content', '<h1>Template</h1>')
	</section>

	<footer>

	</footer>


{{-- -o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o- -S C R I P T- -o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o-o --}}
	<script src="{{ asset('plugins/jquery/jquery.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
	<script src="{{ asset('plugins/sweet/sweetalert-dev.js') }}"></script>
</body>
</html>
