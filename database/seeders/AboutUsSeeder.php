<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AboutUsSeeder extends Seeder
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
            \DB::table('about_us')->truncate();
        }

        \DB::table('about_us')->insert([
            'about_us_image'              => 'aboutus1.jpg',
            'about_us_description'        => '',
            'section_two_image_one'       => 'aboutus2.jpg',
            'section_two_description_one' => '',
            'section_two_image_two'       => 'aboutus3.jpg',
            'section_two_description_two' => '',
            'why_choose_us'               => 'Why Choose Us ?',
            'in_house_psychiatrist'       => '0',
            'experience'                  => '0',
            'session_per_year'            => '0',
            'successful_therapy'          => '0',
            'created_at'                  => date('Y-m-d H:i:s'),
            'updated_at'                  => date('Y-m-d H:i:s')
        ]);
    }
}
