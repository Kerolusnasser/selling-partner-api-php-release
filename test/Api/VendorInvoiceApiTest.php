<?php
/**
 * VendorInvoiceApiTest
 * PHP version 8.3
 *
 * @category Class
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Direct Fulfillment Payments
 *
 * The Selling Partner API for Direct Fulfillment Payments provides programmatic access to a direct fulfillment vendor's invoice data.
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
use SpApi\Api\vendor\df\payments\v1\VendorInvoiceApi;
use SpApi\ObjectSerializer;

/**
 * VendorInvoiceApiTest Class Doc Comment
 *
 * @category Class
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class VendorInvoiceApiTest extends BaseTestCase
{
    private VendorInvoiceApi $apiInstance;
    public function setUp(): void
    {
        parent::setUp();
        // Initialize parameter value specific to case
        $this->testHelper->setSpecificValue('VendorInvoiceApi', $this->getName());
        $this->apiInstance = new VendorInvoiceApi($this->config, null);
        // Change Time Format if it requires
        $specificTimeFormat = $this->testHelper->getDateTimeFormatForCase('VendorInvoiceApi');
        if ($specificTimeFormat) {
            ObjectSerializer::setDateTimeFormat($specificTimeFormat);
        }
    }

    /**
     * Test case for submitInvoice_202
     */
    public function testSubmitInvoice202()
    {
        try {
            // Skip test if it is in the skip list
            if ($this->testHelper->shouldSkipTest('testSubmitInvoice202', 'VendorInvoiceApi')) {
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
        &quot;$ref&quot; : &quot;#/components/schemas/SubmitInvoiceResponse&quot;
      }
    }
  },
  &quot;x-amzn-api-sandbox&quot; : {
    &quot;static&quot; : [ {
      &quot;request&quot; : {
        &quot;parameters&quot; : {
          &quot;body&quot; : {
            &quot;value&quot; : {
              &quot;invoices&quot; : [ {
                &quot;invoiceNumber&quot; : &quot;0092590411&quot;,
                &quot;invoiceDate&quot; : &quot;2020-03-13T11:16:24Z&quot;,
                &quot;remitToParty&quot; : {
                  &quot;partyId&quot; : &quot;YourVendorCode&quot;,
                  &quot;address&quot; : {
                    &quot;name&quot; : &quot;vendor name&quot;,
                    &quot;addressLine1&quot; : &quot;vendor address 1&quot;,
                    &quot;addressLine2&quot; : &quot;vendor address 2&quot;,
                    &quot;addressLine3&quot; : &quot;vendor address 3&quot;,
                    &quot;city&quot; : &quot;DECity&quot;,
                    &quot;county&quot; : &quot;Schwabing&quot;,
                    &quot;district&quot; : &quot;München&quot;,
                    &quot;stateOrRegion&quot; : &quot;Bayern&quot;,
                    &quot;postalCode&quot; : &quot;DEPostCode&quot;,
                    &quot;countryCode&quot; : &quot;DE&quot;
                  },
                  &quot;taxRegistrationDetails&quot; : [ {
                    &quot;taxRegistrationType&quot; : &quot;VAT&quot;,
                    &quot;taxRegistrationNumber&quot; : &quot;DE123456789&quot;
                  } ]
                },
                &quot;shipFromParty&quot; : {
                  &quot;partyId&quot; : &quot;ABCD&quot;
                },
                &quot;billToParty&quot; : {
                  &quot;partyId&quot; : &quot;5450534005838&quot;,
                  &quot;address&quot; : {
                    &quot;name&quot; : &quot;Amazon EU SARL&quot;,
                    &quot;addressLine1&quot; : &quot;Marcel-Breuer-Str. 12&quot;,
                    &quot;city&quot; : &quot;München&quot;,
                    &quot;county&quot; : &quot;Schwabing&quot;,
                    &quot;district&quot; : &quot;München&quot;,
                    &quot;stateOrRegion&quot; : &quot;Bayern&quot;,
                    &quot;postalCode&quot; : &quot;80807&quot;,
                    &quot;countryCode&quot; : &quot;DE&quot;
                  },
                  &quot;taxRegistrationDetails&quot; : [ {
                    &quot;taxRegistrationType&quot; : &quot;VAT&quot;,
                    &quot;taxRegistrationNumber&quot; : &quot;DE814584193&quot;,
                    &quot;taxRegistrationAddress&quot; : {
                      &quot;name&quot; : &quot;Amazon EU SARL&quot;,
                      &quot;addressLine1&quot; : &quot;Marcel-Breuer-Str. 12&quot;,
                      &quot;city&quot; : &quot;München&quot;,
                      &quot;stateOrRegion&quot; : &quot;Bayern&quot;,
                      &quot;postalCode&quot; : &quot;80807&quot;,
                      &quot;countryCode&quot; : &quot;DE&quot;
                    },
                    &quot;taxRegistrationMessage&quot; : &quot;txmessage&quot;
                  } ]
                },
                &quot;shipToCountryCode&quot; : &quot;DE&quot;,
                &quot;paymentTermsCode&quot; : &quot;Basic&quot;,
                &quot;invoiceTotal&quot; : {
                  &quot;currencyCode&quot; : &quot;EUR&quot;,
                  &quot;amount&quot; : &quot;1428.00&quot;
                },
                &quot;taxTotals&quot; : [ {
                  &quot;taxType&quot; : &quot;CGST&quot;,
                  &quot;taxRate&quot; : &quot;0.19&quot;,
                  &quot;taxAmount&quot; : {
                    &quot;currencyCode&quot; : &quot;EUR&quot;,
                    &quot;amount&quot; : &quot;228.00&quot;
                  },
                  &quot;taxableAmount&quot; : {
                    &quot;currencyCode&quot; : &quot;EUR&quot;,
                    &quot;amount&quot; : &quot;1200.00&quot;
                  }
                } ],
                &quot;items&quot; : [ {
                  &quot;itemSequenceNumber&quot; : &quot;1&quot;,
                  &quot;buyerProductIdentifier&quot; : &quot;B00IVLAABC&quot;,
                  &quot;invoicedQuantity&quot; : {
                    &quot;amount&quot; : 1,
                    &quot;unitOfMeasure&quot; : &quot;Each&quot;
                  },
                  &quot;netCost&quot; : {
                    &quot;currencyCode&quot; : &quot;EUR&quot;,
                    &quot;amount&quot; : &quot;1200.00&quot;
                  },
                  &quot;purchaseOrderNumber&quot; : &quot;D3rC3KTxG&quot;,
                  &quot;vendorOrderNumber&quot; : &quot;0092590411&quot;,
                  &quot;hsnCode&quot; : &quot;76.06.92.99.00&quot;,
                  &quot;taxDetails&quot; : [ {
                    &quot;taxType&quot; : &quot;CGST&quot;,
                    &quot;taxRate&quot; : &quot;0.19&quot;,
                    &quot;taxAmount&quot; : {
                      &quot;currencyCode&quot; : &quot;EUR&quot;,
                      &quot;amount&quot; : &quot;228.00&quot;
                    },
                    &quot;taxableAmount&quot; : {
                      &quot;currencyCode&quot; : &quot;EUR&quot;,
                      &quot;amount&quot; : &quot;1200.00&quot;
                    }
                  } ]
                } ]
              } ]
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
                'submitInvoice'
            );
            $requestParams = $result['requestParams'];
            $expectedResponse = $result['expectedResponse'];

            // Change Time Format if it requires
            $specificTimeFormat = $this->testHelper->getDateTimeFormatForCase('VendorInvoiceApi');
            if ($specificTimeFormat) {
                ObjectSerializer::setDateTimeFormat($specificTimeFormat);
            }

            // Act: Call API
            list($response, $statusCode, $headers) =
                $this->apiInstance->submitInvoiceWithHttpInfo(...array_values($requestParams));

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
     * Test case for submitInvoice_400
     */
    public function testSubmitInvoice400()
    {
        try {
            // Skip test if it is in the skip list
            if ($this->testHelper->shouldSkipTest('testSubmitInvoice400', 'VendorInvoiceApi')) {
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
        &quot;$ref&quot; : &quot;#/components/schemas/SubmitInvoiceResponse&quot;
      }
    }
  },
  &quot;x-amzn-api-sandbox&quot; : {
    &quot;static&quot; : [ {
      &quot;request&quot; : {
        &quot;parameters&quot; : {
          &quot;body&quot; : {
            &quot;value&quot; : {
              &quot;invoices&quot; : [ {
                &quot;invoiceNumber&quot; : &quot;TestInvoice400&quot;,
                &quot;invoiceDate&quot; : &quot;2020-08.13&quot;
              } ]
            }
          }
        }
      },
      &quot;response&quot; : {
        &quot;errors&quot; : [ {
          &quot;code&quot; : &quot;InvalidInput&quot;,
          &quot;message&quot; : &quot;The value &#39;2020-03.13&#39; of element &#39;invoiceDate&#39; is not valid.&quot;,
          &quot;details&quot; : &quot;&quot;
        }, {
          &quot;code&quot; : &quot;InvalidInput&quot;,
          &quot;message&quot; : &quot;The content of element &#39;invoice&#39; is not complete. One of &#39;{invoiceNumber, referenceNumber}&#39; is expected.&quot;,
          &quot;details&quot; : &quot;&quot;
        }, {
          &quot;code&quot; : &quot;InvalidInput&quot;,
          &quot;message&quot; : &quot;&#39;2020-03.13&#39; is not a valid value for &#39;dateTime&#39;.&quot;,
          &quot;details&quot; : &quot;&quot;
        } ]
      }
    } ]
  }
}';
            $result = $this->testHelper->extractRequestAndResponse(
                $this->apiInstance,
                $jsonSchema,
                'submitInvoice'
            );
            $requestParams = $result['requestParams'];
            $expectedResponse = $result['expectedResponse'];

            // Change Time Format if it requires
            $specificTimeFormat = $this->testHelper->getDateTimeFormatForCase('VendorInvoiceApi');
            if ($specificTimeFormat) {
                ObjectSerializer::setDateTimeFormat($specificTimeFormat);
            }

            // Act: Call API
            list($response, $statusCode, $headers) =
                $this->apiInstance->submitInvoiceWithHttpInfo(...array_values($requestParams));

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
     * Test case for submitInvoice_403
     */
    public function testSubmitInvoice403()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for submitInvoice_404
     */
    public function testSubmitInvoice404()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for submitInvoice_413
     */
    public function testSubmitInvoice413()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for submitInvoice_415
     */
    public function testSubmitInvoice415()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for submitInvoice_429
     */
    public function testSubmitInvoice429()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for submitInvoice_500
     */
    public function testSubmitInvoice500()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for submitInvoice_503
     */
    public function testSubmitInvoice503()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
}
