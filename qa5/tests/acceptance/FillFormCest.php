<?php

use Faker\Factory;
use Helper\CustomFakerProvider;
use Page\Acceptance\Form;

class FillFormCest
{
   

    // tests
    public function fillCard(AcceptanceTester $I)
    {
       
        $faker=Factory::create('ru_RU');
        $faker->addProvider(new CustomFakerProvider($faker));
        $firstName=$faker->firstName;
        $lastName=$faker->lastName;
        $email=$faker->email;
        $phone=$faker->phoneNumber;
        $street=$faker->streetAddress;
        $city=$faker->city;
        $state=$faker->city;
        $postcode=$faker->postcode;
        $cardFirstName=$faker->firstName;
        $cardLastName=$faker->firstName;
        $cardNumber=$I->getFaker()->getCards;
        $cardSecurity=$faker->creditCardNumber;
        

        $I->amOnPage(Form::$URL);
        $I->fillField(Form::$firstName,$firstName);
        $I->fillField(Form::$lastName,$lastName);
        $I->fillField(Form::$email,$email);
        $I->fillField(Form::$phone,$phone);
        $I->fillField(Form::$street,$street);
        $I->fillField(Form::$city,$city);
        $I->fillField(Form::$state,$state);
        $I->fillField(Form::$postcode,$postcode);
        $I->click(Form::$clickPaymentCredit);
        $I->fillField(Form::$cardFirstName,$cardFirstName);
        $I->fillField(Form::$cardLastName,$cardLastName);
        $I->fillField(Form::$cardNumber,$cardNumber);
        $I->fillField(Form::$cardSecurity,$cardSecurity);
        $I->wait(100);

        $I->click(Form::$registerButton);
        $I->wait(100);


    }


}
