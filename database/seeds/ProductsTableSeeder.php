<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Product1 = Product::create([
            'category_id' => 1,
            'subcategory_id' => 1,
            'sub_subcategory_id' => 2,
            'manufacturer_id' => 3,
            'title' => 'Sky Blue Jacket',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'picture1' => 'p7.jpg',
            'picture2' => 'p1.jpg',
            'picture3' => 'p2.jpg',
            'picture4' => 'p3.jpg',
            'price' => '900',
            'finalprice' => '800',
            'quantity' => '10',
        ]);
        $Product2 = Product::create([
            'category_id' => 1,
            'subcategory_id' => 1,
            'sub_subcategory_id' => 5,
            'manufacturer_id' => 4,
            'title' => 'Black Sunglasses',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'picture1' => 'p21.jpg',
            'picture2' => 'p1.jpg',
            'picture3' => 'p2.jpg',
            'picture4' => 'p3.jpg',
            'price' => '23',
            'finalprice' => '20',
            'quantity' => '5',
        ]);
        $Product3 = Product::create([
            'category_id' => 1,
            'subcategory_id' => 1,
            'sub_subcategory_id' => 3,
            'manufacturer_id' => 1,
            'title' => 'Red Sneaker',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'picture1' => 'p6.jpg',
            'picture2' => 'p1.jpg',
            'picture3' => 'p2.jpg',
            'picture4' => 'p3.jpg',
            'price' => '45',
            'finalprice' => '38',
            'quantity' => '15',
        ]);
        $Product4 = Product::create([
            'category_id' => 1,
            'subcategory_id' => 2,
            'sub_subcategory_id' => 6,
            'manufacturer_id' => 5,
            'title' => 'Black Perse',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'picture1' => 'p3.jpg',
            'picture2' => 'p1.jpg',
            'picture3' => 'p2.jpg',
            'picture4' => 'p3.jpg',
            'price' => '230',
            'finalprice' => '200',
            'quantity' => '50',
        ]);
        $Product5 = Product::create([
            'category_id' => 2,
            'subcategory_id' => 2,
            'sub_subcategory_id' => 7,
            'manufacturer_id' => 5,
            'title' => 'Dimond Set',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'picture1' => 'p9.jpg',
            'picture2' => 'p1.jpg',
            'picture3' => 'p2.jpg',
            'picture4' => 'p3.jpg',
            'price' => '45',
            'finalprice' => '39',
            'quantity' => '25',
        ]);
        $Product6 = Product::create([
            'category_id' => 2,
            'subcategory_id' => 5,
            'sub_subcategory_id' => 14,
            'manufacturer_id' => 4,
            'title' => 'Black Watch',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'picture1' => 'p2.jpg',
            'picture2' => 'p1.jpg',
            'picture3' => 'p2.jpg',
            'picture4' => 'p3.jpg',
            'price' => '25',
            'finalprice' => '20',
            'quantity' => '15',
        ]);
        $Product7 = Product::create([
            'category_id' => 1,
            'subcategory_id' => 1,
            'sub_subcategory_id' => 5,
            'manufacturer_id' => 3,
            'title' => 'Eye glasses',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'picture1' => 'p4.jpg',
            'picture2' => 'p1.jpg',
            'picture3' => 'p2.jpg',
            'picture4' => 'p3.jpg',
            'price' => '14',
            'finalprice' => '10',
            'quantity' => '34',
        ]);
        $Product8 = Product::create([
            'category_id' => 1,
            'subcategory_id' => 4,
            'sub_subcategory_id' => 12,
            'manufacturer_id' => 4,
            'title' => 'White Tops',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'picture1' => 'p18.jpg',
            'picture2' => 'p1.jpg',
            'picture3' => 'p2.jpg',
            'picture4' => 'p3.jpg',
            'price' => '18',
            'finalprice' => '15',
            'quantity' => '34',
        ]);
        $Product9 = Product::create([
            'category_id' => 1,
            'subcategory_id' => 4,
            'sub_subcategory_id' => 12,
            'manufacturer_id' => 4,
            'title' => 'Red Short',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'picture1' => 'p27.jpg',
            'picture2' => 'p1.jpg',
            'picture3' => 'p2.jpg',
            'picture4' => 'p3.jpg',
            'price' => '25',
            'finalprice' => '23',
            'quantity' => '30',
        ]);
        $Product10 = Product::create([
            'category_id' => 1,
            'subcategory_id' => 1,
            'sub_subcategory_id' => 1,
            'manufacturer_id' => 2,
            'title' => 'Black T-shirt',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'picture1' => 'p24.jpg',
            'picture2' => 'p1.jpg',
            'picture3' => 'p2.jpg',
            'picture4' => 'p3.jpg',
            'price' => '900',
            'finalprice' => '800',
            'quantity' => '10',
        ]);
        $Product11 = Product::create([
            'category_id' => 1,
            'subcategory_id' => 2,
            'sub_subcategory_id' => 6,
            'manufacturer_id' => 2,
            'title' => 'Black Bag',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'picture1' => 'p29.jpg',
            'picture2' => 'p1.jpg',
            'picture3' => 'p2.jpg',
            'picture4' => 'p3.jpg',
            'price' => '900',
            'finalprice' => '800',
            'quantity' => '10',
        ]);
    }
}
