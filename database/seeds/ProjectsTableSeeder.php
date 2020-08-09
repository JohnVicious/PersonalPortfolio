<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'snapshot'=>'resumeSiteSnapshot.png',
            'description'=>'My first project in my portfolio, my resume site. Built from the ground up to showcase myself, skillset, and projects.',
            'url'=>'/',
			'github'=>'https://github.com/JohnVicious/PersonalPortfolio'
        ]);
		
        DB::table('projects')->insert([
            'snapshot'=>'assetViewerSnapshot.png',
            'description'=>'An Asset Viewer that I originally made to test PHP Imagick in my spare time. Eventually adapted it to be used at my work in order to help developers and clinical staff view our custom made assets quickly and efficiently.',
            'url'=>'/AssetViewer',
			'github'=>null
        ]);
		
        DB::table('projects')->insert([
            'snapshot'=>'recipeJournalSnapshot.png',
            'description'=>'A Vue-Native application created for my favorite recipes.',
            'url'=>'/recipeJournal',
			'github'=>'https://github.com/JohnVicious/RecipeJournal'
        ]);
    }
}
