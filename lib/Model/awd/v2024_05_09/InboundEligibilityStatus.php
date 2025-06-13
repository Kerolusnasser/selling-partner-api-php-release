<?php

/**
 * InboundEligibilityStatus.
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
 * InboundEligibilityStatus Class Doc Comment.
 *
 * @category Class
 *
 * @description Enum denoting the package inbound eligibility.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */
class InboundEligibilityStatus
{
    /**
     * Possible values of this enum.
     */
    public const ELIGIBLE = 'ELIGIBLE';

    public const INELIGIBLE = 'INELIGIBLE';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues(): array
    {
        return [
            self::ELIGIBLE,
            self::INELIGIBLE,
        ];
    }
}
