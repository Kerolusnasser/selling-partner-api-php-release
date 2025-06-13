<?php

/**
 * ShippingSpeedCategory.
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
 * Selling Partner APIs for Fulfillment Outbound.
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SpApi\Model\fulfillment\outbound\v2020_07_01;

/**
 * ShippingSpeedCategory Class Doc Comment.
 *
 * @category Class
 *
 * @description The shipping method used for the fulfillment order. When this value is &#x60;ScheduledDelivery&#x60;, choose &#x60;Ship&#x60; for the &#x60;fulfillmentAction&#x60;. &#x60;Hold&#x60; is not a valid &#x60;fulfillmentAction&#x60; value when the &#x60;shippingSpeedCategory&#x60; value is &#x60;ScheduledDelivery&#x60;. Note: Shipping method service level agreements vary by marketplace. Sellers should refer to the [Seller Central](https://developer-docs.amazon.com/sp-api/docs/seller-central-urls) website in their marketplace for shipping method service level agreements and fulfillment fees.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */
class ShippingSpeedCategory
{
    /**
     * Possible values of this enum.
     */
    public const STANDARD = 'Standard';

    public const EXPEDITED = 'Expedited';

    public const PRIORITY = 'Priority';

    public const SCHEDULED_DELIVERY = 'ScheduledDelivery';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues(): array
    {
        return [
            self::STANDARD,
            self::EXPEDITED,
            self::PRIORITY,
            self::SCHEDULED_DELIVERY,
        ];
    }
}
