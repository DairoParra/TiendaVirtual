<?php

namespace Database\Seeders;

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
                'name' => 'Cell phones and Tablets',
                'slug' => Str::slug('Cell phones and Tablets'),
                'icon' =>  '<i class="fa-duotone fa-mobile"></i>' // '<font-awesome-icon icon="fa-duotone fa-mobile" />'
            ],
            [
                'name' => 'TV, audio and video',
                'slug' => Str::slug('TV, Audio and Video'),
                'icon' => '<i class="fa-duotone fa-tv"></i>' // '<font-awesome-icon icon="fa-duotone fa-tv" />'
            ],
            [
                'name' => 'Video games',
                'slug' => Str::slug('Video games'),
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
            Category::factory(1)->create($category);
        }

    }
}
