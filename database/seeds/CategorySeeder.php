<?php

use Illuminate\Database\Seeder;
use App\User;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = factory(App\Category::class, 8)->create();

        foreach($categories as $category) {
            $items = factory(App\Item::class, rand(5, 20))->create([
                'category_id' => $category->id,
            ]);
        }

        User::create([
            'name' => "Daki",
            'email' => 'daki@daki',
            'password' => bcrypt('daki'),
        ]);

    }
}
