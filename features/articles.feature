@articles
Feature: Articles
  As an API consumer
  I need to be able to manage the articles

  Scenario: Retrieve the unfiltered list of articles
    When I send GET request to "/article"
    Then echo last response
