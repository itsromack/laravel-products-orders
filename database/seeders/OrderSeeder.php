<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Product;
use Faker\Factory as Faker;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $products = Product::all();
        foreach ($products as $product) {
            for ($i = 0; $i <= rand(1, 100); $i++) {
                Order::create([
                    'product_id' => $product->id,
                    'quantity' => rand(1, 100),
                    'created_at' => $faker->dateTimeThisDecade()
                ]);
            }
        }
    }
}
