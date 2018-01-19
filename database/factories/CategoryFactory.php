<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'title_en' => ucfirst($faker->word),
        'title_mk' => ucfirst($faker->word),
        'description_en' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'description_mk' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'picture' => 'codex_chains.bmp'
    ];
});
