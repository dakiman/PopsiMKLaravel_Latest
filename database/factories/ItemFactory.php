<?php

use Faker\Generator as Faker;

$factory->define(App\Item::class, function (Faker $faker) {
//    $images = ['fotografia_1.jpg', 'fotografia_2.jpg', 'fotografia_3.jpg', 'fotografia_4.jpg', 'lanec_4.jpg', 'lanec_5_1.jpg', 'lanec_6_1.jpg', 'lanec_7.jpg'];
//	$images = ['bearings.bmp'];
	$images = ['bearings.bmp', 'codex_chains.bmp', 'codex1.png', 'codex4.bmp', 'codex8.bmp'];

	shuffle($images);
    return [
        'category_id' => 1,
        'title_en' => ucfirst($faker->word) . "_en",
        'title_mk' => ucfirst($faker->word) . "_mk",
        'description_en' => "EN_" . $faker->paragraph($nbSentences = 2, $variableNbSentences = true),
        'description_mk' => "MK_" . $faker->paragraph($nbSentences = 2, $variableNbSentences = true),
        // 'pictures' => $images[array_rand($images)]
        'pictures' => serialize($images),
    ];
});
