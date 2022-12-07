<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StatementOfFaithSeeder extends Seeder
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
            \DB::table('statement_of_faiths')->truncate();
        }

        \DB::table('statement_of_faiths')->insert([

            'banner_image'   => 'statemenfaithbg.webp',
            'banner_heading' => 'Statement Of Faith',
            'description'    => '',
            
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')

        ]);
    }
}
