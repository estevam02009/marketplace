<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
//            [
//                'name' => 'Manoel Estevam',
//                'email' => 'mestevam@marketplace.test',
//                'username' => 'mestevam',
//                'image' => null,
//                'phone' => null,
//                'role' => 'admin',
//                'status' => 'active',
//                'password' => bcrypt('password')
//            ],
//            [
//                'name' => 'Maria Alice Estevam',
//                'email' => 'maliceestevam@marketplace.test',
//                'username' => 'malice',
//                'image' => null,
//                'phone' => null,
//                'role' => 'vendor',
//                'status' => 'active',
//                'password' => bcrypt('password'),
//            ],
            [
                'name' => 'Juan Pablo',
                'email' => 'jpablo@marketplace.test',
                'username' => 'jpablo',
                'image' => null,
                'phone' => null,
                'role' => 'user',
                'status' => 'active',
                'password' => bcrypt('password'),
            ]
        );
    }
}
