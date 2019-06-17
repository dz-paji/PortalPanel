<?php

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'school' => $faker->school,
        'phone' => $faker->phone,
        'age' => $faker->age,
        'gender' => $faker->gender,
        'id_number' => $faker->id_number,
        'birthday' => $faker->birthday,
        'address' => $faker->address,
        'ethnic' => $faker->ethnic,
        'subject' => $faker->subject,
        'wechat' => $faker->wechat,
        'contact_other' => $faker->contact_other,
        'room_set' => $faker->room_set,
        'roommate' => $faker->roommate,
        'is_paid' => '0',
        'payment_gateway' => '',
        'invoice_id' => '',
        'remember_token' => Str::random(10),
    ];
});
