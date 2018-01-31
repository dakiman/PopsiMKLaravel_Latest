<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    $images = ['bearings.bmp', 'codex_chains.bmp', 'codex1.png', 'codex4.bmp', 'codex8.bmp', 'codex25.bmp' ];
    return [
        'title_en' => ucfirst($faker->word),
        'title_mk' => ucfirst($faker->word),
        'description_en' => "EN_" . $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'description_mk' => "MK_" . $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'picture' => $images[array_rand($images)]
    ];
});
