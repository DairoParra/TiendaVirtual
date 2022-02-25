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
                'icon' =>  '<i class="fa-duotone fa-mobile"></i>' // '<font-awesome-icon icon="fa-duotone fa-mobile" />'
            ],

            [
                'name' => 'TV, Audio & Video',
                'slug' => Str::slug('TV, Audio & Video'),
                'icon' => '<i class="fa-duotone fa-tv"></i>' // '<font-awesome-icon icon="fa-duotone fa-tv" />'
            ],

            [
                'name' => 'Video Games',
                'slug' => Str::slug('Video Games'),
                'icon' => '<i class="fa-duotone fa-gamepad"></i>' // '<font-awesome-icon icon="fa-duotone fa-gamepad" />'
            ],

            [
                'name' => 'Computers',
                'slug' => Str::slug('Computers'),
                'icon' => '<i class="fa-duotone fa-laptop"></i>' // '<font-awesome-icon icon="fa-duotone fa-laptop" />'
            ],

            [
                'name' => 'Fashion',
                'slug' => Str::slug('Fashion'),
                'icon' => '<i class="fa-duotone fa-shirt"></i>' // '<font-awesome-icon icon="fa-duotone fa-shirt" />'
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
