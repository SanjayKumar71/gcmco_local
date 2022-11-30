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

            'banner_image'              => 'banner_first0.jpg',
            'banner_sub_heading'        => '',
            'banner_heading'            => '',

            'section_one_image'         => 'dg-min.jpg',
            // 'section_one_sub_heading'   => 'Helping Today',
            // 'section_one_heading'       => 'Together we can Help those in need in Christ’s name.',
            'section_one_description'   => '',

            'section_two_heading'       => 'Our Objectives',
            'section_two_description'   => '',
            
            'section_three_sub_heading' => 'In Christ’s Name',
            'section_three_heading'     => 'Our Popular Causes',

            'section_four_heading'                  => 'Helping Today',
            'section_four_description'              => 'We are helping those in need and sharing the Gospel throughout Africa',
            'section_four_image'                    => '',
            'section_four_option_one_image'         => '',
            'section_four_option_one_heading'       => 'Healthy Food',
            'section_four_option_one_description'   => '',
            'section_four_option_two_image'         => '',
            'section_four_option_two_heading'       => 'Clean Water',
            'section_four_option_two_description'   => '',
            'section_four_option_three_image'       => '',
            'section_four_option_three_heading'     => 'Hope Homes',
            'section_four_option_three_description' => '',

            'section_five_sub_heading'  => 'Asked Questions',
            'section_five_heading'      => 'We Need Your Help',
            'section_five_image'        => '',
            'section_five_note_image'   => '',
            'section_five_note'         => 'Give us your Helping Hand',

            'section_six_sub_heading'   => 'Changed Lives',
            'section_six_heading'       => 'What They Say',
            
            'section_seven_image'       => '',
            'section_seven_heading'     => 'Join us in Prayer by staying Updated',
            
            'section_eight_sub_heading' => 'From the Blog',
            'section_eight_heading'     => 'News & Articles',
            
            'section_nine_heading'      => 'Help The People',
            
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')

        ]);
    }
}
