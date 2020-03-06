@extends('container')

@section('content')

<main role="main">
	<div class="container mt-4">
		@foreach($aboutSections as $title => $content)
      		<div class="row">
			<div class="col-md-12 mb-3">
				<h2>{{ $title }}</h2>	

				@switch($title)
					@case('Education')
						<ul>	
						@break;
					@default						
						<ul class="sideBySide">
				@endswitch

						@foreach($content as $cont)
							<li>{!! $cont !!}</li>
						@endforeach
						
						</ul>			
													
					<hr class="mt-4"/>

				@if($loop->last)
					<p class="indent denote"><i>* - *** : Denotes the amount of experience I have.</i></p>	
				@endif				
			</div>		
		</div>
		@endforeach
	</div>
</main>

@endsection
