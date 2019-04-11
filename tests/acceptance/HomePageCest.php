<?php

/**
 * Class HomePageCest
 */
class HomePageCest
{
    /**
     * @param AcceptanceTester $I
     */
    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantTo('Test the homepage');
        $I->amOnPage('/');
        $I->canSeeResponseCodeIs(200);
        $I->canSeeInTitle('How To Code Well Podcast');
    }
}
