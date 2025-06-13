<?php

/**
 * ReservedQuantity.
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
 * Selling Partner API for FBA Inventory.
 *
 * The Selling Partner API for FBA Inventory lets you programmatically retrieve information about inventory in Amazon's fulfillment network.
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SpApi\Model\fba\inventory\v1;

use SpApi\Model\ModelInterface;
use SpApi\ObjectSerializer;

/**
 * ReservedQuantity Class Doc Comment.
 *
 * @category Class
 *
 * @description The quantity of reserved inventory.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class ReservedQuantity implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'ReservedQuantity';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'total_reserved_quantity' => 'int',
        'pending_customer_order_quantity' => 'int',
        'pending_transshipment_quantity' => 'int',
        'fc_processing_quantity' => 'int'];

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
        'total_reserved_quantity' => null,
        'pending_customer_order_quantity' => null,
        'pending_transshipment_quantity' => null,
        'fc_processing_quantity' => null];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'total_reserved_quantity' => true,
        'pending_customer_order_quantity' => true,
        'pending_transshipment_quantity' => true,
        'fc_processing_quantity' => true,
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
        'total_reserved_quantity' => 'totalReservedQuantity',
        'pending_customer_order_quantity' => 'pendingCustomerOrderQuantity',
        'pending_transshipment_quantity' => 'pendingTransshipmentQuantity',
        'fc_processing_quantity' => 'fcProcessingQuantity',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'total_reserved_quantity' => 'setTotalReservedQuantity',
        'pending_customer_order_quantity' => 'setPendingCustomerOrderQuantity',
        'pending_transshipment_quantity' => 'setPendingTransshipmentQuantity',
        'fc_processing_quantity' => 'setFcProcessingQuantity',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'total_reserved_quantity' => 'getTotalReservedQuantity',
        'pending_customer_order_quantity' => 'getPendingCustomerOrderQuantity',
        'pending_transshipment_quantity' => 'getPendingTransshipmentQuantity',
        'fc_processing_quantity' => 'getFcProcessingQuantity',
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
        $this->setIfExists('total_reserved_quantity', $data ?? [], null);
        $this->setIfExists('pending_customer_order_quantity', $data ?? [], null);
        $this->setIfExists('pending_transshipment_quantity', $data ?? [], null);
        $this->setIfExists('fc_processing_quantity', $data ?? [], null);
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
     * Gets total_reserved_quantity.
     */
    public function getTotalReservedQuantity(): ?int
    {
        return $this->container['total_reserved_quantity'];
    }

    /**
     * Sets total_reserved_quantity.
     *
     * @param null|int $total_reserved_quantity the total number of units in Amazon's fulfillment network that are currently being picked, packed, and shipped; or are sidelined for measurement, sampling, or other internal processes
     */
    public function setTotalReservedQuantity(?int $total_reserved_quantity): self
    {
        if (is_null($total_reserved_quantity)) {
            array_push($this->openAPINullablesSetToNull, 'total_reserved_quantity');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('total_reserved_quantity', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['total_reserved_quantity'] = $total_reserved_quantity;

        return $this;
    }

    /**
     * Gets pending_customer_order_quantity.
     */
    public function getPendingCustomerOrderQuantity(): ?int
    {
        return $this->container['pending_customer_order_quantity'];
    }

    /**
     * Sets pending_customer_order_quantity.
     *
     * @param null|int $pending_customer_order_quantity the number of units reserved for customer orders
     */
    public function setPendingCustomerOrderQuantity(?int $pending_customer_order_quantity): self
    {
        if (is_null($pending_customer_order_quantity)) {
            array_push($this->openAPINullablesSetToNull, 'pending_customer_order_quantity');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pending_customer_order_quantity', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pending_customer_order_quantity'] = $pending_customer_order_quantity;

        return $this;
    }

    /**
     * Gets pending_transshipment_quantity.
     */
    public function getPendingTransshipmentQuantity(): ?int
    {
        return $this->container['pending_transshipment_quantity'];
    }

    /**
     * Sets pending_transshipment_quantity.
     *
     * @param null|int $pending_transshipment_quantity the number of units being transferred from one fulfillment center to another
     */
    public function setPendingTransshipmentQuantity(?int $pending_transshipment_quantity): self
    {
        if (is_null($pending_transshipment_quantity)) {
            array_push($this->openAPINullablesSetToNull, 'pending_transshipment_quantity');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pending_transshipment_quantity', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pending_transshipment_quantity'] = $pending_transshipment_quantity;

        return $this;
    }

    /**
     * Gets fc_processing_quantity.
     */
    public function getFcProcessingQuantity(): ?int
    {
        return $this->container['fc_processing_quantity'];
    }

    /**
     * Sets fc_processing_quantity.
     *
     * @param null|int $fc_processing_quantity the number of units that have been sidelined at the fulfillment center for additional processing
     */
    public function setFcProcessingQuantity(?int $fc_processing_quantity): self
    {
        if (is_null($fc_processing_quantity)) {
            array_push($this->openAPINullablesSetToNull, 'fc_processing_quantity');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fc_processing_quantity', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['fc_processing_quantity'] = $fc_processing_quantity;

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
