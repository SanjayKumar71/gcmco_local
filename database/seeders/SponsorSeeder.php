<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SponsorSeeder extends Seeder
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
            \DB::table('sponsors')->truncate();
        }

        \DB::table('sponsors')->insert([

            'banner'         => 'sponsor1.webp',
            'banner_heading' => 'Sponsor',
            'heading'        => 'Good News should be accompanied by Good Deeds',
            'sub_heading'    => 'Your Support provides help and hope that transforms lives.',
            'image'          => 'sponsor2.webp',
            'description'    => '',
            
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')

        ]);
    }
}
