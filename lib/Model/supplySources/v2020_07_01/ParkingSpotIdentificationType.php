<?php

/**
 * ParkingSpotIdentificationType.
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
 * Selling Partner API for Supply Sources.
 *
 * Manage configurations and capabilities of seller supply sources.
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

namespace SpApi\Model\supplySources\v2020_07_01;

/**
 * ParkingSpotIdentificationType Class Doc Comment.
 *
 * @category Class
 *
 * @description The type of parking spot identification.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */
class ParkingSpotIdentificationType
{
    /**
     * Possible values of this enum.
     */
    public const NUMBERED = 'Numbered';

    public const OTHER = 'Other';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues(): array
    {
        return [
            self::NUMBERED,
            self::OTHER,
        ];
    }
}
