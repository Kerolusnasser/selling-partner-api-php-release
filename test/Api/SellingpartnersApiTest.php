<?php
/**
 * SellingpartnersApiTest
 * PHP version 8.3
 *
 * @category Class
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Replenishment
 *
 * The Selling Partner API for Replenishment (Replenishment API) provides programmatic access to replenishment program metrics and offers. These programs provide recurring delivery of any replenishable item at a frequency chosen by the customer.  The Replenishment API is available worldwide wherever Amazon Subscribe & Save is available or is supported. The API is available to vendors and FBA selling partners.
 *
 * The version of the OpenAPI document: 2022-11-07
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the endpoint.
 */

namespace SpApi\Test\Api;

use SpApi\ApiException;
use SpApi\Api\replenishment\v2022_11_07\SellingpartnersApi;
use SpApi\ObjectSerializer;

/**
 * SellingpartnersApiTest Class Doc Comment
 *
 * @category Class
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SellingpartnersApiTest extends BaseTestCase
{
    private SellingpartnersApi $apiInstance;
    public function setUp(): void
    {
        parent::setUp();
        // Initialize parameter value specific to case
        $this->testHelper->setSpecificValue('SellingpartnersApi', $this->getName());
        $this->apiInstance = new SellingpartnersApi($this->config, null);
        // Change Time Format if it requires
        $specificTimeFormat = $this->testHelper->getDateTimeFormatForCase('SellingpartnersApi');
        if ($specificTimeFormat) {
            ObjectSerializer::setDateTimeFormat($specificTimeFormat);
        }
    }

    /**
     * Test case for getSellingPartnerMetrics_200
     */
    public function testGetSellingPartnerMetrics200()
    {
        try {
            // Skip test if it is in the skip list
            if ($this->testHelper->shouldSkipTest('testGetSellingPartnerMetrics200', 'SellingpartnersApi')) {
                $this->assertTrue(true);
                return;
            }
            $jsonSchema = '{
  &quot;description&quot; : &quot;Success.&quot;,
  &quot;headers&quot; : {
    &quot;x-amzn-RequestId&quot; : {
      &quot;description&quot; : &quot;Unique request reference identifier.&quot;,
      &quot;schema&quot; : {
        &quot;type&quot; : &quot;string&quot;
      }
    },
    &quot;x-amzn-RateLimit-Limit&quot; : {
      &quot;description&quot; : &quot;Your rate limit (requests per second) for this operation.&quot;,
      &quot;schema&quot; : {
        &quot;type&quot; : &quot;string&quot;
      }
    }
  },
  &quot;content&quot; : {
    &quot;application/json&quot; : {
      &quot;schema&quot; : {
        &quot;$ref&quot; : &quot;#/components/schemas/GetSellingPartnerMetricsResponse&quot;
      },
      &quot;example&quot; : {
        &quot;metrics&quot; : [ {
          &quot;subscriberAverageRevenue&quot; : 125.93,
          &quot;nonSubscriberAverageRevenue&quot; : 73.62,
          &quot;shippedSubscriptionUnits&quot; : 5290,
          &quot;notDeliveredDueToOOS&quot; : 5.54,
          &quot;totalSubscriptionsRevenue&quot; : 131340.24,
          &quot;activeSubscriptions&quot; : 0,
          &quot;lostRevenueDueToOOS&quot; : 38493.29,
          &quot;subscriberAverageReorders&quot; : 3.25,
          &quot;nonSubscriberAverageReorders&quot; : 1.11,
          &quot;couponsRevenuePenetration&quot; : 0.0,
          &quot;revenueFromSubscriptionsWithMultipleDeliveries&quot; : 98623.04,
          &quot;revenueFromActiveSubscriptionsWithSingleDelivery&quot; : 30345.2,
          &quot;revenueFromCancelledSubscriptionsAfterSingleDelivery&quot; : 2372.0,
          &quot;subscriberRetentionFor30Days&quot; : 94.43,
          &quot;subscriberRetentionFor90Days&quot; : 78.43,
          &quot;revenuePenetrationFor0PercentSellerFunding&quot; : 10.23,
          &quot;revenuePenetrationFor5PercentSellerFunding&quot; : 22.2,
          &quot;revenuePenetrationFor10PercentSellerFunding&quot; : 67.57,
          &quot;shareOfCouponSubscriptions&quot; : 17.32,
          &quot;currencyCode&quot; : &quot;USD&quot;,
          &quot;timeInterval&quot; : {
            &quot;endDate&quot; : &quot;2023-05-09T22:36:56Z&quot;,
            &quot;startDate&quot; : &quot;2022-05-09T22:36:56Z&quot;
          }
        } ]
      }
    }
  },
  &quot;x-amzn-api-sandbox&quot; : {
    &quot;static&quot; : [ {
      &quot;request&quot; : {
        &quot;parameters&quot; : {
          &quot;body&quot; : {
            &quot;value&quot; : {
              &quot;aggregationFrequency&quot; : &quot;YEAR&quot;,
              &quot;timeInterval&quot; : {
                &quot;startDate&quot; : &quot;2022-01-01T00:00:00Z&quot;,
                &quot;endDate&quot; : &quot;2022-12-31T00:00:00Z&quot;
              },
              &quot;metrics&quot; : [ &quot;TOTAL_SUBSCRIPTIONS_REVENUE&quot; ],
              &quot;timePeriodType&quot; : &quot;PERFORMANCE&quot;,
              &quot;marketplaceId&quot; : &quot;ATVPDKIKX0DER&quot;,
              &quot;programTypes&quot; : [ &quot;SUBSCRIBE_AND_SAVE&quot; ]
            }
          }
        }
      },
      &quot;response&quot; : {
        &quot;metrics&quot; : [ {
          &quot;subscriberAverageRevenue&quot; : 125.93,
          &quot;nonSubscriberAverageRevenue&quot; : 73.62,
          &quot;shippedSubscriptionUnits&quot; : 5290,
          &quot;notDeliveredDueToOOS&quot; : 5.54,
          &quot;totalSubscriptionsRevenue&quot; : 131340.24,
          &quot;activeSubscriptions&quot; : 0,
          &quot;lostRevenueDueToOOS&quot; : 38493.29,
          &quot;subscriberAverageReorders&quot; : 3.25,
          &quot;nonSubscriberAverageReorders&quot; : 1.11,
          &quot;couponsRevenuePenetration&quot; : 0.0,
          &quot;revenueFromSubscriptionsWithMultipleDeliveries&quot; : 98623.04,
          &quot;revenueFromActiveSubscriptionsWithSingleDelivery&quot; : 30345.2,
          &quot;revenueFromCancelledSubscriptionsAfterSingleDelivery&quot; : 2372.0,
          &quot;subscriberRetentionFor30Days&quot; : 94.43,
          &quot;subscriberRetentionFor90Days&quot; : 78.43,
          &quot;revenuePenetrationFor0PercentSellerFunding&quot; : 10.23,
          &quot;revenuePenetrationFor5PercentSellerFunding&quot; : 22.2,
          &quot;revenuePenetrationFor10PercentSellerFunding&quot; : 67.57,
          &quot;shareOfCouponSubscriptions&quot; : 17.32,
          &quot;currencyCode&quot; : &quot;USD&quot;,
          &quot;timeInterval&quot; : {
            &quot;endDate&quot; : &quot;2023-05-09T22:36:56Z&quot;,
            &quot;startDate&quot; : &quot;2022-05-09T22:36:56Z&quot;
          }
        } ]
      }
    } ]
  }
}';
            $result = $this->testHelper->extractRequestAndResponse(
                $this->apiInstance,
                $jsonSchema,
                'getSellingPartnerMetrics'
            );
            $requestParams = $result['requestParams'];
            $expectedResponse = $result['expectedResponse'];

            // Change Time Format if it requires
            $specificTimeFormat = $this->testHelper->getDateTimeFormatForCase('SellingpartnersApi');
            if ($specificTimeFormat) {
                ObjectSerializer::setDateTimeFormat($specificTimeFormat);
            }

            // Act: Call API
            list($response, $statusCode, $headers) =
                $this->apiInstance->getSellingPartnerMetricsWithHttpInfo(...array_values($requestParams));

            // Assert the response code
            $this->assertHttpStatusCode(200, $statusCode);

            // Handle different response codes
            $this->handleResponse($response, $statusCode, 200, $expectedResponse);
        } catch (ApiException $e) {
            $this->handleApiException($e, 200);
        } catch (\ReflectionException $e) {
            $this->fail("Reflection exception: " . $e->getMessage());
        }
    }
    /**
     * Test case for getSellingPartnerMetrics_400
     */
    public function testGetSellingPartnerMetrics400()
    {
        try {
            // Skip test if it is in the skip list
            if ($this->testHelper->shouldSkipTest('testGetSellingPartnerMetrics400', 'SellingpartnersApi')) {
                $this->assertTrue(true);
                return;
            }
            $jsonSchema = '{
  &quot;description&quot; : &quot;Request has missing or invalid parameters and cannot be parsed.&quot;,
  &quot;headers&quot; : {
    &quot;x-amzn-RequestId&quot; : {
      &quot;description&quot; : &quot;Unique request reference identifier.&quot;,
      &quot;schema&quot; : {
        &quot;type&quot; : &quot;string&quot;
      }
    },
    &quot;x-amzn-RateLimit-Limit&quot; : {
      &quot;description&quot; : &quot;Your rate limit (requests per second) for this operation.&quot;,
      &quot;schema&quot; : {
        &quot;type&quot; : &quot;string&quot;
      }
    }
  },
  &quot;content&quot; : {
    &quot;application/json&quot; : {
      &quot;schema&quot; : {
        &quot;$ref&quot; : &quot;#/components/schemas/ErrorList&quot;
      }
    }
  },
  &quot;x-amzn-api-sandbox&quot; : {
    &quot;static&quot; : [ {
      &quot;request&quot; : {
        &quot;parameters&quot; : {
          &quot;body&quot; : {
            &quot;value&quot; : {
              &quot;aggregationFrequency&quot; : &quot;DAY&quot;,
              &quot;timeInterval&quot; : {
                &quot;startDate&quot; : &quot;2022-01-01T00:00:00Z&quot;,
                &quot;endDate&quot; : &quot;2023-01-01T00:00:00Z&quot;
              },
              &quot;metrics&quot; : [ &quot;SHIPPED_SUBSCRIPTION_UNITS&quot;, &quot;TOTAL_SUBSCRIPTIONS_REVENUE&quot;, &quot;NOT_DELIVERED_DUE_TO_OOS&quot;, &quot;ACTIVE_SUBSCRIPTIONS&quot;, &quot;SUBSCRIBER_NON_SUBSCRIBER_AVERAGE_REVENUE&quot;, &quot;LOST_REVENUE_DUE_TO_OOS&quot;, &quot;SUBSCRIBER_NON_SUBSCRIBER_AVERAGE_REORDERS&quot;, &quot;COUPONS_REVENUE_PENETRATION&quot; ],
              &quot;timePeriodType&quot; : &quot;PERFORMANCE&quot;,
              &quot;marketplaceId&quot; : &quot;ATVPDKIKX0DER&quot;,
              &quot;programTypes&quot; : [ &quot;SUBSCRIBE_AND_SAVE&quot; ]
            }
          }
        }
      },
      &quot;response&quot; : {
        &quot;errors&quot; : [ {
          &quot;code&quot; : &quot;InvalidInput&quot;,
          &quot;message&quot; : &quot;Unsupported aggregationFrequency is provided. Only WEEK, MONTH, QUARTER and YEAR are supported&quot;
        } ]
      }
    } ]
  }
}';
            $result = $this->testHelper->extractRequestAndResponse(
                $this->apiInstance,
                $jsonSchema,
                'getSellingPartnerMetrics'
            );
            $requestParams = $result['requestParams'];
            $expectedResponse = $result['expectedResponse'];

            // Change Time Format if it requires
            $specificTimeFormat = $this->testHelper->getDateTimeFormatForCase('SellingpartnersApi');
            if ($specificTimeFormat) {
                ObjectSerializer::setDateTimeFormat($specificTimeFormat);
            }

            // Act: Call API
            list($response, $statusCode, $headers) =
                $this->apiInstance->getSellingPartnerMetricsWithHttpInfo(...array_values($requestParams));

            // Assert the response code
            $this->assertHttpStatusCode(400, $statusCode);

            // Handle different response codes
            $this->handleResponse($response, $statusCode, 400, $expectedResponse);
        } catch (ApiException $e) {
            $this->handleApiException($e, 400);
        } catch (\ReflectionException $e) {
            $this->fail("Reflection exception: " . $e->getMessage());
        }
    }
    /**
     * Test case for getSellingPartnerMetrics_401
     */
    public function testGetSellingPartnerMetrics401()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for getSellingPartnerMetrics_403
     */
    public function testGetSellingPartnerMetrics403()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for getSellingPartnerMetrics_404
     */
    public function testGetSellingPartnerMetrics404()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for getSellingPartnerMetrics_413
     */
    public function testGetSellingPartnerMetrics413()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for getSellingPartnerMetrics_415
     */
    public function testGetSellingPartnerMetrics415()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for getSellingPartnerMetrics_429
     */
    public function testGetSellingPartnerMetrics429()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for getSellingPartnerMetrics_500
     */
    public function testGetSellingPartnerMetrics500()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for getSellingPartnerMetrics_503
     */
    public function testGetSellingPartnerMetrics503()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
}
