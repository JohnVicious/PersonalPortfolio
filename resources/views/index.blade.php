@extends('container')

@section('content')

<main role="main">
	<div class="jumbotron border-bottom shadow-sm">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h1 class="text-center">John Klein - B.S. Informatics</h1>
					<hr class="w-75" />
					<p class="text-md indent">{{ $aboutMeText }}</p>
				</div>			
				<div class="col-md-4">
					<div class="text-center">
						<img src="{{ asset('assets/JohnKlein.jpg') }}" class="rounded-circle border-bottom shadow" />
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container pb-4">
		<div class="row">
			<div class="col-md-12">
				<h2>Work Experience</h2>
				<br/>
				@foreach($experiences as $experience)

					<div>
						<p class="text-md m-0"><strong>{{ $experience['company'] }}</strong> : {{ $experience['startDate'] }} - {{ ($experience['endDate'] == '' ? 'Present' : $experience['endDate']) }}<span class="text-sm"> ({{ $experience['timeWorked'] }})</span></p>
						<p class="text-md ">{{ $experience['title'] }}</p>						
						<p class="text-md m-0">{{ $experience['description'] }}</p>	
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
