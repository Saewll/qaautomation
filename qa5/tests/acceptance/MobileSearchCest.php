<?php

use Page\Acceptance\Listing;
use Page\Acceptance\Login;
use Page\Acceptance\Search;

class MobileSearchCest
{
   

    // tests
    public function searchFilter(AcceptanceTester $I)
    {
        $I->resizeWindow(320, 480);

        $I->amOnPage(Listing::$URL);
        $I->click(Listing::$searchButton);
        $I->click(Search::$searchSubmitButton);
        $I->click(Listing::$sortSelector);
        $I->click(Listing::$sortSelectorFromMin);
    }


}
