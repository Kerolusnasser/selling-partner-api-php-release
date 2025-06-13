<?php

/**
 * InboundShipmentStatus.
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
 * The Selling Partner API for Amazon Warehousing and Distribution.
 *
 * The Selling Partner API for Amazon Warehousing and Distribution (AWD) provides programmatic access to information about AWD shipments and inventory.
 *
 * The version of the OpenAPI document: 2024-05-09
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SpApi\Model\awd\v2024_05_09;

/**
 * InboundShipmentStatus Class Doc Comment.
 *
 * @category Class
 *
 * @description Possible shipment statuses used by shipments.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */
class InboundShipmentStatus
{
    /**
     * Possible values of this enum.
     */
    public const CREATED = 'CREATED';

    public const SHIPPED = 'SHIPPED';

    public const IN_TRANSIT = 'IN_TRANSIT';

    public const RECEIVING = 'RECEIVING';

    public const DELIVERED = 'DELIVERED';

    public const CLOSED = 'CLOSED';

    public const CANCELLED = 'CANCELLED';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues(): array
    {
        return [
            self::CREATED,
            self::SHIPPED,
            self::IN_TRANSIT,
            self::RECEIVING,
            self::DELIVERED,
            self::CLOSED,
            self::CANCELLED,
        ];
    }
}
