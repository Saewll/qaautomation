<?php

use Codeception\Example;
use Faker\Factory;
use Helper\CustomFakerProvider;
use Page\Acceptance\AdvertData;
use Page\Acceptance\Form;

class FillFormCest
{
   
    /**
     * 
     * 
     * @param Example $data
     * @dataProvider getDataForSearchCarsByBody
     * 
     */
    // tests
    public function fillCard(AcceptanceTester $I,Example $data)
    {
       $I->amOnPage(AdvertData::$URL);
       $I->click(AdvertData::$AdvertButton);
       $I->waitForElement(AdvertData::$categoryAuto);
       $I->click(AdvertData::$categoryAuto);
       $I->click(AdvertData::$subCategoryAuto);
       $I->waitForElement(AdvertData::$carModel);
       $I->click(sprintf(AdvertData::$carModel,$data['selectors']));
       $I->click(AdvertData::$carBody);
       $I->fillField(AdvertData::$carYear);
       $I->fillField(AdvertData::$carPrice);
       $I->click(AdvertData::$torg);
       $I->fillField(AdvertData::$carVolume);
       $I->click(AdvertData::$fuelType);
       $I->click(AdvertData::$engineType);
       $I->fillField(AdvertData::$stepp);
       $I->click(AdvertData::$colorSelector);
       $I->click(AdvertData::$color);
       $I->click(AdvertData::$privod);
       $I->click(AdvertData::$outside);
       $I->click(AdvertData::$optics);
       $I->click(AdvertData::$saloon);
       $I->click(AdvertData::$media);
       $I->click(AdvertData::$options);
       $I->click(AdvertData::$extra);
       $I->click(AdvertData::$ship);
       $I->click(AdvertData::$extraInfo);
       $I->click(AdvertData::$regionList);
       $I->click(AdvertData::$region);
       $I->click(AdvertData::$cityList);
       $I->click(AdvertData::$city);
       $I->fillField(AdvertData::$phone);
       $I->click(AdvertData::$comments);
       $I->click(AdvertData::$acceptPhone);
       $I->click(AdvertData::$acceptAdvert);

    }


       protected function cargetModel(){

        return [
            ['selectors'=>
            random_int(0,2)]];
       }
       

































        


    }



