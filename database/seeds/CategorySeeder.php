<?php

use App\Category;
use Illuminate\Database\Seeder;
use App\User;
use App\CarouselOrder;
use App\CarouselPic;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $categories = factory(App\Category::class, 8)->create();

        foreach ($categories as $category) {
            $items = factory(App\Item::class, rand(5, 20))->create([
                'category_id' => $category->id,
            ]);
        }

        factory(App\News::class, 8)->create();

        User::create([
            'name' => "Daki",
            'email' => 'daki@daki',
            'password' => bcrypt('daki'),
        ]);

        // $images = ['bearings.bmp', 'codex_chains.bmp', 'codex1.png', 'codex4.bmp', 'codex8.bmp', 'codex25.bmp' ];
        $images = ['05_Ruedas_dentadas_engranajes_cadenas_titanio.jpg', 'cuscinetti.png', 'pexels-photo-190574.jpeg', 'pexels-photo-290297.jpeg'];

        foreach ($images as $image) {
            CarouselPic::create([
                'name' => $image
            ]);
        }

        CarouselOrder::create([
            'order' => serialize($images)
        ]);


    }
}
