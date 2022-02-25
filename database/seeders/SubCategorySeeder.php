<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [
            /* Cell phones and Tablets */
            [
                'category_id' => 1,
                'name' => 'Cell phones',
                'slug' => Str::slug('Cell phones'),
                'color' => true
            ],

            [
                'category_id' => 1,
                'name' => 'Cell phone Accessories',
                'slug' => Str::slug('Cell phone Accessories'),
            ],

            [
                'category_id' => 1,
                'name' => 'Smartwatches',
                'slug' => Str::slug('Smartwatches'),
            ],

            [
                'category_id' => 1,
                'name' => 'Tablets',
                'slug' => Str::slug('Tablets'),
            ],

            /* TV, audio and video */

            [
                'category_id' => 2,
                'name' => 'Television & Video',
                'slug' => Str::slug('Television & audio'),
            ],

            [
                'category_id' => 2,
                'name' => 'Camera & Photo',
                'slug' => Str::slug('Camera & Photo'),
            ],

            [
                'category_id' => 2,
                'name' => 'Car Electronics',
                'slug' => Str::slug('Car Electronics'),
            ],

            [
                'category_id' => 2,
                'name' => 'Home Audio',
                'slug' => Str::slug('Home Audio'),
            ],

            /* Video Games */

            [
                'category_id' => 3,
                'name' => 'Xbox One',
                'slug' => Str::slug('Television & audio'),
            ],

            [
                'category_id' => 3,
                'name' => 'Nintendo Switch',
                'slug' => Str::slug('Nintendo Switch'),
            ],

            [
                'category_id' => 3,
                'name' => 'PC',
                'slug' => Str::slug('PC'),
            ],

            [
                'category_id' => 3,
                'name' => 'PlayStation 4',
                'slug' => Str::slug('PlayStation 4'),
            ],

            /* Computers */

            [
                'category_id' => 4,
                'name' => 'Computer Components',
                'slug' => Str::slug('Computer Components'),
            ],

            [
                'category_id' => 4,
                'name' => 'Data Storage',
                'slug' => Str::slug('Data Storage'),
            ],

            [
                'category_id' => 4,
                'name' => 'Monitors',
                'slug' => Str::slug('Monitors'),
            ],

            [
                'category_id' => 4,
                'name' => 'Laptops',
                'slug' => Str::slug('Laptops'),
            ],

            /* Fashion */

            [
                'category_id' => 5,
                'name' => "Women's Fashion",
                'slug' => Str::slug("Women's Fashion"),
            ],

            [
                'category_id' => 5,
                'name' => "Men's Fashion",
                'slug' => Str::slug("Men's Fashion"),
            ],

            [
                'category_id' => 5,
                'name' => "Accessories",
                'slug' => Str::slug("Accessories"),
            ],
        ];

        foreach ($subcategories as $subcategory){

            SubCategory::factory(1)->create($subcategory);

        }
    }
}
