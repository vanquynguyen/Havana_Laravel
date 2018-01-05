<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
| + 20 Category
| + 10 Bill
| + 50 Bill details
| + 20 Users
| + 50 Products
| + 150 images detail
| + 4 Size
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'phone' => $faker->e164PhoneNumber,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('000000'),
        'remember_token' =>  bcrypt('token'),
    ];
});

$factory->define(App\Categories::class, function (Faker $faker) {

    return [
        'name' => $faker->name,
        'alias' => $faker->slug,
        'parent_id' => $faker->numberBetween($min = 0, $max = 20),
        'description' => $faker->text(),
    ];
});

$factory->define(App\Bill::class, function (Faker $faker) {

    return [
        'total' => $faker->numberBetween($min = 10000, $max = 2000000),
        'status' => $faker->numberBetween($min = 0, $max = 2),
        'note' => $faker->text(),
        'address' => $faker->address,
        'phone' => $faker->e164PhoneNumber,
        'user_id' => $faker->numberBetween($min = 1, $max = 20)
    ];
});

$factory->define(App\Post::class, function (Faker $faker) {

    return [
        'title' => $faker->text(),
        'content' => $faker->text(),
        'user_id' => $faker->numberBetween($min = 1, $max = 20)
    ];
});

$factory->define(App\BillDetail::class, function (Faker $faker) {

    return [
        'product_id' => $faker->numberBetween($min = 1, $max = 200),
        'unit_price' => $faker->numberBetween($min = 10000, $max = 2000000),
        'quantity' => $faker->numberBetween($min = 1, $max = 50),
        'bill_id' => $faker->numberBetween($min = 1, $max = 10)
    ];
});

$factory->define(App\Comment::class, function (Faker $faker) {

    return [
        'content' => $faker->numberBetween($min = 1, $max = 200),
        'commentable_id' => $faker->numberBetween($min = 1, $max = 150),
        'commentable_type' => 'App\Product',
        'user_id' => $faker->numberBetween($min = 1, $max = 50)
    ];
});

$factory->define(App\Product::class, function (Faker $faker) {

    return [
        'name' => $faker->name,
        'slug_name' => $faker->slug,
        'unit_price' => $faker->numberBetween($min = 10000, $max = 2000000),
        'promo_price' => $faker->numberBetween($min = 10000, $max = 2000000),
        'quantity' => $faker->numberBetween($min = 1, $max = 50),
        'description' => $faker->text,
        'image' => 'product.jpg',
        'status' => $faker->numberBetween($min = 1, $max = 2),
        'categories_id' => $faker->numberBetween($min = 1, $max = 20),
    ];
});

$factory->define(App\Size::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
    ];
});

$factory->define(App\Product_Size::class, function (Faker $faker) {

    return [
        'size_id' => $faker->numberBetween($min = 1, $max = 20),
        'product_id' => $faker->numberBetween($min = 1, $max = 20),
    ];
});

$factory->define(App\Image::class, function (Faker $faker) {

    return [
        'name' => 'product_detail.jpg',
        'product_id' => $faker->numberBetween($min = 1, $max = 50),
    ];
});
