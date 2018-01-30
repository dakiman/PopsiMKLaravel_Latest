<?php

use Faker\Generator as Faker;

$factory->define(App\News::class, function (Faker $faker) {
    return [
        'title_mk' => ucfirst($faker->word),
        'title_en' => ucfirst($faker->word),
        'description_mk' => $faker->paragraph($nbSentences = 5, $variableSentences = true),
        'description_en' => $faker->paragraph($nbSentences = 5, $variableSentences = true),
        'pictures' => 'bearings.bmp'
    ];
});
