<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = [
            [
                'id' => 1,
                'name' => 'Fresh Carrots 500g',
                'slug' => 'fresh-carrots-500g',
                'description' => 'This is fresh carrot',
                'selling_price' => '60',
                'quantity' => '10',
                'image' => 'carrots.jpg',
                'category_id' => '1',
                'brand_id' => '1',
            ],

            [
                'id' => 2,
                'name' => 'Dinurado Rice',
                'slug' => 'dinurado-rice',
                'description' => 'This is rice',
                'selling_price' => '55',
                'quantity' => '20',
                'image' => 'dnd-rice.jpg',
                'category_id' => '4',
                'brand_id' => '2',
            ],

            [
                'id' => 3,
                'name' => 'Egg (5 Pieces)',
                'slug' => 'egg-5-pieces',
                'description' => 'This is egg',
                'selling_price' => '20',
                'quantity' => '5',
                'image' => 'egg.jpg',
                'category_id' => '8',
                'brand_id' => '1',
            ],

            [
                'id' => 4,
                'name' => 'Milagrosa Rice',
                'slug' => 'milagrosa-rice',
                'description' => 'This is rice',
                'selling_price' => '57',
                'quantity' => '16',
                'image' => 'pure-milagrosa.jpg',
                'category_id' => '4',
                'brand_id' => '3',
            ],

            [
                'id' => 5,
                'name' => 'Nissin Cup Noodles (Seafood)',
                'slug' => 'nissin-cup-noodles-seafood',
                'description' => 'This is cup noodles',
                'selling_price' => '17',
                'quantity' => '50',
                'image' => 'seafood-cup-noodles.jpg',
                'category_id' => '5',
                'brand_id' => '4',
            ],
            
            [
                'id' => 6,
                'name' => 'Colgate Toothpaste',
                'slug' => 'colgate-toothpaste',
                'description' => 'This is colgate',
                'selling_price' => '6',
                'quantity' => '10',
                'image' => '1.jpg',
                'category_id' => '9',
                'brand_id' => '5',
            ],
        ];

        Product::insert($product);
    }
}