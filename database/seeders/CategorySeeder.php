<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Cell Phones & Tablets',
                'slug' => Str::slug('Cell Phones & Tablets'),
                'icon' =>  '<i class="fa-solid fa-mobile"></i>'
            ],

            [
                'name' => 'TV, Audio & Video',
                'slug' => Str::slug('TV, Audio & Video'),
                'icon' => '<i class="fa-solid fa-tv"></i>'
            ],

            [
                'name' => 'Video Games',
                'slug' => Str::slug('Video Games'),
                'icon' => '<i class="fa-solid fa-gamepad"></i>'
            ],

            [
                'name' => 'Computers',
                'slug' => Str::slug('Computers'),
                'icon' => '<i class="fa-solid fa-laptop"></i>'
            ],

            [
                'name' => 'Fashion',
                'slug' => Str::slug('Fashion'),
                'icon' => '<i class="fa-solid fa-shirt"></i>'
            ]
        ];

        foreach ($categories as $category){
            $category = Category::factory(1)->create($category)->first();

            $brands = Brand::factory(4)->create();

            foreach ($brands as $brand){
                $brand->categories()->attach($category->id);
            }
        }

    }
}
