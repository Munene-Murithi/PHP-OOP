<?php
    require_once 'vendor/autoload.php';

    $client = new \GuzzleHttp\Client();
    $faker = Faker\Factory::create();
    $regex = '/(0|254){1}[7]{1}([0-2]{1}[0-9]{1}|[9]{1}[0-2]{1})[0-9]{6}/';
    // $samplePhoneNumber = $faker->regexify($regex);

    for($i=0; $i<50; $i++){

    $response = $client->request('POST', 'http://localhost:8080/register.php', [
            'form_params' => [
                'names' => $faker->name(),
                'email' => $faker->email(),
                'phone' => $samplePhoneNumber = $faker->regexify($regex),
                'password' => 'password',
                'password_confirm' => 'password',
                'terms' => 'on'
            ]
        ]);

    echo $response->getStatusCode(); // 200
    }