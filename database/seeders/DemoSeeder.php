<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DemoSeeder extends Seeder
{
    public function run(): void
    {
        $cat = Category::firstOrCreate(['name' => 'Geral']);
        Product::firstOrCreate([
            'name' => 'Caderno',
            'price' => 12.90,
            'category_id' => $cat->id
        ]);
    }
}
