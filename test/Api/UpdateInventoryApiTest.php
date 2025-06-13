<?php
/**
 * UpdateInventoryApiTest
 * PHP version 8.3
 *
 * @category Class
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Direct Fulfillment Inventory Updates
 *
 * The Selling Partner API for Direct Fulfillment Inventory Updates provides programmatic access to a direct fulfillment vendor's inventory updates.
 *
 * The version of the OpenAPI document: v1
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
use SpApi\Api\vendor\df\inventory\v1\UpdateInventoryApi;
use SpApi\ObjectSerializer;

/**
 * UpdateInventoryApiTest Class Doc Comment
 *
 * @category Class
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UpdateInventoryApiTest extends BaseTestCase
{
    private UpdateInventoryApi $apiInstance;
    public function setUp(): void
    {
        parent::setUp();
        // Initialize parameter value specific to case
        $this->testHelper->setSpecificValue('UpdateInventoryApi', $this->getName());
        $this->apiInstance = new UpdateInventoryApi($this->config, null);
        // Change Time Format if it requires
        $specificTimeFormat = $this->testHelper->getDateTimeFormatForCase('UpdateInventoryApi');
        if ($specificTimeFormat) {
            ObjectSerializer::setDateTimeFormat($specificTimeFormat);
        }
    }

    /**
     * Test case for submitInventoryUpdate_202
     */
    public function testSubmitInventoryUpdate202()
    {
        try {
            // Skip test if it is in the skip list
            if ($this->testHelper->shouldSkipTest('testSubmitInventoryUpdate202', 'UpdateInventoryApi')) {
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
        &quot;$ref&quot; : &quot;#/components/schemas/SubmitInventoryUpdateResponse&quot;
      }
    }
  },
  &quot;x-amzn-api-sandbox&quot; : {
    &quot;static&quot; : [ {
      &quot;request&quot; : {
        &quot;parameters&quot; : {
          &quot;body&quot; : {
            &quot;value&quot; : {
              &quot;inventory&quot; : {
                &quot;sellingParty&quot; : {
                  &quot;partyId&quot; : &quot;VENDORID&quot;
                },
                &quot;isFullUpdate&quot; : false,
                &quot;items&quot; : [ {
                  &quot;buyerProductIdentifier&quot; : &quot;ABCD4562&quot;,
                  &quot;vendorProductIdentifier&quot; : &quot;7Q89K11&quot;,
                  &quot;availableQuantity&quot; : {
                    &quot;amount&quot; : 10,
                    &quot;unitOfMeasure&quot; : &quot;Each&quot;
                  },
                  &quot;isObsolete&quot; : false
                }, {
                  &quot;buyerProductIdentifier&quot; : &quot;ABCD4563&quot;,
                  &quot;vendorProductIdentifier&quot; : &quot;7Q89K12&quot;,
                  &quot;availableQuantity&quot; : {
                    &quot;amount&quot; : 15,
                    &quot;unitOfMeasure&quot; : &quot;Each&quot;
                  },
                  &quot;isObsolete&quot; : false
                }, {
                  &quot;buyerProductIdentifier&quot; : &quot;ABCD4564&quot;,
                  &quot;vendorProductIdentifier&quot; : &quot;7Q89K13&quot;,
                  &quot;availableQuantity&quot; : {
                    &quot;amount&quot; : 20,
                    &quot;unitOfMeasure&quot; : &quot;Each&quot;
                  },
                  &quot;isObsolete&quot; : false
                } ]
              }
            }
          }
        }
      },
      &quot;response&quot; : {
        &quot;payload&quot; : {
          &quot;transactionId&quot; : &quot;20190905010908-8a3b6901-ef20-412f-9270-21c021796605&quot;
        }
      }
    }, {
      &quot;request&quot; : {
        &quot;parameters&quot; : {
          &quot;body&quot; : { }
        }
      },
      &quot;response&quot; : {
        &quot;payload&quot; : {
          &quot;transactionId&quot; : &quot;mock-TransactionId-20190905010908-8a3b6901-ef20-412f-9270-21c021796605&quot;
        }
      }
    } ]
  }
}';
            $result = $this->testHelper->extractRequestAndResponse(
                $this->apiInstance,
                $jsonSchema,
                'submitInventoryUpdate'
            );
            $requestParams = $result['requestParams'];
            $expectedResponse = $result['expectedResponse'];

            // Change Time Format if it requires
            $specificTimeFormat = $this->testHelper->getDateTimeFormatForCase('UpdateInventoryApi');
            if ($specificTimeFormat) {
                ObjectSerializer::setDateTimeFormat($specificTimeFormat);
            }

            // Act: Call API
            list($response, $statusCode, $headers) =
                $this->apiInstance->submitInventoryUpdateWithHttpInfo(...array_values($requestParams));

            // Assert the response code
            $this->assertHttpStatusCode(202, $statusCode);

            // Handle different response codes
            $this->handleResponse($response, $statusCode, 202, $expectedResponse);
        } catch (ApiException $e) {
            $this->handleApiException($e, 202);
        } catch (\ReflectionException $e) {
            $this->fail("Reflection exception: " . $e->getMessage());
        }
    }
    /**
     * Test case for submitInventoryUpdate_400
     */
    public function testSubmitInventoryUpdate400()
    {
        try {
            // Skip test if it is in the skip list
            if ($this->testHelper->shouldSkipTest('testSubmitInventoryUpdate400', 'UpdateInventoryApi')) {
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
        &quot;$ref&quot; : &quot;#/components/schemas/SubmitInventoryUpdateResponse&quot;
      }
    }
  },
  &quot;x-amzn-api-sandbox&quot; : {
    &quot;static&quot; : [ {
      &quot;request&quot; : {
        &quot;parameters&quot; : {
          &quot;warehouseId&quot; : {
            &quot;value&quot; : &quot;DUMMYCODE&quot;
          }
        }
      },
      &quot;response&quot; : {
        &quot;errors&quot; : [ {
          &quot;code&quot; : &quot;InvalidInput&quot;,
          &quot;message&quot; : &quot;Invalid transmission ID.&quot;,
          &quot;details&quot; : &quot;&quot;
        } ]
      }
    } ]
  }
}';
            $result = $this->testHelper->extractRequestAndResponse(
                $this->apiInstance,
                $jsonSchema,
                'submitInventoryUpdate'
            );
            $requestParams = $result['requestParams'];
            $expectedResponse = $result['expectedResponse'];

            // Change Time Format if it requires
            $specificTimeFormat = $this->testHelper->getDateTimeFormatForCase('UpdateInventoryApi');
            if ($specificTimeFormat) {
                ObjectSerializer::setDateTimeFormat($specificTimeFormat);
            }

            // Act: Call API
            list($response, $statusCode, $headers) =
                $this->apiInstance->submitInventoryUpdateWithHttpInfo(...array_values($requestParams));

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
     * Test case for submitInventoryUpdate_403
     */
    public function testSubmitInventoryUpdate403()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for submitInventoryUpdate_404
     */
    public function testSubmitInventoryUpdate404()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for submitInventoryUpdate_413
     */
    public function testSubmitInventoryUpdate413()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for submitInventoryUpdate_415
     */
    public function testSubmitInventoryUpdate415()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for submitInventoryUpdate_429
     */
    public function testSubmitInventoryUpdate429()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for submitInventoryUpdate_500
     */
    public function testSubmitInventoryUpdate500()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for submitInventoryUpdate_503
     */
    public function testSubmitInventoryUpdate503()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
}
