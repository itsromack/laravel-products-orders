<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i <= 100; $i++) {
            Product::create([
                'name' => ucfirst($faker->word()),
                'description' => substr($faker->paragraph(), 0, 255),
                'price' => $faker->randomFloat()
            ]);
        }
    }
}
