<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HomeSectionThreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Reset the home_section_three table
         */
        if (\App::environment() == 'local') {
            \DB::table('home_section_three')->truncate();
        }

        \DB::table('home_section_three')->insert([
            'icon'        => 'q1-1.png',
            'title'       => 'Built on a Foundation of Research and Rigor',
            'description' => 'Everything DiSC® provides a trustworthy assessment with strong psychometric properties, and prioritizes quality by using computer adaptive testing, global norming, and real-world testing.',
            'created_at'  => date('Y-m-d H:i:s'),
            'updated_at'  => date('Y-m-d H:i:s')
        ]);
    }
}
