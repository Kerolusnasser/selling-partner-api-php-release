<?php

/**
 * FulfillmentChannelType.
 *
 * PHP version 8.3
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Pricing.
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
 *
 * The version of the OpenAPI document: v0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SpApi\Model\pricing\v0;

/**
 * FulfillmentChannelType Class Doc Comment.
 *
 * @category Class
 *
 * @description Indicates whether the item is fulfilled by Amazon or by the seller (merchant).
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */
class FulfillmentChannelType
{
    /**
     * Possible values of this enum.
     */
    public const AMAZON = 'Amazon';

    public const MERCHANT = 'Merchant';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues(): array
    {
        return [
            self::AMAZON,
            self::MERCHANT,
        ];
    }
}
