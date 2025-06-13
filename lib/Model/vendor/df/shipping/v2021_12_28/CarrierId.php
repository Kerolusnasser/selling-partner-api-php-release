<?php
/**
 * CarrierId
 *
 * PHP version 8.3
 *
 * @category Class
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Direct Fulfillment Shipping
 *
 * Use the Selling Partner API for Direct Fulfillment Shipping to access a direct fulfillment vendor's shipping data.
 *
 * The version of the OpenAPI document: 2021-12-28
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SpApi\Model\vendor\df\shipping\v2021_12_28;
use SpApi\ObjectSerializer;
use SpApi\Model\ModelInterface;

/**
 * CarrierId Class Doc Comment
 *
 * @category Class
 * @description The unique carrier code for the carrier for whom container labels are requested.
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CarrierId
{
    /**
     * Possible values of this enum
     */
    public const SWA = 'SWA';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues(): array
    {
        return [
            self::SWA
        ];
    }
}


