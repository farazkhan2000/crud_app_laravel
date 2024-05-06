<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        for ($i = 1; $i <= 10; $i++) {
            user::create([
                'name' => fake()->name(),
                'email' => fake()->unique()->email(),
                'age' => fake()->randomDigit(),
                'city' => fake()->city(),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
