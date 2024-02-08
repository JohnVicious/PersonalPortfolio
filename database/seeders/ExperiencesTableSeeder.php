<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperiencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('experiences')->insert([
            'title'=>'4th Key Manager',
            'company'=>'GameStop',
            'description'=>'4th Key Manager in charge of opening and closing operations, as well as overseeing GA(Game Associates) in their duties.',
            'startDate'=>'2008-08-01 00:00:00',
            'endDate'=>'2012-01-01 00:00:00'
        ]);
        
        DB::table('experiences')->insert([
            'title'=>'Part Time - Developer',
            'company'=>'ApexInnovations',
            'description'=>'Part time web developer during college doing flash development and basic backend updates and maintenance.',
            'startDate'=>'2014-03-10 00:00:00',
            'endDate'=>'2014-12-13 00:00:00'
        ]);

        DB::table('experiences')->insert([
            'title'=>'Full Stack Developer',
            'company'=>'ApexInnovations',
            'description'=>'Full stack developer involved in the creation and maintenance of next-generation interactive healthcare educational applications. Roles include web developer, flash developer, database architect and administration, and graphic design work.',
            'startDate'=>'2014-12-14 00:00:00'
        ]);
    }
}
