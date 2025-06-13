<?php

/**
 * FeeDetail.
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
 * Selling Partner API for Product Fees.
 *
 * The Selling Partner API for Product Fees lets you programmatically retrieve estimated fees for a product. You can then account for those fees in your pricing.
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

namespace SpApi\Model\productFees\v0;

use SpApi\Model\ModelInterface;
use SpApi\ObjectSerializer;

/**
 * FeeDetail Class Doc Comment.
 *
 * @category Class
 *
 * @description The type of fee, fee amount, and other details.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class FeeDetail implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'FeeDetail';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'fee_type' => 'string',
        'fee_amount' => '\SpApi\Model\productFees\v0\MoneyType',
        'fee_promotion' => '\SpApi\Model\productFees\v0\MoneyType',
        'tax_amount' => '\SpApi\Model\productFees\v0\MoneyType',
        'final_fee' => '\SpApi\Model\productFees\v0\MoneyType',
        'included_fee_detail_list' => '\SpApi\Model\productFees\v0\IncludedFeeDetail[]'];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     *
     * @phpstan-var array<string, string|null>
     *
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'fee_type' => null,
        'fee_amount' => null,
        'fee_promotion' => null,
        'tax_amount' => null,
        'final_fee' => null,
        'included_fee_detail_list' => null];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'fee_type' => false,
        'fee_amount' => false,
        'fee_promotion' => true,
        'tax_amount' => true,
        'final_fee' => false,
        'included_fee_detail_list' => true,
    ];

    /**
     * If a nullable field gets set to null, insert it here.
     *
     * @var bool[]
     */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'fee_type' => 'FeeType',
        'fee_amount' => 'FeeAmount',
        'fee_promotion' => 'FeePromotion',
        'tax_amount' => 'TaxAmount',
        'final_fee' => 'FinalFee',
        'included_fee_detail_list' => 'IncludedFeeDetailList',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'fee_type' => 'setFeeType',
        'fee_amount' => 'setFeeAmount',
        'fee_promotion' => 'setFeePromotion',
        'tax_amount' => 'setTaxAmount',
        'final_fee' => 'setFinalFee',
        'included_fee_detail_list' => 'setIncludedFeeDetailList',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'fee_type' => 'getFeeType',
        'fee_amount' => 'getFeeAmount',
        'fee_promotion' => 'getFeePromotion',
        'tax_amount' => 'getTaxAmount',
        'final_fee' => 'getFinalFee',
        'included_fee_detail_list' => 'getIncludedFeeDetailList',
    ];

    /**
     * Associative array for storing property values.
     */
    protected array $container = [];

    /**
     * Constructor.
     *
     * @param null|array $data Associated array of property values
     *                         initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('fee_type', $data ?? [], null);
        $this->setIfExists('fee_amount', $data ?? [], null);
        $this->setIfExists('fee_promotion', $data ?? [], null);
        $this->setIfExists('tax_amount', $data ?? [], null);
        $this->setIfExists('final_fee', $data ?? [], null);
        $this->setIfExists('included_fee_detail_list', $data ?? [], null);
    }

    /**
     * Gets the string presentation of the object.
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Checks if a property is nullable.
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if (null === $this->container['fee_type']) {
            $invalidProperties[] = "'fee_type' can't be null";
        }
        if (null === $this->container['fee_amount']) {
            $invalidProperties[] = "'fee_amount' can't be null";
        }
        if (null === $this->container['final_fee']) {
            $invalidProperties[] = "'final_fee' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return 0 === count($this->listInvalidProperties());
    }

    /**
     * Gets fee_type.
     */
    public function getFeeType(): string
    {
        return $this->container['fee_type'];
    }

    /**
     * Sets fee_type.
     *
     * @param string $fee_type the type of fee charged to a seller
     */
    public function setFeeType(string $fee_type): self
    {
        if (is_null($fee_type)) {
            throw new \InvalidArgumentException('non-nullable fee_type cannot be null');
        }
        $this->container['fee_type'] = $fee_type;

        return $this;
    }

    /**
     * Gets fee_amount.
     */
    public function getFeeAmount(): MoneyType
    {
        return $this->container['fee_amount'];
    }

    /**
     * Sets fee_amount.
     *
     * @param MoneyType $fee_amount fee_amount
     */
    public function setFeeAmount(MoneyType $fee_amount): self
    {
        if (is_null($fee_amount)) {
            throw new \InvalidArgumentException('non-nullable fee_amount cannot be null');
        }
        $this->container['fee_amount'] = $fee_amount;

        return $this;
    }

    /**
     * Gets fee_promotion.
     */
    public function getFeePromotion(): ?MoneyType
    {
        return $this->container['fee_promotion'];
    }

    /**
     * Sets fee_promotion.
     *
     * @param null|MoneyType $fee_promotion fee_promotion
     */
    public function setFeePromotion(?MoneyType $fee_promotion): self
    {
        if (is_null($fee_promotion)) {
            array_push($this->openAPINullablesSetToNull, 'fee_promotion');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fee_promotion', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['fee_promotion'] = $fee_promotion;

        return $this;
    }

    /**
     * Gets tax_amount.
     */
    public function getTaxAmount(): ?MoneyType
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount.
     *
     * @param null|MoneyType $tax_amount tax_amount
     */
    public function setTaxAmount(?MoneyType $tax_amount): self
    {
        if (is_null($tax_amount)) {
            array_push($this->openAPINullablesSetToNull, 'tax_amount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tax_amount', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets final_fee.
     */
    public function getFinalFee(): MoneyType
    {
        return $this->container['final_fee'];
    }

    /**
     * Sets final_fee.
     *
     * @param MoneyType $final_fee final_fee
     */
    public function setFinalFee(MoneyType $final_fee): self
    {
        if (is_null($final_fee)) {
            throw new \InvalidArgumentException('non-nullable final_fee cannot be null');
        }
        $this->container['final_fee'] = $final_fee;

        return $this;
    }

    /**
     * Gets included_fee_detail_list.
     */
    public function getIncludedFeeDetailList(): ?array
    {
        return $this->container['included_fee_detail_list'];
    }

    /**
     * Sets included_fee_detail_list.
     *
     * @param null|array $included_fee_detail_list a list of other fees that contribute to a given fee
     */
    public function setIncludedFeeDetailList(?array $included_fee_detail_list): self
    {
        if (is_null($included_fee_detail_list)) {
            array_push($this->openAPINullablesSetToNull, 'included_fee_detail_list');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('included_fee_detail_list', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['included_fee_detail_list'] = $included_fee_detail_list;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return null|mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param null|int $offset Offset
     * @param mixed    $value  Value to be set
     */
    public function offsetSet($offset, mixed $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @see https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

    /**
     * Array of nullable properties.
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null.
     *
     * @return bool[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null.
     *
     * @param bool[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
     * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
     * $this->openAPINullablesSetToNull array.
     *
     * @param mixed $defaultValue
     */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }
}
