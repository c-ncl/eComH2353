Feature: google
  In order to find stuuf on the Web
  As a generic person on Google
  I need to be able to input text and get results

  Scenario: try google
  	Given I am on Google
  	When I input "dog" in "q"
  	And I press "Search"
    Then I see "dog"

  Scenario: try google
    Given I am on Google
    When I input "cat" in "q"
    And I press "Search"
    Then I see "cat"

  Scenario: try google
    Given I am on Google
    When I input "dog" in "q"
    And I press "Search"
    Then I don't see "Bounty Hunter"