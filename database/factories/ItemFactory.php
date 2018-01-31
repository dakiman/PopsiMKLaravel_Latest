<?php

use Faker\Generator as Faker;

$factory->define(App\Item::class, function (Faker $faker) {
    $images = ['bearings.bmp', 'codex_chains.bmp'];
    return [
        'category_id' => 1,
        'title_en' => ucfirst($faker->word) . "_en",
        'title_mk' => ucfirst($faker->word) . "_mk",
        'description_en' => "EN_" . $faker->paragraph($nbSentences = 2, $variableNbSentences = true),
        'description_mk' => "MK_" . $faker->paragraph($nbSentences = 2, $variableNbSentences = true),
        'pictures' => $images[array_rand($images)]
    ];
});
