<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'images/harry_potter.jpg',
            'title' => 'Harry Potter',
            'description' => 'BOring',
            'price' => 70000,
            'typeProduct' => 'book'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'images/HP 250 G5 i5 Laptop 2SY46ES.jpg',
            'title' => 'HP 250 G5 i5 Laptop 2SY46ES',
            'description' => 'Laptop lenofo generasi 5 yang murah',
            'price' => 4000000,
            'typeProduct' => 'electronic'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'images/Lenovo 330-15IGM 15.6.jpg',
            'title' => 'Lenovo 330-15IGM 15.6',
            'description' => 'laptop lenovo generasi terbaru',
            'price' => 3700000,
            'typeProduct' => 'electronic'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'images/ReZero starting live.jpg',
            'title' => 'ReZero starting live',
            'description' => 'light novel jepang re zero',
            'price' => 60000,
            'typeProduct' => 'book'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'images/Apple iPhone 6S (Gold, 32GB).jpg',
            'title' => 'Apple iPhone 6S (Gold, 32GB)',
            'description' => 'new iPhone 6s dengan harga murah',
            'price' => 3000000,
            'typeProduct' => 'electronic'
        ]);
        $product->save();
    }
}
