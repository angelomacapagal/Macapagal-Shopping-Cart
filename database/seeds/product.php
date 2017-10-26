<?php

use Illuminate\Database\Seeder;

class product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $products = new \App\Product([
        	'img' =>'\img\voyager.jpg',
        	'name' => 'Voyager',
        	'description' => 'Bike with speed.',
            'category_id' => '1',
            'barcode'=> str_random(10),
            'price' => '7000'

        ]);
        $products->save();

             $products = new \App\Product([
        	'img' =>'\img\giant.jpg',
        	'name' => 'Giant',
        	'description' => 'bikes with speedmometer.',
            'category_id' => '2',
            'barcode'=> str_random(10),
            'price' => '15000'

        ]);
        $products->save();

             $products = new \App\Product([
        	'img' =>'\img\trinx.jpg',
        	'name' => 'Trinx',
        	'description' => 'bike with ligth.',
            'category_id' => '3',
            'barcode'=> str_random(10),
            'price' => '12000'

        ]);
        $products->save();

             $products = new \App\Product([
        	'img' =>'\img\bamboo.jpg',
        	'name' => 'Bamboo Bike',
        	'description' => 'bike made of bamboo.',
            'category_id' => '4',
            'barcode'=> str_random(10),
            'price' => '5000'

        ]);
        $products->save();

             $products = new \App\Product([
        	'img' =>'\img\foxer.jpg',
        	'name' => 'Foxer',
        	'description' => 'bike for road.',
            'category_id' => '5',
            'barcode'=> str_random(10),
            'price' => '9000'

        ]);
        $products->save();

               $products = new \App\Product([
        	'img' =>'\img\astig.jpeg',
        	'name' => 'Morgrood',
        	'description' => 'bike for ice',
            'category_id' => '6',
            'barcode'=> str_random(10),
            'price' => '30000'

        ]);
        $products->save();
    }
}
