<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Administrator',
                'created_at' => '2020-08-21 14:17:25',
                'updated_at' => '2020-08-21 14:17:25',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'display_name' => 'Normal User',
                'created_at' => '2020-08-22 14:39:18',
                'updated_at' => '2020-08-22 14:39:18',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'seller',
                'display_name' => 'Seller',
                'created_at' => '2020-08-24 23:03:59',
                'updated_at' => '2020-08-24 23:03:59',
            ),
        ));
        
        
    }
}