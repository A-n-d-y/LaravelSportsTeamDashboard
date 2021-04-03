<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'created_at' => '2021-03-29 21:31:58',
                'email' => 'admin@admin.com',
                'email_verified_at' => '2021-03-29 21:31:58',
                'id' => 1,
                'name' => 'admin',
                'password' => '$2y$10$dMxhB.ECq8MGFBR/oJonmONY92KOix9dMkynXUz8UyzW2TY6r4ECS',
                'remember_token' => 'SPYOto7uDo',
                'updated_at' => '2021-03-29 21:31:58',
            ),
            1 => 
            array (
                'created_at' => '2021-03-29 21:31:59',
                'email' => 'user1@user.com',
                'email_verified_at' => '2021-03-29 21:31:59',
                'id' => 2,
                'name' => 'user1',
                'password' => '$2y$10$GDpGF3usVAATWL1vTnRZhuMDhXI5dMpjLVfe2OmoyLPu.owMIVKjO',
                'remember_token' => 'CKNEj99mNB',
                'updated_at' => '2021-03-29 21:31:59',
            ),
            2 => 
            array (
                'created_at' => '2021-03-29 21:31:59',
                'email' => 'user1@user.com',
                'email_verified_at' => '2021-03-29 21:31:59',
                'id' => 3,
                'name' => 'user2',
                'password' => '$2y$10$9B8SqeUOEnI5xNEkyKiSmuDSRoxBF7zJYKkf35Xd/WLTDfsBYTz7y',
                'remember_token' => 'js8GbgwI0a',
                'updated_at' => '2021-03-29 21:31:59',
            ),
        ));
        
        
    }
}