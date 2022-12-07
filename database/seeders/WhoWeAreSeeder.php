<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WhoWeAreSeeder extends Seeder
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
            \DB::table('who_we_ares')->truncate();
        }

        \DB::table('who_we_ares')->insert([

            'banner_image'             => 'who_we_are1.webp',
            'banner_heading'           => 'Who We Are',

            'section_one_heading'      => 'WHO WE ARE',
            'section_one_description'  => '',
            'section_one_image_one'    => '',
            'section_one_image_two'    => '',

            'section_two_heading'      => 'WHAT WE DO',
            'section_two_description'  => '',
            'section_two_image'        => '',

            'section_three_heading'     => 'HOW YOU CAN GET INVOLVED',
            'section_three_description' => '',
            'section_three_image'       => '',

            'section_four_sub_heading'  => 'Help the people',
            'section_four_heading'      => 'Together we can make an impact one life at the time.',
            'section_four_image'        => '',
            'section_four_options'      => '',
            
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')

        ]);
    }
}
