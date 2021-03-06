<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // User::factory()->times(5)->create();
      User::insert([
           'name' => "Steve",
           'email' => "steve@mail.com",
           'password' => Hash::make('password'),
       ]);
    }
}
