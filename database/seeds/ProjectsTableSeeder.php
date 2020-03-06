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
            'url'=>'/'
        ]);
    }
}
