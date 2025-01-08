<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Stringable;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->updateOrInsert([
            'name' => "Administrador",
            'email' => "admin@example.com",
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // Encripta la contraseña correctamente
            'remember_token' => Str::random(10),
        ]);
    }
}
