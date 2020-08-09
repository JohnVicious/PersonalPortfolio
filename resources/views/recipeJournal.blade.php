@extends('container')

@section('page_description')

    {{ "John Klein's Recipe Journal application made using VueNative and Expo. Android apk available for download and installation." }}
	
@endsection

@section('page_keywords')

    {{ "John,Klein,Developer,Recipe Journal, VueNative, Expo, Android, APK" }}
	
@endsection

@section('page_title')

    {{ "Recipe Journal" }}
	
@endsection

@section('content')

<main role="main">
	
	<div class="container mt-4">
		<div class="col-md-12">
			<h1>Recipe Journal</h1>
			<hr />
		</div>
	</div>

	<div class="container mt-4">
		<div class="row">
			<div class="col-md-12">
				<p class="text-md indent">One of the hardest things for me to do is to find something to cook at night. 
				My girlfriend and I had eventually decided to create a binder of all our favorite recipes to help eleviate the stress of making a meal decision. 
				The problem with this binder though was the information was all printed out, and since we needed it infront of us when cooking, the pages started getting covered in ingredients and would need to be relocated online and reprinted.
				After the last time I had to relocate a recipe, I decided to do something about it, and figured I would learn something new in the process.</p><br/>
				<p class="text-lg text-center">Introducing the Recipe Journal!</p>				
				<hr/>
			</div>			
		</div>
	</div>	
	
	<div class="container mt-2">
		<div class="row">
			<div class="col-md-3 text-center mb-4">
				<img src="{{ asset('assets/recipeJournal/appGif.gif') }}" class="border-bottom shadow w-75" alt="Recipe Journal gif showing application on android."/>
			</div>
			<div class="col-md-9 mt-2">
				<p class="text-md indent">I created the recipe journal using Vue Native, and decided to go this route because Vue Native is an emerging framework for applications written using VueJS. 
				Vue implements the React Native framework, which is a very popular framework for app development. 
				Since I have experience using VueJS in my current job, I figured it would be a good way to bridge my knowledge. 
				Currently, the recipe journal is still being worked on and I have a few features I plan on implementing in the near future. 
				For more information on that, please visit my github for the application - <a href="https://github.com/JohnVicious/RecipeJournalApp">RecipeJournalApp</a>.</p>
				<p class="text-md">To learn more about VueNative, please visit their documentation. - <a href="https://vue-native.io/">VueNative</a></p>
				<p class="text-md">This project also implemented Expo. 
				Expo is used for building and deploying applications that are written using the React framework. 
				Expo also supports Vue Native and was easy to configure to work with my project. - <a href="https://expo.io/">Expo</a></p>
				<p class="text-md">The application has already been compiled into an apk and can be downloaded by clicking the button below. You will need to place the apk on your android device and then install it.</p>
				<div class="text-center"><a href="{{ asset('assets/recipeJournal/RecipeJournal.apk') }}" class="btn btn-success btn-lg" role="button" aria-disabled="true">Download APK</a></div>
			</div>
		</div>
		<hr/>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<img src="{{ asset('assets/recipeJournal/app1.png') }}" class="border-bottom shadow w-25" alt="Recipe Journal application screenshot showing main page."/>
				<img src="{{ asset('assets/recipeJournal/app2.png') }}" class="border-bottom shadow w-25" alt="Recipe Journal application screenshot showing recipe landing page."/>
				<img src="{{ asset('assets/recipeJournal/app3.png') }}" class="border-bottom shadow w-25" alt="Recipe Journal application screenshot showing recipe information page."/>
			</div>
		</div>
	</div>
</main>

@endsection
