<!DOCTYPE html>
<html lang="fr">

<head>
		<meta charset="UTF-8">
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<meta content="ie=edge" http-equiv="X-UA-Compatible">
		{{-- font awesome --}}
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
		<!-- Fonts -->
		<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
		<title>Document | @yield('title')</title>
		@vite('resources/css/app.css')
		{{-- font Oswald --}}
		<link href="https://fonts.googleapis.com" rel="preconnect">
		<link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
		<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
		<style>
				body {
						font-family: 'Oswald', sans-serif;
				}
		</style>
</head>

<body>
		<div class="bg-gray-100">
				@include('partials.navbar._nav')
				<div class="lg:px-32">
						@yield('content')
				</div>
				@include('partials.footer._footer')
		</div>
</body>

</html>
