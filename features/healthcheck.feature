
Feature: service healtcheck

  A basic endpoint to test JSON API is functioning

  Scenario: healthcheck
    Given I request "/ping" using HTTP GET
    Then the response code is 200
    And the response body is:
    """
    {"response":"pong"}
    """
