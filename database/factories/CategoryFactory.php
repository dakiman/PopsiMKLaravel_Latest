<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'title_en' => ucfirst($faker->word) . "_en",
        'title_mk' => ucfirst($faker->word) . "_mk",
        'description_en' => "EN_" . $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'description_mk' => "MK_" . $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'picture' => 'codex_chains.bmp'
    ];
});
