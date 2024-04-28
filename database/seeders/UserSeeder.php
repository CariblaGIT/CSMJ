<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "role" => "super_admin",
                "name" => "SuperAdmin",
                "email" => "superadmin@superadmin.com",
                'email_verified_at' => now(),
                'password' => bcrypt('admin1234'),
                'remember_token' => Str::random(10),
            ],
            [
                "role" => "user",
                "name" => "User",
                "email" => "user@user.com",
                'email_verified_at' => now(),
                'password' => bcrypt('123456'),
                'remember_token' => Str::random(10),
            ],
        ]);
        \App\Models\User::factory()->admin()->create();
        \App\Models\User::factory(19)->create();
    }
}
