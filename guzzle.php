<?php
    require_once 'vendor/autoload.php';

    $client = new \GuzzleHttp\Client();
    $faker = Faker\Factory::create();

    for($i=0; $i<10; $i++){

    $response = $client->request('POST', 'http://localhost:8080/register.php', [
            'form_params' => [
                'names' => $faker->name(),
                'email' => $faker->email(),
                'phone' => "7". $faker->randomNumber(8, true),
                'password' => 'password',
                'password_confirm' => 'password',
                'terms' => 'on'
            ]
        ]);

    echo $response->getStatusCode(); // 200
    }