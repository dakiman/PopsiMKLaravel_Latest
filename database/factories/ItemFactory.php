<?php

use Faker\Generator as Faker;

$factory->define(App\Item::class, function (Faker $faker) {
    return [
        'category_id' => 1,
        'title_en' => ucfirst($faker->word),
        'title_mk' => ucfirst($faker->word),
        'description_en' => $faker->paragraph($nbSentences = 2, $variableNbSentences = true),
        'description_mk' => $faker->paragraph($nbSentences = 2, $variableNbSentences = true),
        'pictures' => 'bearings.bmp'
    ];
});
