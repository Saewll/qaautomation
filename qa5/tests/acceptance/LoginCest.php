<?php

use Page\Acceptance\Login;

class LoginCest
{
   

    // tests
    public function failedLogin(AcceptanceTester $I)
    {
        $failedLogin= new Login($I);
        $I->amOnPage(Login::$URL);
        $failedLogin->fillFiledLogin()->fillFiledPassword()
        ->clickLoginButton()->seeErrorMessage()->clickCancelError()
        ->seeNoError();
    }


}
