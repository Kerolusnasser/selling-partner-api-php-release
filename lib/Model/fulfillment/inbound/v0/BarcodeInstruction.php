<?php

/**
 * BarcodeInstruction.
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
 * BarcodeInstruction Class Doc Comment.
 *
 * @category Class
 *
 * @description Labeling requirements for the item. For more information about FBA labeling requirements, see the Seller Central Help for your marketplace.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */
class BarcodeInstruction
{
    /**
     * Possible values of this enum.
     */
    public const REQUIRES_FNSKU_LABEL = 'RequiresFNSKULabel';

    public const CAN_USE_ORIGINAL_BARCODE = 'CanUseOriginalBarcode';

    public const MUST_PROVIDE_SELLER_SKU = 'MustProvideSellerSKU';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues(): array
    {
        return [
            self::REQUIRES_FNSKU_LABEL,
            self::CAN_USE_ORIGINAL_BARCODE,
            self::MUST_PROVIDE_SELLER_SKU,
        ];
    }
}
