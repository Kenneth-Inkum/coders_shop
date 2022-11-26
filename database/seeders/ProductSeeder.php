<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Womens
        for ($i = 1; $i <= 12; $i++) {
            Product::create([
                'name' => 'Womens ' . $i,
                'slug' => 'women-' . $i,
                'details' => 'women\'s hoodie',
                'description' => 'Lorem ' . $i . ' lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsum temporibus et urna',
                'product_code' => '-00',
                'price' => rand(999, 9999),
                'quantity' => rand(1, 10),
            ]);
        }

        //Mens
        for ($i = 1; $i <= 12; $i++) {
            Product::create([
                'name' => 'Mens ' . $i,
                'slug' => 'men-' . $i,
                'details' => 'men\'s hoodie',
                'description' => 'Lorem ' . $i . ' lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsum temporibus et urna',
                'product_code' => '-00',
                'price' => rand(999, 9999),
                'quantity' => rand(1, 10),
            ]);
        }

        //Kids
        for ($i = 1; $i <= 12; $i++) {
            Product::create([
                'name' => 'Kids ' . $i,
                'slug' => 'kid-' . $i,
                'details' => 'kid\'s hoodie',
                'description' => 'Lorem ' . $i . ' lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsum temporibus et urna',
                'product_code' => '-00',
                'price' => rand(999, 9999),
                'quantity' => rand(1, 10),
            ]);
        }

                //Home Goods
                for ($i=1; $i <= 12; $i++){
                    Product::create([
                        'name' => 'Home Goods '.$i,
                        'slug' => 'homegoods-'. $i,
                        'details' => 'homegoods',
                        'description' => 'Lorem '.$i. ' lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsum temporibus et urna',
                        'product_code' => '-00',
                        'price' => rand(999,9999),
                        'quantity' => rand(1,10),
                    ]);
                }

    }
}
