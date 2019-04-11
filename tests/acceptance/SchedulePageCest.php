<?php

/**
 * Class SchedulePageCest
 */
class SchedulePageCest
{
    /**
     * @param AcceptanceTester $I
     */
    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantTo('Test the schedule page');
        $I->amOnPage('/schedule');
        $I->canSeeResponseCodeIs(200);
        $I->canSeeInTitle('Schedule');
    }
}
