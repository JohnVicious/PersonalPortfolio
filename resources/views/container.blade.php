<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Resume Website</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
		<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
		
    </head>
    <body class="bg-light pb-5">

	<!-- Scripts -->
	<script src="{{ asset('/js/app.js') }}"></script>
	
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom shadow">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto text-md font-weight-bold">
				<li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
					<a class="nav-link mx-3" href="{{ url('/') }}">Home</a>
				</li>
				<li class="nav-item {{ Request::is('aboutMe') ? 'active' : '' }}">
					<a class="nav-link mx-3" href="{{ url('/aboutMe') }}">About Me</a>
				</li>
				<li class="nav-item {{ Request::is('portfolio') ? 'active' : '' }}">
					<a class="nav-link mx-3" href="{{ url('/portfolio') }}">Portfolio</a>
				</li>	     
			</ul>
		</div>
	</nav>

	@yield('content')


    </body>
    <footer>	
	<div class="navbar fixed-bottom bg-white">
	<div class='text-muted'>
		Built from the ground up using the Laravel Framework 6.17 & Bootstrap 4 | Copyright - John Klein - {{ date('Y') }} | <a href="https://github.com/JohnVicious/PersonalPortfolio">GitHub</a>
	</div>	
	</div>
    </footer>
</html>
