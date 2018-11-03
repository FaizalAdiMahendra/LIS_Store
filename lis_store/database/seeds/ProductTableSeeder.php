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
            'imagePath' => 'images/Athena_alezander_Target.jpg',
            'title' => 'Athena alezander',
            'description' => 'Women heels with elegant feature',
            'price' => 85,
            'typeProduct' => 'Heels'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'images/Camper.jpg',
            'title' => 'Camper',
            'description' => 'good boots ideal for camping',
            'price' => 95,
            'typeProduct' => 'Boots'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'images/Cobian_las_olas.jpg',
            'title' => 'Cobian las olas',
            'description' => 'sandals high quality with cobian Brands',
            'price' => 50,
            'typeProduct' => 'Sandals'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'images/Columbia_ice_maiden.jpg',
            'title' => 'Columbia ice maiden',
            'description' => 'good boots for winter such pretty design',
            'price' => 80,
            'typeProduct' => 'Boots'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'images/Fresh foam Gobi.jpg',
            'title' => 'Fresh foam Gobi',
            'description' => 'sport sneaker ideal for play bassketball',
            'price' => 100,
            'typeProduct' => 'Sneaker'
        ]);
        $product->save();

        
        $product = new \App\Product([
            'imagePath' => 'images/Jessica_simpson_stargaze.jpg',
            'title' => 'Jessica simpson stargaze',
            'description' => 'Higt Heels for elegant women',
            'price' => 95,
            'typeProduct' => 'Heels'
        ]);
        $product->save();

        
        $product = new \App\Product([
            'imagePath' => 'images/Merrell Alverstone.jpg',
            'title' => 'Merrell Alverstone',
            'description' => 'ideal shoes for highking in mountain',
            'price' => 150,
            'typeProduct' => 'Sneaker'
        ]);
        $product->save();

        
        $product = new \App\Product([
            'imagePath' => 'images/Miz_mooz_Natick.jpg',
            'title' => 'Miz mooz Natick',
            'description' => 'boots like old west movie',
            'price' => 145,
            'typeProduct' => 'Boots'
        ]);
        $product->save();

        
        $product = new \App\Product([
            'imagePath' => 'images/Roxy_Tahiti.jpg',
            'title' => 'Roxy Tahiti',
            'description' => 'Sandals with Roxy brands',
            'price' => 45,
            'typeProduct' => 'Sandals'
        ]);
        $product->save();

        
        $product = new \App\Product([
            'imagePath' => 'images/Sperry Gold Milbrige Nubuck.jpg',
            'title' => 'Sperry Gold Milbrige Nubuck',
            'description' => 'sneaker ideal for college student',
            'price' => 80,
            'typeProduct' => 'Sneaker'
        ]);
        $product->save();

        
        $product = new \App\Product([
            'imagePath' => 'images/Steve Madden Nyles.jpg',
            'title' => 'Steve Madden Nyles',
            'description' => 'Shoes for Office work',
            'price' => 100,
            'typeProduct' => 'Shoes'
        ]);
        $product->save();

        
        $product = new \App\Product([
            'imagePath' => 'images/swallows-sandals.jpg',
            'title' => 'swallows sandals',
            'description' => 'cheap Swallow Sandals',
            'price' => 15,
            'typeProduct' => 'Sandals'
        ]);
        $product->save();

        
        $product = new \App\Product([
            'imagePath' => 'images/Vaneli Tedra.jpg',
            'title' => 'Vaneli Tedra.jpg',
            'description' => 'Red Higt Heels with elegant design',
            'price' => 95,
            'typeProduct' => 'Heels'
        ]);
        $product->save();
    }
}
