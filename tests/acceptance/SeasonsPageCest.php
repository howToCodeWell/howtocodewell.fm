<?php

/**
 * Class SeasonsPageCest
 */
class SeasonsPageCest
{
    /**
     * @param AcceptanceTester $I
     */
    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantTo('Test the seasons page');
        $I->amOnPage('/season');
        $I->canSeeResponseCodeIs(200);
        $I->canSeeInTitle('How To Code Well Podcast');
    }
}
