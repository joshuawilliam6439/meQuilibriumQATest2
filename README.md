                 meQuilibrium QA Report                                                                                                                                    Joshua W. Nungesser
                                                                                                                                                                               04/09/2018
                                                                 (Edit)04/23/2018                                                                                                             
                                                                                                                                                                                    
                 Introduction:
                 The purpose of this report is to chart progress made by the author in regards to a technical interview question given by QA Engineer Aziz Karakhanyan. The question was given on April 2nd, 2018 to be completed one week later on April 9th.
                 (Edited):
                 Test was edited and completed on April 12th.
                 
                 Overview: 
                 Using Behat and Selenium running on a laptop, write and execute a feature test to ensure that mequilibrium.com’s privacy policy clicks through from the home page, and that it contains the appropriate update date.  A Chrome browser may be used for the test.  Once the test is running, write up a brief report of the results, and share the code. Any and all resources available are to be used.
                 
                 Assessment: 
                 1. Created directory meQuilibriumQA.
                 2. Using https://getcomposer.org/download/ as a guide, added Composer into the directory root.
                 3. Created composer.json file in root to create a (simple) assertion library and ran $ composer install to add necessary packages such as Behat, Mink, and Selenium driver. Ran $ ./bin/manager update to pull down latest versions of Selenium and Chromedriver.
                 4. Added behat.yml to root. Included MinkExtentsion, set base url, chrome as browser name, and selected selenium as session driver.
                 5. Using terminal command $ ./bin/behat --init, created a features folder and a feature.context file within it.
                 6. In features/search.feature wrote a Feature and Scenario designed to implement test as accurately as instructed.
                 7. Ran terminal command $ ./bin/behat --append snippets to add boilerplate code into FeatureContext. Edited @Given to set the stage, @When to click on “Privacy” link, and @Then to create an assertion.
                 8. Ran $ ./bin/manager start in new terminal tab to initialize selenium server and then $ ./bin/behat to initialize test.
                 (Edited):
                 1. Created directory meQuilibriumQATest.
                 2. Git cloned github repository https://github.com/AKarakhanyan/meQuilibrium_QA_test.
                 3. Downloaded chromedriver_mac64 to webdriver-manager/binaries.
                 4. Using terminal command $ ./bin/behat --init, created a features folder and a feature.context file within it.
                 5. In features/search.feature wrote a Feature and Scenario designed to implement test as accurately as instructed.
                 6. Ran $ ./bin/manager start in new terminal tab to initialize selenium server and then $ ./bin/behat to initialize test.

                 Results:
                 Terminal commands to open selenium servers were always successful but connection was consistently unsuccessful. Most common the errors was “Could not open connection: Connection refused (Connection refused) (Behat\Mink\Exception\DriverException)”. Failure of the server would result in 1 scenario (1 failed), 3 steps (1 failed, 2 skipped). Suspected fix of issue lies with behat.yml and the chromedriver.
                 (Edited):
                 Test ran effiecently and completed steps as intended.
                 $ bin/behat
                 Feature: Search mequilibrium
                 In order to learn about running tests
                 As a passionate QA
                 I need to find a link and open it
                 
                 Scenario: Search Mequilibrium for PRIVACY [UPDATED]
                 Given I am in mequilibrium
                 When I click on "PRIVACY [UPDATED]"
                 Then the last updated should be "FEBRUARY 2, 2018"
                 
                 1 scenario (1 passed)
                 3 steps (3 passed)
                 0m9.09s (8.39Mb)
                 

                 Evaluation:
                 About a half dozen different attempts were made of this test but this was my most successful. The failure of the server was an unfortunate barricade to completing the test as designed but with more time there is confidence that it would have been overcome. From here I would continue to work on the behat.yml where I suspect additions to the code would help the test use the chrome browser as intended. (Perhaps wrong version of Chromedriver?) Also syntax regarding the search.feature and FeatureContext.php would require additional tinkering so that the application behaves exactly how intended and not with boilerplate code.. In conclusion, while the purpose of the test was not fulfilled and should be ruled a failure, the project in my opinion is a successful attempt to try my hand at automation and learn how to initialize Behat and Selenium projects in the near future.
                 (Edit):
                 Using Aziz Karakhanyans repository solved most behat and chrome issues besides chromedriver which needed to be updated. While tinkering with the FeatureContext, issues that occured in the syntax of the @When and @Then were solved by switching from css to xpath selectors. The privacy_policy.feature was updated to better reflect parameters of the test. In conclusion, this scenario ran as intended and can be ruled my first true success creating my own tests.
                 
                 
                 Resources: 
                 https://getcomposer.org/download/
                 https://phpunit.de/manual/3.7/en/selenium.html
                 http://www.magecasts.io/tdd/behat.html
                 http://docs.behat.org/en/v2.5/guides/4.context.html
                 http://rbrt.wllr.info/2017/11/22/how-setup-testing-behat-selenium-chrome.html
                 https://inviqa.com/blog/behaviour-driven-development-php-behat
                 https://strongqa.com/qa-portal/testing-docs-templates/test-report
                 (Edit)
                 https://github.com/AKarakhanyan/meQuilibrium_QA_test
                 https://doc.scrapy.org/en/0.12/topics/selectors.html
                 https://blog.mozilla.org/webqa/2013/09/26/writing-reliable-locators-for-selenium-and-webdriver-tests/

