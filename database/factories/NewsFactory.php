<?php

use Faker\Generator as Faker;

$factory->define(App\News::class, function (Faker $faker) {
//    $images = ['fotografia_1.jpg', 'fotografia_2.jpg', 'fotografia_3.jpg', 'fotografia_4.jpg', 'lanec_4.jpg', 'lanec_5_1.jpg', 'lanec_6_1.jpg', 'lanec_7.jpg'];
//
	$images = ['bearings.bmp', 'codex_chains.bmp', 'codex1.png', 'codex4.bmp', 'codex8.bmp'];

    return [
        'title_mk' => ucfirst($faker->sentence($nbWords=3)),
        'title_en' => ucfirst($faker->sentence($nbWords=3)),
        'description_mk' => $faker->paragraph($nbSentences = 20, $variableSentences = true),
        'description_en' => $faker->paragraph($nbSentences = 20, $variableSentences = true),
        'pictures' => $images[array_rand($images)]
    ];
});
