<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HistorySeeder extends Seeder
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
            \DB::table('histories')->truncate();
        }

        \DB::table('histories')->insert([

            'banner_image'   => 'universal_banner.jpg',
            'banner_heading' => 'History',
            'heading'        => 'History',
            'description'    => '',
            
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')

        ]);
    }
}
