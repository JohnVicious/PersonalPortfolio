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

				@if($title == 'Work Experience')

					@foreach($content as $experience)

						<ul>
							<p class="text-md m-0"><strong>{{ $experience['company'] }}</strong> : {{ $experience['startDate'] }} - {{ ($experience['endDate'] == '' ? 'Present' : $experience['endDate']) }}<span class="text-sm"> ({{ $experience['timeWorked'] }})</span></p>
							<p class="text-md ">{{ $experience['title'] }}</p>						
							<p class="text-md m-0">{{ $experience['description'] }}</p>	

						@if(!$loop->last)
							<hr/>
						@endif
						
						</ul>

					@endforeach

				@else

					@if($title == 'Publications')
						<ul>
						@foreach($content as $cont)
							<li class="mb-4">{!! $cont !!}</li>
						@endforeach
					
					@else
						<ul class="sideBySide">
						@foreach($content as $cont)
							<li>{!! $cont !!}</li>
						@endforeach
						
					@endif

					</ul>			
											
				@endif		

				<hr class="mt-4"/>			
			</div>		
		</div>
		@endforeach
	</div>
</main>

@endsection
