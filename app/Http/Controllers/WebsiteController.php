<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as HttpRequest;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class WebsiteController extends Controller
{
   
	public function __construct()
	{

	}

	public function index()
	{
		$aboutMeText = Storage::get('aboutMe.txt');

		$experiences = DB::select('SELECT title, company, description, startDate, endDate FROM experiences ORDER BY startDate Desc');
		$experiencesArray = array();
		foreach($experiences as $experience){
			$experiencesArray[] = array(
				'title'=>$experience->title,
				'company'=>$experience->company,
				'description'=>$experience->description,
				'startDate'=>date('m/d/Y',strtotime($experience->startDate)),
				'endDate'=>($experience->endDate == null ? '' : date('m/d/Y',strtotime($experience->endDate))),
				'timeWorked'=>$this->compareWorkTime($experience->startDate,$experience->endDate));
		}

		return view('index')->with(['aboutMeText'=>$aboutMeText,'experiences'=>$experiencesArray]);
	}

	public function portfolio()
	{
		$projects = DB::select('SELECT snapshot, description, url, github FROM projects');

		$projectsArray = array();
		foreach($projects as $project){
			$projectsArray[] = array(
				'snapshot'=>$project->snapshot,
				'description'=>$project->description,
				'url'=>$project->url,
				'github'=>$project->github);
		}

		return view('portfolio')->with(['projects'=>$projectsArray]);
	}

	public function aboutMe()
	{
		$aboutSections = array('Education'=>
						array('Bachelor of Science, School of Computing & Informatics, Ray P Authement College of Sciences<br/>
							University of Louisiana at Lafayette, Louisiana <i>(2014)</i>'),

					'Work Skills & Programs'=>
						array('Photoshop ***',
							'Flash ***',
							'Illustrator **',
							'Flash ***',
							'InDesign *',
							'AfterEffects *',
							'Maya *',
							'Notepad++ ***',
							'Slack/Hipchat ***',
							'RocketChat ***',
							'Trello ***',
							'Wrike ***',
							'Word ***',
							'Excel ***',
							'PowerPoint **',
							'Putty **',
							'GitHub ***',
							'TortoiseSVN ***',
							'VIM *',
							'Windows & Linux OS ***',
							'Visual Studio Code ***'),

					'Languages'=>
						array('PHP ***',
							'MySQL ***',
							'HTML **',
							'SCSS / CSS **',
							'Javascript **',
							'Python *',
							'Java *',
							'C++ *',
							'C# *',
							'R *',
							'ActionScript ***'),

					'Packages & Frameworks'=>
						array('Apache **',
						    'DotEnv ***',
							'Composer **',
							'Laravel **',
							'React *',
							'React **',
							'CreateJS **',
							'PHPUnit **',
							'JQuery **',
							'NPM **',
							'NodeJS *',
							'Git *',
							'VueJS *',
							'Vue-Native *'),

					'Interests'=>
						array('PC Building',
							'Board games',
							'Programming',
							'RC Pilot',
							'Video games',
							'Magic TCG',
							'Snow sports',
							'Mountain hiking',
							'Dogs (Currently a Corgi Dad)',
							'Cooking')
					);

		return view('aboutMe')->with(['aboutSections'=>$aboutSections]);
	}

	public function recipeJournal()
	{
		return view('recipeJournal');
	}


	private function compareWorkTime($startDate,$endDate)
	{
	    $datetime1 = date_create($startDate);
	  	$datetime2 = date_create($endDate);
	   
	  	$interval = date_diff($datetime1, $datetime2);
			
		$formatString = $this->formatString($interval);
	   
	   	return $formatString;
	}

	private function formatString($interval)
	{
		$year = $interval->format('%y');
		$month = $interval->format('%m');
		$day = $interval->format('%d');
		$dateString = '';

		$dates = array('Year'=>$year,'Month'=>$month,'Day'=>$day);
		foreach($dates as $type => $date){
			if($date > 0){
				$dateString .= $date . " " . $type;
				if($date != 1){
					$dateString .= "s";
				}
				$dateString .= " ";
			}
		}
		$dateString = rtrim($dateString);

		return $dateString;
	}
}
