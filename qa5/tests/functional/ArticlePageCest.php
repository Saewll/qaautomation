<?php

use Helper\Functional;

class ArticlePageCest
{

    // tests
    public function checkArticlePageList(FunctionalTester $I)
    {
        $I->amOnPage('');
        $I->seeElement('#app > div.tm-layout__wrapper > div.tm-layout > div.tm-base-layout__header.tm-base-layout__header_is-sticky > div > div > div.tm-main-menu > div > nav > a:nth-child(2)');
        codecept_debug($I->grabTextFrom('#app > div.tm-layout__wrapper > div.tm-layout > div.tm-base-layout__header.tm-base-layout__header_is-sticky > div > div > div.tm-main-menu > div > nav > a.tm-main-menu__item.router-link-exact-active.tm-main-menu__item_active'));      
        $I->click('#app > div.tm-layout__wrapper > div.tm-layout > div.tm-base-layout__header.tm-base-layout__header_is-sticky > div > div > div.tm-main-menu > div > nav > a:nth-child(2)');



    }


}
