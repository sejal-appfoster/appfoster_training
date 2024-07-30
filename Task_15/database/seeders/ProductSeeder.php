<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $data = [];
        $faker = Faker::create();
        for($x = 0; $x < 10; $x++) {
            $data[] = [
                'name' => $faker->name, 
                'description' => "fake description"
            ];
        }

        // dd($data);

        \Log::info("Rishabh");
        // \Log::info($data);

        // Product::insert($data);
    }
}
