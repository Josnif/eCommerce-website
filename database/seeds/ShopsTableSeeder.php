<?php

use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('shops')->delete();
        
        \DB::table('shops')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Fashy store',
                'user_id' => 2,
                'is_active' => 1,
                'description' => 'This is a fashion store based on the sales of varieties of clothes for all category of people with different size',
                'rating' => NULL,
                'created_at' => '2020-08-24 21:28:00',
                'updated_at' => '2020-08-27 15:14:07',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Laptop store',
                'user_id' => 3,
                'is_active' => 1,
                'description' => 'Sales of laptop from low quality to high quality laptop',
                'rating' => NULL,
                'created_at' => '2020-08-25 22:00:00',
                'updated_at' => '2020-08-27 15:24:21',
            ),
        ));
        
        
    }
}