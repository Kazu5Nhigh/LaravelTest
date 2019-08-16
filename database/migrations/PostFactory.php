# database/migrations/PostFactory.php

<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => 'こんにちは〜〜',
        'body' => "今日はとっても良い天気！\n太陽が眩しいめう〜",
    ];
});
