<?php

/**
 * CreateReturnItem.
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

use SpApi\Model\ModelInterface;
use SpApi\ObjectSerializer;

/**
 * CreateReturnItem Class Doc Comment.
 *
 * @category Class
 *
 * @description An item that Amazon accepted for return.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class CreateReturnItem implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'CreateReturnItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'seller_return_item_id' => 'string',
        'seller_fulfillment_order_item_id' => 'string',
        'amazon_shipment_id' => 'string',
        'return_reason_code' => 'string',
        'return_comment' => 'string'];

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
        'seller_return_item_id' => null,
        'seller_fulfillment_order_item_id' => null,
        'amazon_shipment_id' => null,
        'return_reason_code' => null,
        'return_comment' => null];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'seller_return_item_id' => false,
        'seller_fulfillment_order_item_id' => false,
        'amazon_shipment_id' => false,
        'return_reason_code' => false,
        'return_comment' => true,
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
        'seller_return_item_id' => 'sellerReturnItemId',
        'seller_fulfillment_order_item_id' => 'sellerFulfillmentOrderItemId',
        'amazon_shipment_id' => 'amazonShipmentId',
        'return_reason_code' => 'returnReasonCode',
        'return_comment' => 'returnComment',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'seller_return_item_id' => 'setSellerReturnItemId',
        'seller_fulfillment_order_item_id' => 'setSellerFulfillmentOrderItemId',
        'amazon_shipment_id' => 'setAmazonShipmentId',
        'return_reason_code' => 'setReturnReasonCode',
        'return_comment' => 'setReturnComment',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'seller_return_item_id' => 'getSellerReturnItemId',
        'seller_fulfillment_order_item_id' => 'getSellerFulfillmentOrderItemId',
        'amazon_shipment_id' => 'getAmazonShipmentId',
        'return_reason_code' => 'getReturnReasonCode',
        'return_comment' => 'getReturnComment',
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
        $this->setIfExists('seller_return_item_id', $data ?? [], null);
        $this->setIfExists('seller_fulfillment_order_item_id', $data ?? [], null);
        $this->setIfExists('amazon_shipment_id', $data ?? [], null);
        $this->setIfExists('return_reason_code', $data ?? [], null);
        $this->setIfExists('return_comment', $data ?? [], null);
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

        if (null === $this->container['seller_return_item_id']) {
            $invalidProperties[] = "'seller_return_item_id' can't be null";
        }
        if (mb_strlen($this->container['seller_return_item_id']) > 80) {
            $invalidProperties[] = "invalid value for 'seller_return_item_id', the character length must be smaller than or equal to 80.";
        }

        if (null === $this->container['seller_fulfillment_order_item_id']) {
            $invalidProperties[] = "'seller_fulfillment_order_item_id' can't be null";
        }
        if (null === $this->container['amazon_shipment_id']) {
            $invalidProperties[] = "'amazon_shipment_id' can't be null";
        }
        if (null === $this->container['return_reason_code']) {
            $invalidProperties[] = "'return_reason_code' can't be null";
        }
        if (!is_null($this->container['return_comment']) && (mb_strlen($this->container['return_comment']) > 1000)) {
            $invalidProperties[] = "invalid value for 'return_comment', the character length must be smaller than or equal to 1000.";
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
     * Gets seller_return_item_id.
     */
    public function getSellerReturnItemId(): string
    {
        return $this->container['seller_return_item_id'];
    }

    /**
     * Sets seller_return_item_id.
     *
     * @param string $seller_return_item_id an identifier assigned by the seller to the return item
     */
    public function setSellerReturnItemId(string $seller_return_item_id): self
    {
        if (is_null($seller_return_item_id)) {
            throw new \InvalidArgumentException('non-nullable seller_return_item_id cannot be null');
        }
        if (mb_strlen($seller_return_item_id) > 80) {
            throw new \InvalidArgumentException('invalid length for $seller_return_item_id when calling CreateReturnItem., must be smaller than or equal to 80.');
        }

        $this->container['seller_return_item_id'] = $seller_return_item_id;

        return $this;
    }

    /**
     * Gets seller_fulfillment_order_item_id.
     */
    public function getSellerFulfillmentOrderItemId(): string
    {
        return $this->container['seller_fulfillment_order_item_id'];
    }

    /**
     * Sets seller_fulfillment_order_item_id.
     *
     * @param string $seller_fulfillment_order_item_id the identifier assigned to the item by the seller when the fulfillment order was created
     */
    public function setSellerFulfillmentOrderItemId(string $seller_fulfillment_order_item_id): self
    {
        if (is_null($seller_fulfillment_order_item_id)) {
            throw new \InvalidArgumentException('non-nullable seller_fulfillment_order_item_id cannot be null');
        }
        $this->container['seller_fulfillment_order_item_id'] = $seller_fulfillment_order_item_id;

        return $this;
    }

    /**
     * Gets amazon_shipment_id.
     */
    public function getAmazonShipmentId(): string
    {
        return $this->container['amazon_shipment_id'];
    }

    /**
     * Sets amazon_shipment_id.
     *
     * @param string $amazon_shipment_id the identifier for the shipment that is associated with the return item
     */
    public function setAmazonShipmentId(string $amazon_shipment_id): self
    {
        if (is_null($amazon_shipment_id)) {
            throw new \InvalidArgumentException('non-nullable amazon_shipment_id cannot be null');
        }
        $this->container['amazon_shipment_id'] = $amazon_shipment_id;

        return $this;
    }

    /**
     * Gets return_reason_code.
     */
    public function getReturnReasonCode(): string
    {
        return $this->container['return_reason_code'];
    }

    /**
     * Sets return_reason_code.
     *
     * @param string $return_reason_code the return reason code assigned to the return item by the seller
     */
    public function setReturnReasonCode(string $return_reason_code): self
    {
        if (is_null($return_reason_code)) {
            throw new \InvalidArgumentException('non-nullable return_reason_code cannot be null');
        }
        $this->container['return_reason_code'] = $return_reason_code;

        return $this;
    }

    /**
     * Gets return_comment.
     */
    public function getReturnComment(): ?string
    {
        return $this->container['return_comment'];
    }

    /**
     * Sets return_comment.
     *
     * @param null|string $return_comment an optional comment about the return item
     */
    public function setReturnComment(?string $return_comment): self
    {
        if (is_null($return_comment)) {
            array_push($this->openAPINullablesSetToNull, 'return_comment');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('return_comment', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($return_comment) && (mb_strlen($return_comment) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $return_comment when calling CreateReturnItem., must be smaller than or equal to 1000.');
        }

        $this->container['return_comment'] = $return_comment;

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
