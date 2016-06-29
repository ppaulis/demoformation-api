@articles
Feature: Chains
  As an API consumer
  I need to be able to retrieve the chains

  Scenario: Retrieve the unfiltered list of chains
    When I send GET request to "/article"
    Then echo last response
