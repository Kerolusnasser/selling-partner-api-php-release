<?php

/**
 * LabelFormat.
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
 * Selling Partner API for Merchant Fulfillment.
 *
 * With the Selling Partner API for Merchant Fulfillment, you can build applications that sellers can use to purchase shipping for non-Prime and Prime orders using Amazon's Buy Shipping Services.
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

namespace SpApi\Model\merchantFulfillment\v0;

/**
 * LabelFormat Class Doc Comment.
 *
 * @category Class
 *
 * @description The label format.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */
class LabelFormat
{
    /**
     * Possible values of this enum.
     */
    public const PDF = 'PDF';

    public const PNG = 'PNG';

    public const ZPL203 = 'ZPL203';

    public const ZPL300 = 'ZPL300';

    public const SHIPPING_SERVICE_DEFAULT = 'ShippingServiceDefault';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues(): array
    {
        return [
            self::PDF,
            self::PNG,
            self::ZPL203,
            self::ZPL300,
            self::SHIPPING_SERVICE_DEFAULT,
        ];
    }
}
