<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Subcategory;
use App\Sub_subcategory;
use App\Manufacturer;

class CategorysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Manufacturer1 = Manufacturer::create([
            'title' => 'Nike',
        ]);
        $Manufacturer2 = Manufacturer::create([
            'title' => 'Bata',
        ]);
        $Manufacturer3 = Manufacturer::create([
            'title' => 'Freeland',
        ]);
        $Manufacturer4 = Manufacturer::create([
            'title' => 'Estasy',
        ]);
        $Manufacturer5 = Manufacturer::create([
            'title' => 'Gucci',
        ]);



        $Category1 = Category::create([
            'title' => 'Clothing',
            'fontawsome'=>'fa-shopping-bag'
        ]);
        $Category2 = Category::create([
            'title' => 'Electronics',
            'fontawsome'=>'fa-laptop'
        ]);
        $Category3 = Category::create([
            'title' => 'Health and Beaty',
            'fontawsome'=>'fa-heartbeat'
        ]);
        $Category4 = Category::create([
            'title' => 'Kids and Babies',
            'fontawsome'=>'fa-paper-plane'
        ]);
        $Category5 = Category::create([
            'title' => 'Sports',
            'fontawsome'=>'fa-futbol-o'
        ]);
        $Category6 = Category::create([
            'title' => 'Homes and Garder',
            'fontawsome'=>'fa-envira'
        ]);




        $Subcategory1 = Subcategory::create([
            'category_id' => $Category1->id,
            'title' => 'Men',
        ]);
        $Subcategory2 = Subcategory::create([
            'category_id' => $Category1->id,
            'title' => 'Women',
        ]);
        $Subcategory3 = Subcategory::create([
            'category_id' => $Category1->id,
            'title' => 'Kids',
        ]);
        $Subcategory4 = Subcategory::create([
            'category_id' => $Category1->id,
            'title' => 'Girls',
        ]);
        $Subcategory5 = Subcategory::create([
            'category_id' => $Category2->id,
            'title' => 'Laptops',
        ]);
        $Subcategory6 = Subcategory::create([
            'category_id' => $Category2->id,
            'title' => 'Desktops',
        ]);
        $Subcategory7 = Subcategory::create([
            'category_id' => $Category2->id,
            'title' => 'Cameras',
        ]);
        $Subcategory8 = Subcategory::create([
            'category_id' => $Category2->id,
            'title' => 'Mobile Phones',
        ]);


        

        $Sub_subcategory1 = Sub_subcategory::create([
            'category_id' => $Category1->id,
            'subcategory_id' => $Subcategory1->id,
            'title' => 'Shirts',
        ]);
        $Sub_subcategory2 = Sub_subcategory::create([
            'category_id' => $Category1->id,
            'subcategory_id' => $Subcategory1->id,
            'title' => 'Jackets',
        ]);
        $Sub_subcategory3 = Sub_subcategory::create([
            'category_id' => $Category1->id,
            'subcategory_id' => $Subcategory1->id,
            'title' => 'Shoes',
        ]);
        $Sub_subcategory4 = Sub_subcategory::create([
            'category_id' => $Category1->id,
            'subcategory_id' => $Subcategory1->id,
            'title' => 'Blazers',
        ]);
        $Sub_subcategory5 = Sub_subcategory::create([
            'category_id' => $Category1->id,
            'subcategory_id' => $Subcategory1->id,
            'title' => 'Sunglasses',
        ]);
        $Sub_subcategory6 = Sub_subcategory::create([
            'category_id' => $Category1->id,
            'subcategory_id' => $Subcategory2->id,
            'title' => 'Hand Bags',
        ]);
        $Sub_subcategory7 = Sub_subcategory::create([
            'category_id' => $Category1->id,
            'subcategory_id' => $Subcategory2->id,
            'title' => 'Jwellerys',
        ]);
        $Sub_subcategory8 = Sub_subcategory::create([
            'category_id' => $Category1->id,
            'subcategory_id' => $Subcategory3->id,
            'title' => 'Toys',
        ]);
        $Sub_subcategory9 = Sub_subcategory::create([
            'category_id' => $Category1->id,
            'subcategory_id' => $Subcategory3->id,
            'title' => 'Shirts',
        ]);
        $Sub_subcategory10 = Sub_subcategory::create([
            'category_id' => $Category1->id,
            'subcategory_id' => $Subcategory3->id,
            'title' => 'Shoes',
        ]);
        $Sub_subcategory11 = Sub_subcategory::create([
            'category_id' => $Category1->id,
            'subcategory_id' => $Subcategory4->id,
            'title' => 'Sandels',
        ]);
        $Sub_subcategory12 = Sub_subcategory::create([
            'category_id' => $Category1->id,
            'subcategory_id' => $Subcategory4->id,
            'title' => 'Shorts',
        ]);
        $Sub_subcategory13 = Sub_subcategory::create([
            'category_id' => $Category1->id,
            'subcategory_id' => $Subcategory4->id,
            'title' => 'Jwellery',
        ]);
        $Sub_subcategory14 = Sub_subcategory::create([
            'category_id' => $Category2->id,
            'subcategory_id' => $Subcategory5->id,
            'title' => 'Gaming',
        ]);
        $Sub_subcategory15 = Sub_subcategory::create([
            'category_id' => $Category2->id,
            'subcategory_id' => $Subcategory5->id,
            'title' => 'Asus',
        ]);
        $Sub_subcategory16 = Sub_subcategory::create([
            'category_id' => $Category2->id,
            'subcategory_id' => $Subcategory5->id,
            'title' => 'Microsoft',
        ]);
        $Sub_subcategory17 = Sub_subcategory::create([
            'category_id' => $Category2->id,
            'subcategory_id' => $Subcategory5->id,
            'title' => 'Lenovo',
        ]);
        $Sub_subcategory18 = Sub_subcategory::create([
            'category_id' => $Category2->id,
            'subcategory_id' => $Subcategory6->id,
            'title' => 'Router',
        ]);
        $Sub_subcategory19 = Sub_subcategory::create([
            'category_id' => $Category2->id,
            'subcategory_id' => $Subcategory6->id,
            'title' => 'Webcam',
        ]);
        $Sub_subcategory20 = Sub_subcategory::create([
            'category_id' => $Category2->id,
            'subcategory_id' => $Subcategory6->id,
            'title' => 'Modem',
        ]);
        $Sub_subcategory21 = Sub_subcategory::create([
            'category_id' => $Category2->id,
            'subcategory_id' => $Subcategory7->id,
            'title' => 'Digital',
        ]);
        $Sub_subcategory22 = Sub_subcategory::create([
            'category_id' => $Category2->id,
            'subcategory_id' => $Subcategory7->id,
            'title' => 'Lenses',
        ]);
        $Sub_subcategory23 = Sub_subcategory::create([
            'category_id' => $Category2->id,
            'subcategory_id' => $Subcategory8->id,
            'title' => 'Apple',
        ]);
        $Sub_subcategory24 = Sub_subcategory::create([
            'category_id' => $Category2->id,
            'subcategory_id' => $Subcategory8->id,
            'title' => 'Asus',
        ]);
        $Sub_subcategory25 = Sub_subcategory::create([
            'category_id' => $Category2->id,
            'subcategory_id' => $Subcategory8->id,
            'title' => 'Samsung',
        ]);
        $Sub_subcategory26 = Sub_subcategory::create([
            'category_id' => $Category2->id,
            'subcategory_id' => $Subcategory8->id,
            'title' => 'Lg',
        ]);
        $Sub_subcategory27 = Sub_subcategory::create([
            'category_id' => $Category2->id,
            'subcategory_id' => $Subcategory8->id,
            'title' => 'Headphones',
        ]);
    }
}
