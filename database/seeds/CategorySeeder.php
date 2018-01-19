<?php

use Illuminate\Database\Seeder;

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
    }
}
