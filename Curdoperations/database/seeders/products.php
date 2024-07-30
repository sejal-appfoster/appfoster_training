<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;

class products extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker =Faker::create();
        for($i=0;$i<=5;$i++){
        $products = new Product;
        $products ->name = $faker->name;
        $products ->sku ="45678";
        $products ->price ="600";
        $products ->description = "one";
        $products ->save();

        }
    }
}
