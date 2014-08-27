<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Features context.
 */
class FeatureContext extends BehatContext
{
    /**
     * Initializes context.
     * Every scenario gets its own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
    }

    /**
     * @Given /^I am creating a database and table$/
     */
    public function iAmCreatingADatabaseAndTable()
    {
	//../../data/create_datebase_table
    }

    /**
     * @When /^I inserting value into table$/
     */
    public function iInsertingValueIntoTable()
    {
	//../../data/insert_value
    }

    /**
     * @Then /^I should get all inserted value$/
     */
    public function iShouldGetAllInsertedValue()
    {
	//../../data/select_value
    }
	
	/**
     * @Given /^I am creating something wrong$/
     */
    public function iAmCreatingSomethingWrong()
    {
		hh
    }

    /**
     * @When /^I type something wrong$/
     */
    public function iTypeSomethingWrong()
    {
		dd
    }

    /**
     * @Then /^I should get failed result$/
     */
    public function iShouldGetFailedResult()
    {
		dd
    }
}
