<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert(
            [
                [
                    'name' => 'Nathan',
                    'email' => Str::random(12) . '@email.com',
                    'password' => bcrypt('${1:my-secret-password'),
                    'created_at' => now(),
                    'updated_at' => now(),
                    'slug' => uniqid()
                ],
                [
                    'name' => 'David',
                    'email' => Str::random(12) . '@email.com',
                    'password' => bcrypt('${1:my-secret-password'),
                    'created_at' => now(),
                    'updated_at' => now(),
                    'slug' => uniqid()
                ],
                [
                    'name' => 'Lisa',
                    'email' => Str::random(12) . '@email.com',
                    'password' => bcrypt('${1:my-secret-password'),
                    'created_at' => now(),
                    'updated_at' => now(),
                    'slug' => uniqid()
                ]
            ]
        );
    }
}