<?php

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
                'id' => 1,
                'role_id' => 1,
                'name' => 'Jotweb',
                'email' => 'Jotweb89@gmail.com',
                'avatar' => 'users\\August2020\\NM2vUyzDWc2KO8kpWjqi.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$6OnWAt9p3k4lkm923ZYljuECFO/McYZ9MgHY6UBRaE6nRiW8EeNMO',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2020-08-21 14:23:55',
                'updated_at' => '2020-08-24 10:40:47',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 3,
                'name' => 'Seller 1',
                'email' => 'seller1@me.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$VFSFzrssYpujB26/di4TZ.bz0Gy3fFFPgeaS1fjJWEn65umuAN5Oa',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-08-25 21:33:56',
                'updated_at' => '2020-08-25 22:08:03',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 3,
                'name' => 'Seller 2',
                'email' => 'seller2@me.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$VFSFzrssYpujB26/di4TZ.bz0Gy3fFFPgeaS1fjJWEn65umuAN5Oa',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-08-25 21:33:56',
                'updated_at' => '2020-08-25 22:08:03',
            ),
            3 => 
            array (
                'id' => 4,
                'role_id' => 2,
                'name' => 'Customer 1',
                'email' => 'customer1@me.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$VFSFzrssYpujB26/di4TZ.bz0Gy3fFFPgeaS1fjJWEn65umuAN5Oa',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-08-25 21:34:56',
                'updated_at' => '2020-08-25 22:08:03',
            ),
            4 => 
            array (
                'id' => 5,
                'role_id' => 2,
                'name' => 'Customer 2',
                'email' => 'customer2@me.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$VFSFzrssYpujB26/di4TZ.bz0Gy3fFFPgeaS1fjJWEn65umuAN5Oa',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-08-25 21:34:56',
                'updated_at' => '2020-08-25 22:08:03',
            ),
        ));
        
        
    }
}