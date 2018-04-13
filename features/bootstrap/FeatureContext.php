<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

use Behat\MinkExtension\Context\RawMinkContext;
/**
 * Defines application features from the specific context.
 */
class FeatureContext extends RawMinkContext implements Context, SnippetAcceptingContext
{
    /**
    *  @Given I am in mequilibrium
    */
    public function iamInMequilibrium()
    {
        $this->visitPath("/");
    }

    /**
     * @When I click on :arg1
     */
    public function iClickOn($arg1)
    {
        $this->getSession()->getPage()->find('xpath', '//*[@id="footer-link-157"]/a')->click();
    }

    /**
     * @Then the last updated should be :heading
     */
    public function theLastUpdatedShouldBe($heading)
    {
        $PageHeading = $this->getSession()->getPage()->find('xpath', '//*[@id="primary"]/div/div/div[1]/p');
    }
}
