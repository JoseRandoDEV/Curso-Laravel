<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::factory()
            ->count(150)
            ->create();

        // Uncomment the line below to create a single product
        // Product::factory()->create();

        // Uncomment the line below to create a specific product with attributes
        // Product::factory()->create(['name' => 'Specific Product', 'price' => 99.99]);
    }
}
