<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['name' => 'Zapatos', 'description' => 'Zapatos Nike Air Max', 'price' => 40]);
        Product::create(['name' => 'Sueter', 'description' => 'Sueter Adidas', 'price' => 20]);
        Product::create(['name' => 'Pantalon', 'description' => 'Pantalon Supermarca', 'price' => 60]);
    }
}
