<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-175021929-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-175021929-1');
		</script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="description" content="@yield('page_description','John Klein is a Full Stack Web Developer who graduated with a Bachelor of Science in Informatics at the University of Louisiana at Lafayette.')">
		<meta name="keywords" content="@yield('page_keywords','Resume Website,John,Klein,Full Stack,Web Developer,Personal Site')">

        <title>@yield('page_title','Resume Website')</title>

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
		Built from the ground up using the Laravel Framework 6.17 & Bootstrap 4 | Copyright - John Klein - {{ date('Y') }} | <a href="https://github.com/JohnVicious/PersonalPortfolio">GitHub</a> | <a href="https://www.linkedin.com/in/johnkleindeveloper/">LinkedIn</a>
	</div>	
	</div>
    </footer>
</html>
