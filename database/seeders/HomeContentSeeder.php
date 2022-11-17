<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Reset the site_settings table
         */
        if (\App::environment() == 'local') {
            \DB::table('home_contents')->truncate();
        }

        \DB::table('home_contents')->insert([
            'banner'              => 'banner-video1.mp4',
            'banner_heading'      => 'Giving our best for your success',
            'description_one'     => '',
            'description_two'     => '',
            'video_one'           => 'Everything-DiSC.mp4',
            'video_two'           => 'Everything-DiSC.mp4',
            'section_four_image'  => 'banner-024.jpg',
            'section_four_description' => '',
            'created_at'          => date('Y-m-d H:i:s'),
            'updated_at'          => date('Y-m-d H:i:s')
        ]);
    }
}
