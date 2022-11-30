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
            'site_title'       => 'GCMCO',
            'contact_email'    => 'mailto:info@gcmco.com',
            'contact_phone'    => '207-600-7770',
            'address'          => '154 River Rd, Orrington, ME, 04474',
            'logo'             => 'gcmco_logo.png',
            'facebook'         => 'https://www.facebook.com/',
            'instagram'        => 'https://www.instagram.com/',
            'twitter'          => 'https://twitter.com/',
            'youtube'          => 'https://www.youtube.com/',
            'footer_scripts'   => '',
            'footer_sentence'  => 'GCMCO is a non-profit 501c3 organization to support those in need throughout Africa. While keeping the focus on Jesus Christ and His church.',
            'copyright'        => 'Copyright 2021 by GCMCO',
            'created_at'       => date('Y-m-d H:i:s'),
            'updated_at'       => date('Y-m-d H:i:s')
        ]);
    }
}
