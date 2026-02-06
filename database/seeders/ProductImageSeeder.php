<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::all();

        foreach ($products as $product) {
            ProductImage::create([
                'product_id' => $product->id,
                'path' => 'products/img.png'
            ]);

            ProductImage::create([
                'product_id' => $product->id,
                'path' => 'products/img_1.png'
            ]);

            ProductImage::create([
                'product_id' => $product->id,
                'path' => 'products/img_2.png'
            ]);

            ProductImage::create([
                'product_id' => $product->id,
                'path' => 'products/img_3.png'
            ]);
        }
    }
}
