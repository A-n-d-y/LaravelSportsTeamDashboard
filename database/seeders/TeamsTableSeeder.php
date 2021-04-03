<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('teams')->delete();
        
        \DB::table('teams')->insert(array (
            0 => 
            array (
                'created_at' => '2021-03-29 21:34:06',
                'id' => 11,
                'name' => 'Bath Rugby',
                'updated_at' => '2021-03-29 21:34:06',
            ),
            1 => 
            array (
                'created_at' => '2021-03-29 21:35:00',
                'id' => 12,
                'name' => 'Bristol Bears',
                'updated_at' => '2021-03-29 21:35:00',
            ),
            2 => 
            array (
                'created_at' => '2021-03-29 21:35:53',
                'id' => 13,
                'name' => 'Harlequins',
                'updated_at' => '2021-03-29 21:35:53',
            ),
        ));
        
        
    }
}