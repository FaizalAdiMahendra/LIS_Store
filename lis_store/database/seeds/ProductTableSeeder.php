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
            'imagePath' => '...',
            'title' => 'Harry Potter',
            'description' => 'BOring',
            'price' => 10,
            'typeProduct' => 'book'
        ]);
        $product->save();
    }
}
