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
		$educations = [];

		//College
		$educations[] = [
			'degree'=>'Bachelor of Science, School of Computing & Informatics, Ray P Authment College of Sciences',
			'location'=>'University of Louisiana at Lafayette, Louisiana',
			'year'=>'2014'
		];

		//Highschool
		$educations[] = [
			'degree'=>'High School Diploma',
			'location'=>'Hahnville High School, Louisiana',
			'year'=>'2009'
		];

		return view('index')->with(['aboutMeText'=>$aboutMeText,'educations'=>$educations]);
	}

	public function portfolio()
	{
		$projects = DB::select('SELECT snapshot, description, url, github FROM projects WHERE active = 1');

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
		$aboutSections = [];

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
		$aboutSections['Work Experience'] = $experiencesArray;
		
		$languages = [
			'PHP ***',
			'MySQL ***',
			'HTML ***',
			'SCSS / CSS ***',
			'Javascript ***',
			'Python **',
			'Java *',
			'C++ *',
			'C# *',
			'R *',
			'ActionScript ***'];
		sort($languages);
		$aboutSections['Languages'] = $languages;

		$packagesAndFrameworks = [
			'Apache **',
			'DotEnv ***',
			'Composer ***',
			'Laravel ***',
			'React **',
			'CreateJS **',
			'PHPUnit **',
			'JQuery ***',
			'NodeJS **',
			'Git *',
			'VueJS **',
			'Vue-Native *'];
		sort($packagesAndFrameworks);
		$aboutSections['Packages & Frameworks'] = $packagesAndFrameworks;
		
		$programsAndSites = [
			'Photoshop ***',
			'Flash ***',
			'Illustrator **',
			'Flash ***',
			'InDesign *',
			'AfterEffects *',
			'Firebase **',
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
			'Notepad++ ***',
			'Visual Studio Code ***'];
		sort($programsAndSites);
		$aboutSections['Programs & Sites'] = $programsAndSites;

		$aboutSections['Publication'] = [
			'<strong>Training and Certifying Users of the National Institutes of Health Stroke Scale</strong><br/>
			Authors: Ariana Anderson, John Klein, Brian White, Marianne Bourgeois, Anne Leonard, Al Pacino, John Hill, Patrick Lyden<br/>
			Publication Date: January 28th, 2020<br/>
			Link: <a href="https://www.ahajournals.org/doi/abs/10.1161/STROKEAHA.119.027234">AHA Journal Publication</a>',
			'<strong>Interactive Sepsis Education Program Improves Nurses\' Knowledge and Impact on Patient Outcome</strong><br/>
			Authors: ennifer L. Rechter, Rachel M. Buckholz, Emily R. Plant, John P. Klein, and Jan Powers<br/>
			Publication Date: November-December issue, 2022<br/>
			Link: <a href="http://www.medsurgnursing.net/cgi-bin/WebObjects/MSNJournal.woa/wa/viewSection?s_id=1073744496">MEDSURGE Nursing Publication</a>',
		];
		
		$interest = [
			'PC Building',
			'Board games',
			'Programming',
			'RC Pilot',
			'Video games',
			'Snow sports',
			'Mountain hiking',
			'Dogs (Currently a Corgi Dad)',
			'Cooking'];
		sort($interest);
		$aboutSections['Interests'] = $interest;
		
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
