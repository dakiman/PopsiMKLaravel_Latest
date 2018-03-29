<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    $images = ['fotografia_1.jpg', 'fotografia_2.jpg', 'fotografia_3.jpg', 'fotografia_4.jpg', 'lanec_4.jpg', 'lanec_5_1.jpg', 'lanec_6_1.jpg', 'lanec_7.jpg'];
    return [
        'title_en' => ucfirst($faker->word),
        'title_mk' => ucfirst($faker->word),
        'description_en' => "EN_" . $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'description_mk' => "MK_" . $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'picture' => $images[array_rand($images)]
    ];
});
