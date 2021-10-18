<?php

class SearchCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function checkSearch(AcceptanceTester $I)
    {
    
        $I->amOnPage('');
        $I->seeElement('#headerSearch');
        $I->click('#headerSearch');
        $I->fillField('#headerSearch','самокат');
        $I->pressKey('#headerSearch',\Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->seeNumberOfElements('#offers_table > tbody > tr',43);
    }


}
