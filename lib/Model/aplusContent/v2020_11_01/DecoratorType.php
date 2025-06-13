<?php

/**
 * DecoratorType.
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
 * Selling Partner API for A+ Content Management.
 *
 * Use the A+ Content API to build applications that help selling partners add rich marketing content to their Amazon product detail pages. Selling partners can use A+ content to share their brand and product story, which helps buyers make informed purchasing decisions. Selling partners use content modules to add images and text.
 *
 * The version of the OpenAPI document: 2020-11-01
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SpApi\Model\aplusContent\v2020_11_01;

/**
 * DecoratorType Class Doc Comment.
 *
 * @category Class
 *
 * @description The type of rich text decorator.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */
class DecoratorType
{
    /**
     * Possible values of this enum.
     */
    public const LIST_ITEM = 'LIST_ITEM';

    public const LIST_ORDERED = 'LIST_ORDERED';

    public const LIST_UNORDERED = 'LIST_UNORDERED';

    public const STYLE_BOLD = 'STYLE_BOLD';

    public const STYLE_ITALIC = 'STYLE_ITALIC';

    public const STYLE_LINEBREAK = 'STYLE_LINEBREAK';

    public const STYLE_PARAGRAPH = 'STYLE_PARAGRAPH';

    public const STYLE_UNDERLINE = 'STYLE_UNDERLINE';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues(): array
    {
        return [
            self::LIST_ITEM,
            self::LIST_ORDERED,
            self::LIST_UNORDERED,
            self::STYLE_BOLD,
            self::STYLE_ITALIC,
            self::STYLE_LINEBREAK,
            self::STYLE_PARAGRAPH,
            self::STYLE_UNDERLINE,
        ];
    }
}
