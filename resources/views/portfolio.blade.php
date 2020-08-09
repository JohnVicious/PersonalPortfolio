@extends('container')

@section('page_description')

    {{ "John Klein's portfolio of personal projects implemented. All code hosted on github in either public or private repositories." }}
	
@endsection

@section('page_keywords')

    {{ "John,Klein,Developer,Portfolio,Personal" }}
	
@endsection

@section('page_title')

    {{ "Projects Portfolio" }}
	
@endsection

@section('content')

<main role="main">
	
	<div class="container mt-4">
		<div class="col-md-12">
			<h1>Project Portfolio</h1>
			<hr />
		</div>
	</div>

	<div class="container mt-4">
		<div class="row">

			@foreach($projects as $project)

			<div class="col-md-4 mb-4 card-container">
				<div class="card border-bottom shadow">
					<img src="{{ asset('/assets/projectScreenshots/' . $project['snapshot']) }}" style="max-height:200px;" class="card-img-top" alt="Project snapshot">
					<div class="card-body border-top">
						<p class="card-text indent">{{ $project['description'] }}</p>
						<button type="button" class="btn btn-outline-dark" onclick="window.location='{{ url($project['url']) }}'">View Project</button>
						
						@if(isset($project['github']) && !is_null($project['github']))
							
						<button type="button" class="btn btn-outline-dark ml-1" onclick="window.location='{{ $project['github'] }}'">Github</button>	

						@endif
					</div>
				</div>
			</div>

			@endforeach
			
		</div>

	</div>
</main>

@endsection
