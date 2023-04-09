<?php
require_once 'vendor/autoload.php';

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();
// generate data by calling methods
echo $faker->name() . "\n";
// echo $faker->email() . "\n";
//echo $faker->text() . "\n";
echo "7". $faker->randomNumber(8, true)."\n";

$regex = '/(0|254){1}[7]{1}([0-2]{1}[0-9]{1}|[9]{1}[0-2]{1})[0-9]{6}/';
 $samplePhoneNumber = $faker->regexify($regex);

 echo $samplePhoneNumber;