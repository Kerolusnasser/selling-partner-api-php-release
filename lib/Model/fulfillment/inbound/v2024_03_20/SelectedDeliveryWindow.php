<?php

/**
 * SelectedDeliveryWindow.
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
 * The Selling Partner API for FBA inbound operations.
 *
 * The Selling Partner API for Fulfillment By Amazon (FBA) Inbound. The FBA Inbound API enables building inbound workflows to create, manage, and send shipments into Amazon's fulfillment network. The API has interoperability with the Send-to-Amazon user interface.
 *
 * The version of the OpenAPI document: 2024-03-20
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SpApi\Model\fulfillment\inbound\v2024_03_20;

use SpApi\Model\ModelInterface;
use SpApi\ObjectSerializer;

/**
 * SelectedDeliveryWindow Class Doc Comment.
 *
 * @category Class
 *
 * @description Selected delivery window attributes.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class SelectedDeliveryWindow implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'SelectedDeliveryWindow';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'availability_type' => 'string',
        'delivery_window_option_id' => 'string',
        'editable_until' => '\DateTime',
        'end_date' => '\DateTime',
        'start_date' => '\DateTime'];

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
        'availability_type' => null,
        'delivery_window_option_id' => null,
        'editable_until' => 'date-time',
        'end_date' => 'date-time',
        'start_date' => 'date-time'];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'availability_type' => false,
        'delivery_window_option_id' => false,
        'editable_until' => true,
        'end_date' => false,
        'start_date' => false,
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
        'availability_type' => 'availabilityType',
        'delivery_window_option_id' => 'deliveryWindowOptionId',
        'editable_until' => 'editableUntil',
        'end_date' => 'endDate',
        'start_date' => 'startDate',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'availability_type' => 'setAvailabilityType',
        'delivery_window_option_id' => 'setDeliveryWindowOptionId',
        'editable_until' => 'setEditableUntil',
        'end_date' => 'setEndDate',
        'start_date' => 'setStartDate',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'availability_type' => 'getAvailabilityType',
        'delivery_window_option_id' => 'getDeliveryWindowOptionId',
        'editable_until' => 'getEditableUntil',
        'end_date' => 'getEndDate',
        'start_date' => 'getStartDate',
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
        $this->setIfExists('availability_type', $data ?? [], null);
        $this->setIfExists('delivery_window_option_id', $data ?? [], null);
        $this->setIfExists('editable_until', $data ?? [], null);
        $this->setIfExists('end_date', $data ?? [], null);
        $this->setIfExists('start_date', $data ?? [], null);
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

        if (null === $this->container['availability_type']) {
            $invalidProperties[] = "'availability_type' can't be null";
        }
        if (null === $this->container['delivery_window_option_id']) {
            $invalidProperties[] = "'delivery_window_option_id' can't be null";
        }
        if (mb_strlen($this->container['delivery_window_option_id']) > 38) {
            $invalidProperties[] = "invalid value for 'delivery_window_option_id', the character length must be smaller than or equal to 38.";
        }

        if (mb_strlen($this->container['delivery_window_option_id']) < 36) {
            $invalidProperties[] = "invalid value for 'delivery_window_option_id', the character length must be bigger than or equal to 36.";
        }

        if (!preg_match('/^[a-zA-Z0-9-]*$/', $this->container['delivery_window_option_id'])) {
            $invalidProperties[] = "invalid value for 'delivery_window_option_id', must be conform to the pattern /^[a-zA-Z0-9-]*$/.";
        }

        if (null === $this->container['end_date']) {
            $invalidProperties[] = "'end_date' can't be null";
        }
        if (null === $this->container['start_date']) {
            $invalidProperties[] = "'start_date' can't be null";
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
     * Gets availability_type.
     */
    public function getAvailabilityType(): string
    {
        return $this->container['availability_type'];
    }

    /**
     * Sets availability_type.
     *
     * @param string $availability_type Identifies type of Delivery Window Availability. Values: `AVAILABLE`, `CONGESTED`
     */
    public function setAvailabilityType(string $availability_type): self
    {
        if (is_null($availability_type)) {
            throw new \InvalidArgumentException('non-nullable availability_type cannot be null');
        }
        $this->container['availability_type'] = $availability_type;

        return $this;
    }

    /**
     * Gets delivery_window_option_id.
     */
    public function getDeliveryWindowOptionId(): string
    {
        return $this->container['delivery_window_option_id'];
    }

    /**
     * Sets delivery_window_option_id.
     *
     * @param string $delivery_window_option_id Identifier of a delivery window option. A delivery window option represent one option for when a shipment is expected to be delivered.
     */
    public function setDeliveryWindowOptionId(string $delivery_window_option_id): self
    {
        if (is_null($delivery_window_option_id)) {
            throw new \InvalidArgumentException('non-nullable delivery_window_option_id cannot be null');
        }
        if (mb_strlen($delivery_window_option_id) > 38) {
            throw new \InvalidArgumentException('invalid length for $delivery_window_option_id when calling SelectedDeliveryWindow., must be smaller than or equal to 38.');
        }
        if (mb_strlen($delivery_window_option_id) < 36) {
            throw new \InvalidArgumentException('invalid length for $delivery_window_option_id when calling SelectedDeliveryWindow., must be bigger than or equal to 36.');
        }
        if (!preg_match('/^[a-zA-Z0-9-]*$/', ObjectSerializer::toString($delivery_window_option_id))) {
            throw new \InvalidArgumentException('invalid value for $delivery_window_option_id when calling SelectedDeliveryWindow., must conform to the pattern /^[a-zA-Z0-9-]*$/.');
        }

        $this->container['delivery_window_option_id'] = $delivery_window_option_id;

        return $this;
    }

    /**
     * Gets editable_until.
     */
    public function getEditableUntil(): ?\DateTime
    {
        return $this->container['editable_until'];
    }

    /**
     * Sets editable_until.
     *
     * @param null|\DateTime $editable_until the timestamp at which this Window can no longer be edited
     */
    public function setEditableUntil(?\DateTime $editable_until): self
    {
        if (is_null($editable_until)) {
            array_push($this->openAPINullablesSetToNull, 'editable_until');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('editable_until', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['editable_until'] = $editable_until;

        return $this;
    }

    /**
     * Gets end_date.
     */
    public function getEndDate(): \DateTime
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date.
     *
     * @param \DateTime $end_date the end timestamp of the window
     */
    public function setEndDate(\DateTime $end_date): self
    {
        if (is_null($end_date)) {
            throw new \InvalidArgumentException('non-nullable end_date cannot be null');
        }
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets start_date.
     */
    public function getStartDate(): \DateTime
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date.
     *
     * @param \DateTime $start_date the start timestamp of the window
     */
    public function setStartDate(\DateTime $start_date): self
    {
        if (is_null($start_date)) {
            throw new \InvalidArgumentException('non-nullable start_date cannot be null');
        }
        $this->container['start_date'] = $start_date;

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
