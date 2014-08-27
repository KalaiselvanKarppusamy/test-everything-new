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

//
// Place your definition and hook methods here:
//
//    /**
//     * @Given /^I have done something with "([^"]*)"$/
//     */
//    public function iHaveDoneSomethingWith($argument)
//    {
//        doSomethingWith($argument);
//    }
//

/**
     * @Given /^I am in a directory "([^"]*)"$/
     */
    public function iAmInADirectory($arg1)
    {

    }

    /**
     * @Given /^I have a file named "([^"]*)"$/
     */
    public function iHaveAFileNamed($arg1)
    {

    }

    /**
     * @When /^I run "([^"]*)"$/
     */
    public function iRun($arg1)
    {

    }

    /**
     * @Then /^I should get:$/
     */
    public function iShouldGet(PyStringNode $string)
    {

    }
	
	  /**
   * @Given /^a is (\d+)$/
   */
  public function aIs($arg1)
  {
      
  }

  /**
   * @Given /^b is (\d+)$/
   */
  public function bIs($arg1)
  {
      
  }

  /**
   * @When /^I enter equal$/
   */
  public function iEnterEqual()
  {
      
  }

  /**
   * @Then /^I should get (\d+)$/
   */
  public function iShouldGet2($arg1)
  {
      
  }
}
