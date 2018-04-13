Feature: Search mequilibrium
  In order to learn about running tests
  As a passionate QA
  I need to find a link and open it
 
Scenario: Search Mequilibrium for PRIVACY [UPDATED]
  Given I am in mequilibrium
  When I click on "PRIVACY [UPDATED]"
  Then the last updated should be "FEBRUARY 2, 2018"