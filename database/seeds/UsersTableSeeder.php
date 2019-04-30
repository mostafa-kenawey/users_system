<?php

use App\Models\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => '$2y$10$CHGFOGUj7W/shjJDqgjsDeVby8nO0QE4kCkbi1VGAlSFUaOEd2hZy', // password
                'remember_token' => Str::random(10)
            ]);
        }
    }
}
