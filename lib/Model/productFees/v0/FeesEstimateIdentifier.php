<?php

/**
 * FeesEstimateIdentifier.
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
 * FeesEstimateIdentifier Class Doc Comment.
 *
 * @category Class
 *
 * @description An item identifier, marketplace, time of request, and other details that identify an estimate.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class FeesEstimateIdentifier implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'FeesEstimateIdentifier';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'marketplace_id' => 'string',
        'seller_id' => 'string',
        'id_type' => '\SpApi\Model\productFees\v0\IdType',
        'id_value' => 'string',
        'is_amazon_fulfilled' => 'bool',
        'price_to_estimate_fees' => '\SpApi\Model\productFees\v0\PriceToEstimateFees',
        'seller_input_identifier' => 'string',
        'optional_fulfillment_program' => '\SpApi\Model\productFees\v0\OptionalFulfillmentProgram'];

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
        'marketplace_id' => null,
        'seller_id' => null,
        'id_type' => null,
        'id_value' => null,
        'is_amazon_fulfilled' => null,
        'price_to_estimate_fees' => null,
        'seller_input_identifier' => null,
        'optional_fulfillment_program' => null];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'marketplace_id' => true,
        'seller_id' => true,
        'id_type' => true,
        'id_value' => true,
        'is_amazon_fulfilled' => true,
        'price_to_estimate_fees' => true,
        'seller_input_identifier' => true,
        'optional_fulfillment_program' => true,
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
        'marketplace_id' => 'MarketplaceId',
        'seller_id' => 'SellerId',
        'id_type' => 'IdType',
        'id_value' => 'IdValue',
        'is_amazon_fulfilled' => 'IsAmazonFulfilled',
        'price_to_estimate_fees' => 'PriceToEstimateFees',
        'seller_input_identifier' => 'SellerInputIdentifier',
        'optional_fulfillment_program' => 'OptionalFulfillmentProgram',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'marketplace_id' => 'setMarketplaceId',
        'seller_id' => 'setSellerId',
        'id_type' => 'setIdType',
        'id_value' => 'setIdValue',
        'is_amazon_fulfilled' => 'setIsAmazonFulfilled',
        'price_to_estimate_fees' => 'setPriceToEstimateFees',
        'seller_input_identifier' => 'setSellerInputIdentifier',
        'optional_fulfillment_program' => 'setOptionalFulfillmentProgram',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'marketplace_id' => 'getMarketplaceId',
        'seller_id' => 'getSellerId',
        'id_type' => 'getIdType',
        'id_value' => 'getIdValue',
        'is_amazon_fulfilled' => 'getIsAmazonFulfilled',
        'price_to_estimate_fees' => 'getPriceToEstimateFees',
        'seller_input_identifier' => 'getSellerInputIdentifier',
        'optional_fulfillment_program' => 'getOptionalFulfillmentProgram',
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
        $this->setIfExists('marketplace_id', $data ?? [], null);
        $this->setIfExists('seller_id', $data ?? [], null);
        $this->setIfExists('id_type', $data ?? [], null);
        $this->setIfExists('id_value', $data ?? [], null);
        $this->setIfExists('is_amazon_fulfilled', $data ?? [], null);
        $this->setIfExists('price_to_estimate_fees', $data ?? [], null);
        $this->setIfExists('seller_input_identifier', $data ?? [], null);
        $this->setIfExists('optional_fulfillment_program', $data ?? [], null);
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
        return [];
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
     * Gets marketplace_id.
     */
    public function getMarketplaceId(): ?string
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id.
     *
     * @param null|string $marketplace_id a marketplace identifier
     */
    public function setMarketplaceId(?string $marketplace_id): self
    {
        if (is_null($marketplace_id)) {
            array_push($this->openAPINullablesSetToNull, 'marketplace_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('marketplace_id', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets seller_id.
     */
    public function getSellerId(): ?string
    {
        return $this->container['seller_id'];
    }

    /**
     * Sets seller_id.
     *
     * @param null|string $seller_id the seller identifier
     */
    public function setSellerId(?string $seller_id): self
    {
        if (is_null($seller_id)) {
            array_push($this->openAPINullablesSetToNull, 'seller_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('seller_id', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['seller_id'] = $seller_id;

        return $this;
    }

    /**
     * Gets id_type.
     */
    public function getIdType(): ?string
    {
        return $this->container['id_type'];
    }

    /**
     * Sets id_type.
     *
     * @param null|string $id_type id_type
     */
    public function setIdType(?string $id_type): self
    {
        if (is_null($id_type)) {
            array_push($this->openAPINullablesSetToNull, 'id_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_type', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id_type'] = $id_type;

        return $this;
    }

    /**
     * Gets id_value.
     */
    public function getIdValue(): ?string
    {
        return $this->container['id_value'];
    }

    /**
     * Sets id_value.
     *
     * @param null|string $id_value the item identifier
     */
    public function setIdValue(?string $id_value): self
    {
        if (is_null($id_value)) {
            array_push($this->openAPINullablesSetToNull, 'id_value');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_value', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id_value'] = $id_value;

        return $this;
    }

    /**
     * Gets is_amazon_fulfilled.
     */
    public function getIsAmazonFulfilled(): ?bool
    {
        return $this->container['is_amazon_fulfilled'];
    }

    /**
     * Sets is_amazon_fulfilled.
     *
     * @param null|bool $is_amazon_fulfilled when true, the offer is fulfilled by Amazon
     */
    public function setIsAmazonFulfilled(?bool $is_amazon_fulfilled): self
    {
        if (is_null($is_amazon_fulfilled)) {
            array_push($this->openAPINullablesSetToNull, 'is_amazon_fulfilled');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('is_amazon_fulfilled', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['is_amazon_fulfilled'] = $is_amazon_fulfilled;

        return $this;
    }

    /**
     * Gets price_to_estimate_fees.
     */
    public function getPriceToEstimateFees(): ?PriceToEstimateFees
    {
        return $this->container['price_to_estimate_fees'];
    }

    /**
     * Sets price_to_estimate_fees.
     *
     * @param null|PriceToEstimateFees $price_to_estimate_fees price_to_estimate_fees
     */
    public function setPriceToEstimateFees(?PriceToEstimateFees $price_to_estimate_fees): self
    {
        if (is_null($price_to_estimate_fees)) {
            array_push($this->openAPINullablesSetToNull, 'price_to_estimate_fees');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('price_to_estimate_fees', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['price_to_estimate_fees'] = $price_to_estimate_fees;

        return $this;
    }

    /**
     * Gets seller_input_identifier.
     */
    public function getSellerInputIdentifier(): ?string
    {
        return $this->container['seller_input_identifier'];
    }

    /**
     * Sets seller_input_identifier.
     *
     * @param null|string $seller_input_identifier a unique identifier provided by the caller to track this request
     */
    public function setSellerInputIdentifier(?string $seller_input_identifier): self
    {
        if (is_null($seller_input_identifier)) {
            array_push($this->openAPINullablesSetToNull, 'seller_input_identifier');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('seller_input_identifier', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['seller_input_identifier'] = $seller_input_identifier;

        return $this;
    }

    /**
     * Gets optional_fulfillment_program.
     */
    public function getOptionalFulfillmentProgram(): ?string
    {
        return $this->container['optional_fulfillment_program'];
    }

    /**
     * Sets optional_fulfillment_program.
     *
     * @param null|string $optional_fulfillment_program optional_fulfillment_program
     */
    public function setOptionalFulfillmentProgram(?string $optional_fulfillment_program): self
    {
        if (is_null($optional_fulfillment_program)) {
            array_push($this->openAPINullablesSetToNull, 'optional_fulfillment_program');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('optional_fulfillment_program', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['optional_fulfillment_program'] = $optional_fulfillment_program;

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
