@extends('container')

@section('page_description')

    {{ "John Klein's education, experience, and knowledge of development. Knowledge has been earmarked with level of skill for each." }}
	
@endsection

@section('page_keywords')

    {{ "About Me,John,Klein,Developer,Education,Work Skills,Languages,Frameworks" }}
	
@endsection

@section('page_title')

    {{ "About Me" }}
	
@endsection

@section('content')

<main role="main">
	<div class="container mt-4">
		@foreach($aboutSections as $title => $content)
      		<div class="row">
			<div class="col-md-12 mb-3">
				<h1>{{ $title }}</h1>	

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
