<?php

/**
 * ShipmentStatus.
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
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
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

namespace SpApi\Model\fulfillment\inbound\v0;

/**
 * ShipmentStatus Class Doc Comment.
 *
 * @category Class
 *
 * @description Indicates the status of the inbound shipment. When used with the createInboundShipment operation, WORKING is the only valid value. When used with the updateInboundShipment operation, possible values are WORKING, SHIPPED or CANCELLED.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */
class ShipmentStatus
{
    /**
     * Possible values of this enum.
     */
    public const WORKING = 'WORKING';

    public const SHIPPED = 'SHIPPED';

    public const RECEIVING = 'RECEIVING';

    public const CANCELLED = 'CANCELLED';

    public const DELETED = 'DELETED';

    public const CLOSED = 'CLOSED';

    public const ERROR = 'ERROR';

    public const IN_TRANSIT = 'IN_TRANSIT';

    public const DELIVERED = 'DELIVERED';

    public const CHECKED_IN = 'CHECKED_IN';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues(): array
    {
        return [
            self::WORKING,
            self::SHIPPED,
            self::RECEIVING,
            self::CANCELLED,
            self::DELETED,
            self::CLOSED,
            self::ERROR,
            self::IN_TRANSIT,
            self::DELIVERED,
            self::CHECKED_IN,
        ];
    }
}
