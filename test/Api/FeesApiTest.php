<?php
/**
 * FeesApiTest
 * PHP version 8.3
 *
 * @category Class
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Product Fees
 *
 * The Selling Partner API for Product Fees lets you programmatically retrieve estimated fees for a product. You can then account for those fees in your pricing.
 *
 * The version of the OpenAPI document: v0
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
use SpApi\Api\productFees\v0\FeesApi;
use SpApi\ObjectSerializer;

/**
 * FeesApiTest Class Doc Comment
 *
 * @category Class
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FeesApiTest extends BaseTestCase
{
    private FeesApi $apiInstance;
    public function setUp(): void
    {
        parent::setUp();
        // Initialize parameter value specific to case
        $this->testHelper->setSpecificValue('FeesApi', $this->getName());
        $this->apiInstance = new FeesApi($this->config, null);
        // Change Time Format if it requires
        $specificTimeFormat = $this->testHelper->getDateTimeFormatForCase('FeesApi');
        if ($specificTimeFormat) {
            ObjectSerializer::setDateTimeFormat($specificTimeFormat);
        }
    }

    /**
     * Test case for getMyFeesEstimateForASIN_200
     */
    public function testGetMyFeesEstimateForASIN200()
    {
        try {
            // Skip test if it is in the skip list
            if ($this->testHelper->shouldSkipTest('testGetMyFeesEstimateForASIN200', 'FeesApi')) {
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
        &quot;$ref&quot; : &quot;#/components/schemas/GetMyFeesEstimateResponse&quot;
      }
    }
  },
  &quot;x-amzn-api-sandbox&quot; : {
    &quot;static&quot; : [ {
      &quot;request&quot; : {
        &quot;parameters&quot; : {
          &quot;body&quot; : {
            &quot;value&quot; : {
              &quot;FeesEstimateRequest&quot; : {
                &quot;MarketplaceId&quot; : &quot;ATVPDKIKX0DER&quot;,
                &quot;IsAmazonFulfilled&quot; : false,
                &quot;PriceToEstimateFees&quot; : {
                  &quot;ListingPrice&quot; : {
                    &quot;CurrencyCode&quot; : &quot;USD&quot;,
                    &quot;Amount&quot; : 10
                  },
                  &quot;Shipping&quot; : {
                    &quot;CurrencyCode&quot; : &quot;USD&quot;,
                    &quot;Amount&quot; : 10
                  },
                  &quot;Points&quot; : {
                    &quot;PointsNumber&quot; : 0,
                    &quot;PointsMonetaryValue&quot; : {
                      &quot;CurrencyCode&quot; : &quot;USD&quot;,
                      &quot;Amount&quot; : 0
                    }
                  }
                },
                &quot;Identifier&quot; : &quot;UmaS1&quot;
              }
            }
          }
        }
      },
      &quot;response&quot; : {
        &quot;payload&quot; : {
          &quot;FeesEstimateResult&quot; : {
            &quot;Status&quot; : &quot;Success&quot;,
            &quot;FeesEstimateIdentifier&quot; : {
              &quot;MarketplaceId&quot; : &quot;ATVPDKIKX0DER&quot;,
              &quot;IdType&quot; : &quot;ASIN&quot;,
              &quot;SellerId&quot; : &quot;AXXXXXXXXXXXXX&quot;,
              &quot;SellerInputIdentifier&quot; : &quot;UmaS1&quot;,
              &quot;IsAmazonFulfilled&quot; : false,
              &quot;IdValue&quot; : &quot;B00V5DG6IQ&quot;,
              &quot;PriceToEstimateFees&quot; : {
                &quot;ListingPrice&quot; : {
                  &quot;CurrencyCode&quot; : &quot;USD&quot;,
                  &quot;Amount&quot; : 10
                },
                &quot;Shipping&quot; : {
                  &quot;CurrencyCode&quot; : &quot;USD&quot;,
                  &quot;Amount&quot; : 10
                },
                &quot;Points&quot; : {
                  &quot;PointsNumber&quot; : 0,
                  &quot;PointsMonetaryValue&quot; : {
                    &quot;CurrencyCode&quot; : &quot;USD&quot;,
                    &quot;Amount&quot; : 0
                  }
                }
              }
            },
            &quot;FeesEstimate&quot; : {
              &quot;TimeOfFeesEstimation&quot; : &quot;Mon Oct 28 18:49:32 UTC 2019&quot;,
              &quot;TotalFeesEstimate&quot; : {
                &quot;CurrencyCode&quot; : &quot;USD&quot;,
                &quot;Amount&quot; : 3.0
              },
              &quot;FeeDetailList&quot; : [ ]
            },
            &quot;Error&quot; : {
              &quot;Type&quot; : &quot;&quot;,
              &quot;Code&quot; : &quot;&quot;,
              &quot;Message&quot; : &quot;&quot;,
              &quot;Detail&quot; : [ ]
            }
          }
        }
      }
    } ]
  }
}';
            $result = $this->testHelper->extractRequestAndResponse(
                $this->apiInstance,
                $jsonSchema,
                'getMyFeesEstimateForASIN'
            );
            $requestParams = $result['requestParams'];
            $expectedResponse = $result['expectedResponse'];

            // Change Time Format if it requires
            $specificTimeFormat = $this->testHelper->getDateTimeFormatForCase('FeesApi');
            if ($specificTimeFormat) {
                ObjectSerializer::setDateTimeFormat($specificTimeFormat);
            }

            // Act: Call API
            list($response, $statusCode, $headers) =
                $this->apiInstance->getMyFeesEstimateForASINWithHttpInfo(...array_values($requestParams));

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
     * Test case for getMyFeesEstimateForASIN_400
     */
    public function testGetMyFeesEstimateForASIN400()
    {
        try {
            // Skip test if it is in the skip list
            if ($this->testHelper->shouldSkipTest('testGetMyFeesEstimateForASIN400', 'FeesApi')) {
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
        &quot;$ref&quot; : &quot;#/components/schemas/GetMyFeesEstimateResponse&quot;
      }
    }
  },
  &quot;x-amzn-api-sandbox&quot; : {
    &quot;static&quot; : [ {
      &quot;request&quot; : {
        &quot;parameters&quot; : {
          &quot;body&quot; : {
            &quot;value&quot; : {
              &quot;FeesEstimateRequest&quot; : {
                &quot;MarketplaceId&quot; : &quot;WRNGMRKTPLCE&quot;
              }
            }
          }
        }
      },
      &quot;response&quot; : {
        &quot;errors&quot; : [ {
          &quot;code&quot; : &quot;InvalidInput&quot;,
          &quot;message&quot; : &quot;Incorrect Marketplace identifier.&quot;,
          &quot;details&quot; : &quot;&quot;
        } ]
      }
    } ]
  }
}';
            $result = $this->testHelper->extractRequestAndResponse(
                $this->apiInstance,
                $jsonSchema,
                'getMyFeesEstimateForASIN'
            );
            $requestParams = $result['requestParams'];
            $expectedResponse = $result['expectedResponse'];

            // Change Time Format if it requires
            $specificTimeFormat = $this->testHelper->getDateTimeFormatForCase('FeesApi');
            if ($specificTimeFormat) {
                ObjectSerializer::setDateTimeFormat($specificTimeFormat);
            }

            // Act: Call API
            list($response, $statusCode, $headers) =
                $this->apiInstance->getMyFeesEstimateForASINWithHttpInfo(...array_values($requestParams));

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
     * Test case for getMyFeesEstimateForASIN_401
     */
    public function testGetMyFeesEstimateForASIN401()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for getMyFeesEstimateForASIN_403
     */
    public function testGetMyFeesEstimateForASIN403()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for getMyFeesEstimateForASIN_404
     */
    public function testGetMyFeesEstimateForASIN404()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for getMyFeesEstimateForASIN_429
     */
    public function testGetMyFeesEstimateForASIN429()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for getMyFeesEstimateForASIN_500
     */
    public function testGetMyFeesEstimateForASIN500()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for getMyFeesEstimateForASIN_503
     */
    public function testGetMyFeesEstimateForASIN503()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for getMyFeesEstimateForSKU_200
     */
    public function testGetMyFeesEstimateForSKU200()
    {
        try {
            // Skip test if it is in the skip list
            if ($this->testHelper->shouldSkipTest('testGetMyFeesEstimateForSKU200', 'FeesApi')) {
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
        &quot;$ref&quot; : &quot;#/components/schemas/GetMyFeesEstimateResponse&quot;
      }
    }
  },
  &quot;x-amzn-api-sandbox&quot; : {
    &quot;static&quot; : [ {
      &quot;request&quot; : {
        &quot;parameters&quot; : {
          &quot;body&quot; : {
            &quot;value&quot; : {
              &quot;FeesEstimateRequest&quot; : {
                &quot;MarketplaceId&quot; : &quot;ATVPDKIKX0DER&quot;,
                &quot;IsAmazonFulfilled&quot; : false,
                &quot;PriceToEstimateFees&quot; : {
                  &quot;ListingPrice&quot; : {
                    &quot;CurrencyCode&quot; : &quot;USD&quot;,
                    &quot;Amount&quot; : 10
                  },
                  &quot;Shipping&quot; : {
                    &quot;CurrencyCode&quot; : &quot;USD&quot;,
                    &quot;Amount&quot; : 10
                  },
                  &quot;Points&quot; : {
                    &quot;PointsNumber&quot; : 0,
                    &quot;PointsMonetaryValue&quot; : {
                      &quot;CurrencyCode&quot; : &quot;USD&quot;,
                      &quot;Amount&quot; : 0
                    }
                  }
                },
                &quot;Identifier&quot; : &quot;UmaS1&quot;
              }
            }
          }
        }
      },
      &quot;response&quot; : {
        &quot;payload&quot; : {
          &quot;FeesEstimateResult&quot; : {
            &quot;Status&quot; : &quot;Success&quot;,
            &quot;FeesEstimateIdentifier&quot; : {
              &quot;MarketplaceId&quot; : &quot;ATVPDKIKX0DER&quot;,
              &quot;IdType&quot; : &quot;ASIN&quot;,
              &quot;SellerId&quot; : &quot;AXXXXXXXXXXXXX&quot;,
              &quot;SellerInputIdentifier&quot; : &quot;UmaS1&quot;,
              &quot;IsAmazonFulfilled&quot; : false,
              &quot;IdValue&quot; : &quot;B00V5DG6IQ&quot;,
              &quot;PriceToEstimateFees&quot; : {
                &quot;ListingPrice&quot; : {
                  &quot;CurrencyCode&quot; : &quot;USD&quot;,
                  &quot;Amount&quot; : 10
                },
                &quot;Shipping&quot; : {
                  &quot;CurrencyCode&quot; : &quot;USD&quot;,
                  &quot;Amount&quot; : 10
                },
                &quot;Points&quot; : {
                  &quot;PointsNumber&quot; : 0,
                  &quot;PointsMonetaryValue&quot; : {
                    &quot;CurrencyCode&quot; : &quot;USD&quot;,
                    &quot;Amount&quot; : 0
                  }
                }
              }
            },
            &quot;FeesEstimate&quot; : {
              &quot;TimeOfFeesEstimation&quot; : &quot;Mon Oct 28 18:49:32 UTC 2019&quot;,
              &quot;TotalFeesEstimate&quot; : {
                &quot;CurrencyCode&quot; : &quot;USD&quot;,
                &quot;Amount&quot; : 3.0
              },
              &quot;FeeDetailList&quot; : [ ]
            },
            &quot;Error&quot; : {
              &quot;Type&quot; : &quot;&quot;,
              &quot;Code&quot; : &quot;&quot;,
              &quot;Message&quot; : &quot;&quot;,
              &quot;Detail&quot; : [ ]
            }
          }
        }
      }
    } ]
  }
}';
            $result = $this->testHelper->extractRequestAndResponse(
                $this->apiInstance,
                $jsonSchema,
                'getMyFeesEstimateForSKU'
            );
            $requestParams = $result['requestParams'];
            $expectedResponse = $result['expectedResponse'];

            // Change Time Format if it requires
            $specificTimeFormat = $this->testHelper->getDateTimeFormatForCase('FeesApi');
            if ($specificTimeFormat) {
                ObjectSerializer::setDateTimeFormat($specificTimeFormat);
            }

            // Act: Call API
            list($response, $statusCode, $headers) =
                $this->apiInstance->getMyFeesEstimateForSKUWithHttpInfo(...array_values($requestParams));

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
     * Test case for getMyFeesEstimateForSKU_400
     */
    public function testGetMyFeesEstimateForSKU400()
    {
        try {
            // Skip test if it is in the skip list
            if ($this->testHelper->shouldSkipTest('testGetMyFeesEstimateForSKU400', 'FeesApi')) {
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
        &quot;$ref&quot; : &quot;#/components/schemas/GetMyFeesEstimateResponse&quot;
      }
    }
  },
  &quot;x-amzn-api-sandbox&quot; : {
    &quot;static&quot; : [ {
      &quot;request&quot; : {
        &quot;parameters&quot; : {
          &quot;body&quot; : {
            &quot;value&quot; : {
              &quot;FeesEstimateRequest&quot; : {
                &quot;MarketplaceId&quot; : &quot;WRNGMRKTPLCE&quot;
              }
            }
          }
        }
      },
      &quot;response&quot; : {
        &quot;errors&quot; : [ {
          &quot;code&quot; : &quot;InvalidInput&quot;,
          &quot;message&quot; : &quot;Incorrect Marketplace identifier.&quot;,
          &quot;details&quot; : &quot;&quot;
        } ]
      }
    } ]
  }
}';
            $result = $this->testHelper->extractRequestAndResponse(
                $this->apiInstance,
                $jsonSchema,
                'getMyFeesEstimateForSKU'
            );
            $requestParams = $result['requestParams'];
            $expectedResponse = $result['expectedResponse'];

            // Change Time Format if it requires
            $specificTimeFormat = $this->testHelper->getDateTimeFormatForCase('FeesApi');
            if ($specificTimeFormat) {
                ObjectSerializer::setDateTimeFormat($specificTimeFormat);
            }

            // Act: Call API
            list($response, $statusCode, $headers) =
                $this->apiInstance->getMyFeesEstimateForSKUWithHttpInfo(...array_values($requestParams));

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
     * Test case for getMyFeesEstimateForSKU_401
     */
    public function testGetMyFeesEstimateForSKU401()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for getMyFeesEstimateForSKU_403
     */
    public function testGetMyFeesEstimateForSKU403()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for getMyFeesEstimateForSKU_404
     */
    public function testGetMyFeesEstimateForSKU404()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for getMyFeesEstimateForSKU_429
     */
    public function testGetMyFeesEstimateForSKU429()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for getMyFeesEstimateForSKU_500
     */
    public function testGetMyFeesEstimateForSKU500()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for getMyFeesEstimateForSKU_503
     */
    public function testGetMyFeesEstimateForSKU503()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for getMyFeesEstimates_200
     */
    public function testGetMyFeesEstimates200()
    {
        try {
            // Skip test if it is in the skip list
            if ($this->testHelper->shouldSkipTest('testGetMyFeesEstimates200', 'FeesApi')) {
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
        &quot;$ref&quot; : &quot;#/components/schemas/GetMyFeesEstimatesResponse&quot;
      }
    }
  },
  &quot;x-amzn-api-sandbox&quot; : {
    &quot;static&quot; : [ {
      &quot;request&quot; : {
        &quot;parameters&quot; : {
          &quot;body&quot; : {
            &quot;value&quot; : [ {
              &quot;FeesEstimateRequest&quot; : {
                &quot;MarketplaceId&quot; : &quot;ATVPDKIKX0DER&quot;,
                &quot;IsAmazonFulfilled&quot; : false,
                &quot;PriceToEstimateFees&quot; : {
                  &quot;ListingPrice&quot; : {
                    &quot;CurrencyCode&quot; : &quot;USD&quot;,
                    &quot;Amount&quot; : 10
                  },
                  &quot;Shipping&quot; : {
                    &quot;CurrencyCode&quot; : &quot;USD&quot;,
                    &quot;Amount&quot; : 10
                  },
                  &quot;Points&quot; : {
                    &quot;PointsNumber&quot; : 0,
                    &quot;PointsMonetaryValue&quot; : {
                      &quot;CurrencyCode&quot; : &quot;USD&quot;,
                      &quot;Amount&quot; : 0
                    }
                  }
                },
                &quot;Identifier&quot; : &quot;UmaS1&quot;
              },
              &quot;IdType&quot; : &quot;ASIN&quot;,
              &quot;IdValue&quot; : &quot;asin123&quot;
            }, {
              &quot;FeesEstimateRequest&quot; : {
                &quot;MarketplaceId&quot; : &quot;A1AM78C64UM0Y8&quot;,
                &quot;IsAmazonFulfilled&quot; : true,
                &quot;PriceToEstimateFees&quot; : {
                  &quot;ListingPrice&quot; : {
                    &quot;CurrencyCode&quot; : &quot;MXN&quot;,
                    &quot;Amount&quot; : 10
                  },
                  &quot;Shipping&quot; : {
                    &quot;CurrencyCode&quot; : &quot;MXN&quot;,
                    &quot;Amount&quot; : 10
                  },
                  &quot;Points&quot; : {
                    &quot;PointsNumber&quot; : 0,
                    &quot;PointsMonetaryValue&quot; : {
                      &quot;CurrencyCode&quot; : &quot;MXN&quot;,
                      &quot;Amount&quot; : 0
                    }
                  }
                },
                &quot;Identifier&quot; : &quot;UmaS2&quot;
              },
              &quot;IdType&quot; : &quot;SellerSKU&quot;,
              &quot;IdValue&quot; : &quot;sku123&quot;
            } ]
          }
        }
      },
      &quot;response&quot; : [ {
        &quot;Status&quot; : &quot;Success&quot;,
        &quot;FeesEstimateIdentifier&quot; : {
          &quot;MarketplaceId&quot; : &quot;ATVPDKIKX0DER&quot;,
          &quot;IdType&quot; : &quot;ASIN&quot;,
          &quot;SellerId&quot; : &quot;AXXXXXXXXXXXXX&quot;,
          &quot;SellerInputIdentifier&quot; : &quot;UmaS1&quot;,
          &quot;IsAmazonFulfilled&quot; : false,
          &quot;IdValue&quot; : &quot;asin123&quot;,
          &quot;PriceToEstimateFees&quot; : {
            &quot;ListingPrice&quot; : {
              &quot;CurrencyCode&quot; : &quot;USD&quot;,
              &quot;Amount&quot; : 10
            },
            &quot;Shipping&quot; : {
              &quot;CurrencyCode&quot; : &quot;USD&quot;,
              &quot;Amount&quot; : 10
            },
            &quot;Points&quot; : {
              &quot;PointsNumber&quot; : 0,
              &quot;PointsMonetaryValue&quot; : {
                &quot;CurrencyCode&quot; : &quot;USD&quot;,
                &quot;Amount&quot; : 0
              }
            }
          }
        },
        &quot;FeesEstimate&quot; : {
          &quot;TimeOfFeesEstimation&quot; : &quot;Mon Oct 28 18:49:32 UTC 2019&quot;,
          &quot;TotalFeesEstimate&quot; : {
            &quot;CurrencyCode&quot; : &quot;USD&quot;,
            &quot;Amount&quot; : 3.0
          },
          &quot;FeeDetailList&quot; : [ ]
        },
        &quot;Error&quot; : {
          &quot;Type&quot; : &quot;&quot;,
          &quot;Code&quot; : &quot;&quot;,
          &quot;Message&quot; : &quot;&quot;,
          &quot;Detail&quot; : [ ]
        }
      }, {
        &quot;Status&quot; : &quot;Success&quot;,
        &quot;FeesEstimateIdentifier&quot; : {
          &quot;MarketplaceId&quot; : &quot;A1AM78C64UM0Y8&quot;,
          &quot;IdType&quot; : &quot;SellerSKU&quot;,
          &quot;SellerId&quot; : &quot;AXXXXXXXXXXXXX&quot;,
          &quot;SellerInputIdentifier&quot; : &quot;UmaS2&quot;,
          &quot;IsAmazonFulfilled&quot; : false,
          &quot;IdValue&quot; : &quot;sku123&quot;,
          &quot;PriceToEstimateFees&quot; : {
            &quot;ListingPrice&quot; : {
              &quot;CurrencyCode&quot; : &quot;MXN&quot;,
              &quot;Amount&quot; : 10
            },
            &quot;Shipping&quot; : {
              &quot;CurrencyCode&quot; : &quot;MXN&quot;,
              &quot;Amount&quot; : 10
            },
            &quot;Points&quot; : {
              &quot;PointsNumber&quot; : 0,
              &quot;PointsMonetaryValue&quot; : {
                &quot;CurrencyCode&quot; : &quot;MXN&quot;,
                &quot;Amount&quot; : 0
              }
            }
          }
        },
        &quot;FeesEstimate&quot; : {
          &quot;TimeOfFeesEstimation&quot; : &quot;Mon Oct 28 18:49:32 UTC 2019&quot;,
          &quot;TotalFeesEstimate&quot; : {
            &quot;CurrencyCode&quot; : &quot;MXN&quot;,
            &quot;Amount&quot; : 3.0
          },
          &quot;FeeDetailList&quot; : [ ]
        },
        &quot;Error&quot; : {
          &quot;Type&quot; : &quot;&quot;,
          &quot;Code&quot; : &quot;&quot;,
          &quot;Message&quot; : &quot;&quot;,
          &quot;Detail&quot; : [ ]
        }
      } ]
    } ]
  }
}';
            $result = $this->testHelper->extractRequestAndResponse(
                $this->apiInstance,
                $jsonSchema,
                'getMyFeesEstimates'
            );
            $requestParams = $result['requestParams'];
            $expectedResponse = $result['expectedResponse'];

            // Change Time Format if it requires
            $specificTimeFormat = $this->testHelper->getDateTimeFormatForCase('FeesApi');
            if ($specificTimeFormat) {
                ObjectSerializer::setDateTimeFormat($specificTimeFormat);
            }

            // Act: Call API
            list($response, $statusCode, $headers) =
                $this->apiInstance->getMyFeesEstimatesWithHttpInfo(...array_values($requestParams));

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
     * Test case for getMyFeesEstimates_400
     */
    public function testGetMyFeesEstimates400()
    {
        try {
            // Skip test if it is in the skip list
            if ($this->testHelper->shouldSkipTest('testGetMyFeesEstimates400', 'FeesApi')) {
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
        &quot;$ref&quot; : &quot;#/components/schemas/GetMyFeesEstimatesErrorList&quot;
      }
    }
  },
  &quot;x-amzn-api-sandbox&quot; : {
    &quot;static&quot; : [ {
      &quot;request&quot; : {
        &quot;parameters&quot; : {
          &quot;body&quot; : {
            &quot;value&quot; : [ {
              &quot;FeesEstimateRequest&quot; : {
                &quot;MarketplaceId&quot; : &quot;INVALIDMARKETPLACEID&quot;,
                &quot;IsAmazonFulfilled&quot; : false,
                &quot;PriceToEstimateFees&quot; : {
                  &quot;ListingPrice&quot; : {
                    &quot;CurrencyCode&quot; : &quot;USD&quot;,
                    &quot;Amount&quot; : 10
                  },
                  &quot;Shipping&quot; : {
                    &quot;CurrencyCode&quot; : &quot;USD&quot;,
                    &quot;Amount&quot; : 10
                  },
                  &quot;Points&quot; : {
                    &quot;PointsNumber&quot; : 0,
                    &quot;PointsMonetaryValue&quot; : {
                      &quot;CurrencyCode&quot; : &quot;USD&quot;,
                      &quot;Amount&quot; : 0
                    }
                  }
                },
                &quot;Identifier&quot; : &quot;UmaS1&quot;
              },
              &quot;IdType&quot; : &quot;ASIN&quot;,
              &quot;IdValue&quot; : &quot;asin123&quot;
            } ]
          }
        }
      },
      &quot;response&quot; : {
        &quot;errors&quot; : [ {
          &quot;code&quot; : &quot;InvalidInput&quot;,
          &quot;message&quot; : &quot;Incorrect Marketplace identifier.&quot;,
          &quot;details&quot; : &quot;&quot;
        } ]
      }
    } ]
  }
}';
            $result = $this->testHelper->extractRequestAndResponse(
                $this->apiInstance,
                $jsonSchema,
                'getMyFeesEstimates'
            );
            $requestParams = $result['requestParams'];
            $expectedResponse = $result['expectedResponse'];

            // Change Time Format if it requires
            $specificTimeFormat = $this->testHelper->getDateTimeFormatForCase('FeesApi');
            if ($specificTimeFormat) {
                ObjectSerializer::setDateTimeFormat($specificTimeFormat);
            }

            // Act: Call API
            list($response, $statusCode, $headers) =
                $this->apiInstance->getMyFeesEstimatesWithHttpInfo(...array_values($requestParams));

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
     * Test case for getMyFeesEstimates_401
     */
    public function testGetMyFeesEstimates401()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for getMyFeesEstimates_403
     */
    public function testGetMyFeesEstimates403()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for getMyFeesEstimates_404
     */
    public function testGetMyFeesEstimates404()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for getMyFeesEstimates_429
     */
    public function testGetMyFeesEstimates429()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for getMyFeesEstimates_500
     */
    public function testGetMyFeesEstimates500()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for getMyFeesEstimates_503
     */
    public function testGetMyFeesEstimates503()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
}
