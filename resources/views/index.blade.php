@extends('container')

@section('content')

<main role="main">
	<div class="jumbotron border-bottom shadow-sm">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h1 class="text-center">John Klein - Full Stack Developer</h1>
					<hr class="w-75" />
					<p class="text-md indent">{{ $aboutMeText }}</p>
				</div>			
				<div class="col-md-4">
					<div class="text-center">
						<img src="{{ asset('assets/JohnKlein.jpg') }}" class="rounded-circle border-bottom shadow" alt="Profile picture for John Klein."/>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container pb-4">
		<div class="row">
			<div class="col-md-12">
				<h2>Education</h2>
				<br/>
				@foreach($educations as $education)

					<div>
						<p class="text-md m-0"><strong>{{ $education['degree'] }}</strong></p>
						<p class="text-md ">{{ $education['location'] }} <i>({{ $education['year'] }})</i></p>
					<div>
				
					@if(!$loop->last)
						<hr/>
					@endif
				
				@endforeach
			</div>
		</div>
	</div>
</main>

@endsection
