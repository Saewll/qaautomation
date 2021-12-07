<?php

use Page\Acceptance\Listing;
use Page\Acceptance\Login;
use Page\Acceptance\Search;

class MobileSearchCest
{
    public $mobileEmulation = true;


    // tests
    public function searchFilter(AcceptanceTester $I)
    {

        $I->emulationMobile('iPhone 8 Plus');

        $I->amOnPage(Listing::$URL);
        $I->click(Listing::$searchButton);
        $I->click(Search::$searchSubmitButton);
        $I->click(Listing::$sortSelector);
        $I->click(Listing::$sortSelectorFromMin);
    }


}
