<?php
namespace Helper;
use Faker\Factory;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class BaseHelper extends \Codeception\Module
{
    public function getFaker($locale='ru_Ru'){
    $faker=Factory::create('ru_RU');
    $faker->addProvider(new CustomFakerProvider($faker));
    return $faker;
    }
}
