<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SiteSettingsTableSeeder extends Seeder
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
            \DB::table('site_settings')->truncate();
        }

        \DB::table('site_settings')->insert([
            'site_title'       => 'Heed Way',
            'contact_email'    => 'mailto:admin@heedway.com',
            'contact_phone'    => '+44 7786 997137',
            'address'          => 'lastminute.com London Eye, Riverside Building, County Hall, London SE1 7PB, United Kingdom',
            'logo'             => '',
            'facebook'         => 'https://www.facebook.com/',
            'instagram'        => 'https://www.instagram.com/',
            'twitter'          => 'https://twitter.com/',
            'youtube'          => 'https://www.youtube.com/',
            'footer_scripts'   => '',
            'footer_sentence'  => 'Maecenas bibendum maximus blandit. Sed eget ornare mi. Donec hendrerit tincidunt lacus',
            'copyright'        => 'Copyright by Heed Way. All rights reserved.',
            'created_at'       => date('Y-m-d H:i:s'),
            'updated_at'       => date('Y-m-d H:i:s')
        ]);
    }
}
