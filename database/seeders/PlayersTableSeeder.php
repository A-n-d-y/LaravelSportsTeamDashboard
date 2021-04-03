<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('players')->delete();
        
        \DB::table('players')->insert(array (
            0 => 
            array (
                'created_at' => '2021-03-29 21:37:38',
                'id' => 6,
                'name' => 'Atkins',
                'number' => 1,
                'team_id' => 11,
                'updated_at' => '2021-03-29 21:37:38',
            ),
            1 => 
            array (
                'created_at' => '2021-03-29 21:40:02',
                'id' => 7,
                'name' => 'Batty',
                'number' => 2,
                'team_id' => 11,
                'updated_at' => '2021-03-29 21:40:02',
            ),
            2 => 
            array (
                'created_at' => '2021-03-29 21:40:38',
                'id' => 8,
                'name' => 'Watson',
                'number' => 14,
                'team_id' => 11,
                'updated_at' => '2021-03-29 21:40:38',
            ),
            3 => 
            array (
                'created_at' => '2021-03-29 22:08:09',
                'id' => 9,
                'name' => 'Matawalu',
                'number' => 9,
                'team_id' => 13,
                'updated_at' => '2021-03-29 22:08:09',
            ),
        ));
        
        
    }
}